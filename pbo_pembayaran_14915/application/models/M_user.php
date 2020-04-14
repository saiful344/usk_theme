<?php
define('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model{
	public function cek_session($password,$username)
	{
		$data = $this->db->where('username',$username)
					->limit(1)
					->get('user');
		if ($data->num_rows() > 0) {
		$password_lama = $data->row('password');
		if (password_verify($password, $password_lama)) {
			return $data->row();
		}else{
			return FALSE;
		}
		}else{
			return FALSE;
		}

	}
}

