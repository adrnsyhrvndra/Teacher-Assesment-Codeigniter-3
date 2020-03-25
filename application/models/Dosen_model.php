<?php  

class Dosen_model extends CI_MODEL{


	public function getAllDosen(){

		$this->db->order_by("nama_dosen", "asc");

		return $query = $this->db->get('tb_dosen')->result_array();
	}

	public function getDosenByKodeDosen($kode_dosen){

		return $this->db->get_where('tb_dosen',['kode_dosen' => $kode_dosen])->row_array();

	}

	public function tambahDataDosen(){

		$data = [

			"kode_dosen"		=> $this->input->post('kode_dosen', true),
			"nama_dosen" 		=> $this->input->post('nama_dosen', true)
		];

		$this->db->insert('tb_dosen', $data);
	}

	public function dosenEdit($kode_dosen){

		$data = [

			"kode_dosen"		=> $this->input->post('kode_dosen', true),
			"nama_dosen" 		=> $this->input->post('nama_dosen', true)	

		];

		$this->db->where('kode_dosen', $this->input->post('kode_dosen'));

		$this->db->update('tb_dosen', $data);

	}

	public function hapusDataDosen($kode_dosen){

		$this->db->delete('tb_dosen',['kode_dosen' => $kode_dosen]);

	}

}