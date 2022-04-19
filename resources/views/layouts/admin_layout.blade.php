<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!--<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">-->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">-->
  <!-- JQVMap -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">-->
  <!-- summernote -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link">
    
      <span class="brand-text font-weight-light">Zaviyar Enterprises</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <img src='https://purepng.com/public/uploads/large/purepng.com-fuel-petrolfuelpetrolgasolingasjerrycan-1701528461473lf5ct.png'>
        <div class="info">
            
          <a href="#" class="d-block">{{session('name');}}</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="/users/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/users/purchase" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Purchase
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/users/sale" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Sale
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/users/products" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Products
               
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Statement
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/users/SaleStatement" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale statement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/PurchaseStatement" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase statement</p>
                </a>
              </li>
              
            </ul>
          </li>
<li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Logout
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title') </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      @if(Session::has('data'))
<p class="alert alert-{{ Session::get('class') }}">{{ Session::get('data') }}</p>
@endif
    <!-- /.content-header -->
@section('mainbody')
@show
  
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!--<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<!--<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>-->
<!-- Sparkline -->
<!--<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>-->
<!-- JQVMap -->
<!--<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>-->
<!-- jQuery Knob Chart -->
<!--<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>-->
<!-- daterangepicker -->
<!--<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>-->
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<!--<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>-->
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!--<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>-->
<!--<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>-->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
       "paging": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@section('footer')
@show
</body>
</html>