<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketGroups extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Hidden fields.
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

}
