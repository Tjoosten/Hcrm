@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">
                    Search department
                </a>

                <a class="btn btn-default">New Department.</a>

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

            </div>

        </div>
    </div>
@endsection