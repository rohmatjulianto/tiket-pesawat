<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo base_url();?>resource/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resource/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resource/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resource/admin/dist/css/AdminLTE.min.css">
  <style>
    .loginbox{
        margin:180px auto;
        width :450px;
    }
    body{
        background-color:#eee;
    }
  </style>
    <title>login Admin Lte</title>
</head>
<body>
<div class="box box-info loginbox">
    <div class="box-header with-border">
    <h3 class="box-title">Form Login</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php
        if(isset($_POST['pencet'])){
            $u = $this->input->post('username');
            $p = $this->input->post('password');
            $this->modal_madel->getdatalogin($u,$p);
        }
    ?>
    <form class="form-horizontal" method="post" action="">
    <div class="box-body">
        <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Username">
        </div>
        </div>
        <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
            <label>
                <input type="checkbox"> Remember me
            </label>
            </div>
        </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="reset class="btn btn-default">Cancel</button>
        <button type="submit" name="pencet" class="btn btn-info pull-right">Sign in</button>
    </div>
</body>
    <!-- jQuery 3 -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/resource/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/resource/admin/dist/js/demo.js"></script>
</html>