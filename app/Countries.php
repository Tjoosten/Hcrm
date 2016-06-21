<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    /**
     * Mass-assign field.
     * @var array
     */
    protected $filleable = ['country'];
}
