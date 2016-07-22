<?php

namespace App\Http\Controllers\ApiV1;

use App\Departments;
use App\Transformers\DepartmentTransformer;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class DepartmentsController
 * @package App\Http\Controllers\ApiV1
 */
class DepartmentsController extends ApiGuardController
{
    /**
     * Validation rules.
     *
     * @var array
     */
    protected $validation;

    /**
     * Departments constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Validation messages.
        $this->validation['name']        = 'required';
        $this->validation['description'] = 'required';
    }


    /**
     * Display a listing of the resource.
     *
     * @url    GET: /api/v1/department
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Departments::paginate(15);
        return $this->response->withPaginator($departments , new DepartmentTransformer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @url    POST: api/v1/department
     * @param  \Illuminate\Http\Request  $input
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input)
    {
        $validator = Validator::make($input->all(), $this->validation);

        if ($validator->fails()) {
            return $this->response->errorWrongArgs();
        }

        if (Departments::create($input->all())) {
            return $this->response->withArray(trans('departments.apiCreate'));
        } else {
            return $this->response->errorUnprocessable();
        }
    }

    /**
     * Display the specified resource.
     *
     * @url    GET: api/v1/department/{department id}
     * @param  int  $id the department id in the id.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $departments = Departments::findOrFail($id);
            return $this->response->withItem($departments, new DepartmentTransformer);
        } catch(ModelNotFoundException $err) {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @url    PUT|PATCH: api/v1/department/{department}
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id The department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
        $department = Departments::find($id);

        if (count($department) === 1) {
            $validator = Validator::make($request->all(), $this->validation);

            if ($validator->fails()) {
                return $this->response->errorWrongArgs();
            }

            if ($department->update($request->all())) {
                return $this->response->withArray(trans('departments.apiUpdate'));
            } else {
                return $this->response->errorUnprocessable();
            }

        } else {
            return $this->response->errorNotFound();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @url    DELETE: api/v1/department/{department}
     * @param  int $id The department id in the database.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        $department = Departments::find($id);

        if (count($department) > 0) {
            $department->delete();

            return $this->response->withArray([
                'message' => trans('departments.apiDestroy')
            ]);
        } else {
            return $this->response->errorNotFound();
        }
    }
}
