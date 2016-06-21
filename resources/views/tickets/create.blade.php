@extends('layouts.app')
@section('content')
<div class="page-header">
 <h2>{{trans('support.tickets')}}</h2>
</div>

    <div class="row">
     <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
     <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      
       <div class="form-group formSep">
        <label for="customer" class="col-md-3 control-label ">Customer <span class="text-danger">*</span>:</label>
        <div class="col-md-6">
          <select name="customer" class="form-control" id="ticket_requestor">
           <option value="contact">Mr. Hermans Glenn - Contact</option>
           <option value="billing">Mr. Hermans Glenn - Billing</option>
           <option value="tech">Mr. Hermans Glenn - Tech</option>
          </select>
        </div>
       </div>

    <div class="form-group formSep">
        <label for="group" class="col-md-3 control-label ">
        Ticket group <span class="text-danger">*</span></label>    
    <div class="col-md-6 ">
     <select name="group" class="form-control" id="group">
      <option value="" selected="selected">-- Please select --</option>
      <option value="support">Support</option>
      <option value="sales">Sales</option>
      <option value="security">Security</option>
      <option value="administration">Administration</option>
      <option value="feedback">Feedback</option>
      <option value="cdn">CDN</option>
     </select>
    </div>
   </div>
      
      
    <div class="form-group formSep">
     <label for="subject" class="col-md-3 control-label">Topic <span class="text-danger">*</span></label>
       <div class="col-md-6">
        <select name="subject" class="form-control" id="subject">
         <option value="" selected="selected">-- Please select --</option>
        </select>
       </div>
    </div>

    <div class="form-group formSep">
     <label for="message" class="col-md-3 control-label">Message <span class="text-danger">*</span></label>
      <div class="col-md-6 ">
       <textarea rows="5" name="message" class="form-control" id="message"></textarea>
      </div>
    </div>

    <div class="form-group formSep">
     <label for="send_notification" class="col-md-3 control-label ">
        Send notifications via email</label>
    <div class="col-md-6">
      <div class="checkbox">
       <input type="checkbox" name="send_notification" checked="checked" id="send_notification" />
       </div>
     </div>
    </div>

       <div class="form-group formSep">
        <label class="col-sm-3 control-label" for="attachFileInput"></label>
        <div class="col-sm-9">
            <input type="file" id="attachFileInput" data-input-name="ticket[upload]" placeholder="Attach file"/>
            <div class="attached">
                <h4>Attached files:</h4>
                <ul class="list-unstyled"></ul>
            </div>
        </div>
    </div>

     <div class="form-group">
       <div class="col-sm-9 col-sm-offset-3">
        <input type="submit" class="btn btn-primary" value="Send"/>
         </div>
        </div>
        
    </form>
     </div>
    </div>
@endsection