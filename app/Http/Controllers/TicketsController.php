<?php

namespace App\Http\Controllers;

use App\TicketGroups;
use App\Tickets;
use App\InboundMailboxes;

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
     * @url    GET: /tickets
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
     * @url    GET: /tickets/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data['groups'] = TicketGroups::all();
        return view('tickets.create', $data);
    }

    /**
     * Get the tickets assigned to the logged in staff member.
     *
     * @url    GET: /tickets/assigned
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
     * @url    GET: /tickets/details/{id}
     * @param  int $id the ticket id in the database.
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
     * @url:   POST: /tickets/quickUpdateTicket/{id}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id the ticket id in the database.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Tickets::findOrFail($id);
        $name  = $request->get('name');
        $value = $request->get('value');
        $ticket->$name = $value;
        $ticket->save();
        return  redirect()->back();
    }

    /**
     * @url    POST: /
     * @param  int $id The ticket id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ticketReply($id)
    {
        // TODO build up the logic.
        return redirect()->back();
    }

    /**
     * Manager routing tickets.
     *
     * @url    GET: /setup/ticketrouting
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manageRouting()
    {
        $data['mailboxes'] = InboundMailboxes::All();
        return view('setup.ticketRoutes', $data);
    }

    /**
     * Add setup routing.
     *
     * @url    GET: /setup/ticketrouting/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addRouting()
    {
        $data['groups'] = TicketGroups::all();
        return view('setup.createTicketRoute', $data);
    }

    /**
     * Save the mailbox to the database
     *
     * @url    POST: /setup/ticketrouting/save
     * @param  Request $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveRouting(Request $input)
    {
        InboundMailboxes::create($input->except('_token'));
        return redirect()->back();
    }
}
