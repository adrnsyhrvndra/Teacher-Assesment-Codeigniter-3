<?php

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();

		// Untuk melakukan session

		if(!$this->session->userdata('kode_admin')){

			redirect('login');

		}

		$this->load->model('Pertanyaan_model');

		$this->load->model('Admin_model');

		$this->load->model('Matkul_model');

		$this->load->model('Dosen_model');

		$this->load->model('Mahasiswa_model');

		$this->load->model('Pengajaran_model');

		$this->load->model('Jawaban_model');

		$this->load->library('form_validation');

		$this->load->library('session');

		$this->load->helper('date');

	}

	public function index(){

		// var_dump($data);

		// echo $data->main->temp_max;

		// echo $data->main->temp_min;
		
		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['jumlahdatamahasiswa'] = $this->db->count_all('tb_mhs');

		$data['jumlahdatadosen'] = $this->db->count_all('tb_dosen');

		$data['jumlahdatamatkul'] = $this->db->count_all('tb_matkul');

		$data['jumlahdatapertanyaan'] = $this->db->count_all('tb_pertanyaan');

		$data['jumlahdatapengajaran'] = $this->db->count_all('tb_pengajaran');

		$data['jumlahdatajawabanskala'] = $this->db->count_all('tb_jawaban_skala');

		$data['jumlahdatajawabanesai'] = $this->db->count_all('tb_jawaban_esai');

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/index');

		$this->load->view('templatesadmin/footer');

	}

	public function pertanyaan(){

		$this->load->model('Pertanyaan_model');

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['pertanyaan'] = $this->Pertanyaan_model->getAllPertanyaan();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/pertanyaan', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function pertanyaanTambah(){

		$data['judul'] = 'Admin page';

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_pertanyaan', 'kode_pertanyaan', 'required|numeric');

		$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required');

		if ($this->form_validation->run() == FALSE){

			redirect('admin/pertanyaan');

		}

		else{

            $this->Pertanyaan_model->tambahDataPertanyaan();

            $this->session->set_flashdata('flash','ditambah');

			redirect('admin/pertanyaan');
			
        }


	}

	public function pertanyaanEdit($kode_pertanyaan){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['pertanyaan'] = $this->Pertanyaan_model->getPertanyaanByKodePertanyaan($kode_pertanyaan);

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_pertanyaan', 'kode pertanyaan', 'required|numeric');

		$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required');

			if ($this->form_validation->run() == FALSE){

			$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/pertanyaan_edit', $data);

			$this->load->view('templatesadmin/footer');

		}

		else{

            $this->Pertanyaan_model->pertanyaanEdit($kode_pertanyaan);

            $this->session->set_flashdata('flash','diubah');

            redirect('admin/pertanyaan');

        }
		
	}

	public function pertanyaanHapus($kode_pertanyaan){

		$this->load->model('Pertanyaan_model');

		$this->Pertanyaan_model->hapusDataPertanyaan($kode_pertanyaan);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/pertanyaan');

	}

	public function admin(){

		$this->load->model('Admin_model');

		$data['auto_kode_admin'] = $this->Admin_model->autoKodeAdmin();

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['admin'] = $this->Admin_model->getAllAdmin();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/admin', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function adminTambah(){

		$this->load->model('Admin_model');

		$data['judul'] = 'Admin page';

		$this->load->library('form_validation');

		$data['auto_kode_admin'] = $this->Admin_model->autoKodeAdmin();

		$this->form_validation->set_rules('kode_admin', 'kode admin', 'required');

		$this->form_validation->set_rules('nama_admin', 'nama admin', 'required');

		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE){
			
			redirect('admin/pertanyaan');

		}

		else{

            $this->Admin_model->tambahDataAdmin();

            $this->session->set_flashdata('flash','ditambah');

            redirect('admin/admin');
		
		}

	}

	public function adminEdit($kode_admin){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['admin'] = $this->Admin_model->getAdminByKodeAdmin($kode_admin);

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_admin', 'kode admin', 'required|trim');

		$this->form_validation->set_rules('nama_admin', 'nama admin', 'required|trim');

		$this->form_validation->set_rules('email', 'alamat email', 'required|trim|valid_email');

		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/admin_edit', $data);

			$this->load->view('templatesadmin/footer');

		}

		else{

			$password = $this->input->post('password');

			if(password_verify($password, $data['Namaku']['password'])){

				$this->Admin_model->adminEdit($kode_admin);

	            $this->session->set_flashdata('flash','diubah');

	            redirect('admin/admin');	

			} else {

				$this->session->set_flashdata('flashgagal',' edit data gagal');

				redirect('admin/admin');

			}  

		}
		
	}

	public function changePassword(){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		// Untuk validasi form

		$this->form_validation->set_rules('password', 'password', 'required|trim');

		$this->form_validation->set_rules('new_password', 'password baru', 'required|trim');

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE){

		 	$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/change_password', $data);

			$this->load->view('templatesadmin/footer');

		 } else {

		 	$password = $this->input->post('password');

            $new_password = $this->input->post('new_password');

            if (!password_verify($password, $data['Namaku']['password'])) {

                $this->session->set_flashdata('flashgagal',' ganti password gagal');

                redirect('admin/changePassword');

            }

            else {

            	 if ($password == $new_password) {

                    $this->session->set_flashdata('flashgagal',' gagal dikarenakan password tidak boleh sama dengan yang sebelumnya');

                    redirect('admin/changePassword');

                } else {

                    // password sudah ok

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);

                    $this->db->where('kode_admin', $this->session->userdata('kode_admin'));

                    $this->db->update('tb_admin');

                    $this->session->set_flashdata('flash',' diubah');

                    redirect('admin/index');

                }

            }

		}

	}

	public function adminHapus($kode_admin){

		$this->load->model('Admin_model');

		$this->Admin_model->hapusDataAdmin($kode_admin);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/admin');

	}

	public function matkul(){

		$this->load->model('Matkul_model');

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/matkul', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function matkulTambah(){

		$this->load->model('Matkul_model');

		$data['judul'] = 'Admin page';

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_matkul', 'kode matkul', 'required');

		$this->form_validation->set_rules('matkul_pendek', 'matkul pendek', 'required');

		$this->form_validation->set_rules('matkul_panjang', 'matkul panjang', 'required');

		if ($this->form_validation->run() == FALSE){

		 	redirect('admin/matkul');

		 }

		 else{

            $this->Matkul_model->tambahDataMatkul();

            $this->session->set_flashdata('flash','ditambah');

            redirect('admin/matkul');
         
         }

	}

	public function matkulEdit($kode_matkul){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['matkul'] = $this->Matkul_model->getMatkulByKodeMatkul($kode_matkul);

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_matkul', 'kode matkul', 'required');

		$this->form_validation->set_rules('matkul_pendek', 'matkul pendek', 'required');

		$this->form_validation->set_rules('matkul_panjang', 'matkul panjang', 'required');

		 if ($this->form_validation->run() == FALSE){

		 	$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/matkul_edit', $data);

			$this->load->view('templatesadmin/footer');

		 }

		 else{

            $this->Matkul_model->matkulEdit($kode_matkul);

            $this->session->set_flashdata('flash','diubah');

            redirect('admin/matkul');
         
         }
		
	}

	public function matkulHapus($kode_matkul){

		$this->load->model('Matkul_model');

		$this->Matkul_model->hapusDataMatkul($kode_matkul);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/matkul');

	}

	public function dosen(){

		$this->load->model('Dosen_model');

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/dosen', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function dosenTambah(){

		$this->load->model('Dosen_model');

		$data['judul'] = 'Admin page';

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_dosen', 'kode matkul', 'required');

		$this->form_validation->set_rules('nama_dosen', 'nama dosen', 'required');

		if ($this->form_validation->run() == FALSE){

		 	redirect('admin/dosen');

		 }

		 else{

            $this->Dosen_model->tambahDataDosen();

            $this->session->set_flashdata('flash','ditambah');

            redirect('admin/dosen');
         
         }


	}

	public function dosenEdit($kode_dosen){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['dosen'] = $this->Dosen_model->getDosenByKodeDosen($kode_dosen);

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_dosen', 'kode matkul', 'required');

		$this->form_validation->set_rules('nama_dosen', 'nama dosen', 'required');

		 if ($this->form_validation->run() == FALSE){

		 	$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/dosen_edit', $data);

			$this->load->view('templatesadmin/footer');

		 }

		 else{

            $this->Dosen_model->dosenEdit($kode_dosen);

            $this->session->set_flashdata('flash','diubah');

            redirect('admin/dosen');
         
         }
		
	}

	public function dosenHapus($kode_dosen){

		$this->load->model('Dosen_model');

		$this->Dosen_model->hapusDataDosen($kode_dosen);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/dosen');

	}

	public function mahasiswa(){

		$this->load->model('Mahasiswa_model');

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/mahasiswa', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function mahasiswaHapus($nim){

		$this->load->model('Mahasiswa_model');

		$this->Mahasiswa_model->hapusDataMahasiswa($nim);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/mahasiswa');

	}

	public function pengajaran(){

		$this->load->model('Pengajaran_model');

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['pengajaran'] = $this->Pengajaran_model->getAllPengajaran();

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/pengajaran', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function tambahDataPengajaran(){

		$this->load->model('Pengajaran_model');

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['judul'] = 'Admin page';

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		$data['auto_kode_pengajaran'] = $this->Pengajaran_model->autoKodePengajaran();

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_pengajaran', 'kode pengajaran', 'required');

		$this->form_validation->set_rules('kode_dosen', 'kode dosen', 'required');

		$this->form_validation->set_rules('kode_matkul', 'kode matkul', 'required');

		$this->form_validation->set_rules('kelas', 'kelas', 'required');

		 if ($this->form_validation->run() == FALSE){

		 	$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/pengajaran_tambah', $data);

			$this->load->view('templatesadmin/footer');

		 }

		 else{

            $this->Pengajaran_model->pengajaranTambahData();

            $this->session->set_flashdata('flash','ditambahkan');

            redirect('admin/pengajaran');
         
         }

	}

	public function pengajaranEdit($kode_pengajaran){

		$data['judul'] = 'Admin page';

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['pengajaran'] = $this->Pengajaran_model->getPengajaranByKodePengajaran($kode_pengajaran);

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$data['matkul'] = $this->Matkul_model->getAllMatkul();

		// Untuk validasi form

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode_pengajaran', 'kode pengajaran', 'required');

		$this->form_validation->set_rules('kode_dosen', 'kode dosen', 'required');

		$this->form_validation->set_rules('kode_matkul', 'kode matkul', 'required');

		$this->form_validation->set_rules('kelas', 'kelas', 'required');

		 if ($this->form_validation->run() == FALSE){

		 	$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/pengajaran_edit', $data);

			$this->load->view('templatesadmin/footer');

		 }

		 else{

            $this->Pengajaran_model->pengajaranEdit($kode_pengajaran);

            $this->session->set_flashdata('flash','diubah');

            redirect('admin/pengajaran');
         
         }
		
	}

	public function pengajaranHapus($kode_pengajaran){

		$this->load->model('Pengajaran_model');

		$this->Pengajaran_model->hapusDataPengajaran($kode_pengajaran);

		$this->session->set_flashdata('flash','dihapus');

		redirect('admin/pengajaran');

	}

	public function pilih_jawaban_skala(){

		$this->load->model('Jawaban_model');

		$this->load->model('Dosen_model');

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$data['pengajaran'] = $this->Pengajaran_model->getAllPengajaran();

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$this->load->library('form_validation');

		$this->load->library('session');

		$this->form_validation->set_rules('kode_dosen', 'kode_dosen', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Admin page';

			$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/pilih_jawaban_skala', $data);

			$this->load->view('templatesadmin/footer');

		} else {

			$kode_dosen 	= $this->input->post('kode_dosen');

			$dosen 			= $this->db->get_where('tb_dosen', ['kode_dosen' => $kode_dosen])->row_array();

			if($dosen){

				$data = [

					"kode_dosen"	=> $dosen['kode_dosen'],
					"nama_dosen"	=> $dosen['nama_dosen']
				];

				$this->session->set_userdata($data);

				redirect('admin/jawaban_skala');

			}

		}

	}

	public function jawaban_skala(){

		$this->load->model('Jawaban_model');

		$data['judul'] 		= 'Admin page';

		$data['Namaku'] 	= $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['data_dosen'] = $this->db->get_where('tb_dosen', ['kode_dosen' => $this->session->userdata('kode_dosen')])->row_array();

		$data['jawaban'] 	= $this->Jawaban_model->getAllJawabanBynim();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/jawaban_skala', $data);

		$this->load->view('templatesadmin/footer');

	}

	public function pilih_jawaban_esai(){

		$this->load->model('Jawaban_model');

		$this->load->model('Dosen_model');

		$data['dosen'] = $this->Dosen_model->getAllDosen();

		$data['pengajaran'] = $this->Pengajaran_model->getAllPengajaran();

		$data['Namaku'] = $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$this->load->library('form_validation');

		$this->load->library('session');

		$this->form_validation->set_rules('kode_dosen', 'kode_dosen', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Admin page';

			$this->load->view('templatesadmin/header', $data);

			$this->load->view('admin/pilih_jawaban_esai', $data);

			$this->load->view('templatesadmin/footer');

		} else {

			$kode_dosen 	= $this->input->post('kode_dosen');

			$dosen 			= $this->db->get_where('tb_dosen', ['kode_dosen' => $kode_dosen])->row_array();

			if($dosen){

				$data = [

					"kode_dosen"	=> $dosen['kode_dosen'],
					"nama_dosen"	=> $dosen['nama_dosen']
				];

				$this->session->set_userdata($data);

				redirect('admin/jawaban_esai');

			}

		}

	}

	public function jawaban_esai(){

		$this->load->model('Jawaban_model');

		$data['judul'] 		= 'Admin page';

		$data['Namaku'] 	= $this->db->get_where('tb_admin', ['kode_admin' => $this->session->userdata('kode_admin')])->row_array();

		$data['data_dosen'] = $this->db->get_where('tb_dosen', ['kode_dosen' => $this->session->userdata('kode_dosen')])->row_array();

		$data['datku'] 		= $this->db->get_where('tb_jawaban_esai', ['nim' => $this->session->userdata('nim')])->row_array();

		$data['jawaban'] 	= $this->Jawaban_model->getAllJawabanBynim2();

		$this->load->view('templatesadmin/header', $data);

		$this->load->view('admin/jawaban_esai', $data);

		$this->load->view('templatesadmin/footer');

	}

}
