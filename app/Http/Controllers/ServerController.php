<?php

namespace App\Http\Controllers;

use App\Servers;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class ServerController
 * @package App\Http\Controllers
 */
class ServerController extends Controller
{
    /**
     * ServerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get all the servers.
     *
     * @url    GET: /servers
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['servers'] = Servers::paginate(15);
        return view('servers.index', $data);
    }

    /**
     * Register view for a new server.
     *
     * @see    GET: /servers/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('servers.create');
    }

    public function store()
    {
    }

    /**
     * Delete a server and his customers.
     *
     * @url   GET: /servers/destroy/(id)
     * @param int $id The server id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $servers = Servers::find($id);
        // $servers->customer()->sync([]);
        $servers->delete();

        return redirect()->back();
    }
}
