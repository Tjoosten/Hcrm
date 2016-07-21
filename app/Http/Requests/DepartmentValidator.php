<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * @property mixed managers The department managers relationship.
 * @property mixed users    The department users relationship.
 */
class DepartmentValidator extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required',
            'description' => 'required',
            'managers'    => 'required',
            'users'       => 'required'
        ];
    }
}
