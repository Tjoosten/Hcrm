<?php

namespace App\Http\Controllers;

use App\products;
use App\productsCategories;
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

    /**
     * Create a new product category.
     *
     * @url    POST: /products/category/new
     * @param  Requests\ProductCategoryValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCategory(Requests\ProductCategoryValidator $input)
    {
        productsCategories::create($input->except('_token'));
        session()->flash('message', 'The new product category has been inserted');
        return redirect()->back();
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
        $product = products::find($id);
    }
}
