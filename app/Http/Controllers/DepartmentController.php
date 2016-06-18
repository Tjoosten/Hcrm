<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentController extends Controller
{
    /**
     * DepartmentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Create a new department.
     *
     * @url    POST: /departments/create
     * @param  Requests\DepartmentValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Requests\DepartmentValidator $input)
    {
        Departments::create($input->except('_token'));
        session()->flash('message', 'Department has been created');
        return redirect()->back();
    }

    /**
     * Update a department in the database.
     *
     * @url    POST: /departments/update/{id}
     * @param  Requests\DepartmentValidator $input
     * @param  int $id The department id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\DepartmentValidator $input, $id)
    {
        Departments::find($id)->update($input->except('_token'));
        session()->flash('message', 'Department has been updated.');
        return redirect()->back();
    }

    /**
     * Destroy a department in the database.
     *
     * @url    GET: /departments/delete/{id}
     * @param  int $id The department identifier in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Departments::destroy($id);
        session()->flash('message', 'Department deleted');
        return redirect()->back();
    }
}
