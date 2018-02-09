<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct (){
		parent::__construct();
		$this->load->model('Modal_madel');

	}
	function index()
	{
		$this->load->view('pesan');
	}
	function login(){
		$this->load->view('login');
	}
	//ruteeeeeee
	function ganti_rute(){
		$id = $this->input->get('id');
		$data ['data'] = array('tampil_rute' => $this->Modal_madel->ganti_rute($id));
		$this->load->view('rute/ganti_rute',$data);
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
	 redirect (base_url ('index.php/welcome/tampil_rute'));
	}
	function hapus_rute(){
		$id = $this->input->get('id');
		$this->Modal_madel->hapus_rute($id);
		redirect('welcome/tampil_rute');
	}
	function form_rute(){
		$this->load->view('rute/tambah_rute');
	}
	function tampil_rute(){
		$data = array('data' => $this->Modal_madel->tampil_rute()->result());
		$this->load->view('rute/tampil_rute',$data);
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
	//ruteeeeee
	//pesaaan
	function pesan(){
		$this->load->view('pesan');
	}
	//pesaaan
	function tambah_pesan()
	{
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$class = $this->input->post('class');
		$adults = $this->input->post('adults');
		$child = $this->input->post('child');

		$data = array(
			'from' => $from,
			'to' => $to,
			'depart' => $depart,
			'class' => $class,
			'adults' => $adults,
			'child' => $child
		);
		
		$this->Modal_madel->masuk_pesan($data);
		redirect('welcome/index');
	}
	function tampil(){
		$data = array('data' => $this->Modal_madel->tampil_pesan()->result());
		//$data = $this->Modal_madel->tampil_pesan() ->result();
		$this->load->view('tampil_pesanan',$data);
	}
	function hapus(){
		$id = $this->input->get('id');
		$this->Modal_madel->hapus_pesan($id);
		redirect('welcome/tampil');
	}
	function ganti(){
		$id = $this->input->get('id');
		$data ['data'] = array('tampil_pesan' => $this->Modal_madel->ganti_pesan($id));
		$this->load->view('ganti_pesanan',$data);
	}
	function proses_ganti(){
		$id = $this->input->post('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$class = $this->input->post('class');
		$adults = $this->input->post('adults');
		$child = $this->input->post('child');

		$data = array(
			'from' => $from,
			'to' => $to,
			'depart' => $depart,
			'class' => $class,
			'adults' => $adults,
			'child' => $child
		);
	 $this->Modal_madel->update($id,$data,'pesan');
	 redirect (base_url ('index.php/welcome/tampil'));
	}
}
?>
