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
     * @url    GET:
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['products'] = products::paginate(15);
        return view('products.index', $data);
    }

    /**
     * Register view for a nex product.
     */
    public function register()
    {
        return view();
    }

    /**
     * Store the new product in the database.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        return redirect()-back();
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
        session()->flash('message', trans('products.webNewCategory'));
        return redirect()->back();
    }

    /**
     * Add a new product.
     *
     * @url    POST
     * @param  int $id the profuct id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        return redirect()->back();
    }

    /**
     * Update the product.
     *
     * @url    POST:
     * @param  int $id the product id.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        return redirect()->back();
    }

    /**
     * Remove a product in the crm.
     *
     * @url    GET:
     * @param  int $id the product id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        products::destroy($id);
        session()->flash('message', '');

        return redirect()->back();
    }
}
