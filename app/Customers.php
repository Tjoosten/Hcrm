<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Customers extends Model
{
    use Billable;

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
