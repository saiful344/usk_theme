<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('core_model');
	}
	
	public function index(){
		$data['data'] = $this->core_model->get_all();
		$this->load->view('index.php',$data);
	}
	public function view_create(){
		$data['jenis'] = $this->core_model->get_jenis();
		$this->load->view('create',$data);
	}
	public function save_create(){
		$data = [
			"nis" => $this->input->post('nis'),
			"tgl_pembayaran" => $this->input->post('tgl_pembayaran'),
			"id_jenispembayaran" => $this->input->post('jenis'),
			"nominal_pembayaran" => $this->input->post('nominal')
		];
		$this->session->set_flashdata('value','Selamat Data Baru Di tambahkan');
		$this->core_model->save_create($data);
		redirect('core');
	}
	public function view_edit($id){
		$data['content'] = $this->core_model->get_jenis();
		$data['data'] = $this->core_model->get_data_one($id);
		$this->load->view('edit',$data);
	}
	public function save_edit(){
		$id = $this->input->post('id');
		$data = [
			"nis" => $this->input->post('nis'),
			"tgl_pembayaran" => $this->input->post('tgl_pembayaran'),
			"id_jenispembayaran" => $this->input->post('jenis'),
			"nominal_pembayaran" => $this->input->post('nominal')
		];

		$this->core_model->save_edit($data,$id);
		redirect('core');
	}
	public function delete_data($id){
		$this->core_model->delete_data($id);
		redirect('core');
	}
}