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
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/select2/dist/css/select2.min.css"?>">

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
            <a href="<?php echo base_url("login/logout"); ?>" data-toggle="control-sidebar">Signt Out</a>
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
        <li><a href="<?php echo base_url('pesanan_view');?>"><i class="fa fa-list"></i> <span>Daftar Pesanan Laundry</span></a></li>
        <li class="active"><a href="<?php echo base_url('pesanan_insert');?>"><i class="fa fa-plus-square"></i> <span>Isi Data Pesanan</span></a></li>
        <li><a href="<?php echo base_url('pesanan_update_selesai');?>"><i class="fa fa-edit"></i> <span>Update Selesai Laundry</span></a></li>                        
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
        <li><a href="#"><i class="fa fa-plus-square"></i> Insert Pesanan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    
    <!-- #TODO 4 : Edit content sesuai menu -->
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div class="col-md-6">    
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Isi Data Pesanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?= base_url('Pesanan_insert/insertPesanan') ?>">
              <div class="box-body">
              <?php
                // echo $getNewId; new id done
               ?>
                <div class="form-group">
                    <label>ID Pemesanan</label>
                    <input class="form-control" name="id_order"  value ="<?= $getNewId ?>" type="text">
                </div>
                <!-- #TODO Nanti ganti jadi searchid by nama Konsumen -->
                <div class="form-group">
                    <label>ID Konsumen</label>
                    <input class="form-control" name="id_konsumen" placeholder="Silahkan masukan ID Konsumen." type="text">
                </div>
                <div class="form-group">
                    <label>Nama Konsumen</label>
                    <input class="form-control" name="nama_konsumen"placeholder="Silahkan masukan Nama Konsumen." type="text">
                </div>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <select class="form-control" name="jenis_laundry" placeholder="Pilih jenis laundry.">
                    <option>LaundrySatuan</option>
                    <option>Laundry Kiloan</option>
                  </select>
                </div>            
                <div class="form-group">
                  <label>Isi Laundry Satuan</label>                  
                  <div>
                    <select name="jumlah_baju">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Baju
                    <br>
                    <br>
                    <select name="jumlah_celana">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Celana
                    <br>
                    <br>
                    <select name="jumlah_jas">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Jas
                    <br>
                    <br>
                    <select name="jumlah_selimut">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Selimut
                    <br>
                    <br>
                    <select name="jumlah_bed_cover">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Bed Cover
                    <br>
                    <br>                                                                                                   
                  </div>
                </div>
                <div class="form-group">
                    <label>Total Berat Laundry Kiloan</label>
                    <input class="form-control" name="total_berat_kiloan" placeholder="Silahkan masukan jumlah berat laundry kiloan." type="text">
                </div>
                <div class="form-group">
                    <label>Total Harga</label>
                    <input class="form-control" name="total_harga" disabled="" placeholder="Total harga akan dihitung otomatis" type="text">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" placeholder="Pilih jenis laundry.">
                    <option>Baru</option>
                    <option>Proses</option>
                    <option>Siap</option>
                    <option>Selesai</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk Laundry</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control pull-right" name="tanggal_order" id="datepicker_tgl_laundry" type="text">
                    </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Tanggal Selesai Laundry</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control pull-right" name="tanggal_selesai"id="datepicker_tgl_selesai" type="text">
                    </div>
                  <!-- /.input group -->
                </div>
              </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <p class="help-block">Silahkan cek dengan baik sebelum Submit.</p>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
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
<!-- Select2 -->
<script src="<?php echo base_url()."assets/bower_components/select2/dist/js/select2.full.min.js"?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.js"?>"></script>
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.date.extensions.js"?>"></script>
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.extensions.js"?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url()."assets//bower_components/moment/min/moment.min.js"?>"></script>
<script src="<?php echo base_url()."assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"?>"></script>
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
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker_tgl_laundry').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })
        //Date picker
    $('#datepicker_tgl_selesai').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>    
</body>
</html>