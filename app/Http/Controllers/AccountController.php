<?php

namespace App\Http\Controllers;

use App\ApiKeys;
use App\User;
use Chrisbjr\ApiGuard\Models\ApiKey;
use Chrisbjr\ApiGuard\Models\ApiLog;
use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    /**
     * The user id for the logged in user.
     * @var integer
     */
    protected $userId;

    /**
     * AccountController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');

        $this->userId = auth()->check() ? auth()->user()->id : 0;
    }

    /**
     * Get the updateview for the account
     *
     * @url    GET: /account/update/{tab}
     * @param  string $tab the tab selector
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Account($tab)
    {
        if ($tab == 'info') {
            $selector = 'info';
        } elseif($tab == 'security') {
            $selector = 'security';
        } elseif($tab == 'api') {
            $selector = 'api';
        } else {
            $selector = 'info';
        }

        $data['query'] = User::find($this->userId);
        $data['keys']  = ApiKey::where('user_id', $this->userId)->get();
        $data['tab']   = $selector;

        return view('auth.update', $data);
    }

    /**
     * Update the account information.
     *
     * @url    POST: /account/update/information
     * @param  Requests\AccountValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAccountInformation(Requests\AccountValidator $input)
    {
        User::find($this->userId)->update($input->except('_token'));

        session()->flash('message', 'Your account information has been updated');
        return redirect()->route('account.info', ['tab' => 'info']);
    }

    /**
     * Update the security information about the account.
     *
     * @url    POST: /account/update/password
     * @param  Requests\PasswordValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAccountSecurity(Requests\PasswordValidator $input)
    {
        User::find($this->userId)->update($input->except(['_token', 'password_confirmation']));

        session()->flash('message', 'Your password has been updated');
        return redirect()->route('account.info', ['tab' => 'security']);
    }

    /**
     * Get the logs from the api logs.
     *
     * @url    GET: /api/key/logs/{id}
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getApiLogs()
    {
        $data['logs'] = ApiLog::where('api_key_id', $this->userId)->paginate(25);
        return view('api.logs', $data);
    }

    /**
     * Get the key info.
     *
     * @url   GET: /api/key/info/{id}
     * @param int $id the database id from the key.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getApiKeyInfo($id)
    {
        return view();
    }

    /**
     * Remove a key out off the system.
     *
     * @url    GET: /account/api/removeKey/{id}
     * @param  int $id the database id from the key.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeApiKey($id)
    {
        ApiKey::destroy($id);
        session()->flash('message', 'API key removed');
        return redirect()->route('account.info', ['tab' => 'api']);
    }

    /**
     * Create a new api key for the user.
     *
     * @url    POST: /account/api/newKey
     * @param  Requests\ApiKeyValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createApiKey(Requests\ApiKeyValidator $input)
    {
        $newKey = ApiKey::make($this->userId);

        $serviceInsert = ApiKey::find($newKey->id);
        $serviceInsert->service = $input->service;
        $serviceInsert->save();

        session()->flash('message', 'API key added');
        return redirect()->route('account.info', ['tab' => 'api']);
    }
}
