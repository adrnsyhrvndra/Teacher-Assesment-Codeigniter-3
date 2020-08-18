<?php  

class Jawaban_model extends CI_MODEL{

	public function getAllJawaban(){

		// return $query = $this->db->get('tb_pengajaran')->result_array();

		// Query 3 tabel join

		$this->db->select('*');    

		$this->db->from('tb_jawaban_skala','tb_dosen','tb_matkul','tb_mhs','tb_pertanyaan');

		$this->db->join('tb_dosen', 'tb_jawaban_skala.kode_dosen = tb_dosen.kode_dosen');

        $this->db->join('tb_matkul', 'tb_jawaban_skala.kode_matkul = tb_matkul.kode_matkul');
        
        $this->db->join('tb_mhs', 'tb_jawaban_skala.nim = tb_mhs.nim');
        
		$this->db->join('tb_pertanyaan', 'tb_jawaban_skala.kode_pertanyaan = tb_pertanyaan.kode_pertanyaan');

		$this->db->order_by("sesi", "asc");

		return $query = $this->db->get()->result_array();

	}

	public function getJawaban(){

		$this->db->select('*');    

		$this->db->join('tb_matkul', 'tb_pengajaran.kode_matkul = tb_matkul.kode_matkul');

		return $query = $this->db->get_where('tb_pengajaran', ['kode_dosen' => $this->session->userdata('kode_dosen')])->result_array();

	}
	
	public function getAllJawabanBynim(){

		$this->db->select('*');    

		$this->db->join('tb_mhs', 'tb_jawaban_skala.nim = tb_mhs.nim');

		$this->db->join('tb_matkul', 'tb_jawaban_skala.kode_matkul = tb_matkul.kode_matkul');

		$this->db->join('tb_pertanyaan', 'tb_jawaban_skala.kode_pertanyaan = tb_pertanyaan.kode_pertanyaan');

		return $query = $this->db->get_where('tb_jawaban_skala', ['kode_dosen' => $this->session->userdata('kode_dosen')])->result_array();

	}

	public function getAllJawabanBynim2(){

		$this->db->select('*');    

		$this->db->join('tb_mhs', 'tb_jawaban_esai.nim = tb_mhs.nim');

		$this->db->join('tb_matkul', 'tb_jawaban_esai.kode_matkul = tb_matkul.kode_matkul');

		return $query = $this->db->get_where('tb_jawaban_esai', ['kode_dosen' => $this->session->userdata('kode_dosen')])->result_array();

	}
    
}