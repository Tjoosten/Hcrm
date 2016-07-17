<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servers
 * @package App
 */
class Servers extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
