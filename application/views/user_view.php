<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrator Area</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/dist/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>assets/dist/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url() ?>assets/img/sidebar-5.jpg">
            <div class="logo">
                <img src="<?php echo base_url() ?>assets/img/logo.png" width="125" height="60" class="image-responsive center-block"/>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo site_url('home')?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../index.php/user">
                            <i class="material-icons">person</i>
                            <p>User List</p>
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
                        <a class="navbar-brand" href="#">User List</a>
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
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Table on User list</h4>
                                    <p class="category">Tabel pada Daftar Pengguna</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover" id="table-id">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>NIK</th>
                                                <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>                                           
                                        </thead>
                                        <tbody>
                                            <?php $no=0; foreach ($data as $dt){ ?>
                                                <tr>
                                                    <td><?php echo $dt['nik'];?></td>
                                                    <td><?php echo $dt['fullname'];?></td>
                                                    <td><?php echo $dt['username'];?></td>
                                                    <td><?php echo $dt['password'];?></td>
                                                    <td><?php echo $dt['level'];?></td>
                                                    <td>
                                                        <a>
                                                            <button onclick="edit(<?php echo $dt['nik'];?>)" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Update</button>
                                                        </a>
                                                        <a>
                                                            <button onclick="delete_user(<?php echo $dt['nik'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>Delete</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>                      
                                        </tbody>
                                    </table>
                                </div>
                                <a>
                                    <button type="submit" class="btn btn-primary pull-left" data-background-color="blue" data-toggle="modal" data-target="#myModalAdd">
                                        <i class="material-icons">person_add</i> Add User
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalAdd" role="dialog">
                    <div class="modal-dialog">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="card">
                                    <div class="card-header" data-background-color="blue">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="title">Add New User</h4>
                                        <p class="category">Tambahkan pengguna baru</p>
                                    </div>
                                    <div class="card-content">
                                        <form action="<?php echo site_url('user/add')?>" method="POST" accept-charset="utf-8">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">NIK</label>
                                                        <input type="text" name="nik" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Fullname</label>
                                                        <input type="text" name="fullname" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Username</label>
                                                        <input type="text" name="username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password</label>
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Retype Password</label>
                                                        <input type="password" name="repassword" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                      <label class="control-label" for="jk">Level</label>
                                                      <select class="form-control" name="level">
                                                        <option selected>Teknisi</option>
                                                        <option>JM</option>
                                                        <option>SM</option>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-3">
                                                    <a href="<?php echo site_url('user')?>">
                                                    <button type="submit" name="submit" class="btn btn-primary pull-left" data-background-color="blue">
                                                        <i class="material-icons">person_add</i> Add New User
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
                    <div class="modal fade" id="myModalUpdate" role="dialog">
                        <div class="modal-dialog">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="card">
                                        <div class="card-header" data-background-color="blue">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="title">Update User</h4>
                                            <p class="category">Perbaharui pengguna</p>
                                        </div>
                                        <div class="card-content">
                                            <form id="form" method="POST" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">NIK</label>
                                                            <input type="text" name="nik1" id="nik" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Fullname</label>
                                                            <input type="text" name="fullname1" id="fullname" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Username</label>
                                                            <input type="text" name="username1" id="username" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input type="password" name="password1" id="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Retype Password</label>
                                                            <input type="password" name="repassword1" id="repassword1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                          <label class="control-label" for="jk">Level</label>
                                                          <select class="form-control" name="level1">
                                                            <option selected>Teknisi</option>
                                                            <option>JM</option>
                                                            <option>SM</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-3">
                                                        <a>
                                                        <button onclick="save()" type="submit" name="submit" class="btn btn-primary pull-left" data-background-color="blue">
                                                            <i class="material-icons">update</i> Update User
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
                                            <form action="<?php echo base_url('user/update')?>" method="POST" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Old Password</label>
                                                            <input type="text" name="nik" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">New Password</label>
                                                            <input type="text" name="fullname" id="fullname" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Retype New Password</label>
                                                            <input type="text" name="username" id="username" class="form-control">
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
  <script type="text/javascript">
  $(document).ready( function () {
      $('#table-id').DataTable();
  } );
    var save_method; //for save method string
    var table;
 
    function edit(nik)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('user/edit/')?>/" + nik,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="nik1"]').val(data.nik);
            $('[name="fullname1"]').val(data.fullname);
            $('[name="username1"]').val(data.username);
            $('[name="password1"]').val(data.password);
            $('[name="repassword1"]').val(data.password);
            $('[name="level1"]').val(data.level);
 
 
            $('#myModalUpdate').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
        url = "<?php echo site_url('user/update')?>";
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#myModalUpdate').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_user(nik)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('user/delete')?>/"+nik,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
  </script>
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
  <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
  <!-- Material Dashboard javascript methods -->
  <script src="<?php echo base_url() ?>assets/dist/js/material-dashboard.js?v=1.2.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

  <script src="<?php echo base_url() ?>assets/datatables/js/jquery.dataTables.min.js"></script>
  
  <script src="<?php echo base_url() ?>assets/datatables/js/dataTables.bootstrap.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {

          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

      });
  </script>
</html>
