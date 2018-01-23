<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry Via | Admin Page</title>
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
      <span class="logo-mini"><b>A</b>LT</span>
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
            <a href="#" data-toggle="control-sidebar">Signt Out</a>
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
        <li class="header">MENU ADMIN</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- #TODO 1 : Edit active side bar menu dan link nya-->
        <li class="active"><a href="<?php echo base_url('pesanan_view');?>"><i class="fa fa-list"></i> <span>Daftar Pesanan Laundry</span></a></li>
        <li><a href="<?php echo base_url('pesanan_insert');?>"><i class="fa fa-plus-square"></i> <span>Isi Data Pesanan</span></a></li>
        <li><a href="<?php echo base_url('pesanan_update_selesai');?>"><i class="fa fa-edit"></i> <span>Update Selesai Laundry</span></a></li>      
        <li><a href="<?php echo base_url('isi_order_laundry');?>"><i class="fa fa-tag"></i> <span>Isi Order Laundry</span></a></li>                    
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
        <li><a href="#"><i class="fa fa-list"></i> View Pesanan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    
      <!-- Hover Data Table -->
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pesanan Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tanggal Laundry</th>
                  <th>Nama Pelanggan</th>
                  <th>Jenis Laundry</th>
                  <th>Isi Laudry Satuan</th>
                  <th>Total Berat Laundry</th>
                  <th>Tanggal Selesai Laundry</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12/03/2018</td>
                        <td>Chadwick</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>04/17/2018</td>
                        <td>Yvette</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>07/01/2018</td>
                        <td>Neve</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>9</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>12/21/2018</td>
                        <td>Buffy</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>09/27/2018</td>
                        <td>Vivien</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>12/20/2018</td>
                        <td>Melvin</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>06/27/2018</td>
                        <td>Brendan</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>06/14/2018</td>
                        <td>Fallon</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>05/21/2018</td>
                        <td>Daphne</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>02/15/2018</td>
                        <td>Zachery</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>01/14/2018</td>
                        <td>Kellie</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>10/22/2018</td>
                        <td>Rhona</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>07/24/2018</td>
                        <td>Winifred</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>8</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>04/10/2018</td>
                        <td>Jolie</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>10/10/2018</td>
                        <td>Calvin</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>1</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>04/19/2018</td>
                        <td>Hilel</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>8</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>01/29/2018</td>
                        <td>Samson</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>09/30/2018</td>
                        <td>Lydia</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>07/20/2018</td>
                        <td>Delilah</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>1</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>05/09/2018</td>
                        <td>Ezra</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>08/25/2018</td>
                        <td>Cara</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>09/15/2018</td>
                        <td>Buffy</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>02/04/2018</td>
                        <td>Mollie</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>1</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>02/09/2018</td>
                        <td>Allegra</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>04/26/2018</td>
                        <td>Carly</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>07/21/2018</td>
                        <td>Wynter</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>1</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>04/26/2018</td>
                        <td>Hyatt</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>08/29/2018</td>
                        <td>Dana</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>01/10/2018</td>
                        <td>Camilla</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>9</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>01/19/2018</td>
                        <td>Xenos</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>01/08/2018</td>
                        <td>Graiden</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>07/29/2018</td>
                        <td>Tiger</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>2</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>09/01/2018</td>
                        <td>Kieran</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>1</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>02/28/2018</td>
                        <td>Hedy</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>10/19/2018</td>
                        <td>Talon</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>7</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>01/22/2018</td>
                        <td>Kieran</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>12/28/2018</td>
                        <td>Macon</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>8</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>04/18/2018</td>
                        <td>Seth</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>3</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>05/03/2018</td>
                        <td>Caesar</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>08/16/2018</td>
                        <td>Tate</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>6</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>12/05/2018</td>
                        <td>Lael</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>01/07/2019</td>
                        <td>Fay</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>02/24/2018</td>
                        <td>Grace</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>10</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>09/16/2018</td>
                        <td>Naomi</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>9</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>08/29/2018</td>
                        <td>Julian</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>4</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>09/15/2018</td>
                        <td>Teegan</td>
                        <td>Kiloan</td>
                        <td>-</td>
                        <td>5</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>08/23/2018</td>
                        <td>Rebekah</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>12/22/2018</td>
                        <td>Todd</td>
                        <td>Satuan</td>
                        <td>BedCover</td>
                        <td>-</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>09/28/2018</td>
                        <td>Amethyst</td>
                        <td>Satuan</td>
                        <td>BedCover</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>01/04/2019</td>
                        <td>Uriah</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>01/04/2018</td>
                        <td>Otto</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>05/10/2018</td>
                        <td>Addison</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>08/28/2018</td>
                        <td>Madeline</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>03/12/2018</td>
                        <td>Carly</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>01/04/2019</td>
                        <td>Brittany</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>05/20/2018</td>
                        <td>Unity</td>
                        <td>Satuan</td>
                        <td>Baju</td>
                        <td>-</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>06/15/2018</td>
                        <td>Rhoda</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>06/18/2018</td>
                        <td>Cally</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>01/06/2018</td>
                        <td>Hall</td>
                        <td>Satuan</td>
                        <td>Baju</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>03/24/2018</td>
                        <td>Ciaran</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>04/15/2018</td>
                        <td>George</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>02/04/2018</td>
                        <td>Amos</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>09/30/2018</td>
                        <td>Lani</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-primary">Siap</span></td>
                    </tr>
                    <tr>
                        <td>06/30/2018</td>
                        <td>Addison</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>02/08/2018</td>
                        <td>Amanda</td>
                        <td>Satuan</td>
                        <td>BedCover</td>
                        <td>-</td>
                        <td>01/12/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>08/13/2018</td>
                        <td>Cain</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>11/17/2018</td>
                        <td>Steven</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>10/12/2018</td>
                        <td>Blaze</td>
                        <td>Satuan</td>
                        <td>Celana</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>09/20/2018</td>
                        <td>Wang</td>
                        <td>Satuan</td>
                        <td>Baju</td>
                        <td>-</td>
                        <td>01/11/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>04/12/2018</td>
                        <td>Vivien</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>10/25/2018</td>
                        <td>Jamalia</td>
                        <td>Satuan</td>
                        <td>Jas</td>
                        <td>-</td>
                        <td>01/13/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                    <tr>
                        <td>06/23/2018</td>
                        <td>Grady</td>
                        <td>Satuan</td>
                        <td>Baju</td>
                        <td>-</td>
                        <td>01/14/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>12/18/2018</td>
                        <td>Xerxes</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/15/2018</td>
                        <td><span class="label label-warning">Proses</span></td>
                    </tr>
                    <tr>
                        <td>08/12/2018</td>
                        <td>Hedy</td>
                        <td>Satuan</td>
                        <td>Selimut</td>
                        <td>-</td>
                        <td>01/16/2018</td>
                        <td><span class="label label-danger">Baru</span></td>
                    </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <th>Tanggal Laundry</th>
                  <th>Nama Pelanggan</th>
                  <th>Jenis Laundry</th>
                  <th>Isi Laudry Satuan</th>
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