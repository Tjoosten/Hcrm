@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Role management</h2>
</div>

<div class="container-fluid">
 <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <table class="table table-striped">
 <thead>
  <th>Role</th>
  <th>Created</th>
  <th>Updated at</th>
  <th class="col-md-1"></th>
 </thead>
 <tbody>
   @foreach($roles as $role)
   <tr>
     <td><a href="#">{{ $role->name }}</a></td>
     <td>{{ $role->created_at }}</td>
     <td>{{ $role->updated_at }}</td>
   </tr>
   @endforeach
</tbody>
</table>
 </div>
</div>
</div>

@endsection
