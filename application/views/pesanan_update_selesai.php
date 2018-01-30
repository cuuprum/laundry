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
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }

      .example-modal .modal {
        background: transparent !important;
      }
    </style>
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
            <li><a href="<?php echo base_url('pesanan_view');?>"><i class="fa fa-list"></i> <span>Daftar Pesanan Laundry</span></a></li>
            <li><a href="<?php echo base_url('pesanan_insert');?>"><i class="fa fa-plus-square"></i> <span>Isi Data Pesanan</span></a></li>
            <li class="active"><a href="<?php echo base_url('pesanan_update_selesai');?>"><i class="fa fa-edit"></i> <span>Update Selesai Laundry</span></a></li>      
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
            <li><a href="#"><i class="fa fa-edit"></i> Update Selesai Laundry</a></li>
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
                  <h3 class="box-title">Daftar Pesanan Laundry</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>ID Pesanan</th>
                      <th>Tanggal Laundry</th>
                      <th>Nama Konsumen</th>
                      <th>Jenis Laundry</th>
                      <th>Isi Laudry Satuan</th>
                      <th>Total Berat Laundry</th>
                      <th>Tanggal Selesai Laundry</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          $i = 1;
                          foreach($listPesanan->result() as row){
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->id_order ?></td>
                            <td><?= $row->tanggal_order ?></td>
                            <td><?= $row->id_konsumen?></td>
                            <td><?= $row->jenis_laundry ?></td>
                            <td><?= $row->isi_laundry_satuan ?></td>
                            <td><?= $row->total_berat_kiloan ?></td>
                            <td><?= $row->tanggal_selesai ?></td>
                            <td><?= $row->status ?></td>
                            <td>  
                              <div class="btn-group">
                                <a href="<?php echo base_url('cetak_struk');?>"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-print"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-update" data-content="<?= $row->id_order?>"><i class="fa fa-edit"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete"data-content="<?= $row->id_order?>"><i class="fa fa-trash-o"></i></button></a>
                              </div>
                            </td>
                        </tr>
                        <?php
                            $i++;
                          }
                        ?>                        
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>ID Pesanan</th>
                        <th>Tanggal Laundry</th>
                        <th>Nama Konsumen</th>
                        <th>Jenis Laundry</th>
                        <th>Isi Laudry Satuan</th>
                        <th>Total Berat Laundry</th>
                        <th>Tanggal Selesai Laundry</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->        
            </div> 
          </div>     

          <!-- Update- Muncul pas di klik action di tabel -->
          <div class="modal fade" id="modal-update">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Status Laundry</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="hide" id="id_order_modal_delete" name="id_order_delete"/>
                      <label>Status</label>
                      <select class="form-control" placeholder="Pilih jenis laundry.">
                        <option>Baru</option>
                        <option>Proses</option>
                        <option>Siap</option>
                        <option>Selesai</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          <!-- Delete Modal - Muncul pas di klik action di tabel -->
          <div class="modal fade" id="modal-delete">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <input type="hide" id="id_order_modal_update"/>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Data Laundry</h4>
                  </div>
                  <div class="modal-body">
                    Anda yakin menghapus data ini?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->            

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
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/dist/js/demo.js"?>"></script>
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
      $(document).ready(function(){
        $('#modal-show-data').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#txtId').val(dataId);
        })
    })
    </script>    
  </body>
</html>