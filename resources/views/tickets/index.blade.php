@extends('layouts.app')

@section('content')
    <div class="container">
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
              <input id="userAssigned" name="userAssigned" type="checkbox"> Assigned to me
             </label>
             </div>

            <span class="pull-right">
             <a href="{{ url('tickets/create') }}" class="btn btn-success">Create ticket</a>
            </span>
           </form>
        </div>
    </div>
    </div>
   </div>

        <div class="clearfix">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-striped table-condensed">
                            <thead>
                             <th>ID</th>
                             <th>Subject</th>
                             <th>Type</th>
                             <th>Priority</th>
                             <th>Status</th>
                             <th>Date created</th>
                             <th>Last updated</th>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)


                                @endforeach
                            </tbody>
                        </table>

                        {{ $tickets->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection