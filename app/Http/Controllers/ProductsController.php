<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get all the index view for the products.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['products'] = products::paginate(15);
        return view('products.index', $data);
    }

    /**
     *
     */
    public function register()
    {

    }

    /**
     *
     */
    public function store()
    {

    }

    public function storeCategory()
    {
        
    }

    /**
     * @param $id
     */
    public function edit($id)
    {

    }

    /**
     * @param $id
     */
    public function update($id)
    {

    }

    /**
     * @param $id
     */
    public function destroy($id)
    {

    }
}
