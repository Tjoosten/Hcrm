@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Manage mailboxes</h2>
</div>

 <div class="clearfix">&nbsp;</div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <p><a class="btn btn-primary" href="{{route('tickets.addrouting')}}"> Add mailbox</a></p>


        <table class="table table-striped table-condensed">
          <thead>
            <th>Type</th>
            <th>Email</th>
            <th>Status</th>
            <th class="text-center">Create tickets</th>
            <th>Created</th>
            <th>Last updated</th>
          </thead>
          <tbody>
            @foreach($mailboxes as $mailbox)
            <tr>
              <td>{!! $mailbox["type"] !!}</td>
              <td><a href="#">{!!$mailbox["fromAddress"] !!}</a></td>
              <td><span class="text-success">Active</span></td>
            @if($mailbox["ssl"] == true)
              <td class="text-center"><i class="fa fa-check"></i></td>
            @else
              <td class="text-center"><i class="fa fa-times"></i></td>
            @endif
              <td>{!!$mailbox["created_at"] !!}</td>
              <td>{!!$mailbox["updated_at"] !!}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
