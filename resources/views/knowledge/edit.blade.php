@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-md-12">
            <div class="page-header">
                <h2>Update question.</h2>
            </div>

            <form action="{{ route('knowledge.update', ['id' => $question->id]) }}" method="POST" class="form-horizontal">
                {{-- CSRF field --}}
                {{ csrf_field() }}

                {{-- Question form-group --}}
                <div class="form-group formSep {{ $errors->has('question') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="question">
                        Question: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input value="{{ $question->question }}" type="text" id="question" name="question" placeholder="Question" class="form-control"/>

                        @if($errors->has('question'))
                            <span class="help-block">
                                <strong>{{ $errors->first('question') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Answer form-group --}}
                <div class="form-group formSep {{ $errors->has('answer') ? 'has-error': '' }}">
                    <label class="col-sm-3 control-label" for="answer">
                        Answer: <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="10" name="answer" id="answer" placeholder="Answer">{{ $question->answer }}</textarea>

                        @if($errors->has('answer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('answer') }}</strong>
                            </span>
                        @endif
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
@endsection