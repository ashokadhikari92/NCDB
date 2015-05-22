<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.1.1-dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables_themeroller.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/is/css/chat.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/is/css/dashboard.css') }}" />



    <script>
        var base_url = "{{URL::to('/')}}";
    </script>


</head>

<body>
<div class="container">


        <div class="col-md-10 maingrid maincontent">
            @yield('content')
        </div>
        <!-- End of Column2 -->



        <!-- Footer -->
        <div id="footer">
            <div class="container credit"></div>
            <div class="container">

                <p class="text-center">
                    <strong><span class="glyphicon glyphicon-copyright-mark"></span>
                        Integrated Solutions Pvt. Ltd. 2014</strong>

                </p>
            </div>
            <!-- end of Footer -->
        </div>
    </div>



<script src="{{ asset('assets/jquery-1.11.1-dev/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/DataTables-1.10.0/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/jquery-form-validator/jquery.form-validator.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-3.1.1-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/is/js/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('assets/is/js/main/main.js') }}"></script>

@yield('js_section')

</body>
</html>