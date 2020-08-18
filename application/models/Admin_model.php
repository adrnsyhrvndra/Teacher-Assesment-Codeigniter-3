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
			"email" 		=> $this->input->post('email', true),
			"password"		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT)

		];

		$this->db->insert('tb_admin', $data);
	}

	public function adminEdit($kode_admin){

		$data = [

			"kode_admin"	=> $this->input->post('kode_admin', true),
			"nama_admin" 	=> $this->input->post('nama_admin', true),
			"email" 		=> $this->input->post('email', true),
			"password" 		=> password_hash($this->input->post('password', true), PASSWORD_DEFAULT)

		];

		$this->db->where('kode_admin', $this->input->post('kode_admin'));

		$this->db->update('tb_admin', $data);

	}

	public function hapusDataAdmin($kode_admin){

		$this->db->delete('tb_admin',['kode_admin' => $kode_admin]);

	}

	public function autoKodeAdmin(){

		$this->db->select('RIGHT(tb_admin.kode_admin,7) as autokodeadmin', FALSE);

		$this->db->order_by('kode_admin', 'DESC');

		$this->db->limit(1);

		$query = $this->db->get('tb_admin');

		if ($query->num_rows() != 0) {

			$data = $query->row();

			$autokodeadmin = intval($data->autokodeadmin) + 1;
		} 
		
		else {

			$autokodeadmin = 1;
		}

		$kode_admin_max = str_pad($autokodeadmin, 7, "0", STR_PAD_LEFT);

		$kode_admin_jadi = "ADM" . $kode_admin_max;

		return $kode_admin_jadi;
	}

}