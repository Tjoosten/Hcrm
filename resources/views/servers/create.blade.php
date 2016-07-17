@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-10 col-md-10 col-lg-10 col-xs-10">
   <div class="page-header">
     <h1>Servers</h1>
  </div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-10 col-md-10 col-lg-10 col-xs-10">
      <form action='' class="form-horizontal">
  <div class="form-group">
    <label for="reference" class="col-sm-2 control-label">Server reference</label>
    <div class="col-sm-6">
      <input type="text" name="reference" id="reference" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="publicip" class="col-sm-2 control-label">Public ip</label>
    <div class="col-sm-6">
      <input type="text" name="publicip" id="publicip" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="location" class="col-sm-2 control-label">Location</label>
    <div class="col-sm-6">
      <input type="text" name="location" id="location" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="snmp" value="true"> Check with <strong>SNMP</strong>
        </label>

      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-primary">{{trans('app.save')}}</button>
      <button type="reset" class="btn btn-danger">{{trans('app.reset')}}</button>
    </div>
  </div>
</form>
  </div>
</div>
@endsection
