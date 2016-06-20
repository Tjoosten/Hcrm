@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-xs-9 col-md-9 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover table-condensed">
                            <thead>

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

            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                <div class="panel panel-default">
                    <div class="list-group">
                        <a class="list-group-item" href="">
                            All Tickets.
                        </a>
                        <a class="list-group-item" href="{!! route('Tickets.assigned') !!}">
                            Assigned to you.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection