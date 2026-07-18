<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Admin Panel')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
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
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">
      <!-- Navbar -->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <!-- Sidebar toggle -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <span class="nav-link">
                Admin Panel
            </span>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- User Dropdown -->
        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" 
               href="#" 
               data-toggle="dropdown">

                <i class="fas fa-user-circle"></i>
                {{ Auth::user()->name }}

            </a>


            <div class="dropdown-menu dropdown-menu-right">


                <!-- Profile -->
                <a href="{{ route('profile.edit') }}" 
                   class="dropdown-item">

                    <i class="fas fa-user-cog mr-2"></i>
                    Profile

                </a>


                <div class="dropdown-divider"></div>


                <!-- Logout -->

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button type="submit" class="dropdown-item">

                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout

                    </button>

                </form>


            </div>

        </li>


    </ul>

</nav>
<!-- /.navbar -->
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">
            Portfolio Admin
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
          @if($personalDetail && $personalDetail->profile_image)

              <img src="{{ asset('storage/profile/'.$personalDetail->profile_image) }}"
                  class="img-circle elevation-2"
                  alt="Profile Image">

          @else

              <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                  class="img-circle elevation-2"
                  alt="Default Image">

          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $personalDetail->name ?? 'Admin' }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <!-- Personal Details -->
          <li class="nav-item">
              <a href="{{ route('admin.personalDetails.index') }}"
                  class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                      Personal Details
                  </p>
              </a>
          </li>

          <!-- Projects -->
          <li class="nav-item">
            <a href="{{ route('admin.projects.index') }}"
                class="nav-link">
                <i class="nav-icon fas fa-project-diagram"></i>
                <p>
                    Projects
                </p>
            </a>
          </li>
          
          <!-- Skills -->
          <li class="nav-item">
              <a href="{{ route('admin.skills.index') }}"
                  class="nav-link">
                  <i class="nav-icon fas fa-code"></i>
                  <p>
                      Skills
                  </p>
              </a>
          </li>

          <!-- Skill Categories -->
          <li class="nav-item">
              <a href="{{ route('admin.skill-categories.index') }}"
                  class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>
                      Skill Categories
                  </p>
              </a>
          </li>

          <!-- Experience -->
          <li class="nav-item">
            <a href="{{ route('admin.experiences.index') }}"
                class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                    Experience
                </p>
            </a>
          </li>

          <!-- Education -->
          <li class="nav-item">
              <a href="{{ route('admin.educations.index') }}"
                  class="nav-link">

                  <i class="nav-icon fas fa-graduation-cap"></i>

                  <p>
                      Education
                  </p>

              </a>
          </li>

          <!-- Services -->
          <li class="nav-item">
              <a href="{{ route('admin.services.index') }}"
                  class="nav-link">

                  <i class="nav-icon fas fa-laptop-code"></i>

                  <p>
                      Services
                  </p>

              </a>
          </li>

           <!-- current learnings -->
          <li class="nav-item">
              <a href="{{ route('admin.currentLearnings.index') }}"
                  class="nav-link">

                  <i class="nav-icon fas fa-book-open"></i>

                  <p>
                      Current Learnings
                  </p>

              </a>
          </li>

          <!-- FAQ -->
          <li class="nav-item">
              <a href="{{ route('admin.faqs.index') }}"
                  class="nav-link">

                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>
                      FAQ
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        @yield('content')
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

</div><!-- end of wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

</body>
</html>