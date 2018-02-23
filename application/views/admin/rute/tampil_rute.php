      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?php echo base_url()?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Navigation</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>welcome/tampil_rute"><i class="fa fa-plane"></i> Daftar Rute</a></li>
            <li><a href="<?php echo base_url()?>welcome/form_rute"><i class="fa fa-plane"></i> Tambah Rute</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>resource/admin/pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

	    <!-- Content Header (Page header) -->
		<section class="content-header">
      <h1>
        Navigation
        <small>Daftar Rute</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Navigation</li>
      </ol>
    </section>
<div class="container-fluid form-input " style=" align:center">
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
			<?php echo "Rp. " .number_format($row->harga,2,",",".");?>
			</td>
			<td>
			<a href="<?php echo base_url('welcome/ganti_rute?id='.$row->id);?>">Edit</a>
			<a href="<?php echo base_url('welcome/hapus_rute?id='.$row->id);?>">Delete</a>
			</td>
		</tr>
	<?php
		 } 
	?>
	</table>
</div>
