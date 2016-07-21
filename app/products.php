<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class products
 * @package App
 */
class products extends Model
{
    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category', 'disk_space',
        'data_traffic', 'memory', 'Operating_System'
    ];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
    
    /**
     * Category relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('app\productsCategories', 'id', 'category');
    }
}
