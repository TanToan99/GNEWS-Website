<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DSC-UoG (DaNang Campus)</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link href="{{ mix('/css/home.css') }}" rel="stylesheet">
    @yield('custom-js')
</head>

<body class="index-page sidebar-collapse">
    @include('shared/navbar')
    @yield('header')
    <div class="main main-raised">
        @yield('content')
    </div>
    <!--   Footer   -->
    @include('shared/footer')
    <!--   Core JS Files   -->
    <script src="../js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../js/core/popper.min.js" type="text/javascript"></script>
    <script src="../js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../js/material-kit.js?v=2.0.7" type="text/javascript"></script>
    @yield('custom-js')
</body>

</html>