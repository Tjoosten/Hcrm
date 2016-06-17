<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    /**
     * Delete a customer.
     *
     * @url    GET: /customer/destroy/{id}
     * @param  int $id The customer id in the database
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Customers::destroy($id);
        session()->flash('message', 'customer has been deleted');

        return redirect()->back();
    }
}
