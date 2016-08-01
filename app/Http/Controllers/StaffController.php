<?php

namespace App\Http\Controllers;

use App\Departments;
use App\User;
use App\Roles;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

/**
 * Class StaffController
 * @package App\Http\Controllers
 */
class StaffController extends Controller
{
    /**
     * StaffController constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
    }

    /**
     * List all staff members.
     *
     * @url    GET: staff
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (! auth()->user()->can('list users')) {
            redirect()->back();
        }

        $data['users'] = User::all();
        $data['departments'] = Departments::all();

        return view('staff.index', $data);
    }

    /**
     * Get the info about a specific staff member.
     *
     * @url    GET /staff/show/id
     * @param  int $id the staff member id.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
       return view('');
    }

    /**
     * Register form for a new staff member.
     *
     * @url    GET: staff/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        if (! auth()->user()->can('create user')) {
            redirect()->back();
        }

        $data['departments'] = Departments::all();
        return view('staff.create', $data);
    }

    /**
     * Update the user roles.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateRoles()
    {
        return redirect()->back();
    }

    /**
     * Update the user role abilities.
     *
     * @url    POST:
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAbilities()
    {
        return redirect()->back();
    }


    /**
     * Store the new staff member.
     *
     * @url    POST: staff/create
     * @param  Requests\StaffValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\StaffValidator $input)
    {
        if (! auth()->user()->can('create user')) {
            redirect()->back();
        }

        $pass = str_random(16);

        $user           = new User;
        $user->name     = $input->name;
        $user->email    = $input->email;
        $user->password = bcrypt($pass);
        $user->save();

        $newUser = $user->id;
        $user->find($newUser)->departments()->sync($input->departments);

        $addedUser = $user->find($newUser);
        $data      = ['user' => $addedUser, 'password' => $pass];

        Mail::send('auth.emails.newStaff', $data, function ($message) use ($addedUser) {
            $message->from('info@hcrm.be', 'Info Hcrm');
            $message->to($addedUser['email'])->subject('Your staff account has been created');
        });

        session()->flash('message', trans('staff.webNewStaff'));
        return redirect()->back();
    }

    public function roles()
    {
      $data["roles"] = Roles::all();
      return view('staff.roles', $data);
    }

    /**
     * Delete a staff member.
     *
     * @url    /staff/destroy/{id}
     * @param  int $id The staff member id in the user table.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (! auth()->user()->can('remove user')) {
            redirect()->back();
        }

        User::find($id)->departments()->sync([]);
        User::destroy($id);

        session()->flash('flash', trans('web.webDeleteStaff'));
        return redirect()->back();
    }
}
