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
    .form-input{
        background-color:#eee; 
        margin-left:100px; 
        margin-right:0; 
        margin-top:5%; 
        border-radius:10px; 
        width:50%; 
        padding:30px;
    }
    body{
        background-image: url('http://localhost/mamen/resource/admin/dist/img/photo1.png');
    }
</style>
    <title>Tambah Pesanan </title>
</head>
<body>
    <form  class="form-input"action="<?php echo base_url();?>index.php/welcome/tambah_rute" method="post" 
    style="">
        <div class="row form-group">
            <div class="col-md-12 "> <h5>Maskapai</h5>
            <select name="maskapai" class="form-control" id="">
                <option value="">-- Pilih Maskapai --</option>
                <option value="Garuda Indonesia">Garuda Indonesia</option>
                <option value="Lion Air">Lion Air</option>
                <option value="Air Asia">Air Asia</option>
                <option value="Sriwijaya Air">Sriwijaya Air</option>
            </select>
                <!-- <input type="text" name="maskapai" class="form-control"> -->
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6"> <h5>Bandara Asal</h5>
            <select name="berangkat" class="form-control" id="">
                <option value="">-- Pilih Bandara Asal --</option>
                <option value="CGK">Jakarta (CGK)</option>
                <option value="DPS">Denpasar (DPS)</option>
                <option value="SRG">Semarang (SRG)</option>
                <option value="SUB">Surabaya (SUB)</option>
                <option value="JOG">Yogyakarta (JOG)</option>
            </select>
                <!-- <input type="text" name="berangkat" class="form-control"> -->
            </div>
            <div class="col-md-6"> <h5>Bandara Tujuan</h5>
            <select name="tujuan" class="form-control" id="">
                <option value="">-- Pilih Bandara Tujuan --</option>
                <option value="CGK">Jakarta (CGK)</option>
                <option value="DPS">Denpasar (DPS)</option>
                <option value="SRG">Semarang (SRG)</option>
                <option value="SUB">Surabaya (SUB)</option>
                <option value="JOG">Yogyakarta (JOG)</option>
            </select>
                <!-- <input type="text" name="tujuan" class="form-control"> -->
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 "> <h5>Waktu Pemberangkatan (WIB)</h5>
                <input type="time" name="jam_berangkat" class="form-control">
            </div>
            <div class="col-md-6"> <h5>Waktu Tiba (WIB)</h5>
                <input type="time" name="jam_tiba" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12"> <h5>Kelas</h5>
                <select name="class" class="form-control">
                <option value="">-- Pilih Kelas --</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Reguler">Reguler</option>
                <option value="Eksekutif">Eksekutif</option>
                <option value="VVIP">VVIP</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12"> <h5>Banderol Harga (IDR)</h5>
                <input type="text" name="harga" id="harga" class="form-control"/>
            </div>
        </div>
        <div class="row form-group">
        <div class="col-md-12">
            <input type="reset" class="btn btn-warning">
            <input type="submit" class="btn btn-primary">
        </div>
        </div>
    </form>
</body>
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/resource/js/jquery-3.1.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jquery.maskMoney.min.js -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/bootstrap/js/jquery.maskMoney.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/resource/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/resource/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/resource/admin/dist/js/demo.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#harga').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
		});
</script>
</html>