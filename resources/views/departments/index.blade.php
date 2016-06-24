@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">
                    Search department
                </a>

                <a href="{{ route('department.new') }}" class="btn btn-default">New Department.</a>

                <div class="clearfix">&nbsp;</div>

                <div class="collapse" id="search">
                    <div class="well">
                        <form class="form-inline" method="GET" action="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="term" class="form-control" placeholder="Department name">
                            </div>
                            <button type="submit" class="btn btn-danger">
                                <span class="fa fa-search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Department name:</th>
                            <th>Department manager:</th>
                            <th>Department description:</th>
                            <th>Department staff:</th>
                            <th></th> {{-- Functions --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td><code>#D{{ $department->id }}</code></td>
                                <td>{{ $department->name }}</td>

                                @if(count($department->managers) > 0)
                                    @foreach($department->managers as $manager)
                                        <td> {{ $manager->name }} </td>
                                    @endforeach
                                @else
                                    <td><span class="text-danger">No managers.</span></td>
                                @endif

                                <td> {{ substr($department->description, 0, 25) }}... </td>

                                @if(count($department->users) > 0)
                                    <td>
                                        <a href="" class="label label-success">
                                            {{ count($department->users) }} staff members
                                        </a>
                                    </td>
                                @else
                                    <td>
                                        <span class="label label-danger">
                                            0 staff members
                                        </span>
                                    </td>
                                @endif

                                <td>
                                    <a href="" class="label label-default">Show</a>
                                    <a href="" class="label label-warning">Edit</a>
                                    <a href="{!! route('department.destroy', ['id' => $department->id]) !!}" class="label label-danger">
                                        Delete
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Render pagination --}}
                {{ $departments->render() }}
            </div>

        </div>
    </div>
@endsection