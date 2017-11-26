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