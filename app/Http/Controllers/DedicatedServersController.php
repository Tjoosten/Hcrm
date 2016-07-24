<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DedicatedServers;
use App\ServerSoftware;

/**
 * Class DedicatedServersController
 * @package App\Http\Controllers
 */
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
      $data['servers'] = DedicatedServers::all();
    	return view('dedicatedservers.index', $data);
    }

    /**
     * The index view for all the dedicated servers.
     *
     * @url    GET: /dedicatedservers/register
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
      $data["osList"] = ServerSoftware::where('category', 'OS')->get();
    	return view('dedicatedservers.register', $data);
    }

    /**
     * Save the dedicated server data to the database.
     *
     * @url    POST: /dedicatedservers/save
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {

    }

    /**
     * Edit a dedicated server.
     *
     * @url    GET: /dedicatedservers/update
     * @param  int $id The id from the server in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
      $data["osList"] = ServerSoftware::where('category', 'OS')->get();
      return view('dedicatedservers.edit', $data);
    }

    /**
     * Delete a dedicated server.
     *
     * @url    TODO: Set thev url.
     * @param  int $id The id from the server in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return redirect()->back();
    }

}
