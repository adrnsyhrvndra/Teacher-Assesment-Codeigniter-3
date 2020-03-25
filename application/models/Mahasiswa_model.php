<?php  

class Mahasiswa_model extends CI_MODEL{

	public function getAllMahasiswa(){

		$this->db->order_by("nama", "asc");

		return $query = $this->db->get('tb_mhs')->result_array();
	}

	public function hapusDataMahasiswa($nim){

		$this->db->delete('tb_mhs',['nim' => $nim]);

	}

	public function autoKodeSesi(){

		$this->db->select('RIGHT(tb_jawaban_skala.sesi,7) as autokodesesi', FALSE);

		$this->db->order_by('sesi','DESC');

		$this->db->limit(1);

		$query = $this->db->get('tb_jawaban_skala');

		if ($query->num_rows()!=0){

			$data = $query->row();

			$autokodesesi = intval($data->autokodesesi)+1;

		}

		else{

			$autokodesesi = 1;

		}

		$kode_sesi_max = str_pad($autokodesesi,7,"0",STR_PAD_LEFT);

		$kode_sesi_jadi = "SESI" .$kode_sesi_max;

		return $kode_sesi_jadi;

	}

	public function DataMaxPertanyaan(){

		$this->db->select_max('kode_pertanyaan');

		return $query = $this->db->get('tb_pertanyaan')->row_array(); 

	}


	public function evaluasiMahasiswa(){

		// Query 3 tabel join

		$this->db->select('*');    

		$this->db->join('tb_dosen', 'tb_pengajaran.kode_dosen = tb_dosen.kode_dosen');

		$this->db->join('tb_matkul', 'tb_pengajaran.kode_matkul = tb_matkul.kode_matkul');

		$this->db->order_by("nama_dosen", "asc");

		return $query = $this->db->get_where('tb_pengajaran', ['kelas' => $this->session->userdata('kelas')])->result_array();

	}

}