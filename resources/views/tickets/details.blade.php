@extends('layouts.app')
@section('content')
<div class="page-header">
 <h2>{{trans('support.ticket')}} #{!! $ticket["id"] !!}</h2>
</div>

<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>

<div class="row">
  <div class="col-md-offset-1 col-lg-10">
    <div class="btn-toolbar" role="toolbar" aria-label="...">
     <div class="btn-group" role="group" aria-label="...">
        <button type="button" data-toggle="modal" data-target="#reply" class="btn btn-default">{{ trans('tickets.reply') }}</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#responses" data-backdrop="static">{{ trans('tickets.responses') }}</button>
     </div>
     <div class="btn-group" role="group" aria-label="...">
       <button type="button" class="btn btn-default" data-toggle="modal" data-target="#merge" data-backdrop="static">{{ trans('tickets.merge') }}</button>
     </div>
        <div class="btn-group" role="group" aria-label="...">
     @if($ticket['is_closed'] === 0)
                <a href="{!! route('tickets.destroy', ['id' => $ticket['id']]) !!}" class="btn btn-danger">{{ trans('tickets.close') }}</a>
         @else
                <a href="{{ route('tickets.reopen', ['id' => $ticket['id']])  }}" class="btn btn-success">Reopen</a>
        @endif
        </div>
    </div>
  </div>
 </div>

<div class="row">
 <div class="col-md-offset-1 col-lg-10">
   <div class="panel panel-default">
    <div class="panel-heading">General details</div>
     <div class="panel-body">
       <div class="row">
        <div class="col-md-6">
          <dl class="dl-horizontal">
          <dt>{{ trans('tickets.number') }}</dt>
          <dd>#{!! $ticket->id !!}</dd>

          <dt>{{ trans('tickets.type') }}</dt>
          <dd><a href="#" id="ticketType" data-pk="{!! $ticket->id !!}" data-name="type" data-url="{!! url('tickets/quickUpdateTicket', $ticket->id) !!}">{!! $ticket->type !!}</a></dd>

          <dt>{{ trans('tickets.subject') }}</dt>
          <dd><a href="#" id="ticketSubject" data-type="textarea" data-name="subject" data-pk="{!! $ticket->id !!}" data-url="{!! url('tickets/quickUpdateTicket', $ticket->id) !!}">{!! $ticket->subject !!}</a></dd>

          <dt>{{ trans('tickets.status') }}</dt>
          <dd>{!! $ticket->status->name !!}</dd>
        </dl>
        </div>

        <div class="col-md-6">
            <dl class="dl-horizontal">
            <dt>{{ trans('tickets.requester') }}</dt>
            <dd><a href="{{url('customers/details')}}/{!! $ticket->customer->id !!}">{!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}</a></dd>

            <dt>{{ trans('tickets.assigned') }}</dt>
            <dd>
                <a href="#" id="ticketType" data-type="select" data-pk="1" data-url="/post" data-title="Enter username">
                   {{ $ticket->assigned->name }}
                </a>
            </dd>

            <dt>{{ trans('tickets.created') }}</dt>
            <dd>{!! $ticket->created_at !!}</dd>

            <dt>{{ trans('tickets.updated') }}</dt>
            <dd>{!! $ticket->updated_at !!}</dd>

          </dl>
        </div>
        </div>
 </div>
 </div>
</div>
</div>

<div class="row">
  <div class="col-md-offset-1 col-lg-10">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <p>{!! $ticket->description !!}</p>
      </div>
    </div>
  </div>
        @foreach($ticket->comments as $reply)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           {!! $reply["user"]["name"] !!} {!! $reply["customer"]["name"] !!}
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      {!! $reply['comment'] !!}
                    </div>
                </div>
            </div>

        @endforeach
 </div>
</div>
</div>

<!-- Modal -->
<div class="modal" id="responses" tabindex="-1" role="dialog" aria-labelledby="responsesLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="responsesLabel">Canned responses</h4>
      </div>
      <form class="form-horizontal">
      <div class="modal-body">
  <div class="form-group">
    <label for="topicGroup" class="col-sm-3 control-label">Topic group</label>
    <div class="col-sm-9">
      <select name="topicGroup" id="topicGroup" class="form-control">
       <option value=""></option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Topic</label>
    <div class="col-sm-9">
      <select name="topic" id="topic" class="form-control">
       <option value=""></option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="message" class="col-sm-3 control-label">Message</label>
    <div class="col-sm-9">
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>


<div class="modal" id="merge" tabindex="-1" role="dialog" aria-labelledby="mergeLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mergeLabel">Merge ticket</h4>
      </div>
      <div class="modal-body">
  <div class="form-group">
    <label for="topicGroup" class="col-sm-3 control-label">Topic group</label>
    <div class="col-sm-9">
     <input type="text" name="merge_id" placeholder="Fill in the ticket number that you want to this ticket."  class="form-control">
    </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="reply" tabindex="-1" role="dialog" aria-labelledby="reply">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="mergeLabel">Reply to this ticket</h4>
            </div>
            <form class="form-horizontal" action="{{ url('comment/' . $ticket['id']) }}" method="POST">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <textarea placeholder="Comment" class="form-control" name="comment" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </form>
                </div>
            </form>

        </div>
    </div>
</div>



<script>
$(document).ready(function() {
  $.fn.editable.defaults.mode = 'inline';
  $.fn.editable.defaults.params = function (params) {
    params._token = $("#_token").data("token");
    return params;
};
    $('#ticketType').editable({
    type: 'select',
            source: [
                {value: 'Administration', text: 'Administration'},
                {value: 'Sales', text: 'Sales'},
                {value: 'Support', text: 'Support'}
            ]
  });
    $('#ticketSubject').editable();
});
</script>
@endsection
