<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /**
     * Mass-assign fields.
     * @var array
     */
    protected $fillable = [];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];
}
