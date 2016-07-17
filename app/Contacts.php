<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /**
     * Mass-assign fields.
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

    /**
     * Contacts -> customers relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers()
    {
        return $this->belongsToMany('App\Customers');
    }

    /**
     * Contacts -> Contact types relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function type()
    {
        return $this->belongsToMany('App\ContactTypes');
    }
}
