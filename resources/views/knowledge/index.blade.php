@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                <a class="btn btn-default" role="button" data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="collapseExample">
                    Search items
                </a>

                <a href="{{ route('knowledge.register') }}" class="btn btn-default">New item.</a>

                <div class="clearfix">&nbsp;</div>

                <div class="collapse" id="search">
                    <div class="well">
                        <form class="form-inline" method="GET" action="{{ route('knowledge.search') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="term" class="form-control" placeholder="Knowledge item">
                            </div>
                            <button type="submit" class="btn btn-danger">
                                <span class="fa fa-search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                @if(count($questions) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading"> Knowledge Items </div>

                        <div class="panel-body">
                            <table class="table table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question:</th>
                                        <th>Answer:</th>
                                        <th>Created At:</th>
                                        <th></th> {{-- Options --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($questions as $question)
                                        <tr>
                                            <td><code>#Q{!! $question->id !!}</code></td>
                                            <td> {{ substr($question->question, 0, 25)  }}... </td>
                                            <td> {{ substr($question->answer, 0, 25) }}... </td>
                                            <td> {{ $question->created_at }} </td>

                                            <td>
                                                <a href="{!! route('knowledge.show', ['id' => $question->id]) !!}" class="label label-default">Show</a>
                                                <a href="{!! route('knowledge.edit', ['id' => $question->id]) !!}" class="label label-warning">Edit</a>
                                                <a href="{!! route('knowledge.destroy', ['id' => $question->id]) !!}" class="label label-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- Pagination --}}
                            {{ $questions->render() }}
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger">
                        <p>No questions or topics were found.</p>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection