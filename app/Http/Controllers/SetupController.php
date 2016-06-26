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

   public function index()
   {
   	return view('setup.index');
   }
}
