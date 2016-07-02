@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Navigation --}}
        <div class="col-xs-3 col-sm-3 col-md-3 col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">Menu:</div>

                <div class="list-group">
                    <a aria-controls="info" data-toggle="tab" role="tab" class="list-group-item" href="#info">
                        Department info.
                    </a>
                    <a aria-controls="managers" data-toggle="tab" role="tab" class="list-group-item" href="#managers">
                        Department managers
                    </a>
                    <a aria-controls="users" data-toggle="tab" role="tab" class="list-group-item" href="#users">
                        Department users.
                    </a>
                </div>
            </div>
        </div>
        {{-- END navigation --}}

        {{-- Content --}}
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            {{-- Tab content --}}
            <div class="tab-content">

                {{-- Department info --}}
                <div role="tabpanel" class="tab-pane fade in active" id="info">
                    <div class="panel panel-default">
                        <div class="panel-heading">Department info.</div>

                        <div class="panel-body">
                            ...
                        </div>
                    </div>
                </div>

                {{-- Department managers --}}
                <div role="tabpanel" class="tab-pane fade in" id="managers">
                    <div class="panel panel-default">
                        <div class="panel-heading">Department managers.</div>

                        <div class="panel-body">
                            <a href="" class="btn btn-xs btn-default">Search manager.</a>
                            <a href="" class="btn btn-xs btn-success">New manager.</a>
                        </div>

                        @if (count($managers) > 0)
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email:</th>
                                    <th></th> {{-- <- function --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($managers as $manager)
                                        <td><code> #M{ $manager->id }} </code></td>
                                        <td>{{ $manager->name }}</td>
                                        <td>{{ $manager->email }}</td>

                                        <td>
                                            <a href="" class="label label-danger">Delete</a>
                                        </td>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="padding-alert alert alert-danger">
                                There are no managers found for this department.
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Department users --}}
                <div role="tabpanel" class="tab-pane fade in" id="users">
                    <div class="panel panel-default">
                        <div class="panel-heading">Department users.</div>

                        <div class="panel-body">
                            <a href="" class="btn btn-xs btn-success">New staff-member.</a>
                            <a href="" class="btn btn-xs btn-default">Search staff-member.</a>
                        </div>

                        @if (count($staff) > 0)
                            {{-- table --}}
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email:</th>
                                    <th></th> {{-- <- function --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($staff as $members)
                                        <tr>
                                            <td><code>#D{{ $members->id }}</code></td>
                                            <td>{!! $members->name !!}</td>
                                            <td>{!! $members->email !!}</td>

                                            <td>
                                                <a href="" class="label label-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- End tables. --}}
                        @else
                            <div class="padding-alert alert alert-danger">
                                There are no staff members under this department.
                            </div>
                        @endif

                        {{-- Users pagination --}}
                        {{ $staff->render() }}

                    </div>
                </div>

            </div>
            {{-- End tab content --}}
        </div>
        {{-- End content --}}
    </div>
</div>
@endsection