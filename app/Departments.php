<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /**
     * Mass-assign fields.
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];

    /**
     * Departments -> users relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Department -> managers relations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managers()
    {
        return $this->belongsToMany('App\User', 'departments_managers', 'departments_id', 'user_id');
    }
}
