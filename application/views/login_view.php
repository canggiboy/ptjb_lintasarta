<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Administrator</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/dist/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>assets/dist/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/dist/img/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo base_url() ?>/assets/dist/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo base_url() ?>/assets/dist/img/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo base_url() ?>/assets/dist/img/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>/assets/dist/img/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo base_url() ?>/assets/dist/img/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>/assets/dist/img/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/dist/img/favicon-16.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/dist/img/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/dist/img/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/dist/img/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>/assets/dist/img/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>/assets/dist/img/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>/assets/dist/img/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/dist/img/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>/assets/dist/img/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>/assets/dist/img/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo base_url() ?>/assets/dist/img/favicon-144.png">
    <meta name="msapplication-config" content="<?php echo base_url() ?>/assets/dist/img/browserconfig.xml">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper" data-image="<?php echo base_url() ?>assets/img/sidebar-5.jpg">
      <div class="content"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card">
                        <div class="card-content">
                            <form action="<?php echo site_url('login')?>" method="POST" accept-charset="utf-8">
                              <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group label-floating">
                                            <img src="<?php echo base_url() ?>assets/img/logo.png" class="image-responsive center-block"/>
                                        </div>
                                    </div>
                                </div>
                              <?php
                                if(validation_errors()){
                                ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong><?php echo validation_errors(); ?></strong>
                                </div>
                              <?php
                                }
                                echo form_open('login','class="myclass"');
                              ?>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group label-floating">
                                            <?php
                                              echo form_label('Username','username','class="control-label"');
                                              echo form_input('username','','class="form-control" id="username"')
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group label-floating">
                                            <?php
                                              echo form_label('Password','password','class="control-label"');
                                              echo form_password('password','','class="form-control" id="password"')
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="form-group label-floating">
                                            <?php echo form_submit('login', 'Login', 'class="btn btn-primary"') ?>
                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
     <footer class="footer">
        <div class="container-fluid">
          <p class="col-md-5 col-md-offset-5">
            &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>
              <a href="http://www.lintasarta.net">PT. Aplikanusa Lintasarta</a>
          </p>
        </div>
      </footer>
    </div>
  </body>
  <script src="<?php echo base_url() ?>assets/dist/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/material.min.js" type="text/javascript"></script>
  <!--  Charts Plugin -->
  <script src="<?php echo base_url() ?>assets/dist/js/chartist.min.js"></script>
  <!--  Dynamic Elements plugin -->
  <script src="<?php echo base_url() ?>assets/dist/js/arrive.min.js"></script>
  <!--  PerfectScrollbar Library -->
  <script src="<?php echo base_url() ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url() ?>assets/dist/js/bootstrap-notify.js"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="<?php echo base_url() ?>assets/dist/js/material-dashboard.js?v=1.2.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {

          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>
</html>