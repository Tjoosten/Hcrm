<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketTopics extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'TicketTopics';

  /**
   * Mass assign fields.
   *
   * @var array
   */
  protected $fillable = ['name', 'group'];

  /**
   * Hidden fields
   *
   * @var array
   */
  protected $hidden = [];
}
