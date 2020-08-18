<?php  

class Pengajaran_model extends CI_MODEL{

	public function getAllPengajaran(){

		// return $query = $this->db->get('tb_pengajaran')->result_array();

		// Query 3 tabel join

		$this->db->select('*');    

		$this->db->from('tb_pengajaran','tb_dosen','tb_matkul');

		$this->db->join('tb_dosen', 'tb_pengajaran.kode_dosen = tb_dosen.kode_dosen');

		$this->db->join('tb_matkul', 'tb_pengajaran.kode_matkul = tb_matkul.kode_matkul');

		$this->db->order_by("kode_pengajaran", "asc");

		return $query = $this->db->get()->result_array();

	}

	public function getPengajaranByKodePengajaran($kode_pengajaran){

		return $this->db->get_where('tb_pengajaran',['kode_pengajaran' => $kode_pengajaran])->row_array();
		
	}

	public function pengajaranTambahData(){

		$data = [

			"kode_pengajaran"		=> $this->input->post('kode_pengajaran', true),
			"kode_matkul" 			=> $this->input->post('kode_matkul', true),
			"kode_dosen" 			=> $this->input->post('kode_dosen', true),
			"kelas" 				=> $this->input->post('kelas', true)
		];

		$this->db->insert('tb_pengajaran', $data);
	}

	public function pengajaranEdit($kode_pengajaran){

		$data = [

			"kode_pengajaran"		=> $this->input->post('kode_pengajaran', true),
			"kode_matkul" 			=> $this->input->post('kode_matkul', true),
			"kode_dosen" 			=> $this->input->post('kode_dosen', true),
			"kelas" 				=> $this->input->post('kelas', true)

		];

		$this->db->where('kode_pengajaran', $this->input->post('kode_pengajaran'));

		$this->db->update('tb_pengajaran', $data);

	}

	public function autoKodePengajaran(){

		$this->db->select('RIGHT(tb_pengajaran.kode_pengajaran,5) as autokodepengajaran', FALSE);

		$this->db->order_by('kode_pengajaran','DESC');

		$this->db->limit(1);

		$query = $this->db->get('tb_pengajaran');

		if ($query->num_rows()!=0){

			$data = $query->row();

			$autokodepengajaran = intval($data->autokodepengajaran)+1;

		}

		else{

			$autokodepengajaran = 1;

		}

		$kode_pengajaran_max = str_pad($autokodepengajaran,5,"0",STR_PAD_LEFT);

		$kode_pengajaran_jadi = "PENG" .$kode_pengajaran_max;

		return $kode_pengajaran_jadi;

	}

	public function hapusDataPengajaran($kode_pengajaran){

		$this->db->delete('tb_pengajaran',['kode_pengajaran' => $kode_pengajaran]);

	}

}