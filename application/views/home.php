<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Laundry & Dry Cleaning</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/template/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'> <!-- FONT -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/animate/animate.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/assets/css/responsive.css" />

        <script src="<?php echo base_url(); ?>assets/template/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">


            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="assets/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="#abouts">About Us</a></li>
                                        <!-- <li><a href="#features">Menu</a></li> -->
                                        <!-- <li><a href="#order">Order</a></li> -->
                                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Admin</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- End Header Section -->

        <section>

            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Login to Your Account</h1><br>
                              <form action="<?php echo base_url("") ?>" method="post">
                                <input type="text" name="user" placeholder="Username">
                                <input type="password" name="pass" placeholder="Password">
                                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                              </form>
                            </div>
                        </div>
                      </div>
        </section>

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>Laundry Via</h1>
                                    <div class="padding-top-40">
                                        <a href="#abouts" class="btn-lg">Check Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-6">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <img src="assets/images/ab.png" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="single_abouts_text wow slideInRight padding-top-60" data-wow-duration="1s">
                                <h4>About us</h4>
                                <h3>WE ARE Clean & Tidy</h3>
                                <div style="color:white;">
                                    <p> Kami adalah laundry yang berdiri sejak jaman penjajahan </p>

                                    <p>Laundry Via adalah laundry yang mengutamakan konsumen, dan memiliki tenaga kerja yang sangat profesional di bidangnya, seperti ahli setrika kerajaan. dan ahli cuci uang korupsi</p>
                                </div>
                                <div class="padding-top-60">
                                    <a href="#order" class="btn btn-primary">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p>112-Legere ancillae vix ne.

                                        <span>Te elit putent propriae eum,</span>
                                        <span>aliquip nominati</span>
                                        <span class="phone_email">phone: 00 000 000</span>
                                        <span>Email: support@templatemela.com</span></p>
                                </div>

                                <div class="footer_socail_icon">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-phone"></i></a>
                                    <a href=""><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="4s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p><span class="date_day">Monday To Friday</span>
                                        <span>8:00am to 10:00pm(Breakfast)</span>
                                        <span>11:00am to 10:00pm(Lunch/Diner)</span>

                                        <span class="date_day">Saturday & Sunday</span>
                                        <span>10:00am to 11:00pm(Brunch)</span>
                                        <span>11:00am to 12:00pm(Lunch/Dinner)</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="5s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_form text-left">
                                    <form action="#" id="formid">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div> <!-- end of form-group -->

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                        </div>

                                        <input type="submit" value="click here" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
							<p>Made by Via Marheni For CodeIgniter Project 2017. All Rights Reserved</p>
						</div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Payment</h4>
              </div>
              <div class="modal-body">
                <?php foreach ($pembelian as $data2) { ?>
                <table class="table table-striped">
                    <tr>
                      <th>No Struk</th>
                      <th>Nama Lengkap</th>
                      <th>Tanggal Pembelian</th>
                      <th>Total Harga</th>
                      <th>Alamat</th>
                    </tr>
                    <tr>
                      <td><?php echo $data2['no_struck']; ?></td>
                      <td><?php echo $data2['nama_pembeli']; ?></td>
                      <td><?php echo $data2['tgl_pembelian']; ?></td>
                      <td><?php echo $data2['total_harga']; ?></td>
                      <td><?php echo $data2['alamat']; ?></td>
                    </tr>
                </table>
              <?php } ?>
                <p>Pembayaran dilakukan ke rek. 1234566888</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="<?php echo base_url(); ?>assets/template/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/template/assets/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/assets/js/wow/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/template/assets/js/main.js"></script>
        <?php
          if(isset($_POST['order'])){
          echo "
          <script>
                $('#myModal').modal('show');
          </script>";
          }
        ?>
    </body>
</html>
