<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerValidator extends Request
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
            'name'    => 'required',
            'fname'   => 'required',
            'street'  => 'required',
            'zipcode' => 'required',
            'city'    => 'required',
            'state'   => 'required',
            'country' => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'vat'     => 'required',
        ];
    }
}
