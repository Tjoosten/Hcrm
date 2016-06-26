<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    /**
     * Mass assign fields.
     *
     * @var array
     */
    protected $fillable = ['subject'];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Status relation form the ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Status', 'status_id', 'id');
    }

    /**
     * Get the Data about the customer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customers', 'customer_id', 'id');
    }

    /**
     * Get the data about the assigned user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function assigned()
    {
        return $this->belongsToMany('App\User');
    }
}
