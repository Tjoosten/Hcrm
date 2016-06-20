<?php

namespace App\Http\Controllers;

use App\Tickets;
use Illuminate\Http\Request;

use App\Http\Requests;

class TicketsController extends Controller
{
    /**
     * TicketsController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }

    /**
     * Get all the tickets
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['tickets'] = Tickets::paginate(15);
        return view('tickets.index', $data);
    }

    /**
     * Get the tickets assigned to the logged in staff member.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assigned()
    {
        $userId = auth()->user()->id;
        $data['tickets'] = Tickets::where('assigned_id', $userId)->paginate(15);

        return view('tickets.index', $data);
    }
}
