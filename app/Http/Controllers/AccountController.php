<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    /**
     * AccountController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the updateview for the account
     *
     * @url    GET: /account/update
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Account()
    {
        $userId = auth()->user()->id;
        $data['account'] = User::find($userId);

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
        $id = auth()->user()->id;
        User::find($id)->update($input->except('_token'));

        session()->flash('message', 'Your account information has been updated');
        return redirect()->back();
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
        $id = auth()->user()->id;
        User::find($id)->update($input->except(['_token', 'password_confirmation']));

        session()->flash('message', 'Your password has been updated');
        return redirect()->back();
    }
}
