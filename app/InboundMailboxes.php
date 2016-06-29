<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboundMailboxes extends Model
{
  /**
   * Mass assign fields.
   * @var array
   */
  protected $table = 'InboundMailboxes';


  /**
   * Mass assign fields.
   * @var array
   */
  protected $fillable = ['type', 'server', 'port', 'ssl', 'fromName', 'fromAddress', 'password', 'createTicket', 'ticketGroup', 'ticketPriority'];

  /**
   * Hidden fields
   * @var array
   */
  protected $hidden = ['updated_at', 'created_at'];
}
