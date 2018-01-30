<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry Via | User Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/Ionicons/css/ionicons.min.css"?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"?>">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/skin-blue.min.css"?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url()."admin"?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Laundry</b>Via</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- #TODO 6 : Edit User yang login -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url()."assets/dist/img/user4-128x128.jpg"?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Via Marheni</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url("login/logout"); ?>" > Sign Out </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU USER</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- #TODO 1 : Edit active side bar menu dan link nya-->
        <!-- <li class="active"><a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Daftar Pesanan Laundry</span></a></li> -->
        <li class="active"><a href="<?php echo base_url('customer');?>"><i class="fa fa-list"></i> <span>Laundry Saya</span></a></li>
        <li><a href="<?php echo base_url('customer_order');?>"><i class="fa fa-plus-square"></i> <span>Order Laundry</span></a></li>                            
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- #TODO 2 : Edit Header sesuai dengan menu -->
    <section class="content-header">
      <h1>
        Selamat Datang Di Aplikasi Laundry Via!
        <small>Laundry Cepat dan Hemat.</small>
      </h1>
      <!-- #TODO 3 : Edit breadcrumb dan icon -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Laundry Saya</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    
    <!-- #TODO 4 : Edit content sesuai menu -->
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- Hover Data Table -->
        <div class="row">
          <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
                <h3 class="box-title">Laundry Saya</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Tanggal Laundry</th>
                    <th>Jenis Laundry</th>
                    <th>Isi Satuan Laundry</th>
                    <th>Total Berat Laundry</th>
                    <th>Tanggal Selesai Laundry</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                    <tbody>
                      <tr>
                        <td>10/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>04/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>18/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>06/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>19/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>14/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>17/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>2</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>2</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>07/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>10</td>
                        <td>13/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>04/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>10</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>04/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>16/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>8</td>
                        <td>13/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>3</td>
                        <td>17/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>16/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>04/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>19/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Kiloan</td>
                        <td></td>
                        <td>8</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>06/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>13/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Celana, Baju, Jas, Selimut</td>
                        <td>-</td>
                        <td>17/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>08/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>19/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Satuan</td>
                        <td>Jas, Bed Cover, Celana, Baju, Selimut</td>
                        <td>-</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>07/01/18</td>
                        <td>Satuan</td>
                        <td>Baju, Selimut, Celana</td>
                        <td>-</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Jas, Bed Cover, Celana, Baju, Selimut</td>
                        <td>-</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Selimut, Jas, Baju, Celana</td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>13/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Celana, Jas, Selimut</td>
                        <td>-</td>
                        <td>10/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>03/01/18</td>
                        <td>Satuan</td>
                        <td>Baju, Jas, Celana</td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>04/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Selimut, Jas</td>
                        <td>-</td>
                        <td>14/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Satuan</td>
                        <td>Jas, Selimut</td>
                        <td>-</td>
                        <td>16/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Jas</td>
                        <td>-</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>07/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Celana, Baju, Jas</td>
                        <td>-</td>
                        <td>11/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Jas, Bed Cover, Celana, Baju</td>
                        <td>-</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>02/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Selimut, Celana, Jas</td>
                        <td>-</td>
                        <td>12/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Satuan</td>
                        <td>Celana, Baju</td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>06/01/18</td>
                        <td>Satuan</td>
                        <td>Baju, Jas, Celana</td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>01/01/18</td>
                        <td>Satuan</td>
                        <td>Celana, Baju, Bed Cover, Selimut</td>
                        <td>-</td>
                        <td>19/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Jas</td>
                        <td>-</td>
                        <td>18/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Satuan</td>
                        <td>Baju, Bed Cover, Selimut</td>
                        <td>-</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>05/01/18</td>
                        <td>Satuan</td>
                        <td>Baju, Jas, Celana, Selimut, Bed Cover</td>
                        <td>-</td>
                        <td>16/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Jas, Celana</td>
                        <td>-</td>
                        <td>14/01/2018</td>
                        <td><span class="label label-danger">Baru</span</td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Satuan</td>
                        <td>Celana, Jas, Baju</td>
                        <td>-</td>
                        <td>14/01/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                      </tr>
                      <tr>
                        <td>06/01/18</td>
                        <td>Satuan</td>
                        <td>Jas, Celana, Baju</td>
                        <td>-</td>
                        <td>17/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>07/01/18</td>
                        <td>Satuan</td>
                        <td>Selimut, Celana, Bed Cover</td>
                        <td>-</td>
                        <td>19/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Satuan</td>
                        <td>Selimut, Bed Cover, Baju, Celana</td>
                        <td>-</td>
                        <td>18/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>06/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Jas, Selimut, Celana</td>
                        <td>-</td>
                        <td>15/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                      <tr>
                        <td>09/01/18</td>
                        <td>Satuan</td>
                        <td></td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                      </tr>
                      <tr>
                        <td>10/01/18</td>
                        <td>Satuan</td>
                        <td>Bed Cover, Baju, Celana, Selimut, Jas</td>
                        <td>-</td>
                        <td>20/01/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                      </tr>
                    </tbody>
                  <tfoot>
                    <tr>
                      <th>Tanggal Laundry</th>
                      <th>Jenis Laundry</th>
                      <th>Isi Satuan Laundry</th>
                      <th>Total Berat Laundry</th>
                      <th>Tanggal Selesai Laundry</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->        
          </div> 
        </div>  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      STTI NIIT I-Tech
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Via Marheni</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/bower_components/jquery/dist/jquery.min.js"?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap/dist/js/bootstrap.min.js"?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/dist/js/adminlte.min.js"?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url()."assets/bower_components/datatables.net/js/jquery.dataTables.min.js"?>"></script>
<script src="<?php echo base_url()."assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/bower_components/fastclick/lib/fastclick.js"?>"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>    
</body>
</html>