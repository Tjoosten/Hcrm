@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Settings page</h2>
</div>

 <div class="clearfix">&nbsp;</div>
   <div class="row">
      <ul class="col-md-3 col-md-offset-2 list-unstyled">
        <li><strong>General</strong></li>
          <li><a href="#">Application settings</a></li>
          <li><a href="#">Email notifications</a></li>
          <li><a href="#">Order statuses</a></li>
      </ul>

              <ul class="col-md-3 list-unstyled">
               <li><strong>Payments</strong></li>
               <li><a href="#">Currencies</a></li>
               <li><a href="#">Payment Gateways</a></li>
               <li><a href="#">TAX Rules</a></li>
               <li><a href="#">Promotions</a></li>
              </ul>

              <ul class="col-md-3 list-unstyled">
               <li><strong>Product management</strong></li>
               <li><a href="#">Domain pricing</a></li>
               <li><a href="#">Domain Registrars</a></li>
               <li><a href="#">Server Providers</a></li>
              </ul>
        </div>

             <div class="clearfix">&nbsp;</div>

             <div class="row">
              <ul class="col-md-3 col-md-offset-2 list-unstyled">
              <li><strong>Staff management</strong></li>
               <li><a href="#">Create employee</a></li>
               <li><a href="#">Search employee</a></li>
               <li><a href="{{url('departments')}}">Departments</a></li>
              </ul>

              <ul class="col-md-3 list-unstyled">
               <li><strong>Support</strong></li>
               <li><a href="#">knowledge base categories</a></li>
               <li><a href="#">Ticket routing</a></li>
               <li><a href="#">Ticket types</a></li>
               <li><a href="#">Ticket statuses</a></li>
              </ul>

              <ul class="col-md-3 list-unstyled">
               <li>Other</li>
               <li><a href="#">HCRM manual</a></li>
              </ul>
             </div>
@endsection
