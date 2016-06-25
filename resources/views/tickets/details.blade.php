@extends('layouts.app')
@section('content')
<div class="page-header">
 <h2>{{trans('support.ticket')}} #{!! $ticket["id"] !!}</h2>
</div>
<div class="row">

<div class="col-md-8 splitScreen" style="min-height:300px; margin-right: 14px;">
  <div class="row">
<h3>Description</h3>
{!! $ticket["description"] !!}
</div>

<div class="clearfix">&nbsp;</div>

<div class="row">
<h3>Description</h3>
{!! $ticket["description"] !!}
</div>
</div>
<div class="col-md-3">
  <div class="row">
    <dl class="dl-horizontal">
  <dt class="seperate">Status</dt>
  <dd>{!! $ticket->status->name !!}</dd>

  <dt>Priority</dt>
  <dd>{!! $ticket->priority !!}</dd>
</dl>
  </div>
<div class="clearfix">&nbsp;</div>

  <div class="row">
    <h3 class="">Details</h3>
    <ul class="list-unstyled">
        <li>
            <div class="">
                <i class="fa fa-user fa-lg"></i>
            </div>
            {!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}</span>

            </div>
        </li>
        <li>
            <div class="md-list-addon-element">
                <i class=""><span class="fa fa-calendar fa-lg"></span></i>
            </div>
            <div class="md-list-content">
                <span class="md-list-heading">14 Jun 2015</span>
                <span class="uk-text-small uk-text-muted">Created</span>
            </div>
        </li>
        <li>
            <div class="md-list-addon-element">
                <i class=""><span class="fa fa-clock-o fa-lg"></span></i>
            </div>
            <div class="md-list-content">
                <span class="md-list-heading">18 Jun 2015</span>
                <span class="uk-text-small uk-text-muted">Updated</span>
            </div>
        </li>
  </div>
 </div>
 </div>
@endsection
