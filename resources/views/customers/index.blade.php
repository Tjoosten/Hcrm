@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <div class="page-header">
      <h2>{{ trans('customers.index') }}</h2>
  </div>

<a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">
  Search customer
</a>

    <a href="{{ route('customer.create') }}" class="btn btn-default">New Customer.</a>

<div class="clearfix">&nbsp;</div>

<div class="collapse" id="search">
  <div class="well">
      <form class="form-inline" method="GET" action="{!! route('customer.search') !!}">
          {{csrf_field()}}
          <div class="form-group">
              <input type="text" name="term" class="form-control" placeholder="Customer lastname">
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
                <div class="panel-heading">{{ trans('customers.index') }}</div>
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
                    @foreach($customers as $customer)
                        <tr>
                            <td><a href="{!! url('/customer/update') !!}/{{ $customer->id }}">#C{{ $customer->id }}</a></td>
                            <td>{{ $customer->company }}</td>
                            <td>{{ $customer->fname }} {{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>Open</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>

                    {{-- Pagination --}}
                    {{ $customers->render() }}
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
