<?php 

class Admin_model extends CI_MODEL{

	public function getAllAdmin(){

		return $query = $this->db->get('tb_admin')->result_array();
	}

	public function getAdminByKodeAdmin($kode_admin){

		return $this->db->get_where('tb_admin',['kode_admin' => $kode_admin])->row_array();

	}

	public function tambahDataAdmin(){

		$data = [

			"kode_admin"	=> $this->input->post('kode_admin', true),
			"nama_admin" 	=> $this->input->post('nama_admin', true),
			"username" 		=> $this->input->post('username', true),
			"password" 		=> $this->input->post('password', true)

		];

		$this->db->insert('tb_admin', $data);
	}

	public function adminEdit($kode_admin){

		$data = [

			"kode_admin"	=> $this->input->post('kode_admin', true),
			"nama_admin" 	=> $this->input->post('nama_admin', true),
			"username" 		=> $this->input->post('username', true),
			"password" 		=> password_hash($this->input->post('password', true), PASSWORD_DEFAULT)

		];

		$this->db->where('kode_admin', $this->input->post('kode_admin'));

		$this->db->update('tb_admin', $data);

	}

	public function hapusDataAdmin($kode_admin){

		$this->db->delete('tb_admin',['kode_admin' => $kode_admin]);

	}

}