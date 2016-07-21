<?php

namespace App\Http\Controllers;

use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

use Illuminate\Http\Request;

use App\Http\Requests;

class InboundEmail extends Controller
{
    public function index()
    {
      $mailbox = new ImapMailbox
      (
       '{mail.idevelopment.be:143/imap/novalidate-cert}INBOX',
       'testbox@idevelopment.be',
       'password',
        __DIR__
      );

      // Read all messaged into an array:
      $mailsIds = $mailbox->searchMailBox('ALL');
      if(!$mailsIds) {
      die('Mailbox is empty');
      }

      if($mailsIds) {
      rsort($mailsIds);
      foreach($mailsIds as $mailId)
       {
        $mail[$mailId] = $mailbox->getMail($mailId);
       }
      echo "<pre>";
      var_dump($mail);
      echo "</pre>";
      }
    }
}
