<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class SettingsController
 * @package App\Http\Controllers
 */
class SettingsController extends Controller
{
    /**
     * SettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get the change view for the backup settings.
     *
     * @url    GET:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexBackup()
    {
        $data[''] = '';
        $data[''] = '';
        $data[''] = '';
        $data[''] = '';

        return view('', $data);
    }

    /**
     * Get the change view for the application settings.
     *
     * @url    GET:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexApplication()
    {
        return view('');
    }

    /**
     * Store the backup settings.
     *
     * @url    GET:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeBackup()
    {
        return redirect()->back();
    }

    /**
     * Store the application settings.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeApplication()
    {
        return redirect()->back();
    }
}
