<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hosting CRM</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            font-size: 14px;
            line-height: 1.5;
            color: gray;
            }
                       
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
        .navbar-fixed-top {margin:0;padding:0;min-height:50px}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">WebHosting CRM</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
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
                       <li><a href="#">{{ trans('customers.register') }}</a></li>
                       <li><a href="#">{{ trans('customers.search') }}</a></li>
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
                       <li><a href="#">{{ trans('support.tickets') }}</a></li>
                       <li><a href="#">{{ trans('support.kb') }}</a></li>
                      </ul>
                    </li>
                    @endif
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                     
                    @else
                       <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Setup"><span class="fa fa-wrench"></span></a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
