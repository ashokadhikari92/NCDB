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
     <script src="{{asset('assets/js/angular.min.js')}}"></script>
    <title></title>
</head>
<body>

        @include('.header')

        <div class="page-content">
           <div class="row">
                @include('.side_menu')
                @yield('content')
            </div>
        </div>
        @include('.footer')
        @yield('js_section')

</body>
</html>