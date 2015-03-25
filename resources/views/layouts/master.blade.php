<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/DT_bootstrap.css')}}" rel="stylesheet">
    {{--<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    <script src="{{asset('assets/js/jquery-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/DT_bootstrap.js')}}"></script>
    <title></title>
</head>
<body>

        @include('layouts.header')

        <div class="page-content">
           <div class="row">
                @include('layouts.side_menu')
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
        @yield('js_section')

</body>
</html>