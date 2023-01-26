<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- BOOTSTRAP & JS -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() . 'assets/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() . 'assets/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() . 'assets/vendor/datatables/jquery.dataTables.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/datatables/dataTables.bootstrap4.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/datepicker/js/bootstrap-datepicker.js' ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() . 'assets/js/sb-admin.min.js' ?>"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() . 'assets/js/demo/datatables-demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/demo/chart-area-demo.js' ?>"></script>


  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() . 'assets/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() . 'assets/vendor/datatables/dataTables.bootstrap4.css' ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() . 'assets/css/sb-admin.css' ?>" rel="stylesheet">

  <!-- Date picker-->
  <link href="<?php echo base_url() . 'assets/vendor/datepicker/css/datepicker.css' ?>" rel="stylesheet">
  <script type="text/javascript">
    $(function() {
      $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
      });
    });
  </script>

  <title><?php echo $judul; ?></title>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?= base_url(); ?>">Monitoring 1.0</a>

    <!-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button> -->

    <!-- Navbar Search -->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->


    <!-- Navbar
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
    </ul> -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item dropdown">
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
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="humidcharts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Humidity Chart</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="freqcharts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Frequency Chart</span></a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>tabel">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>user">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li>

    
      <!-- 
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>test">
          <i class="fas fa-fw fa-table"></i>
          <span>TEST</span></a>
      </li> -->

      <!-- <div class="mx-2">
        <form action="<?= base_url(); ?>user/login/verify" method="post">
          <div class="form-inline">
            <div class="form-group">
              <label class="sr-only">Pin</label>
              <input type="password" name="pin" class="form-control" placeholder="Pin">
            </div>
          </div>
          <button type="submit" class="btn btn-primary my-2 mx-2 float-right">Login</button>
        </form>
      </div>
   -->
    </ul>
