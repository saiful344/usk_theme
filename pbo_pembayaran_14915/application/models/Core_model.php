<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		
	}
	public $table = "tb_pembayaran";


	public function get_all(){
		$this->db->select("tb_siswa.*,tb_pembayaran.*,tb_jenispembayaran.*");
		$this->db->from($this->table);
		$this->db->join('tb_siswa','tb_siswa.nis = tb_pembayaran.nis','left');
		$this->db->join('tb_jenispembayaran','tb_jenispembayaran.id_jenispembayaran = tb_pembayaran.id_jenispembayaran');
		$this->db->order_by('tb_pembayaran.id_pembayaran');
		return $this->db->get()->result_array();
	}
	public function get_jenis(){
		$this->db->from("tb_jenispembayaran");
		return $this->db->get()->result_array();
	}
	public function save_create($data){
		$this->db->insert($this->table,$data);
	}
	public function get_data_one($id){
		$where = array(
				"id_pembayaran" => $id
			);
		return $this->db->get_where($this->table,$where)->row_array();
	}
	public function save_edit($data,$id){
		$this->db->where('id_pembayaran',$id);
		$this->db->update($this->table,$data);
	}
	public function delete_data($id){
		$this->db->where('id_pembayaran',$id);
		$this->db->delete($this->table);
	}
}	