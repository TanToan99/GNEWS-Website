<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>DSC-UoG (DaNang Campus)</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="css/material-kit.css?v=2.0.7" rel="stylesheet"/>
</head>

<body class="index-page sidebar-collapse">
    @include('shared/navbar')
    
    <div class="main main-raised">
        @yield('content')
    </div>
    <!--   Footer   -->
    @include('shared/footer')
    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="js/plugins/moment.min.js"></script>
    <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>
</html>