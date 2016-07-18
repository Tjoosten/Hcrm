<?php

namespace App\Http\Controllers;

use App\Comments;
use App\TicketGroups;
use App\TicketTopics;
use App\Tickets;

use App\InboundMailboxes;
use App\Customers;

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
        if (! auth()->user()->can('list tickets')) {
            redirect()->back();
        }
        $data['tickets'] = Tickets::orderBy('id', 'DESC')->paginate(10);
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
        if (! auth()->user()->can('create ticket')) {
            redirect()->back();
        }

        $data["customers"] = Customers::orderBy('name', 'ASC')->get();
        $data['groups'] = TicketGroups::orderBy('name', 'ASC')->get();
        $data['topics'] = TicketTopics::orderBy('name', 'ASC')->get();
        return view('tickets.create', $data);
    }

    /**
     * Store the ticket ticket to the database
     *
     * @url    POST: /tickets/create
     * @param  Request $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $input)
    {
        //Tickets::create($input->except('_token'));
        $ticket = new Tickets;
        $ticket->customer_id = $input->customer_id;
        $ticket->assigned_id = '1';        
        $ticket->status_id   = '1';
        $ticket->type        = $input->type;
        $ticket->priority    = 'Low';
        $ticket->subject     = $input->subject;
        $ticket->description = $input->message;
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    /**
     * Get the tickets assigned to the logged in staff member.
     *
     * @url    GET: /tickets/assigned
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assigned()
    {
        if (! auth()->user()->can('list tickets')) {
            redirect()->back();
        }

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
        if (! auth()->user()->can('edit ticket')) {
            redirect()->back();
        }

        $data['ticket'] = Tickets::with('comments')->findOrFail($id);
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
     * @url    POST: /comment/{id}
     * @param  Requests\TicketComment $input
     * @param  int $id The ticket id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ticketReply(Requests\TicketComment $input, $id)
    {
        // TODO/ Add phpunit test
        $comment = Comments::create([
            'comment' => $input->comment,
            'user_id' => auth()->user()->id
        ])->id;

        Tickets::find($id)->comments()->attach($comment);

        session()->flash('message', 'comment has been saved');
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
     * Store a new ticket.
     *
     * @url    GET: /tickets/store
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        if (! auth()->user()->can('create ticket')) {
            redirect()->back();
        }

        // TODO: build up the logic.
        return redirect()->back();
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

    /**
     * List all ticket topics.
     *
     * @url    GET: /setup/tickets/topics
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function topics()
    {
        $data['topics'] = TicketTopics::orderBy('name', 'ASC')->get();
        return view('setup.listTicketTopics', $data);
    }

    /**
     * Show a form to create a new topic.
     *
     * @url    GET: /setup/tickets/topics
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addTopic()
    {
       $data['groups'] = TicketGroups::orderBy('name', 'ASC')->get();
       return view('setup.createTicketTopic', $data);
    }

    /**
     * Save the topic to the database
     *
     * @url    POST: /setup/tickets/topics/save
     * @param  Request $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveTopic(Request $input)
    {
        TicketTopics::create($input->except('_token'));
        return redirect()->route('tickets.topics');
    }

    /**
     * Remove a ticket
     *
     * @param  int $id The ticket id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // TODO: build phpunit test.

        if (! auth()->user()->can('remove ticket')) {
            redirect()->back();
        }

        Tickets::destroy($id);
        session()->flash('message', 'Ticket has been closed');
        return redirect()->back();
    }
}
