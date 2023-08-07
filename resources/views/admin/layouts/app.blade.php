<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@stack('title', "Admin: Handmade In India")</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('admin/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('admin/assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('admin/assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />

    @stack('style')
</head>

<body>
    <div id="wrapper">
        @include('admin.layouts.top-navbar')
        @include('admin.layouts.side-navbar')
        <div id="page-wrapper">
            <div id="page-inner">
                @yield('content')
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('admin/assets/js/jquery.metisMenu.js') }}"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="{{ asset('admin/assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/morris/morris.js') }}"></script>
    <!-- CUSTOM SCRIPTS -->
    @stack('script')
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

</body>

</html>
