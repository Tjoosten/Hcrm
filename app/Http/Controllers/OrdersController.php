<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class OrdersController
 * @package App\Http\Controllers
 */
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
     * Register view for a new order.
     *
     * @url    TODO: Set the url into the routes file.s
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newOrderView()
    {
        
    }

    /**
     * Post a new order into the database.
     *
     * @url     TODO: Set the url into the routes file.
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function postNewOrder()
    {

    }

    /**
     * Display all the orders
     *
     * @url    TODO: Set the url into the routes file.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allOrders()
    {

    }

    /**
     * Delete a order
     *
     * @url    TODO: Set the url into the routes file.
     * @param  int $id. The roder id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteOrder($id)
    {

    }
}
