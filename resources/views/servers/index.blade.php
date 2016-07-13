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
      <th>Server name</th>
      <th>Public ip</th>
      <th>Location</th>
      <th>Status</th>
      <th>Actions</th>
  </thead>
  <tbody>
    <tr>
      <td><a href="#">IDEV01</a></td>
      <td><a href="#">dev01.idevelopment.be</a></td>
      <td>The Netherlands</td>
      <td class="text-success">Available</td>
    </tr>
  </tbody>
</table>


</div>
@endsection
