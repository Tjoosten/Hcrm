@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="page-header">
                <h2> Create a new department </h2>
            </div>

            {{-- Form  --}}
            <form action="{{ route('department.store') }}" method="POST" class="form-horizontal">
                {{-- CSRF Token --}}
                {{ csrf_field() }}

                {{-- Departmant name form-group.--}}
                <div class="form-group formSep {{ $errors->has('name') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="name">
                        Department name: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Department name" class="form-control"/>

                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Department managers form-group. --}}
                <div class="form-group formSep {{ $errors->has('managers') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="managers">
                        Department managers: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <select multiple="multiple" name="managers" class="form-control" id="managers[]">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('managers'))
                            <span class="help-block">
                                <strong> {{ $errors->first('managers') }} </strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Department users form-group --}}
                <div class="form-group formSep {{ $errors->has('users') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="users">
                        Department users: <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <select multiple="multiple" class="form-control" name="users" id="users[]">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->has('users'))
                            <span class="help-block">
                                <strong> {{ $errors->first('users') }} </strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Department description -> text area --}}
                <div class="form-group formSep {{ $errors->has('description') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="description">
                        Department description: <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control" placeholder="Department description"></textarea>

                        @if($errors->has('description'))
                            <span class="help-block">
                            <strong> {{ $errors->first('description') }} </strong>
                        </span>
                        @endif
                    </div>
                </div>

                {{-- Submit and reset button --}}
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary" value="Send">
                        <input type="reset" class="btn btn-danger" value="Reset form">
                    </div>
                </div>

            </form>
            {{-- End form --}}
        </div>
    </div>
@endsection