@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>{{trans('support.tickets')}}</h2>
</div>

        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-inline">

             <div class="form-group">
              <label class="" for="filter">Filter</label>
               <div class="input-group">
                <div class="input-group-addon">
                 <select name="filter" id="filter" class="form-control ">
                    <option selected="">Department</option>
                    <option>Type</option>
                    <option>Priority</option>
                    <option>Subject</option>
                    <option>Unassigned</option>
                </select>
                <input type="text" id="keywords" name="keywords" class="form-control">
             </div>
             </div>
            </div>

            <div class="checkbox">
             <label>
              <input id="userAssigned" name="userAssigned" type="checkbox"> {{trans('tickets.owned')}}
             </label>
             </div>

            <span class="pull-right">
             <a href="{{ url('tickets/create') }}" class="btn btn-success">{{trans('tickets.register')}}</a>
            </span>
           </form>
        </div>
    </div>
    </div>
   </div>

        <div class="clearfix">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
              <table class="table table-striped table-condensed">
                <thead>
                  <th>ID</th>
                  <th>{{trans('tickets.requester')}}</th>
                  <th>{{trans('tickets.type')}}</th>
                  <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{trans('tickets.subject')}}</th>
                  <th>{{trans('tickets.priority')}}</th>
                  <th>{{trans('tickets.status')}}</th>
                  <th>{{trans('tickets.created')}}</th>
                  <th>{{trans('tickets.updated')}}</th>
                </thead>
                <tbody>
                  @foreach($tickets as $ticket)
                  <tr>
                    <td><a href="{{url('tickets/details')}}/{!! $ticket->id !!}">{!! $ticket->id !!}</a></td>
                    <td>{!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}</td>
                    <td>{!! $ticket->type !!}</td>
                    <td><a href="{{url('tickets/details')}}/{!! $ticket->id !!}">{!! $ticket->subject !!}</a></td>

                    <td>{!! $ticket->priority !!}</td>
                    <td>{!! $ticket->status->name !!}</td>
                    <td>{!! $ticket->created_at !!}</td>
                    <td>{!! $ticket->updated_at !!}</td>
                  </tr>
                  @endforeach
                 </tbody>
               </table>
               <div class="text-right">
                   {{ $tickets->render() }}
                 </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
