<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DedicatedServersController extends Controller
{
    /**
     * DedicatedServersController constructor.
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * The index view for all the dedicated servers.
     *
     * @url    GET: /dedicatedservers
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view('dedicatedservers.index');
    }

    /**
     * The index view for all the dedicated servers.
     *
     * @url    GET: /dedicatedservers/register
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
    	return view('dedicatedservers.register');
    }

    /**
     * Save the dedicated server data to the database.
     *
     * @url    POST: /dedicatedservers/save
     * @param  Requests\DepartmentValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {

    }
            
}
