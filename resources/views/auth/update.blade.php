@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- menu --}}
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="fa fa-cogs"></span> Settings</div>
                    <div class="list-group">
                        <a href="#info" class="@if($tab == 'info') active @endif list-group-item" aria-controls="tab" role="tab" data-toggle="tab">
                            Information
                        </a>
                        <a href="#security" class="@if($tab == 'security') active @endif list-group-item" aria-controls="sec" role="tab" data-toggle="tab">
                            Security
                        </a>
                        <a href="#api" class="@if($tab == 'api') active @endif list-group-item" aria-controls="api" role="tab" data-toggle="tab">
                            API
                        </a>

                        <a href="#canned" class="@if($tab == 'canned') active @endif list-group-item" aria-controls="canned" role="tab" data-toggle="tab">
                            Canned responses
                        </a>
                    </div>
                </div>
            </div>
            {{-- END menu --}}

            {{-- Content blocks--}}
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                {{-- tabs --}}
                <div class="tab-content">

                    {{-- Account information tab --}}
                    <div role="tabpanel" class="tab-pane fade in @if($tab == 'info') active @endif" id="info">
                        <div class="panel panel-default">
                            <div class="panel-heading"> Account information </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{!! route('account.update.info') !!}">
                                    {{-- CSRF field --}}
                                    {{ csrf_field() }}

                                    {{-- Name form-group --}}
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name" class="col-md-3 control-label">
                                            Name <strong class="text-danger">*</strong>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" name="name" value="{{ $query->name }}" class="form-control">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Email form-group --}}
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email" class="col-md-3 control-label">
                                            Email: <strong class="text-danger">*</strong>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" id="email" name="email" value="{{ $query->email }}" class="form-control">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- SUBMIT & RESET button --}}
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- END account information tab --}}


                    {{-- Security tab --}}
                    <div role="tabpanel" class="tab-pane fade in @if($tab == 'security') active @endif" id="security">
                        <div class="panel panel-default">
                            <div class="panel-heading"> Account security </div>
                            <div class="panel-body">
                                <form class="form-horizontal" action="{!! route('account.update.pass') !!}" method="POST">
                                    {{-- CSRF TOKEN --}}
                                    {{ csrf_field() }}

                                    {{-- Password form-group --}}
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password" class="col-md-3 control-label">
                                            Password: <strong class="text-danger"></strong>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" id="password" placeholder="Password" name="password" class="form-control">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Password confirmation form-group --}}
                                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                        <label for="password2" class="col-md-3 control-label">
                                            Confirm password: <strong class="text-danger">*</strong>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" id="password2" placeholder="Repeat password" name="password_confirmation" class="form-control">

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- SUBMIT & RESET button --}}
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- END security tab --}}

                    {{-- API Tab --}}
                    <div role="tabpanel" class="tab-pane fade in @if($tab == 'api') active @endif" id="api">

                        <div class="panel panel-default">
                            <div class="panel-heading"> Create a new key. </div>
                            <div class="panel-body">
                                <form class="form-inline" method="POST" action="{{ route('account.create.api') }}">
                                    {{-- CSRF TOKEN --}}
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="service" placeholder="Service name">
                                    </div>
                                    <button type="submit" class="btn btn-success">
                                        Create token
                                    </button>
                                </form>
                            </div>
                        </div>

                        @if(count($keys) === 0)
                            <div class="alert alert-danger">
                                You don't have any registered services for the API.
                            </div>
                        @else
                            <div class="panel panel-default">
                                <div class="panel-heading">Service(s):</div>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Service: </th>
                                        <th> API key: </th>
                                        <th></th> {{-- Functions --}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($keys as $key)
                                            <tr>
                                                <td>{{ $key->service }}</td>
                                                <td><code>{{ $key->key }}</code></td>
                                                <td>
                                                    <a href="#" style="margin-right: 3px" class="label label-info">
                                                        Info
                                                    </a>
                                                    <a style="margin-right: 3px;" href="{!! route('account.api.logs', ['id' => $key->id]) !!}" class="label label-info">
                                                        Logs
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $key->id }}" class="label label-danger">
                                                        Remove
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>
                    {{-- END API tab --}}

                    {{-- Canned responses tab --}}
                    <div role="tabpanel" class="tab-pane fade in @if($tab == 'canned') active @endif" id="canned">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Canned responses
                                <span class="pull-right">
                                    <span class="label label-success">
                                        Add response
                                    </span>
                                </span>
                            </div>

                            <div class="panel-body">
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>Topic:</th>
                                            <th>Topic group:</th>
                                            <th>Message:</th>
                                            <th>Actions:</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- End canned responses tab --}}

                </div>
                {{-- END tabs --}}

            </div>
            {{-- END content blocks --}}

            {{-- API delete modal--}}
            @foreach($keys as $data)
            <div class="modal fade" id="myModal-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Are u sure u want to delete this key? If you delete connected systems
                            won't recieve any data or perform handlings
                        </div>
                        <div class="modal-footer">
                            <form action="{!! route('account.api.destroy', ['id' => $data->id]) !!}" method="GET">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- End API delete modal --}}
        </div>
    </div>
@endsection