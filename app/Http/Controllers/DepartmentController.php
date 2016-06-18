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
