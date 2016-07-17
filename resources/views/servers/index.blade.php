@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
   <div class="page-header">
     <h1>Servers</h1>
  </div>

  <a href="{{ route('servers.create') }}" class="btn btn-primary">Add server</a>

<div class="clearfix">&nbsp;</div>

  <table class="table table-striped">
  <thead>
    <th>#</th>
      <th>Server name</th>
      <th>Public ip</th>
      <th>Location</th>
      <th>Status</th>
      <th>Actions</th>
  </thead>
  <tbody>
    @foreach($servers as $server)
        <tr>
            <td> #S{!! $server->id !!} </td>
            <td> {{ $server->name }} </td>
            <td> {{ $server->public_ip }} </td>
            <td> {{ $server->location }}</td>
            <td> {{ $server->location }} </td>

            {{-- Functions --}}
            <td>
                <a href="{{ route('server.destroy', ['id' => $server->id]) }}" class="label label-danger">Delete</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


</div>
@endsection
