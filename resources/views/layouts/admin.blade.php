<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WKC |  @yield('title', $page_title ?? '')</title>
  <link rel="icon" href="/images/ATX.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}"> --}}
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  $( function() {
    $( "#datepicker" ).datepicker({orientation: 'bottom'})
.on('changeDate', function(ev){
    $('#datepicker').datepicker('hide');
});
  } );
  $( function() {
    $( "#datepicker2" ).datepicker({orientation: 'bottom'})
.on('changeDate', function(ev){
    $('#datepicker2').datepicker('hide');
});
  } );
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <style>
        .active{
            background-color: #f04d23 !important;
            color: #fff;
        }
        .active-tree{
            background-color: #3c497b !important;
            color: #fff;
        }
    </style>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/images/wkc_logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WKC Receiver Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/user-avatar.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Vamsi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="scan_qr" class="nav-link @yield('title', $one_class_active ?? '')">
                  <i class="nav-icon fas fa-qrcode"></i>
                  <p>
                    Scan
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="dashboard" class="nav-link @yield('title', $two_class_active ?? '')">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('title', $three_class_active ?? '')">
                <i class="nav-icon fas fa-calculator"></i>
                <p>
                Audit
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @yield('title', $three_one_drop_active ?? '');">

                <li class="nav-item">
                    <a href="inventory_count" class="nav-link @yield('title', $three_two_class_active ?? '')">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Inventory Count</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="count_result" class="nav-link @yield('title', $three_three_class_active ?? '')">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Count Result</p>
                    </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link @yield('title', $four_class_active ?? '')">
                <i class="nav-icon fas fa-id-badge"></i>
                <p>
                Admin
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: @yield('title', $four_one_drop_active ?? '');">
                <li class="nav-item">
                    <a href="portal_users" class="nav-link @yield('title', $four_one_class_active ?? '')">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Portal Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="approve_user" class="nav-link @yield('title', $four_two_class_active ?? '')">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Approve User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="requesters" class="nav-link @yield('title', $four_three_class_active ?? '')"">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Requesters</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="approval_team" class="nav-link @yield('title', $four_four_class_active ?? '')"">
                        <i class="nav-icon fas fa-check-square"></i>
                        <p>Disposal Approvals Team</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="adjust_inventory" class="nav-link @yield('title', $four_five_class_active ?? '')">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Adjust Inventory</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="request" class="nav-link @yield('title', $fivee_class_active ?? '')">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Request Inventory
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="make_entry" class="nav-link @yield('title', $five_class_active ?? '')">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Make An Entry
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="production_requests" class="nav-link @yield('title', $fiveee_class_active ?? '')">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Production Requests
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('title', $six_class_active ?? '')">
                <i class="nav-icon fas fa-sitemap"></i>
                <p>
                JF Codes
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display:  @yield('title', $six_one_drop_active ?? '');">
            <li class="nav-item">
            <a href="jfcode_list" class="nav-link @yield('title', $six_one_class_active ?? '')">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="jfcode_add" class="nav-link @yield('title', $six_two_class_active ?? '')">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
            </a>
            </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="inventory_data" class="nav-link @yield('title', $eight_class_active ?? '')">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Inventory Data
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="history" class="nav-link @yield('title', $seven_class_active ?? '')">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Activities
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Vamsi.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- bootstrap datepicker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
</body>
</html>
