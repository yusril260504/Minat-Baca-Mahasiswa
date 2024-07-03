<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MinatBaca</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">

  <!-- Custom styles -->
  <style>
    /* Sidebar */
    .main-sidebar {
      background-color: #343a40; /* Background color */
    }
    .brand-link {
      border-bottom: 1px solid #495057; /* Bottom border color */
    }
    .brand-text {
      color: #17a2b8 !important; /* Logo text color */
    }
    .nav-sidebar .nav-link {
      color: #ced4da; /* Sidebar item text color */
    }
    .nav-sidebar .nav-link.active {
      background-color: #17a2b8; /* Active item background color */
      border-left: 3px solid #fff; /* Active item left border color */
    }
    .nav-sidebar .nav-link.active > .nav-icon {
      color: #fff; /* Active item icon color */
    }

    /* Content */
    .content-wrapper {
      background-color: #f8f9fa; /* Content background color */
    }

    /* Preloader */
    .preloader {
      background-color: #17a2b8; /* Preloader background color */
    }
    .animation__shake {
      filter: hue-rotate(180deg); /* Color animation */
    }

    /* Additional styling */
    .brand-link img {
      opacity: .8;
      max-height: 35px;
      margin-right: 10px;
    }

    /* Add some padding to the content */
    .content {
      padding: 20px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/logo1.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('img/logo1.png') }}" alt="Minat Baca Logo">
      <span class="brand-text font-weight-light">Minat Baca Mahasiswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('beranda') }}" class="nav-link {{ Request::is('beranda') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-key"></i>
              <p>APIKEY</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('dokumentasi') }}" class="nav-link {{ Request::is('dokumentasi') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Dokumentasi API</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE-3.2.0/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminLTE-3.2.0/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
