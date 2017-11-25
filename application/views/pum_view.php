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
                    <li>
                        <a href="<?php echo site_url('user')?>">
                            <i class="material-icons">person</i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../index.php/pum">
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
                        <a class="navbar-brand" href="#">PUM List</a>
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
                                    <h4 class="title">Table on PUM list</h4>
                                    <p class="category">Tabel pada Daftar PUM</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover table-striped" id="table-id" cellspacing="0" width="100%">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>NIK</th>
                                                <th>Fullname</th>
                                                <th>Number of PUM</th>
                                                <th>Activity Name</th>
                                                <th>Date of Activity</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>                                           
                                        </thead>
                                        <tbody>
                                                               
                                        </tbody>
                                    </table>
                                </div>
                                <a>
                                    <button type="submit" class="btn btn-primary pull-left" data-background-color="blue" data-toggle="modal" data-target="#myModalPum">
                                        <i class="material-icons">person_add</i> Add PUM
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalPum" role="dialog">
                    <div class="modal-dialog">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="card">
                                    <div class="card-header" data-background-color="blue">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal_title">Add New PUM</h4>
                                        <p class="category">Tambahkan PUM baru</p>
                                    </div>
                                    <div class="card-content">
                                        <form action="<?php echo site_url('pum/add')?>" method="POST" accept-charset="utf-8">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">NIK</label>
                                                        <input required type="search" name="nik" class="autocomplete form-control">
                                                        <input type="hidden" name="id_user" class="autocomplete form-control" id="id_user">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Fullname</label>
                                                        <input required type="text" name="fullname" class="autocomplete form-control" id="fullname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Number of PUM</label>
                                                        <input required type="number" name="number_of_pum" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Activity Name</label>
                                                        <input required type="text" name="activity_name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Date of Activity</label>
                                                        <input required type="text" name="date_of_activity" class="datepicker form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Location</label>
                                                        <input required type="text" name="location" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-3">
                                                    <a href="<?php echo site_url('pum')?>">
                                                    <button type="submit" name="submit" class="btn btn-primary pull-left" data-background-color="blue">
                                                        <i class="material-icons">person_add</i> Add New PUM
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
                    <div class="modal fade" id="myModalPumEdit" role="dialog">
                    <div class="modal-dialog">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <div class="card">
                                    <div class="card-header" data-background-color="blue">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal_title">Update PUM</h4>
                                        <p class="category">Memperbaharui PUM</p>
                                    </div>
                                    <div class="card-content">
                                        <form id="form" method="POST" accept-charset="utf-8">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK</label>
                                                        <input required type="search" name="nik1" id="nik1" class="autocomplete form-control">
                                                        <input type="hidden" name="id_user1" class="form-control" id="id_user1">
                                                        <input type="hidden" name="id_pum" class="form-control" id="id_pum">
                                                        <input type="hidden" name="id_kegiatan" class="form-control" id="id_kegiatan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Fullname</label>
                                                        <input required type="text" name="fullname1" class="autocomplete form-control" id="fullname1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Number of PUM</label>
                                                        <input required type="number" name="number_of_pum1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Activity Name</label>
                                                        <input required type="text" name="activity_name1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Activity</label>
                                                        <input required type="text" name="date_of_activity1" class="datepicker form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Location</label>
                                                        <input required type="text" name="location1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-3">
                                                    <a>
                                                    <button onclick="save()" type="submit" name="submit" class="btn btn-primary pull-left" data-background-color="blue">
                                                        <i class="material-icons">person_add</i> Update PUM
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
    document.getElementById('fullname').disabled = true;
    //document.getElementById('nik1').disabled = true;
    //document.getElementById('fullname1').disabled = true;
   $(document).ready(function() {
                //datatables
                table = $('#table-id').DataTable({ 

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('pum/ajax_list')?>",
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

                $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: "<?php echo site_url('pum/search')?>",
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#id_user').val(''+suggestion.id);
                    $('#fullname').val(''+suggestion.fullname); // membuat id 'v_nim' untuk ditampilkan
                    $('#id_user1').val(''+suggestion.id);
                    $('#fullname1').val(''+suggestion.fullname);
                }
                });

                //datepicker
                $('.datepicker').datepicker({
                    autoclose: true,
                    format: "yyyy-mm-dd",
                    todayHighlight: true,
                    orientation: "top auto",
                    todayBtn: true,
                    todayHighlight: true,  
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
            });
 
    function edit(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty();
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('pum/edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_user1"]').val(data.id);
            $('[name="id_pum"]').val(data.id_pum);
            $('[name="id_kegiatan"]').val(data.id_kegiatan);
            $('[name="nik1"]').val(data.nik);
            $('[name="fullname1"]').val(data.fullname);
            $('[name="number_of_pum1"]').val(data.jumlah_pum);
            $('[name="activity_name1"]').val(data.nama_kegiatan);
            $('[name="date_of_activity1"]').val(data.tgl_mulai);
            $('[name="location1"]').val(data.lokasi);
 
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
        $('#form').submit(function(e) {
        e.preventDefault();
            // ajax adding data to database
          $.ajax({
            url : "<?php echo site_url('pum/update')?>",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#myModalPumEdit').modal('hide');
               reload_table();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
      });
    }

    function delete_user(id,id_pum)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('pum/delete')?>/"+id+('/')+id_pum,
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