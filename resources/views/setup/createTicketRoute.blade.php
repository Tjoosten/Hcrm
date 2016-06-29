@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Create new inbound mailbox</h2>
</div>

 <div class="clearfix">&nbsp;</div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <form action="{{route('tickets.saveRouting')}}" method="post" class="form-horizontal">
         {{ csrf_field() }}
          <div class="form-group formSep">
           <label for="type" class="col-sm-2 control-label">{{trans('tickets.mailType')}}  <span class="text-danger">*</span></label>
          <div class="col-sm-7">
            <select name="type" id="type" class="form-control">
              <option value="IMAP">IMAP</option>
              <option value="IMAPS">IMAPS</option>
              <option value="POP3">POP3</option>
              <option value="pop3S">POP3S</option>
            </select>
          </div>
        </div>

        <div class="form-group formSep">
         <label for="server" class="col-sm-2 control-label">{{trans('tickets.mailServer')}} <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <input type="text" name="server" class="form-control" id="server" placeholder="Hostname">
        </div>

        <div class="col-sm-1">
          <input type="text" name="port" class="form-control" placeholder="Port">
        </div>
      </div>

      <div class="form-group formSep">
       <label for="fromName" class="col-sm-2 control-label">{{trans('tickets.mailFromName')}}  <span class="text-danger">*</span></label>
      <div class="col-sm-7">
        <input type="text" name="fromName" class="form-control" id="fromName">
      </div>
    </div>

        <div class="form-group formSep">
         <label for="fromAddress" class="col-sm-2 control-label">{{trans('tickets.mailAddress')}} <span class="text-danger">*</span></label>
        <div class="col-sm-7">
          <input type="email" name="fromAddress" class="form-control" id="fromAddress">
        </div>
      </div>

      <div class="form-group formSep">
       <label for="password" class="col-sm-2 control-label">{{trans('tickets.mailPassword')}} <span class="text-danger">*</span></label>
      <div class="col-sm-7">
        <input type="password" name="password" class="form-control" id="password">
      </div>
    </div>

    <div class="form-group formSep">
  <div class="col-sm-offset-2 col-sm-10">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="cticket" name="tickets" value="true"> Create tickets from imported emails
      </label>
    </div>
  </div>
</div>

<div id="new" style="display:none;">
  <div class="form-group">
  <label for="tgroup" class="col-sm-2 control-label">{{trans('tickets.mailGroup')}} <span class="text-danger">*</span></label>
  <div class="col-sm-7">
    <select name="group" id="group" class="form-control">
     <option value="" selected="selected">-- Please select --</option>
        @foreach($groups as $group)
           <option value="{{ $group->name }}"> {{ $group->name }} </option>
        @endforeach
    </select>
 </div>
</div>

<div class="form-group">
<label for="tgroup" class="col-sm-2 control-label">{{trans('tickets.priority')}} <span class="text-danger">*</span></label>
<div class="col-sm-7">
  <select name="group" id="group" class="form-control">
   <option value="" selected="selected">-- Please select --</option>
   <option value="low">Low</option>
   <option value="high">High</option>
   <option value="urgent">Urgent</option>
  </select>
</div>
</div>
</div>

    <div class="form-group">
     <label for="password" class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-7">
     <button type="submit" class="btn btn-primary">Save settings</button>
     <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>


        </form>
      </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#cticket').on('change', function () {
                if (this.value == 'true') {
                    $("#new").show();
                }
                else {
                    $("#new").hide();
                }
            });
        });
    </script>
    @endsection
