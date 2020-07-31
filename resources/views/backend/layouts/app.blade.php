<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blogs </title>

    <!-- Bootstrap -->
     <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
  <link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
          <!-- Navigation-->
    @include('backend.inc.sidebar')
    @include('backend.inc.topnavbar')
    <!-- /Navigation-->

    <div class="content-wrapper">
        @yield('content')

<!-- /.container-fluid-->
</div>
<!-- Footer -->
@include('backend.inc.footer')
</div>
</div>

 <!-- Bootstrap -->
 <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
 <!-- FastClick -->
 <script src="{{ asset('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
 <!-- NProgress -->
 <script src="{{ asset('backend/vendors/nprogress/nprogress.js')}}"></script>
 <!-- Chart.js -->
 <script src="{{ asset('backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
 <!-- gauge.js -->
 <script src="{{ asset('backend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
 <!-- bootstrap-progressbar -->
 {{-- <script src=" {{ asset('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script> --}}
 <!-- iCheck -->
 <script src="{{ asset('backend/vendors/iCheck/icheck.min.js')}}"></script>
 <!-- Skycons -->
 <script src="{{ asset('backend/vendors/skycons/skycons.js')}}"></script>
 <!-- Flot -->
 <script src="{{ asset('backend/vendors/Flot/jquery.flot.js')}}"></script>
 <script src="{{ asset('backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
 <script src="{{ asset('backend/vendors/Flot/jquery.flot.time.js')}}"></script>
 <script src="{{ asset('backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
 <script src="{{ asset('backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
 <!-- Flot plugins -->
 <script src="{{ asset('backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
 <script src="{{ asset('backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
 <script src="{{ asset('backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
 <!-- DateJS -->
 <script src="{{ asset('backend/vendors/DateJS/build/date.js')}}"></script>
 <!-- JQVMap -->
 <script src="{{ asset('backend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
 <script src="{{ asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
 <script src="{{ asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
 <!-- bootstrap-daterangepicker -->
 <script src="{{ asset('backend/vendors/moment/min/moment.min.js')}}"></script>
 <script src="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 <!-- Custom Theme Scripts -->
 <script src="{{ asset('backend/build/js/custom.min.js')}}"></script>
 <script src="{{ asset('backend/vendors/progress.js')}}"></script>

 <!-- Flot -->

  <!-- Datatables -->
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{ asset('backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
</body>

</html>
