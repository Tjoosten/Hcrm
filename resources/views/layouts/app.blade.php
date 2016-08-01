<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Hosting CRM</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.loadmask.css')}}" >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>

    <script src="{{ asset('js/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/select2/select2.js') }}"></script>
    <script src="{{ asset('js/jquery.loadmask.js')}}"></script>
    <script src="{{ asset('js/bootstrap-remote-tabs.js')}}"></script>

    <script src="{{ asset('js/jquery.chained.js')}}"></script>
</head>
<body class="full_width" id="app-layout">
<div id="maincontainer" class="clearfix">
           <header>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="brand pull-left" href="{{url('')}}">Hosting CRM <small>v1.0</small></a>
              <ul class="nav navbar-nav" id="mobile-nav">
                @if (Auth::guest())

                @else
                <li><a href="{{ url('/home') }}">Home</a></li>
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('billing.index') }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                       <li><a href="#">{{ trans('billing.listTransactions') }}</a></li>
                       <li><a href="#">{{ trans('billing.overdueInvoices') }}</a></li>
                       <li><a href="#">{{ trans('billing.quotes') }}</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('customers.index') }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                       <li><a href="{{ route('customer.create') }}">{{ trans('customers.register') }}</a></li>
                       <li><a href="{{url('customers')}}">{{ trans('customers.search') }}</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('orders.index') }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                       <li><a href="#">{{ trans('orders.register') }}</a></li>
                       <li><a href="#">{{ trans('orders.list') }}</a></li>

                       <li><a href="#">{{ trans('orders.productGroups') }}</a></li>
                       <li><a href="{{ route('products.index')}}">{{ trans('orders.products') }}</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('support.index') }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                       <li><a href="{!! route('tickets.index') !!}">{{ trans('support.tickets') }}</a></li>
                       <li><a href="{!! route('knowledge.index') !!}">{{ trans('support.kb') }}</a></li>
                      </ul>
                    </li>
                    @endif
                </ul>
              <ul class="nav navbar-nav pull-right">
              @if (Auth::guest())

                    @else
                       <li>
                           <a href="{!! url('setup') !!}" data-toggle="tooltip" data-placement="bottom" title="Setup">
                               <span class="fa fa-wrench"></span>
                           </a>
                       </li>
                       <li class="dropdown dropdown-notifications">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i data-count="{!! Auth::user()->countNotificationsNotRead() !!}" class="fa fa-bell notification-icon"></i>
                           </a>

                           <div class="dropdown-container dropdown-menu-right">
                               <div class="dropdown-toolbar">
                                   <div class="dropdown-toolbar-actions">
                                       <a href="#">{{ trans('notifications.markAll') }}</a>
                                   </div>
                                   <h3 class="dropdown-toolbar-title">
                                     {{ trans('notifications.title', ['count' => Auth::user()->countNotificationsNotRead()]) }}</h3>
                               </div>{{-- /dropdown-toolbar --}}

                               <ul class="dropdown-menu">
                                   <li class="notification">
                                     <div class="media">
                                           <div class="media-body">
                                             {!! Auth::user()->readAllNotifications()!!}
                                           </div>
                                       </div>
                                   </li>
                               </ul>

                          <div class="dropdown-footer text-center">
                           <a href="{{ url('notifications') }}">{{ trans('notifications.viewAll') }}</a>
                          </div>{{-- /dropdown-footer --}}

                           </div>{{-- /dropdown-container --}}
                         </li>{{-- /dropdown --}}

                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li>
                                    <a href="{{ route('account.info', ['tab' => 'info']) }}">
                                        <span class="fa fa-btn fa-cogs"></span> Account settings.
                                    </a>
                                </li>
                                </li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
              </ul>
            </div>
          </div>
        </nav>
     </header>


    <div id="contentwrapper">
      <div class="main_content">
        @yield('content')
     </div>
    </div>
    </div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
