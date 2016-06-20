@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">
  Search customer
</a>

    <a class="btn btn-default">New Customer.</a>

<div class="clearfix">&nbsp;</div>

<div class="collapse" id="search">
  <div class="well">
      <form class="form-inline" action="POST" action="">
          <div class="form-group">
              <input type="email" class="form-control" placeholder="Customer name">
          </div>
          <button type="submit" class="btn btn-danger">
            <span class="fa fa-search"></span>
          </button>
      </form>
  </div>
</div>
</div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">customers</div>
                <div class="panel-body">
                <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>{{trans('customers.company')}}</th>
                    <th>{{trans('customers.name')}}</th>
                    <th>{{trans('customers.email')}}</th>
                    <th>{{trans('customers.phone')}}</th>
                    <th>{{trans('customers.created')}}</th>
                    <th>{{trans('customers.status')}}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>iDevelopment</td>
                        <td>Demo client</td>
                        <td>blah@blah.com</td>
                        <td>+32</td>
                        <td>19-06-2016 08:00</td>
                        <td></td>
                    </tr>
                </tbody>
                </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
