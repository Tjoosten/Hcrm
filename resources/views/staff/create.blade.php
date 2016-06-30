@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a new staff member</div>

                    <div class="panel-body">
                        <form action="{{ route('staff.store') }}" method="POST" class="form-horizontal">
                            {{-- CSRF FIELD --}}
                            {{ csrf_field() }}

                            {{-- Name form-group --}}
                            <div class="form-group formSep {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">
                                    Name <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Email form-group --}}
                            <div class="form-group formSep {{ $errors->has('email') ? 'has-error': '' }}">^
                                <label for="email" class="col-md-3 control-label">
                                    Email address: <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Department form-group --}}
                            <div class="form-group formSep {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="departments" class="col-md-3 control-label">
                                    Departments: <span class="text-danger">*</span>
                                </label>

                                <div class="col-md-6">
                                    <select multiple="multiple" class="form-control" name="departments[]" id="departments">
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Submit & Reset form-group --}}
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <input type="submit" class="btn btn-primary" value="Send">
                                    <input type="reset" class="btn btn-danger" value="Reset form">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection