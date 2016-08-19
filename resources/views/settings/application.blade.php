@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Flash message --}}
        @if(Session::has('message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        {{ Session::get('message') }}
                    </div>
                </div>
            </div>
        @endif
        {{-- End flash message --}}

        {{-- Content --}}
        <div class="row">
            {{-- Sidenav --}}
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-cogs"></span> Settings
                    </div>

                    <div class="list-group">
                        <a href="{{ route('settings.backup.get') }}" class="list-group-item">
                            Backup Settings
                        </a>

                        <a href="{{ route('settings.application') }}" class="list-group-item">
                            Application Settings
                        </a>
                    </div>
                </div>
            </div>
            {{-- End sidenav --}}

            {{-- Main content --}}
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Application settings</div>

                    <div class="panel-body">
                        <form action="{{ route('settings.application.post') }}" method="POST" class="form-horizontal">
                            {{-- CSRF Token --}}
                            {{ csrf_field() }}

                            {{-- Database connection form-group --}}
                            <div class="form-group {{ $errors->has('tax') ? ' has-error' : '' }}">
                                <label for="database" class="col-sm-3 control-label">Tax rate:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Tax rate" value="{{ $tax }}">
                                    <span class="help-block">The tax rate for the products.</span>
                                </div>
                            </div>

                            {{-- SUbmit and rest form-group --}}
                            <div class="form-group {{ $errors->has('keepAllBackupsYearly') ? ' has-error' : '' }}">
                                <label for="#" class="control-label col-md-3"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End main content --}}
        </div>
        {{-- END content --}}
    </div>
@endsection