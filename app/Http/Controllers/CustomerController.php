<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    /**
     * Create a new customer.
     *
     * @url    POST: /customer/create
     * @param  Requests\CustomerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Requests\CustomerValidator $input)
    {
        Customer::create($input->except('_token'));
        session()->flash('message', 'The customer has been created');
        return redirect()->back();
    }

    /**
     * Update some customer in the database.
     *
     * @url    POST: /customer/update/{id}
     * @param  Requests\CustomerValidator $input
     * @param  int $id The customer id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\CustomerValidator $input, $id)
    {
        Customer::find($id)->update($input->except('_token'));
        session()->flash('message', 'The Customer has been updated');
        return redirect()->back();
    }

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
