@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('servers/lookup') }}" method="GET" class="form-horizontal">
 <div class="page-header">
      <h1>Register Dedicated servers</h1>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 col-md-11 col-lg-9">
           <div class="form-group">
 <label for="customerid" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Customer ID</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <input type="text" class="focus form-control" id="customerid" name="customerid">
    <div class="input-group-addon">
     <span class="help-inline">
      <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Unique identifier for the customer"></i>
     </span>
    </div>
  </div>
</div>
           <div class="form-group">
 <label for="tag" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Server name</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <input type="text" class="focus form-control" placeholder="Unique identifier for the server" id="tag" name="tag">
    <div class="input-group-addon">
     <span class="help-inline">
      <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Unique identifier for the server"></i>
     </span>
    </div>
  </div>
</div>

<div class="form-group">
 <label for="status" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Status</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <select name="status" id="status" class="form-control">
    <option value="" selected="selected"></option>
    <option value="Cancelled">Cancelled</option>
    <option value="Incomplete">Incomplete</option>
    <option value="Maintenance">Maintenance</option>
    <option value="Provisioned">Provisioned</option>
    <option value="Provisioning">Provisioning</option>
    <option value="Suspended">Suspended</option>
   </select>

<div class="input-group-addon">
  <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Asset Status (New, Incomplete, etc)"></i>
  </span>
</div>
</div>
</div>



<div class="form-group">
 <label for="provider" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Provider</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <select name="provider" id="provider" class="form-control">
    <option value="" selected="selected"></option>
    <option value="(none)">(None)</option>
    <option value="LSW">LeaseWeb</option>
   </select>

  <div class="input-group-addon">
  <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Who is providing the dedicated server"></i>
  </span>
 </div>
</div>
</div>

<div class="form-group">
 <label for="providerID" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Provider ID</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <input type="text" name="providerID" class="form-control">

  <div class="input-group-addon">
  <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Who is providing the dedicated server"></i>
  </span>
 </div>
</div>

</div>

<div class="form-group">
 <label for="operatingSystem" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Operating system</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <select name="operatingSystem" id="provider" class="form-control">
    <option value="" selected="">-- Please select -- </option>
    @foreach($osList as $operatingSystem)
     <option value="">{!! $operatingSystem->name !!}</option>
    @endforeach
   </select>

  <div class="input-group-addon">
  <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Who is providing the dedicated server"></i>
  </span>
 </div>
</div>

</div>

  </div>
  </div>
 </div>

 <div class="col-sm-6">
  <div class="row">
   <div class="col-sm-12 col-md-11 col-md-offset-1 col-lg-9">
    <div class="form-group">
     <label for="HOSTNAME" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Hostname</label>
      <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
       <input type="text" id="HOSTNAME" class="form-control" name="HOSTNAME">
        <div class="input-group-addon">
         <span class="help-inline">
          <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Hostname of asset"></i>
         </span>
        </div>
      </div>
     </div>



<div class="form-group">
<label for="IP_ADDRESS" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">IP Address</label>
<div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
 <input type="text" id="IP_ADDRESS" name="IP_ADDRESS" class="form-control">
  <div class="input-group-addon">
   <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom"  data-container="body" title="IP address of the asset. Prefix searches are also supported."></i>
  </span>
</div>
</div>
</div>

<div class="form-group">
 <label for="sla" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">SLA</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <select name="sla" id="sla" class="form-control">
    <option value="" selected="selected"></option>
    <option value="(none)">(None)</option>
    <option value="Bronze">Bronze</option>
    <option value="Silver">Silver</option>
    <option value="Gold">Gold</option>
  </select>    <div class="input-group-addon">
     <span class="help-inline">
      <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Service Level Agreements"></i>
     </span>
    </div>
   </div>
  </div>


<div class="form-group">
 <label for="BASE_VENDOR" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Vendor</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
   <select name="BASE_VENDOR" id="BASE_VENDOR" class="form-control">
    <option value="" selected="selected"></option>
    <option value="(none)">(None)</option>
    <option value="Dell">Dell</option>
    <option value="HP">HP</option>
    <option value="Supermicro">Supermicro</option>
  </select>

  <div class="input-group-addon">
  <span class="help-inline">
    <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Who made your spiffy computer?"></i>
  </span>
 </div>
</div>

</div>

<div class="form-group">
 <label for="VENDOR_PRODUCT" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Vendor Product</label>
   <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
    <input type="text" id="VENDOR_PRODUCT" class="form-control" name="VENDOR_PRODUCT">
     <div class="input-group-addon">
      <span class="help-inline">
       <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip"  data-placement="bottom"  data-container="body" title="Formal product model designation"></i>
      </span>
     </div>
    </div>
 </div>

 </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <div class="btn-group">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </div>
    </div>

</form>
</div>
@endsection
