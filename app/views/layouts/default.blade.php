<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap-3.3.0/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap-3.3.0/css/bootstrap-theme-darkly.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap-3.3.0/js/bootstrap.min.js') }}">

        <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome-4.2.0/css/font-awesome.min.css') }}">

         <link rel="stylesheet" href="{{ URL::asset('assets/js/jquery-ui-1.11.2.custom/jquery-ui.min.css') }}">
         <link rel="stylesheet" href="{{ URL::asset('assets/js/jquery-ui-1.11.2.custom/jquery-ui.structure.min.css') }}">
         <link rel="stylesheet" href="{{ URL::asset('assets/js/jquery-ui-1.11.2.custom/jquery-ui.theme.min.css') }}">

        <title>@yield('title')</title>
        @yield('header')
    </head>
    <body>
       @yield('content')

       @yield('footer')

       <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui-1.11.2.custom/jquery-1.11.1.min.js') }}"></script>
       <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui-1.11.2.custom/jquery-ui.min.js') }}"></script>
    </body>
</html>