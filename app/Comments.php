<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use SoftDeletes;

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['comment', 'user_id'];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = ['deleted_at', 'updated_at', 'created_at'];

    /**
     * user relation to display the user form who is the comment.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
