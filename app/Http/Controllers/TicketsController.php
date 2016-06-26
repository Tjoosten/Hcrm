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
        $data['tickets'] = Tickets::paginate(10);
        return view('tickets.index', $data);
    }

    /**
     * Show the form to creat a new ticket
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('tickets.create');
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

    /**
     * Display the ticket details
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details($id)
    {
      $data['ticket']  = Tickets::findOrFail($id);

      return view('tickets.details', $data);
    }

    /**
     * Update the ticket true inline.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Tickets::findOrFail($id);
        $name = $request->get('name');
        $value = $request->get('value');
        $ticket->$name = $value;
        $ticket->save();
        return  redirect()->back();
    }
}
