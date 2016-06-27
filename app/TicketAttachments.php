<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketAttachments
 * @package App
 */
class TicketAttachments extends Model
{
    /**
     * Mass assign fields.
     *
     * @var array
     */
    protected $fillable = ['comment_id', 'file_name', 'file_path'];

    /**
     * Hidden fields.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Comments relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comments()
    {
        return $this->hasOne('App\FileMessages', 'id', 'comment_id');
    }
}
