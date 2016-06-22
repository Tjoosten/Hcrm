<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Transformers\CustomerTransformer;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiCustomerController extends ApiGuardController
{
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

    public function insert()
    {

    }

    public function update($id)
    {

    }

    public function show($id)
    {

    }

    public function destroy($id)
    {

    }
}
