<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct (){
		parent::__construct();
		$this->load->model('Modal_madel');
		
	}
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	//ruteeeeeee
	function ganti_rute(){
		$id = $this->input->get('id');
		$data ['data'] = array('tampil_rute' => $this->Modal_madel->ganti_rute($id));
		$this->load->view('admin/rute/ganti_rute',$data);
	}
	function proses_ganti_rute(){
		$id = $this->input->post('id');
		$maskapai = $this->input->post('maskapai');
		$berangkat= $this->input->post('berangkat');
		$tujuan= $this->input->post('tujuan');
		$jam_berangkat= $this->input->post('jam_berangkat');
		$jam_tiba= $this->input->post('jam_tiba');
		$class= $this->input->post('class');
		$harga= $this->input->post('harga');

		$data = array(
			'maskapai' => $maskapai, 
			'berangkat' => $berangkat, 
			'tujuan' => $tujuan, 
			'jam_berangkat' => $jam_berangkat, 
			'jam_tiba' => $jam_tiba, 
			'class' => $class, 
			'harga' => $harga, 
		);
	 $this->Modal_madel->update_rute($id,$data,'rute');
	 redirect (base_url ('welcome/tampil_rute'));
	}
	function hapus_rute(){
		$id = $this->input->get('id');
		$this->Modal_madel->hapus_rute($id);
		redirect('welcome/tampil_rute');
	}
	function form_rute(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/rute/tambah_rute');
		$this->load->view('admin/template/footer');
	}
	function tampil_rute(){
		$data = array('data' => $this->Modal_madel->tampil_rute()->result());
		$this->load->view('admin/template/header');
		$this->load->view('admin/rute/tampil_rute',$data);
		$this->load->view('admin/template/footer');
	}
	function tambah_rute(){
		$maskapai = $this->input->post('maskapai');
		$berangkat= $this->input->post('berangkat');
		$tujuan= $this->input->post('tujuan');
		$jam_berangkat= $this->input->post('jam_berangkat');
		$jam_tiba= $this->input->post('jam_tiba');
		$class= $this->input->post('class');
		$harga= $this->input->post('harga');

		$data = array(
			'maskapai' => $maskapai, 
			'berangkat' => $berangkat, 
			'tujuan' => $tujuan, 
			'jam_berangkat' => $jam_berangkat, 
			'jam_tiba' => $jam_tiba, 
			'class' => $class, 
			'harga' => $harga, 
		);
		$this->Modal_madel->tambah_rute($data);
		redirect('welcome/tampil_rute');
	}
}
?>
