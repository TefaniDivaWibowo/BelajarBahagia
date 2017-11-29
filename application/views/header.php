<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Web TA</title>
  <title>Admin TA MALANG</title>
  <!-- Icon -->
  <link rel="icon" href="<?=base_url();?>assets/dist/img/logo.ico" type="image/ico">
  <title>Support TA MALANG</title>
  <!-- Icon -->
  <link rel="icon" href="<?=base_url();?>assets/dist/img/logo.ico" type="image/ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Data tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <!-- Select 2 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/select2/select2.min.css">

  <!-- Chart Open -->

  <!--START DASHBOARD COGS-->
  <style>
    #chartdiv_dashboardcogs {
      width: 100%;
      height: 375px;
    }              
  </style>
  <!--END DASHBOARD COGS-->

  <!--START EVALUASI ALL-->
  <style>
    #chartdiv_evaluasi_all {
      width: 100%;
      height: 500px;
    }                                               
  </style>
  <!--END EVALUASI ALL-->

  <!--START EVALUASI AREA-->
  <style>
    #chartdiv_evaluasi_area {
      width: 100%;
      height: 500px;
    }                                               
  </style>
  <!--END-->

  <!--START EVALUASI PER KLASIFIKASI-->
  <style>
    #chartdiv_cogs_klasifikasi {
      width: 100%;
      height: 500px;
    }                                               
  </style>
  <!--END-->

  <!--START EVALUASI KLASIFIKASI ALL CHART LINE-->
  <style>
    #chartdiv_allkla_line {
      width : 100%;
<<<<<<< HEAD
      height  : 500px;
    }
  #chartdiv_evaluasi {
    width: 300%;
    height: 600px;
  }                                               
=======
      height  : 550px;
    }                
  </style>
  <!--END-->

  <!--START REVENUE ALL-->
  <style>
  #chartdiv_trend_rev_all {
    width   : 100%;
    height  : 600px;
  }         
  </style>
  <!--END-->

  <!--START REVENUE MONTH-->
  <style>
  #chartdiv_trend_rev_m {
    width   : 100%;
    height  : 600px;
  }         
>>>>>>> a981d298ad0ca688e2ca9ee771a84e0bf67f9767
  </style>
  <!--END-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?=base_url();?>assets/dist/img/New-Logo-TA-2016.png" height="45" width="190"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
  <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url();?>assets/dist/img/foto/default.png" class="user-image" alt="User Image">
      <?php
        if ($this->session->userdata('tipe') == 'admin_so') {?>
          <span class="hidden-xs">Admin SO</span>
      <?php
        } else if ($this->session->userdata('tipe') == 'hr'){
      ?>          
          <span class="hidden-xs">Petugas HR</span>
      <?php
        } else if ($this->session->userdata('tipe') == 'admin_mgn'){
      ?>          
          <span class="hidden-xs">User Management</span>
      <?php
        } else if ($this->session->userdata('tipe') == 'user_perform'){
      ?>          
          <span class="hidden-xs">User Performance</span>
      <?php
        } else {
      ?> 
          <span class="hidden-xs">Admin</span>
      <?php
          }
      ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url();?>assets/dist/img/foto/default.png" class="img-circle" alt="User Image">

                <p>
                  Selamat Datang di Aplikasi
                  <small>Semangat Pagi</small>
                </p>
              </li>
              <!-- Menu Body
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?=base_url('index.php/login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>