@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h2>API logs</h2>
            </div>

            @if(count($logs) === 0)
                <div class="alert alert-danger">
                    There were no logs found for this key.
                </div>
            @else
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>#<th>
                            <th>Date:</th>
                            <th>Route:</th>
                            <th>Params:</th>
                            <th>IP address:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td> <strong>#{!! $log->id !!}</strong> </td>
                                <td> {!! $log->created_at !!} </td>
                                <td> {!! $log->method !!} {!! $log->route !!} </td>
                                <td> {!! $log->params !!} </td>
                                <td> {!! $log->ip_address !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $logs->render()  }}
            @endif
        </div>
    </div>
@endsection