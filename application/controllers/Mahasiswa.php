<?php

class Mahasiswa extends CI_Controller {

	public function __construct(){

		parent::__construct();

		// Untuk melakukan session

		if(!$this->session->userdata('nim')){

			redirect('login');

		}

		$this->load->model('Pertanyaan_model');

		$this->load->model('Admin_model');

		$this->load->model('Matkul_model');

		$this->load->model('Dosen_model');

		$this->load->model('Mahasiswa_model');

		$this->load->model('Pengajaran_model');

		$this->load->library('form_validation');

		$this->load->helper('date');

	}

	public function index(){

		$data['identitas'] = $this->db->get_where('tb_mhs', ['nim' => $this->session->userdata('nim'),'kelas' => $this->session->userdata('kelas')])->row_array();

		$data['evaluasi_mahasiswa'] = $this->Mahasiswa_model->evaluasiMahasiswa();

		$data['auto_kode_sesi'] = $this->Mahasiswa_model->autoKodeSesi();

		$data['pertanyaan'] = $this->Pertanyaan_model->getAllPertanyaan();

		$data['max_pertanyaan'] = $this->Mahasiswa_model->DataMaxPertanyaan();

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		$this->form_validation->set_rules('nim', 'nim', 'required|trim');

		$this->form_validation->set_rules('sesi[]', 'sesi', 'required|trim');

		$this->form_validation->set_rules('kode_pertanyaan[]', 'kode pertanyaan', 'required|numeric|trim');

		$this->form_validation->set_rules('kode_dosen[]', 'kode dosen', 'required|trim');

		$this->form_validation->set_rules('kode_matkul[]', 'kode matkul', 'required|trim');

		$this->form_validation->set_rules('nilai[]', 'jawaban nilai', 'required|numeric|trim');

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Polban | Halaman penilaian';

			$this->load->view('templates/header',$data);

			$this->load->view('mahasiswa/index',$data);

			$this->load->view('templates/footer');


		} else {

			$nim 				= $this->input->post('nim');

			$sesi 				= $this->input->post('sesi[]');

			$kode_pertanyaan 	= $this->input->post('kode_pertanyaan[]');

			$kode_dosen 		= $this->input->post('kode_dosen[]');

			$kode_matkul 		= $this->input->post('kode_matkul[]');

			$nilai 				= $this->input->post('nilai[]');

			$data = array();
		
			$index = 0;

			foreach($sesi as $datasesi){ 

				array_push($data, array(

					'sesi'				=>$sesi[$index],  

					'nim'				=>$nim,

					'kode_pertanyaan'	=>$kode_pertanyaan[$index],  

					'kode_dosen'		=>$kode_dosen[$index],

					'kode_matkul'		=>$kode_matkul[$index], 

					'nilai'				=>$nilai[$index], 

				));
				
				$index++;
			}

			$this->Mahasiswa_model->tambahDataJawaban($data);

			redirect('mahasiswa/evaluasi');

		}

	}

	public function evaluasi(){

		$data['identitas'] = $this->db->get_where('tb_mhs', ['nim' => $this->session->userdata('nim'),'kelas' => $this->session->userdata('kelas')])->row_array();

		$data['evaluasi_mahasiswa'] = $this->Mahasiswa_model->evaluasiMahasiswa();

		$data['auto_kode_sesi'] = $this->Mahasiswa_model->autoKodeSesi();

		$data['pertanyaan'] = $this->Pertanyaan_model->getAllPertanyaan();

		$data['max_pertanyaan'] = $this->Mahasiswa_model->DataMaxPertanyaan();

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		$this->form_validation->set_rules('nim', 'nim', 'required|trim');

		$this->form_validation->set_rules('sesi[]', 'sesi', 'required|trim');

		$this->form_validation->set_rules('kode_dosen[]', 'kode dosen', 'required|trim');

		$this->form_validation->set_rules('kode_matkul[]', 'kode matkul', 'required|trim');

		$this->form_validation->set_rules('dipertahankan[]', 'dipertahankan', 'required');

		$this->form_validation->set_rules('ditingkatkan[]', 'ditingkatkan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Polban | Halaman evaluasi';

			$this->load->view('templates/header',$data);

			$this->load->view('mahasiswa/evaluasi',$data);

			$this->load->view('templates/footer');

		} else {

			$nim 				= $this->input->post('nim');

			$sesi 				= $this->input->post('sesi[]');

			$kode_dosen 		= $this->input->post('kode_dosen[]');

			$kode_matkul 		= $this->input->post('kode_matkul[]');

			$ditingkatkan 		= $this->input->post('ditingkatkan[]');

			$dipertahankan 		= $this->input->post('dipertahankan[]');

			$data = array();
		
			$index = 0;

			foreach($sesi as $datasesi){ 

				array_push($data, array(

					'sesi'				=>$sesi[$index],  

					'nim'				=>$nim,

					'kode_dosen'		=>$kode_dosen[$index],

					'kode_matkul'		=>$kode_matkul[$index], 

					'ditingkatkan'		=>$ditingkatkan[$index],

					'dipertahankan'		=>$dipertahankan[$index]

				));
				
				$index++;
		}

		$this->Mahasiswa_model->tambahDataJawabanEsai($data);

		redirect('login/logout');

		}

	}

}