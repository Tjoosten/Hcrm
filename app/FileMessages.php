<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileMessages extends Model
{
    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['ticket_id', 'user_id', 'message'];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Get the ticket information.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ticket()
    {
        return $this->hasOne('App\Tickets', 'id', 'ticket_id');
    }

    /**
     * Get the user data for the ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
