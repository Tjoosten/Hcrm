@extends('layouts.app')
@section('content')

<div class="page-header">
 <h2>Manage mailboxes</h2>
</div>

 <div class="clearfix">&nbsp;</div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <p><a class="btn btn-primary" href="{{ route('tickets.addtopic')}}"> New topic</a></p>
        <table class="table table-striped table-condensed">
          <thead>
            <th>Name</th>
            <th>Group</th>
            <th></th>
            <th></th>
          </thead>
          <tbody>
            @foreach($topics as $topic)
            <tr>
              <td>{!! $topic->name !!}</td>
              <td>{!! $topic->group !!}</td>
              <td>{!! $topic->created_at !!}</td>
              <td>{!! $topic->updated_at !!}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

     </div>


   </div>

 @endsection
