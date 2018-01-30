<!DOCTYPE html>
<html>

<?php
if (isset($this->session->userdata['logged_in'])) {

  header(base_url("validation_login"));

}
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry Shop | Log in</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url("home")?>"><b>Laundry</b>Shop</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php
        if(isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->db_model->login($username, $password);
            /*
            if($username == 'admin' && $password == 'adminjuga'){
                header('location:'.base_url().'admin');
            }
            elseif($username == 'user' && $password == 'userjuga'){
                header('location:'.base_url().'user');
            }
            else
                echo "<script type='text/javascript'>alert('Username & Password not found.');</script>";
            */
        }
    ?>

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
    <form action="<?php echo base_url("login/user_login_process"); ?>" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

  <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
<!--            <label>
              <input type="checkbox"> Remember Me
            </label>
--> 
          </div>
        </div>
       
        <!-- /.col -->
        <div class="col-xs-4">
          <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
