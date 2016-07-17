<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrdersController extends Controller
{
    /**
     * OrdersController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }

    /**
     *
     */
    public function newOrderView()
    {
        
    }

    /**
     *
     */
    public function postNewOrder()
    {

    }

    /**
     *
     */
    public function allOrders()
    {

    }

    /**
     *
     */
    public function deleteOrder()
    {

    }
}
