<?php  

class Matkul_model extends CI_MODEL{


	public function getAllMatkul(){

		$this->db->order_by("matkul_panjang", "asc");

		return $query = $this->db->get('tb_matkul')->result_array();
	}

	public function tambahDataMatkul(){

		$data = [

			"kode_matkul"		=> $this->input->post('kode_matkul', true),
			"matkul_pendek" 	=> $this->input->post('matkul_pendek', true),
			"matkul_panjang" 	=> $this->input->post('matkul_panjang', true)

		];

		$this->db->insert('tb_matkul', $data);
	}

	public function getMatkulByKodeMatkul($kode_matkul){

		return $this->db->get_where('tb_matkul',['kode_matkul' => $kode_matkul])->row_array();

	}

	public function matkulEdit($kode_matkul){

		$data = [

			"kode_matkul"		=> $this->input->post('kode_matkul', true),
			"matkul_pendek" 	=> $this->input->post('matkul_pendek', true),
			"matkul_panjang" 	=> $this->input->post('matkul_panjang', true)

		];

		$this->db->where('kode_matkul', $this->input->post('kode_matkul'));

		$this->db->update('tb_matkul', $data);

	}

	public function hapusDataMatkul($kode_matkul){

		$this->db->delete('tb_matkul',['kode_matkul' => $kode_matkul]);

	}


}