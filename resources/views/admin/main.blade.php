<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
>>>>>>> Episode 3 dan 4
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
<<<<<<< HEAD
    <title>SB Admin - Blank Page</title>

=======
<<<<<<< HEAD
    <title>SB Admin - Blank Page</title>

=======
    <title>@yield('title') Tokap Admin</title>
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}">
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
    <title>@yield('title') Tokap Admin</title>
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}">
>>>>>>> Episode 3 dan 4
    <!-- Bootstrap core CSS-->
    <link href="{{url('theme-sbadmin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
    <link href="{{url('theme-sbadmin/vendor/fontawesome-free/css/all.min.css"')}} rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="{{url('theme-sbadmin/css/sb-admin.css"')}} rel="stylesheet">

<<<<<<< HEAD
=======
=======
=======
>>>>>>> Episode 3 dan 4
    <link href="{{url('theme-sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{url('theme-sbadmin/css/sb-admin.css')}}" rel="stylesheet">
    @stack('css')
<<<<<<< HEAD
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
>>>>>>> Episode 3 dan 4
  </head>

  <body id="page-top">

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
<<<<<<< HEAD
=======
=======
  @include('admin.navbar')
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
  @include('admin.navbar')
>>>>>>> Episode 3 dan 4

    <div id="wrapper">

      <!-- Sidebar -->
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item active" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>
<<<<<<< HEAD
=======
=======
    @include('admin.sidebar')
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
    @include('admin.sidebar')
>>>>>>> Episode 3 dan 4

      <div id="content-wrapper">

        <div class="container-fluid">

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <h1>Blank Page</h1>
          <hr>
          <p>This is a great starting point for new custom pages.</p>
<<<<<<< HEAD
=======
=======
          <!-- Page Content -->
          @yield('content')
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
          <!-- Page Content -->
          @yield('content')
>>>>>>> Episode 3 dan 4

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
<<<<<<< HEAD
=======
=======

        @include('admin.footer')
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======

        @include('admin.footer')
>>>>>>> Episode 3 dan 4

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> EPISODE 3 dan 4
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('theme-sbadmin/'vendor/jquery/jquery.min.js)}}"></script>
<<<<<<< HEAD
=======
=======
=======
>>>>>>> Episode 3 dan 4
    <!-- Modal-->
   @stack('modal')

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('theme-sbadmin/vendor/jquery/jquery.min.js')}}"></script>
<<<<<<< HEAD
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
>>>>>>> Episode 3 dan 4
    <script src="{{url('theme-sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('theme-sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('theme-sbadmin/js/sb-admin.min.js')}}"></script>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD

  </body>

</html>
=======
    <script type="text/javascript" src="{{url('theme-sbadmin/js/navbar-nav.js')}}"></script>
    @stack('js')
>>>>>>> EPISODE 3 dan 4

  </body>

</html>
<<<<<<< HEAD
=======
>>>>>>> Episode 3 & 4
>>>>>>> EPISODE 3 dan 4
=======
    <script type="text/javascript" src="{{url('theme-sbadmin/js/navbar-nav.js')}}"></script>
    @stack('js')

  </body>

</html>
>>>>>>> Episode 3 dan 4
