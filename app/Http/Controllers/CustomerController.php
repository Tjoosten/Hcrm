<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Customers;
use App\Tickets;
use App\productsCategories;


use App\Jobs\NotifyNewCustomer;
use App\Jobs\NotifyUpdateCustomer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    use DispatchesJobs;

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
        if (! auth()->user()->can('list customer')) {
            return redirect()->back();
        }

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
        if (! auth()->user()->can('create customer')) {
            redirect()->back();
        }

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
        if (! auth()->user()->can('create customer')) {
            redirect()->back();
        }

        Customers::create($input->except('_token'));
        // $this->dispatch(new NotifyNewCustomer(auth()->user()));

        session()->flash('message', 'The customer has been created');
        return redirect()->back();
    }

    /**
     * Update view for a customer.
     *
     * @url    GET: /customer/update/{id}
     * @param  int $id the database id for the customer.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (! auth()->user()->can('edit customer')) {
            redirect()->back();
        }

        $rels = ['contact'];

        $data['customer']  = Customers::with($rels)->findOrFail($id);
        $data['tickets']   = Tickets::orderBy('id', 'DESC')->paginate(10);
        $data['ProductGroups']  = productsCategories::orderBy('category', 'ASC')->get();        
        $data['countries'] = Countries::all();
        return view('customers.update', $data);
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
        if (! auth()->user()->can('edit customer')) {
            redirect()->back();
        }

        Customers::find($id)->update($input->except('_token'));
        // $this->dispatch(new NotifyUpdateCustomer(auth()->user()));

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
        if (auth()->user()->can('remove customer')) {

        }

        Customers::destroy($id);
        session()->flash('message', 'customer has been deleted');
        return redirect()->back();
    }
}
