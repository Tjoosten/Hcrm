@extends('layouts.app')

@section('content')

 <div class="page-header">
      <h1>Manage servers:</h1>
    </div>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#overview" data-toggle="tab">{{ trans('dedicatedServers.overview') }}</a></li>
        <li><a href="#provider-details" data-toggle="tab">{{ trans('dedicatedServers.provider') }}</a></li>
        <li><a href="#network" data-toggle="tab">{{ trans('dedicatedServers.network') }}</a></li>
        <li><a href="#hardware-details" data-toggle="tab">{{ trans('dedicatedServers.hardware') }}</a></li>
        <li><a href="#software-details" data-toggle="tab">{{ trans('dedicatedServers.software') }}</a></li>
        <li><a href="#log-data" data-toggle="tab">{{ trans('dedicatedServers.logs') }}</a></li>
        <li class="dropdown" data-dropdown="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
           <strong>{{ trans('dedicatedServers.actions') }}</strong> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
             <a href="#maintenance" role="button"  data-backdrop="static" data-keyboard="true" data-toggle="modal">
             <i class="glyphicon glyphicon-wrench"></i> {{ trans('dedicatedServers.maintenance') }}</a>
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
       <table class="table table-hover">
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
        <tr class="danger">
          <td><strong>{{ trans('dedicatedServers.serverStatus') }}</strong></td>
          <td>New</td>
          <td></td>
        </tr>

        <tr>
          <th>{{ trans('dedicatedServers.sla') }}</th>
          <td><a href="#" id="sla"></a></td>
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
          <td>  </td>
        </tr>

      </tbody>
    </table>


     </div>

     <div role="tabpanel" class="tab-pane" id="hardware-details">
       <table id="hardware" class="table table-hover">
          <tbody>
           <tr>
             <td class="col-md-3">Vendor</td>
             <td>Dell</td>
           </tr>

           <tr>
             <td class="col-md-3">Vendor Product</td>
             <td>Dell</td>
           </tr>

           <tr>
             <td class="col-md-3">Total diskspace</td>
             <td>4 TB</td>
           </tr>

           <tr>
             <td class="col-md-3">Total memory</td>
             <td>Dell</td>
           </tr>
         </tbody>
       </table>
     </div>

     <div role="tabpanel" class="tab-pane" id="provider-details">
       <table id="providerData" class="table table-hover">
          <tbody>
           <tr>
             <td class="col-md-3">Provider</td>
             <td><a href="#" id="provider">Leaseweb</a></td>
           </tr>

           <tr>
             <td class="col-md-3">Provider server ID</td>
             <td><a href="#" id="providerID">132133</a></td>
           </tr>
         </tbody>
       </table>
     </div>

     <div role="tabpanel" class="tab-pane" id="network">
       <table id="ips" class="table table-hover">
         <thead>
           <th>IP</th>
           <th>Type</th>
           <th></th>
         </thead>
         <tbody>
           <tr>
             <td><a href="{!! url('ippool/display/id') !!}">192.168.10.10</a></td>
             <td>IPV4</td>
             <td><a href="#">Remove</a></td>
           </tr>

         </tbody>
       </table>

       <div class="clearfix">&nbsp;</div>
       <p class="pull-right">
        <a href="#" id="addIP" class="btn btn-sm btn-default">Add new ip address</a>
       </p>

       <script>
       $(document).ready(function(){
           $("#addIP").click(function(){
               $("#ips").append('<tr><td><input type="text" name="ip[]" value="" placeholder="192.168.1.1" class="form-control"/></td><td><input type="text" name="ipType[]" placeholder="IP Type" class="form-control" /></td><td><a href="javascript:void(0);" class="remIP">Remove</a></td></tr>');
           });

           $("#ips").on('click', '.remIP', function(){
               $(this).closest('tr').remove();
           });
         });
       </script>

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

    $('#providerType').editable({
        type: 'select',
        title: 'Choose a new provider',
        placement: 'right',
        value: 1,
        source: [
            {value: 1, text: 'None'},
            {value: 2, text: 'LeaseWeb'},
            {value: 3, text: 'Microfot Azure'},
            {value: 4, text: 'Softlayer'},
        ]
    });

    $('#site').editable({
        type: 'select',
        title: 'Choose a new Datacenter',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'AMS-01'},
            {value: 2, text: 'AMS-10'},
            {value: 3, text: 'AMS-011'},
            {value: 4, text: 'AMS-012'},
            {value: 5, text: 'DAL-10'},
            {value: 6, text: 'FRA-10'},
            {value: 7, text: 'HKG-10'},
            {value: 8, text: 'SFO-12'},
            {value: 9, text: 'WDC-01'}
        ]

    });

    $('#sla').editable({
        type: 'select',
        title: 'Choose a new Service Level Agreement',
        placement: 'right',
        value: 1,
        source: [
            {value: 1, text: 'Basic'},
            {value: 2, text: 'Bronze'},
            {value: 3, text: 'Silver'},
            {value: 4, text: 'Gold'},
            {value: 5, text: 'Platinum'},
        ]
    });
});

</script>
@endsection
