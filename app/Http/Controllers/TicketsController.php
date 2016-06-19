<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }

    public function index()
    {
        $data['tickets'] = '';
        return view('tickets.index', $data);
    }
}
