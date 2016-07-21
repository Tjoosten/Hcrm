<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DedicatedServers
 * @package App
 */
class DedicatedServers extends Model
{
    /**
     * [Many to many]: Dedicated Servers -> Customers relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers()
    {
        return $this->belongsToMany('App\Customers');
    }


    /**
     * [One to Many]: Dedicated Server Sips -> Dedicated servers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sips()
    {
        return $this->hasMany('App\DedicatedServerSips');
    }
}
