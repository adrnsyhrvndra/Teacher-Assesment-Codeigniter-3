<?php 

class Pertanyaan_model extends CI_MODEL{

	public function getAllPertanyaan(){

		return $query = $this->db->get('tb_pertanyaan')->result_array();
	}

	public function getPertanyaanByKodePertanyaan($kode_pertanyaan){

		return $this->db->get_where('tb_pertanyaan',['kode_pertanyaan' => $kode_pertanyaan])->row_array();

	}

	public function tambahDataPertanyaan(){

		$data = [

			"kode_pertanyaan"		=> $this->input->post('kode_pertanyaan', true),
			"pertanyaan" 			=> $this->input->post('pertanyaan', true)
		];

		$this->db->insert('tb_pertanyaan', $data);
	}

	public function pertanyaanEdit($kode_pertanyaan){

		$data = [

			"kode_pertanyaan"	=> $this->input->post('kode_pertanyaan', true),
			"pertanyaan"  		=> $this->input->post('pertanyaan', true)		

		];

		$this->db->where('kode_pertanyaan', $this->input->post('kode_pertanyaan'));

		$this->db->update('tb_pertanyaan', $data);

	}

	public function hapusDataPertanyaan($kode_pertanyaan){

		$this->db->delete('tb_pertanyaan',['kode_pertanyaan' => $kode_pertanyaan]);

	}

}