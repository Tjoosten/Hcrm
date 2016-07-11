<?php

namespace App\Http\Controllers;

use App\Departments;
use App\User;
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
        $this->middleware('lang');
    }

    /**
     * Get all the departments.
     *
     * @url    GET: /departments
     * @param  Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (! auth()->user()->can('list departments')) {
            return redirect()->back();
        }
        
        $rels = ['users', 'managers'];
        $term = $request->get('term');

        if (! $term) {
            $data['departments'] = Departments::with($rels)->paginate(15);
        } else {
            $data['departments'] = Departments::with($rels)
                ->where('name', 'LIKE', "%$term%")
                ->paginate(15);
        }

        return view('departments.index', $data);
    }

    /**
     * Create form for registering new departments
     *
     * @url    GET: /departments/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        if (! auth()->user()->can('create department')) {
            return redirect()->back();
        }

        $data['users'] = User::all(['id', 'name']);
        return view('departments.create', $data);
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
        if (! auth()->user()->can('create department')) {
            return redirect()->back();
        }
        
        $depId = Departments::create($input->except('_token'))->id;

        $department = Departments::findOrFail($depId);
        $department->users()->attach($input->users);
        $department->managers()->attach($input->managers);

        session()->flash('message', 'Department has been created');
        return redirect()->back();
    }

    /**
     * Show The information about a specific department.
     *
     * @url   /departments/{id}
     * @param int $id The department id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['department'] = Departments::find($id);
        $data['staff']      = $data['department']->users()->paginate(15);
        $data['managers']   = $data['department']->managers()->paginate(15);
        
        return view('departments.show', $data);
    }

    /**
     * Update view for a specific department.
     *
     * @url    GET: /departments/update/{id}
     * @param  int $id The department id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (! auth()->user()->can('edit department')) {
            return redirect()->back();
        }
        
        $data['department']  = Departments::with(['users', 'managers'])->find($id);
        $data['departments'] = Departments::all();
        $data['users']       = User::all();
        return view('departments.update', $data);
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
        if (! auth()->user()->can('edit department')) {
            return redirect()->back();
        }
            
        $hidden = ['_token', 'users', 'departments'];

        Departments::find($id)->update($input->except($hidden));
        Departments::find($id)->users()->sync($input->users);
        Departments::find($id)->managers()->sync($input->managers);

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
        if (! auth()->user()->can('remove department')) {
            return redirect()->back();
        }

        $department = Departments::findOrFail($id);
        $department->users()->sync([]);
        $department->managers()->sync([]);
        $department->delete();

        session()->flash('message', 'Department deleted');
        return redirect()->back();
    }
}
