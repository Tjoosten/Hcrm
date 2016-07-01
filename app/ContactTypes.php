<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactTypes extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Hiden fields
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
