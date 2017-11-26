  <body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url() ?>assets/img/sidebar-5.jpg">
            <div class="logo">
                <img src="<?php echo base_url() ?>assets/img/logo.png" width="125" height="60" class="image-responsive center-block"/>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="../index.php/home">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('home/user')?>">
                            <i class="material-icons">person</i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('home/pum')?>">
                            <i class="material-icons">monetization_on</i>
                            <p>PUM List</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('home/activity')?>">
                            <i class="material-icons">directions_run</i>
                            <p>Activity List</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('home/logout')?>">
                            <i class="material-icons">exit_to_app</i>
                            <p>Exit</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class ="navbar-brand" href="#">Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">User</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a data-toggle="modal" data-target="#myModalPassword">
                                            <i class="material-icons">autorenew</i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('home/logout')?>">
                                            <i class="material-icons">exit_to_app</i>Exit
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                    <div class="modal fade" id="myModalPassword" role="dialog">
                        <div class="modal-dialog">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-4">
                                    <div class="card">
                                        <div class="card-header" data-background-color="blue">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="title">Change Password</h4>
                                            <p class="category">Perbaharui password</p>
                                        </div>
                                        <div class="card-content">
                                            <form method="POST" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Old Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">New Password</label>
                                                            <input type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Retype New Password</label>
                                                            <input type="password"6 class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 col-md-offset-2">
                                                        <a>
                                                        <button type="submit" name="submit" class="btn btn-primary pull-left" data-background-color="blue">
                                                            <i class="material-icons">autorenew</i> Change Password
                                                        </button>
                                                     </a>
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
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.lintasarta.net">PT. Aplikanusa Lintasarta</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
        <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('home/logout') ?>" role="button">Logout</a></p>
  </body>