<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Home page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/trabajo/public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/trabajo/public/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/trabajo/public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/trabajo/public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href='http://localhost/trabajo/public/inicio' class="brand-link">
      <img src="http://localhost/trabajo/public/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dual Dam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/trabajo/public/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('User.index') }}" class="nav-link active">
              <i class="fas fa-user"></i>
              <p>
                Users
              </p>
            </a>

            <a href="{{ route('assistence.index') }}" class="nav-link active">
              <i class="fas fa-user"></i>
              <p>
                Assistence
              </p>
            </a>
            
            <a href="{{ route('cycle.index') }}" class="nav-link active">
            <i class="fas fa-chalkboard"></i>
              <p>
                Cycles
              </p>
            </a>

            <a href="{{ route('tracing.index') }}" class="nav-link active">
              <i class="fas fa-user"></i>
              <p>
                Tracing
              </p>
            </a>

            <a href="task" class="nav-link active">
            <i class="fas fa-clipboard-list"></i>
              <p>
                Taks
              </p>
            </a>
            
            <a href="task_done" class="nav-link active">
            <i class="fas fa-clipboard-list"></i>
              <p>
                Taks_done
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-book"></i>
              <p>
                Modules
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('module.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  Show
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('task.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Task
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ce.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    CE
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ra.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Ra
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-city"></i>
              <p>
                Enterprises
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('enterprise.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  Show
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('belong.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Belongs
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      @if(session('message')) 
        <div class="alert alert-{{ session('message')[0] }}"> 
          {{ session('message')[1] }} 
        </div>
      @endif
      @yield('content')
   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://localhost/trabajo/public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/trabajo/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/trabajo/public/adminlte/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="http://localhost/trabajo/public/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> 
<!-- DataTables -->
<script src="http://localhost/trabajo/public/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/trabajo/public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://localhost/trabajo/public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/trabajo/public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://localhost/trabajo/public/adminlte/js/demo.js"></script>
<script type="text/javascript">
</script>
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

</body>
</html>