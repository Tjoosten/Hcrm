@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- menu --}}
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="fa fa-cogs"></span> Settings</div>
                    <div class="list-group">
                        <a href="#info" class="active list-group-item" aria-controls="tab" role="tab" data-toggle="tab">
                            Information
                        </a>
                        <a href="#sec" class="list-group-item" aria-controls="sec" role="tab" data-toggle="tab">
                            Security
                        </a>
                        <a href="#api" class="list-group-item" aria-controls="api" role="tab" data-toggle="tab">
                            API
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
                    <div role="tabpanel" class="tab-pane fade in active" id="info">
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
                    <div role="tabpanel" class="tab-pane fadein" id="sec">
                        <div class="panel panel-default">
                            <div class="panel-heading"> Account security </div>
                            <div class="panel-body">
                                <form class="form-horizontal" action="{!! route('account.update.pass') !!}" method="POST"></form>
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
                    <div role="tabpanel" class="tab-pane fade in" id="api">
                        <div class="panel panel-default">
                            <div class="panel-heading"> Account api keys. </div>
                            <div class="panel panel-body">
                                <p> Coming soon </p>
                            </div>
                        </div>
                    </div>
                    {{-- END API tab --}}

                </div>
                {{-- END tabs --}}

            </div>
            {{-- END content blocks --}}
        </div>
    </div>
@endsection