@extends('layouts.app')

@section('content')

<form action="{{ url('servers/lookup') }}" method="GET" class="form-horizontal">
 <div class="page-header">
      <h1>Register Dedicated servers</h1>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12 col-md-11 col-lg-9">
           <div class="form-group">
 <label for="customerid" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-3">Customer</label>
  <div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
     <p class="form-control-static"><a href="#">Glenn Hermans</a></p>
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
   <a class="editable editable-click" id="serverName" href="#" data-title="Enter the name" data-placement="right" data-type="text">SERV01</a>
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

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#overview" data-toggle="tab">{{ trans('dedicatedServers.overview') }}</a></li>
        <li><a href="#network" data-toggle="tab">{{ trans('dedicatedServers.network') }}</a></li>
        <li><a href="#log-data" data-toggle="tab">{{ trans('dedicatedServers.logs') }}</a></li>
        <li><a href="#hardware-details" data-toggle="tab">{{ trans('dedicatedServers.hardware') }}</a></li>
        <li><a href="#software-details" data-toggle="tab">{{ trans('dedicatedServers.software') }}</a></li>
        <li class="dropdown" data-dropdown="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
           <strong>{{ trans('dedicatedServers.actions') }}</strong> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#asset-note" role="button" data-keyboard="true" data-toggle="modal">
              <i class="glyphicon glyphicon-comment"></i> {{ trans('dedicatedServers.createNote') }}</a>
             </li>
            <li class="divider"></li>
            <li>
             <a href="#maintenance" role="button"  data-backdrop="static" data-keyboard="true" data-toggle="modal">
             <i class="glyphicon glyphicon-wrench"></i> {{ trans('dedicatedServers.maintenance') }}</a>
            </li>
            <li>
             <a href="#power-server" role="button"  data-backdrop="static" data-keyboard="true" data-toggle="modal">
              <i class="fa fa-power-off"></i> {{ trans('dedicatedServers.powerManagement') }}</a>
            </li>
            <li>
             <a href="#provision-server" role="button" data-backdrop="static" data-keyboard="true" data-toggle="modal">
              <i class="fa  fa-recycle"></i> {{ trans('dedicatedServers.startReinstall') }}</a>
            </li>
          </ul>
        </li>

          <li>
           <a href="#datatraffic-info">{{ trans('dedicatedServers.graphs') }}</a>
          </li>
       </ul>

    <div class="tab-content">
     <div role="tabpanel" class="tab-pane active" id="overview">
       <table class="table table-hover table-condensed">
      <tbody>
        <tr>
          <th>{{ trans('dedicatedServers.serverName') }}</th>
            <td><a class="editable editable-click" id="serverName" href="#" data-title="Enter the name" data-placement="right" data-type="text">SERV01</a></td>
            <td></td>
        </tr>
        <tr>
          <th>{{ trans('dedicatedServers.customer') }}</th>
          <td><a href="#">iDevelopment</a></td>
          <td><span></span></td>
        </tr>
        <tr>
          <th>{{ trans('dedicatedServers.provider') }}</th>
          <td>LeaseWeb</td>
          <td></td>
        </tr>
        <tr>
          <th>{{ trans('dedicatedServers.site') }}</th>
          <td><a href="#" id="site"></a></td>
          <td></td>
        </tr>
        <tr>
          <th>{{ trans('dedicatedServers.cabinet') }}</th>
          <td><a class="editable editable-click" id="cabinet" href="#" data-title="Enter the cabinet" data-placement="right" data-type="text">HAL01</a></td>
          <td></td>
        </tr>
        <tr class="warning">
          <td><strong>{{ trans('dedicatedServers.serverStatus') }}</strong></td>
          <td>New</td>
          <td>Asset has been entered into the system</td>
        </tr>

        <tr>
          <th>{{ trans('dedicatedServers.sla') }}</th>
          <td> </td>
          <td>Service Level Agreement Response time</td>
        </tr>
        <tr>
          <th>{{ trans('dedicatedServers.dateCreated') }}</th>
          <td>2016-05-27 14:23:13</td>
          <td></td>
        </tr>

        <tr>
          <th>{{ trans('dedicatedServers.dateModified') }}</th>
          <td>2016-05-27 14:23:14</td>
          <td></td>
        </tr>

      </tbody>
    </table>


     </div>
     <div role="tabpanel" class="tab-pane" id="network">
       <div class="clearfix">&nbsp;</div>
       <p class="pull-right">
        <a href="#" class="btn btn-default">Add new ip address</a>
       </p>

       <table class="table table-hover table-condensed">
         <thead>
           <th>IP</th>
           <th>Type</th>
           <th></th>
         </thead>
         <tbody>
           <tr>
             <td><a href="{!! url('ippool/display/id') !!}">192.168.10.10</a></td>
             <td>IPV4</td>
             <td></td>
           </tr>
         </tbody>
       </table>

     </div>
    </div>
   </div>
 </div>

 <div class="modal fade" id="maintenance" tabindex="-1" role="dialog" aria-labelledby="maintenanceLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="maintenanceLabel">{{ trans('maintenance.title') }}</h4>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
      <p>{{ trans('maintenance.intro') }}</p>
    <ul>
      <li>{{ trans('maintenance.option1') }}</li>
      <li>{{ trans('maintenance.option2') }}</li>
      <li>{{ trans('maintenance.option3') }}</li>
    </ul>
    <p>{{ trans('maintenance.final') }}}</p>
    <input type="hidden" name="status" value="Maintenance">

<div class="form-group">
<label for="state" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4">{{ trans('maintenance.state') }}</label>
<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
   <select name="state" class="form-control" id="state">
     <option value="" selected="selected"></option>
     <option value="HARDWARE_PROBLEM" >Hardware Problem</option>
     <option value="HW_TESTING" >Hardware Testing</option>
     <option value="HARDWARE_UPGRADE" >Hardware Upgrade</option>
     <option value="NETWORK_PROBLEM" >Network Problem</option>
     <option value="RELOCATION" >Relocation</option>
    </select>

</div>
</div>

   <div class="form-group">
   <label for="state" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4">{{ trans('maintenance.description') }}</label>
    <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <textarea name="maintenanDescription" id="maintenanceDescription" rows="3" class="form-control"></textarea>
    </div>
    </div>
   </div>

    <div class="modal-footer">
      <div class="btn-group">
       <button type="submit" class="btn btn-sm btn-success">{{ trans('maintenance.start') }}</button>
      </div>
    </div>
    </div>
   </div>

   </form>
  </div>
</div>


 <div class="modal fade" id="provision-server" tabindex="-1" role="dialog" aria-labelledby="provisionLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        <h4 class="modal-title" id="provisionLabel">{{ trans('dedicatedServers.ReinstallTitle') }}</h4>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
       <p>{{ trans('dedicatedServers.ReinstallDesc1') }}<br>
          {{ trans('dedicatedServers.ReinstallDesc2') }}<br><br>
          {{ trans('dedicatedServers.ReinstallDesc3') }}</p>

        <ul>
         <li>{{ trans('dedicatedServers.ReinstallDesc4') }}</li>
         <li>{{ trans('dedicatedServers.ReinstallDesc5') }}</li>
         <li>{{ trans('dedicatedServers.ReinstallDesc6') }}</li>
         <li>{{ trans('dedicatedServers.ReinstallDesc7') }}</li>
        </ul>
    <p>If that all sounds good, choose an appropriate operating system below.</p>
    <input type="hidden" name="status" value="Maintenance">

<div class="form-group">
<label for="OperatingSystem" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4">{{ trans('dedicatedServers.ReinstallOs') }} <span class="text-danger">*</span> </label>
<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-8">
   <select name="OperatingSystem" id="OperatingSystem" class="form-control">
    <option value="" selected="selected"></option>
    @foreach($osList as $item)
     <option value="{!! $item["id"] !!}">{!! $item["name"] !!}</option>
    @endforeach
  </select>
 <div class="input-group-addon">
  <span class="help-inline">
      <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="{{ trans('dedicatedServers.ReinstallOShelper') }}"></i>
  </span>
</div>
</div>
</div>

</div>
<div class="modal-footer">
  <div class="btn-group">
   <button type="submit" class="btn btn-sm btn-success">{{ trans('maintenance.start') }}</button>
  </div>
 </div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    $.fn.editable.defaults.mode = 'inline';
    $('#serverName').editable();
    $('#cabinet').editable();
    $('#site').editable({
        type: 'select',
        title: 'Choose a new Datacenter',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'AMS-01'},
            {value: 2, text: 'AMS-10'},
            {value: 3, text: 'AMS-011'},
            {value: 3, text: 'AMS-012'},
            {value: 4, text: 'DAL-10'},
            {value: 5, text: 'FRA-10'},
            {value: 6, text: 'HKG-10'},
            {value: 7, text: 'SFO-12'},
            {value: 8, text: 'WDC-01'}
        ]

        /*
        //uncomment these lines to send data on server
        ,pk: 1
        ,url: '/post'
        */
    });
});

</script>
@endsection
