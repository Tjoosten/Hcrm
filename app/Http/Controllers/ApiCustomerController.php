<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Jobs\NotifyNewCustomer;
use App\Jobs\NotifyUpdateCustomer;
use App\Transformers\CustomerTransformer;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ApiCustomerController extends ApiGuardController
{
    /**
     * The validation messages.
     *
     * @var array
     */
    protected $validation;

    /**
     * ApiCustomerController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Validation messages.
        $this->validation['name']    = 'required';
        $this->validation['fname']   = 'required';
        $this->validation['street']  = 'required';
        $this->validation['zipcode'] = 'required';
        $this->validation['city']    = 'required';
        $this->validation['state']   = 'required';
        $this->validation['country'] = 'required';
        $this->validation['email']   = 'required|email';
        $this->validation['phone']   = 'required';
        $this->validation['vat']     = 'required';
    }

    /**
     * Get all the customers.
     *
     * @url    GET: api\v1\customers
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function index()
    {
        $customers = Customers::paginate(15);
        return $this->response->withPaginator($customers, new CustomerTransformer);
    }

    /**
     * Create a new customer.
     *
     * @url    POST api/v1/customers
     * @param  Request $input
     * @return \Illuminate\Contracts\Routing\ResponseFactory|mixed
     */
    public function insert(Request $input)
    {
        $validator = Validator::make($input->all(), $this->validation);

        if ($validator->fails()) {
            $this->dispatch(new NotifyNewCustomer);
            return $this->response->errorWrongArgs();
        }

        if (Customers::create($input->all())) {
            return $this->response->withArray('Customer has been added');
        } else {
            return $this->response->errorUnprocessable();
        }
    }

    /**
     * Update a customer resource.
     *
     * @url    PUT:   /api/v1/customers/{id}
     * @url    PATCH: /api/v1/customers/{id}
     * @param  Request $input
     * @param  null $id the customer id in the database.
     * @return mixed
     */
    public function update(Request $input, $id = null)
    {
        $customer = Customers::find($id);

        if (count($customer) === 1) {
            $validator = Validator::make($input->all(), $this->validation);

            if ($validator->fails()) {
                return $this->response->errorWrongArgs();
            }

            if ($customer->update($input->all())) {
                $this->dispatch(new NotifyUpdateCustomer);
                return $this->response->withArray(['Customer has been updated.']);
            } else {
                return $this->response->errorUnprocessable();
            }
        } else {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Show a specific customer resource.
     *
     * @url    GET: /api/v1/customers/{id}
     * @param  null $id the customer id in the database.
     * @return mixed
     */
    public function show($id = null)
    {
        try {
            $customer = Customers::findOrFail($id);
            return $this->response->withItem($customer, new CustomerTransformer);

        } catch (ModelNotFoundException $e) {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Delete a resource in the database. 
     * 
     * @url    DELETE: /api/v1/customers/{id}
     * @param  null    $id The customer id in the database.
     * @return \Illuminate\Contracts\Routing\ResponseFactory|mixed
     */
    public function destroy($id = null)
    {
        $customer = Customers::find($id);

        if (count($customer) > 0) {
            $customer->delete();
            return $this->response->withArray(['message' => 'The customer was deleted']);
        } else {
            return $this->response->errorNotFound();
        }
    }
}
