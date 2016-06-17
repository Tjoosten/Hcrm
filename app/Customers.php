<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /**
     * Mass assign fields.
     * @var array
     */
    protected $fillable = [
        'name', 'fname', 'street', 'zipcode',
        'city', 'state', 'country', 'email',
        'phone', 'mobile', 'company', 'vat'
    ];

    /**
     * Hidden fields
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];
}
