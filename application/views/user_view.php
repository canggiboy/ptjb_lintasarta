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
                                    <table class="table table-hover table-striped" id="table-id" cellspacing="0" width="100%">
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
                                        <form action="<?php echo site_url('user/add')?>" method="POST" accept-charset="utf-8" id="form_add">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">NIK</label>
                                                        <input required type="text" name="nik" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Fullname</label>
                                                        <input required type="text" name="fullname" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Username</label>
                                                        <input required type="text" name="username" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password</label>
                                                        <input required type="password" name="password" id="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Retype Password</label>
                                                        <input required type="password" name="repassword" class="form-control">
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
                                                            <input type="hidden" name="id">
                                                            <input required type="text" name="nik1" id="nik1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Fullname</label>
                                                            <input required type="text" name="fullname1" id="fullname1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Username</label>
                                                            <input required type="text" name="username1" id="username1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input required type="password" name="password1" id="password1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Retype Password</label>
                                                            <input required type="password" name="repassword1" id="repassword1" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group">
                                                          <label class="control-label" for="jk">Level</label>
                                                          <select class="form-control" name="level1" id="level1">
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
                                            <form id="change_password" method="POST" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Old Password</label>
                                                            <input required type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">New Password</label>
                                                            <input required type="password" id="new_password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Retype New Password</label>
                                                            <input required type="password" id="retype_npass" class="form-control">
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
    var save_method; //for save method string
    var table;
   $(document).ready(function() {
                //datatables
                table = $('#table-id').DataTable({ 

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('user/ajax_list')?>",
                        "type": "POST"
                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [
                    { 
                        "targets": [ -1 ], //last column
                        "orderable": false, //set not orderable
                    },
                    ],
                });
                //set input/textarea/select event when change value, remove class error and remove text help block 
                $("input").change(function(){
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });
                $("textarea").change(function(){
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });
                $("select").change(function(){
                    $(this).parent().parent().removeClass('has-error');
                    $(this).next().empty();
                });
                $("#form_add").validate({
                           rules: {
                               password: {
                                    required: true, 
                                    minlength: 6,
                                    maxlength: 10,

                               } , 

                                   repassword: { 
                                    equalTo: "#password",
                                     minlength: 6,
                                     maxlength: 10
                               }
                           },
                     messages:{
                         password: { 
                                 required:"The password is required"

                               }
                     }

                });
            });
 
    function edit(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty();
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('user/edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
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

    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }

    function save()
    {
        $('#form').validate({
            rules: {
               password1: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   repassword1: { 
                    equalTo: "#password1",
                     minlength: 6,
                     maxlength: 10
               }
           },
             messages:{
                 password1: { 
                         required:"The password is required"

                }
            },
            submitHandler: function(){
                    $.ajax({
                    url : "<?php echo site_url('user/update')?>",
                    type: "POST",
                    data: $('#form').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                       //if success close modal and reload ajax table
                       $('#myModalUpdate').modal('hide');
                       reload_table();// for reload a page
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }
      });
    }

    function delete_user(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('user/delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
  </script>
