<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServersController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('lang');
  }
  
    public function index()
    {
      return view('servers.index');
    }

    public function create()
    {
      return view('servers.create');
    }

    public function store()
    {
      return true;
    }
}
