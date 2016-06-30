@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="page-header">
                    <h2>Update department.</h2>
                </div>

                {{-- Form --}}
                <form class="form-horizontal" action="{{ route('department.update', ['id' => $department->id]) }}" method="POST">
                    {{-- CSRF TOKEN --}}
                    {{ csrf_field() }}

                    {{-- Department name form-group --}}
                    <div class="form-group formSep {{ $errors->has('name') ? 'has-error': '' }}">
                        <label class="col-sm-3 control-label" for="name">
                            Department name: <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-9">
                            <input value="{{ $department->name }}" type="text" id="name" name="name" placeholder="Department name" class="form-control"/>

                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Department users form-group  --}}
                    <div class="form-group formSep {{ $errors->has('users') ? 'has-error': '' }}">
                        <label class="col-sm-3 control-label" for="users">
                            Department users: <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-9">
                            <select multiple="multiple" class="form-control" name="users[]" id="users[]">
                                @foreach($department->users as $nameRecord)
                                    @foreach($users as $nameDepartment)
                                        <option value="{{ $nameDepartment->id }}" @if($nameDepartment->id === $nameRecord->id) selected @endif>
                                            {{ $nameDepartment->name }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>

                            @if($errors->has('users'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('users') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Department managers form-group --}}
                    <div class="form-group formSep {{ $errors->has('managers') ? 'has-error': '' }}">
                        <label class="col-sm-3 control-label" for="managers">
                            Department managers: <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-9">
                            <select multiple="multiple" class="form-control" name="managers[]" id="managers[]">
                                @foreach($department->managers as $manager)
                                    @foreach($users as $value)
                                        <option value="{{ $value->id }}" @if($value->id === $manager->id) selected @endif>{{ $value->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>

                            @if($errors->has('managers'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('managers') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Department description form-group --}}
                    <div class="form-group formSep {{ $errors->has('description') ? 'has-error': '' }}">
                        <label class="col-sm-3 control-label" for="description">
                            Department description: <span class="text-danger">*</span>
                        </label>

                        <div class="col-md-9">
                            <textarea rows="6" name="description" class="form-control" placeholder="Department description">{{ $department->description }}</textarea>

                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong> {{ $errors->first('description') }} </strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Reset & submit form-group --}}
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
    </div>
@endsection