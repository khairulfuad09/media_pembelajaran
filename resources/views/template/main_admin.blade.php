<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- <!-- vendor css --> bootstrap 5 --}}
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="css/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="css/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="css/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="css/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="css/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="css/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('partials.sidebar_admin')

    @yield('container')

    @include('partials.footer_admin')

    <script src="js/admin/main_admin.js"></script>



    <!-- jQuery -->
    <script src="js/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    {{-- <script src="js/admin/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    {{-- <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> --}}
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="js/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="js/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="js/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    {{-- <script src="js/admin/plugins/jqvmap/jquery.vmap.min.js"></script> --}}
    {{-- <script src="js/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
    <!-- jQuery Knob Chart -->
    <script src="js/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    {{-- <script src="js/admin/plugins/moment/moment.min.js"></script> --}}
    <script src="js/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    {{-- <script src="js/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
    <!-- Summernote -->
    <script src="js/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="js/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="js/admin/dist/js/pages/dashboard.js"></script> --}}
</body>

</html>
