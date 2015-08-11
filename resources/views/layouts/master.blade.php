<!doctype html>
<html class="no-js">
 <head>
 <meta charset="utf-8">
 {{--<title>@yield('title', 'default title')</title>--}}
 <title>Easymanage | @yield('title')</title>

 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="width=device-width">
@yield('meta')


 <!-- stylesheets -->
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
 <link rel="script" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" />

 {{-- scripts--}}

 <link rel="script" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js" />
 <link rel="script" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js" />

@yield('styles')

 <script>
 var URL = {
 'base' : '{{ URL::to('/') }}',
 'current' : '{{ URL::current() }}',
 'full' : '{{ URL::full() }}'
 };
 </script>
 </head>
 <body>


@yield('navbar.prepend')
    {{--@include('app.navbar')--}}
@yield('navbar.append')


 <div id="main">
 <div class="container">

@yield('main.prepend')

 <div id="content">
    @yield('content')
 </div><!-- ./ #content -->

 <div id="sidebar">
@yield('sidebar')
 </div><!-- ./ #sidebar -->

@yield('main.append')

 </div>
 </div><!-- ./ #main -->


@yield('footer.prepend')
{{--@include('app.footer')--}}
@yield('footer.append')


 <!-- scripts -->



@yield('scripts')

{!! HTML::script('public/js/app.js') !!}

 {{--<script>--}}
 {{--var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];--}}
 {{--(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];--}}
{{--g.src='//www.google-analytics.com/ga.js';--}}
{{--s.parentNode.insertBefore(g,s)}(document,'script'));--}}
 {{--</script>--}}

 </body>
</html>
