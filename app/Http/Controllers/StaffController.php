<?php

namespace App\Http\Controllers;

use App\Departments;
use App\User;
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
        $data['users'] = User::all();
        $data['departments'] = Departments::all();      
        return view('staff.index', $data);
    }

    /**
     * Register form for a new staff member.
     *
     * @url    GET: staff/create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        $data['departments'] = Departments::all();
        return view('staff.create', $data);
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

        session()->flash('message', 'The new staff member has been added');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
