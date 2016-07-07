@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Create new topic</h2>
</div>

 <div class="clearfix">&nbsp;</div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <form action="{{route('tickets.savetopic')}}" method="post" class="form-horizontal">
         {{ csrf_field() }}

      <div class="form-group formSep">
       <label for="name" class="col-sm-2 control-label">Topic name  <span class="text-danger">*</span></label>
      <div class="col-sm-7">
        <input type="text" name="name" class="form-control" id="name">
      </div>
    </div>


  <div class="form-group formSep">
  <label for="tgroup" class="col-sm-2 control-label">{{trans('tickets.mailGroup')}} <span class="text-danger">*</span></label>
  <div class="col-sm-7">
    <select name="group" id="group" class="form-control">
     <option value="" selected="selected">-- Please select --</option>
        @foreach($groups as $group)
           <option value="{!! $group->name !!}">{!! $group->name !!}</option>
        @endforeach
    </select>
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
@endsection
