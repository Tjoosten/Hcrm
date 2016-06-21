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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            font-size: 14px;
            line-height: 1.5;
            color: gray;
            background: #efefef;
            padding: 0;
            overflow-x:hidden;
            }

        html,body {height:100%}

          .full_width .container {max-width:1680px}


  /* main content */
    .row + .row {margin-top:20px}
    #maincontainer {min-height:94%}
    #contentwrapper{width: 100%}
    .main_content{
      padding: 64px 30px 0px;
      background:#fff;
      border-left:1px solid transparent;
      margin-left:10px}
    .main_content li{line-height:22px}
    .main_content .page-header{margin-top: -10px !important; padding-bottom: 20px;}


  /* Bootstrap adjustments */
        
        h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:700;color:inherit;margin:0}
        h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{font-weight:400;color:#999}
        h1{font-size:30px;line-height:36px}
        h2{font-size:24px;line-height:36px}
        h3{font-size:18px;line-height:27px}
        h4,h5,h6{line-height:18px}
        h6{font-size:11px;color:#999;text-transform:uppercase}
        h1 small,h2 small{font-size:18px}
        h3 small,h4{font-size:14px}
        h4 small,h5{font-size:12px}
        
    .full_width .container {max-width:1680px}
    .navbar-fixed-top {min-height:40px}
    .navbar-default{background-color: #45484d; color: #fff;}

    /* header */
    .navbar .brand {
      width: 200px;
      padding-bottom:0;
      padding-top:0;
      font: 100 18px/38px 'PT Sans', sans-serif;
      text-decoration:none;
      color: #fff;
      text-shadow:none
    }
    .navbar .nav > li > a {text-shadow:none;padding:10px 10px 9px}
    .navbar .nav li.dropdown.open > .dropdown-toggle,
    .navbar .nav li.dropdown.active > .dropdown-toggle,
    .navbar .nav li.dropdown.open.active > .dropdown-toggle {background:none; color:#fff }
    .navbar-inner {  background: #45484d; color:#fff}

    /* link */
    .navbar-default .navbar-nav > li > a {color: #e1e1e1; text-shadow:none;padding:10px 10px 9px}
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {color: #fff;}
    .navbar-default .navbar-nav > .active > a, 
    .navbar-default .navbar-nav > .active > a:hover, 
    .navbar-default .navbar-nav > .active > a:focus {color: #fff; background-color: #383b3f;}

    .navbar-default .navbar-nav > .open > a, 
    .navbar-default .navbar-nav > .open > a:hover, 
    .navbar-default .navbar-nav > .open > a:focus { color: #fff; background-color: #383b3f;}    
    
    .dropdown-menu li > a:hover,
    .dropdown-menu li > a:focus,
    .dropdown-menu .active > a,
    .dropdown-menu .active > a:hover,
    .nav-pills > .active > a, .nav-pills > .active > a:hover,
    span.dynatree-active a {
        background: #5c778a !important;
        color: #e1e1e1;
    }

     .form-horizontal .control-label{text-align:left;}
     .form-horizontal .formSep {margin-bottom:12px;padding-bottom:12px;border-bottom:1px dashed #dcdcdc}

     .panel-default { box-shadow: 0 10px 13px 0 $panel-default-color;}
     .panel-default .panel-heading{ background-color: #fff; border-bottom-color: #f1f1f1;}
     .input-group-addon{background-color: #fff; border: 0px;}

     .list-group-item.active, .list-group-item.active:hover {
          background-color: #5c778a;
          border-color: #5c778a; 
          }

     .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active,
     .btn-primary.active, .open .dropdown-toggle.btn-primary { background-color: #5c778a;  border-color: #5c778a; }

     .btn-success, .btn-success:hover, .btn-success:focus, .btn-success:active,
     .btn-success.active, .open .dropdown-toggle.btn-primary { background-color: #3c9363;  border-color: #3c9363; }

/* media queries */

    @media (max-width: 979px) {
      #maincontainer {background: #fff}
      .main_content {margin:0 !important;border:none !important;padding:56px 14px 20px}
      .main_content .row + .row {margin-top:20px}
      .row > [class*="span"],.navbar-fixed-top {margin:0 !important}
      .navbar-fixed-top .container {padding:0 !important}
      .navbar .brand {width:auto;line-height:18px;margin:9px 0 9px 34px}
      .navbar .user_menu .dropdown-menu {margin:10px 10px 0 0;left:0 !important;right:auto}
      .navbar-nav .open .dropdown-menu > li > a, .navbar-nav .open .dropdown-menu .dropdown-header {padding:5px 10px}
      .navbar .user_menu > li > a {padding:0 10px 0 0}
      .navbar-inner {position:relative;z-index:990;min-height:28px}
      .nav-collapse a {color:#fff !important}
      .nav-collapse .dropdown-menu li {padding:0}
      .nav-collapse .dropdown-menu li a {font-weight:400}
      .nav-collapse .sub-menu {display:block;left:0;right:auto;position:relative;visibility:visible}
      .nav-collapse .caret-right {display:none}
      .navbar-nav > li {display:inline-block;vertical-align:bottom;float: none}

    }
    
    @media (max-width: 767px) {
      .main_content {padding-top:20px}
      .navbar-fixed-top {position:static}
      .navbar .nav.pull-right {float:left !important;clear:both;margin:6px 10px 10px}
      .navbar-nav .open .dropdown-menu {background:#fff;border:1px solid rgba(0, 0, 0, 0.15);position:absolute;-webkit-box-shadow:0 6px 12px rgba(0, 0, 0, 0.176);-moz-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);float:left}
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {color:#fff}
      .row > [class*="span"] + [class*="span"] {margin-top:20px}
      .row input[class*="span"],.row textarea[class*="span"],.row select[class*="span"] {width:80%}

    }
       
    @media (min-width: 1681px) {
      body {max-width:1680px;margin:0 auto !important;}
      header .container-fluid, header .container {max-width:1680px;margin:30 auto}
      #maincontainer {border-right:1px solid #ccc;border-left:1px solid #ccc; background-color: #fff;}
      .main_content {border-left:none}
    }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
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
                       <li><a href="#">{{ trans('orders.products') }}</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('support.index') }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                       <li><a href="{!! route('tickets.index') !!}">{{ trans('support.tickets') }}</a></li>
                       <li><a href="#">{{ trans('support.kb') }}</a></li>
                      </ul>
                    </li>
                    @endif
                </ul>
              <ul class="nav navbar-nav pull-right">
              @if (Auth::guest())
                     
                    @else
                       <li><a href="{!! url('setup') !!}" data-toggle="tooltip" data-placement="bottom" title="Setup"><span class="fa fa-wrench"></span></a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li>
                                    <a href="{{ route('account.info') }}">
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
