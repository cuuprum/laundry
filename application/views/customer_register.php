<!DOCTYPE html>
<html>

    <?php
      if (isset($logout_message)) {
        echo "<div class='message'>";
        echo $logout_message;
        echo "</div>";
      }
      
      if (isset($message_display)) {
        echo "<div class='message'>";
        echo $message_display;
        echo "</div>";
      }
    ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry Via | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/Ionicons/css/ionicons.min.css"?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/iCheck/square/blue.css"?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url("home")?>"><b>Laundry</b>Via</a>
  </div>

        <div class="register-box-body">
          <p class="login-box-msg"><label>Pendaftaran Akun Konsumen Baru</label></p>
          <?php
            if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
            }
            ?>
            <?php
            if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
            }
          ?>
          <form action="<?php echo base_url("login/new_user_registration"); ?>" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
              <span class="fa fa-home form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="No Telepon" name="telpon">
              <span class="fa fa-phone form-control-feedback"></span>
            </div>            
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="username">
              <span class="fa fa-user form-control-feedback"></span>
            </div>      
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <input type="hidden" name="level" value="2" />
            <div class="row">
              <!-- /.col -->
              <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <a href="<?php echo base_url("login")?>" class="text-center">Saya sudah memiliki akun.</a>
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/bower_components/jquery/dist/jquery.min.js"?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap/dist/js/bootstrap.min.js"?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."assets/plugins/iCheck/icheck.min.js"?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
