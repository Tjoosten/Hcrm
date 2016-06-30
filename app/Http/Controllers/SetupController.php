<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SetupController extends Controller
{
    /**
     * SetupController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }
    
    /**
     * GET the setup index page.
     *
     * @url    GET: /setup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('setup.index');
    }
}
