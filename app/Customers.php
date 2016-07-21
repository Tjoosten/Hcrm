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

    /**
     * Tax rate for cashier.
     *
     * @return string
     */
    public function taxPercentage()
    {
        return config('crm.tax');
    }

    /**
     * Customers -> contacts relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function contact()
    {
        return $this->belongsToMany('App\Contacts')->withTimestamps();
    }
}
