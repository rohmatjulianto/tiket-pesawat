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
            <li><a href="<?php echo base_url()?>welcome/tampil_rute"><i class="fa fa-plane"></i> Daftar Rute</a></li>
            <li class="active"><a href="<?php echo base_url()?>welcome/form_rute"><i class="fa fa-plane"></i> Tambah Rute</a></li>
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
        <small>Tambah Rute</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Navigation</li>
      </ol>
    </section>
   <!-- form tambah rute -->
   <style>
       .form-input{
           padding:5%;
           padding-top :0;
       }
   </style>
   <form  class="form-input"action="<?php echo base_url();?>welcome/tambah_rute" method="post">
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
                <option value="Jakarta (CGK)">Jakarta (CGK)</option>
                <option value="Denpasar (DPS)">Denpasar (DPS)</option>
                <option value="Semarang (SRG)">Semarang (SRG)</option>
                <option value="Surabaya (SUB)">Surabaya (SUB)</option>
                <option value="Yogyakarta (JOG)">Yogyakarta (JOG)</option>
            </select>
                <!-- <input type="text" name="berangkat" class="form-control"> -->
            </div>
            <div class="col-md-6"> <h5>Bandara Tujuan</h5>
            <select name="tujuan" class="form-control" id="">
                <option value="">-- Pilih Bandara Tujuan --</option>
                <option value="Jakarta (CGK)">Jakarta (CGK)</option>
                <option value="Denpasar (DPS)">Denpasar (DPS)</option>
                <option value="Semarang (SRG)">Semarang (SRG)</option>
                <option value="Surabaya (SUB)">Surabaya (SUB)</option>
                <option value="Yogyakarta (JOG)">Yogyakarta (JOG)</option>
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
                <input type="number" name="harga" class="form-control">
            </div>
        </div>
        <div class="row form-group">
        <div class="col-md-12">
            <input type="reset" class="btn btn-warning">
            <input type="submit" class="btn btn-primary">
        </div>
        </div>
    </form>