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
    <title>Tiket Pesawat Online</title>
    <style>
        body{
        background-image: url('http://localhost/mamen/resource/admin/dist/img/photo1.png');
        }
        .bt-1{
            margin-top:32px;
            height:35px;
            width:100%;
        }
        .form-pesan{
            background-color:#eee;
            margin-top:5%;
            margin-left:5%;
            margin-right:5%;
            border-radius:5px;
        }
        .papan{
            margin:1%;
        }
        .filter{
            background-color:#fff;
            margin:2%;
            border-radius:10px;
        }
    </style>
</head>
<body> 




    <form action="" class="form-pesan">


        <header id="site-header">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= base_url() ?>">Terbang dan Melampauinya</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                                    <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                                <?php else : ?>
                                    <li><a href="<?= base_url('register') ?>">Register</a></li>
                                    <li><a href="<?= base_url('login') ?>">Login</a></li>
                                <?php endif; ?>
                            </ul>
                        </div><!-- .navbar-collapse -->
                    </div><!-- .container-fluid -->
                </nav><!-- .navbar -->
            </header><!-- #site-header -->

            <main id="site-content" role="main">
                
                <?php if (isset($_SESSION)) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php //var_dump($_SESSION); ?>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .container -->
                <?php endif; ?>


        <div class="row papan">
            <div class="col-md-2"> <h5>Berangkat</h5>
                <input type="text" name="berangkat" class="form-control">
            </div>
            <div class="col-md-2"> <h5>Tujuan</h5>
                <input type="text" name="tujuan" class="form-control">
            </div>
            <div class="col-md-2"> <h5>Tanggal</h5>
                <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="col-md-2"> <h5>Kelas</h5>
                <input type="text" name="class" class="form-control">
            </div>
            <div class="col-md-2"> <h5>Penumpang</h5>
                <input type="text" name="penumpang" class="form-control">
            </div>
            <div class="col-md-2">
                <input type="submit" value="Cari" class="btn btn-warning bt-1">
            </div>
        </div>
    </form>

    <div class="filter">
        <div class="u-pad-right--3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
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