<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Customers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Stripe\Customer;

class CustomerController extends Controller
{
    /**
     * CustomerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get a nice table overview from the customers.
     *
     * @url    GET: /customers          -> Normal view with aal the users
     * @url    POST: /customers/search  -> The search result view.
     * @param  Request $input
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $input)
    {
        $term = $input->get('term');

        if (empty($term)) {
            $data['customers'] = Customers::paginate(15);
        } else {
            $data['customers'] = Customers::where('name', 'LIKE', "%$term%")->paginate(15);
        }

        return view('customers.index', $data);
    }

    /**
     * Create view for a new customer.
     *
     * @url    GET /customers/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newCustomer()
    {
        $data['countries'] = Countries::all();
        return view('customers.create', $data);
    }

    /**
     * Create a new customer.
     *
     * @url    POST: /customer/create
     * @param  Requests\CustomerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Requests\CustomerValidator $input)
    {
        Customers::create($input->except('_token'));
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
        Customers::find($id)->update($input->except('_token'));
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
