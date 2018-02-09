<!DOCTYPE html>
<html>
<head>
	<title>tuh liat</title>
</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/admin/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/admin/bootstrap/css/bootstrap-theme.css">
	<style>
	.bt{
		margin:10px;
	}
		.form-input{
        background-color:#eee; 
		border-radius:10px;
    }
    body{
        background-image: url('http://localhost/mamen/resource/admin/dist/img/photo1.png');
    }	
	</style>
<body>
<div class="container-fluid col-md-offset-2 col-md-8 form-input " style=" margin-top: 5%; align:center">
		<table class="table table-responsive table-hover " style="align:center">
	<tr>
        <th>No</th>
        <th>Maskapai</th>
        <th>Pemberangkatan</th>
        <th>Tujuan</th>
        <th>Jam Berangkat</th>
        <th>Jam Tiba</th>
        <th>Kelas</th>
        <th>Harga</th>
        <th>Aksi</th>
	</tr>
    <?php
        $no = 1; 
		foreach ($data as $row)
		{
	?>
		<tr>
			<td>
                <?php echo $no++ ?>
			</td>
			<td>
				<?php echo $row->maskapai?>
			</td>
			<td>
				<?php echo $row->berangkat?>
			</td>
			<td>
				<?php echo $row->tujuan?>
			</td>
			<td>
				<?php echo $row->jam_berangkat?>
			</td>
			<td>
				<?php echo $row->jam_tiba?>
			</td>
			<td>
				<?php echo $row->class?>
			</td>
			<td>
				<?php echo $row->harga?>
			</td>
			<td>
			<a href="<?php echo base_url('index.php/welcome/ganti_rute?id='.$row->id);?>">Edit</a>
			<a href="<?php echo base_url('index.php/welcome/hapus_rute?id='.$row->id);?>">Delete</a>
			</td>
		</tr>
	<?php
		 } 
	?>
	</table>
    <a href="<?php echo base_url('index.php/welcome/form_rute');?>" class="btn btn-primary bt">Tambahkan Rute</a>
</div>
</body>
	<script type="text/javascript" src="<?php echo base_url();?>resource/admin/bootstrap/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/admin/bootstrap/js/bootstrap.js"></script>
</html>