<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class productsCategories
 * @package App
 */
class productsCategories extends Model
{
    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['category', 'description'];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
