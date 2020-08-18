<?php

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->library('form_validation');

		$this->load->helper('date');

	}

	public function index(){

		// Proses cek login

		$this->form_validation->set_rules('email', 'alamat email', 'required|trim|valid_email');

		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Polban | Halaman login';

			$this->load->view('templates/header',$data);

			$this->load->view('login/index',$data);

			$this->load->view('templates/footer');


		} else {

			// Dipisah di private function _login agar tidak panjang

            $this->_login();

		}

	}

	private function _login(){

		$email 		= $this->input->post('email');

		$password 	= $this->input->post('password');

		$mahasiswa 	= $this->db->get_where('tb_mhs', ['email' => $email])->row_array();

		$admin 		= $this->db->get_where('tb_admin', ['email' => $email])->row_array();

		// var_dump($mahasiswa);

		// die;

		if($mahasiswa){

			if($mahasiswa['aktifasi'] == 1) {

				// Cek password

				if(password_verify($password, $mahasiswa['password'])){

					$data = [

						"nim"	=> $mahasiswa['nim'],
						"kelas"	=> $mahasiswa['kelas']

					];

					$this->session->set_userdata($data);

					redirect('mahasiswa/index');

				} else {

					$this->session->set_flashdata('flashgagal',' login gagal,cek kembali passwordmu');

					redirect('login/index');

				}
				
			} else {

				$this->session->set_flashdata('flashaktifasi',' belum aktifasi email');

				redirect('login/index');
			}

		} elseif($admin) {

			if(password_verify($password, $admin['password'])){

				$data = [

					"kode_admin"	=> $admin['kode_admin']

				];

				$this->session->set_userdata($data);

				redirect('admin/index');

			} else {

				$this->session->set_flashdata('flashgagal',' login gagal');

				redirect('login/index');

			}

		}  

		else {

			$this->session->set_flashdata('flashgagal',' login gagal');

			redirect('login/index');

		}

	}


	public function register(){

		// Validation rules

		$this->form_validation->set_rules('tanggal_pembuatan', 'Tanggal Pembuatan', 'required');

		$this->form_validation->set_rules('nim', 'nim', 'required|numeric|min_length[10]|max_length[10]|is_unique[tb_mhs.nim]|trim');

		$this->form_validation->set_rules('nama', 'nama', 'required|max_length[35]|trim');

		$this->form_validation->set_rules('email', 'alamat email', 'required|trim|valid_email|is_unique[tb_mhs.email]');

		$this->form_validation->set_rules('password1', 'password', 'required|min_length[6]|max_length[15]|matches[password2]|trim');

		$this->form_validation->set_rules('password2', 'confirm password', 'required|matches[password1]|trim');

		if ($this->form_validation->run() == FALSE){
			
			$data['judul'] = 'Polban | Halaman register';

			$this->load->view('templates/header',$data);

			$this->load->view('login/register',$data);

			$this->load->view('templates/footer');

		}

		else{

			$data = [

				"nim"				=> htmlspecialchars($this->input->post('nim', true)),

				"nama"				=> htmlspecialchars($this->input->post('nama', true)),

				"kelas"				=> htmlspecialchars($this->input->post('kelas', true)),

				"tanggal_pembuatan"	=> htmlspecialchars($this->input->post('tanggal_pembuatan', true)),

				"email"				=> htmlspecialchars($this->input->post('email', true)),

				"aktifasi"			=> 0,

				"password"			=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT)

			];

			// Siapkan token

			$token = base64_encode(random_bytes(45));

			$mahasiswa_token = [

				"email"	=> htmlspecialchars($this->input->post('email', true)),

				"token"	=> $token,

				"tanggal_pembuatan"	=> time()
			];

			$this->db->insert('tb_mhs', $data);

			$this->db->insert('tb_token', $mahasiswa_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('flash',' registrasi berhasil,silahkan buka gmail mu untuk melakukan aktifasi');

			redirect('login/index');

		}

	}

	public function verify(){

		$email 		= $this->input->get('email'); 

		$token 		= $this->input->get('token'); 

		$mahasiswa 	= $this->db->get_where('tb_mhs', ['email' => $email])->row_array();

		if($mahasiswa){

			$mahasiswa_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();

			// Cek password

				if($mahasiswa_token){

					$this->session->set_flashdata('flash',' aktifasi berhasil');

					$this->db->set('aktifasi', 1);

					$this->db->where('email', $email);

					$this->db->update('tb_mhs');

					redirect('login/index');


				} else {

					$this->session->set_flashdata('flashgagal',' validasi token tidak ditemukan');

					redirect('login/index');

				}

		} else {

			$this->session->set_flashdata('flashgagal',' aktifasi gagal,pakai email yang benar!!!');

			redirect('login/index');

		}

	}

	public function logout(){

		$this->session->unset_userdata('email');

		redirect('login/index');

	}


	public function forgotPassword(){

		$this->form_validation->set_rules('email', 'alamat email', 'required|trim|valid_email');	

		if ($this->form_validation->run() == FALSE){

			$data['judul'] = 'Polban | Halaman lupa password';

			$this->load->view('templates/header',$data);

			$this->load->view('login/forgotpassword',$data);

			$this->load->view('templates/footer');


		} else {

			$email 		= $this->input->post('email');

			$mahasiswa 	= $this->db->get_where('tb_mhs', ['email' => $email , 'aktifasi' => 1])->row_array();

			if($mahasiswa){

				$token = base64_encode(random_bytes(45));

				$mahasiswa_token = [

				"email"	=> $email,

				"token"	=> $token,

				"tanggal_pembuatan"	=> time()
			];

			$this->db->insert('tb_token', $mahasiswa_token);

			$this->_sendEmail($token, 'forgot');

			$this->session->set_flashdata('flash',' ganti password berhasil,silahkan cek email mu untuk mengganti password');

			redirect('login/index');

			} else {

				$this->session->set_flashdata('flashnoemail',' terlebih dahulu atau aktifasi email terlebih dahulu');

				redirect('login/forgotPassword');

			}

		}

	}

	public function resetPassword(){

		$email 		= $this->input->get('email'); 

		$token 		= $this->input->get('token'); 

		$mahasiswa 	= $this->db->get_where('tb_mhs', ['email' => $email])->row_array();

		if($mahasiswa){

			$mahasiswa_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();

			if($mahasiswa_token){

				$this->session->set_userdata('reset_email', $email);

				$this->changePassword();

			} else {

				$this->session->set_flashdata('flashgagal',' reset password gagal');

				redirect('login/index');

			}


		} else {

			$this->session->set_flashdata('flashgagal',' reset password gagal');

			redirect('login/index');

		}

	}

	public function changePassword(){

		if(!$this->session->userdata('reset_email')){

			redirect('login/index');

		}

		$this->form_validation->set_rules('password1', 'password', 'required|min_length[6]|max_length[15]|matches[password2]|trim');

		$this->form_validation->set_rules('password2', 'confirm password', 'required|matches[password1]|trim');

		if ($this->form_validation->run() == FALSE){

			$data['judul'] = 'Polban | Halaman ganti password';

			$this->load->view('templates/header',$data);

			$this->load->view('login/changepassword',$data);

			$this->load->view('templates/footer');

		}

		else {

			$password 	= password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

			$email 	  	= $this->session->userdata('reset_email');

			$this->db->set('password', $password);

			$this->db->where('email', $email);

			$this->db->update('tb_mhs');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('flash',' ganti password berhasil');

			redirect('login/index');

		}	

	}

	private function _sendEmail($token, $type){

		$config = [

			"protocol" 	=> "smtp",

			"smtp_host" => "ssl://smtp.googlemail.com",

			"smtp_user" => "adrimedia.indonesia@gmail.com",

			"smtp_pass" => "adridinda",

			"smtp_port" => 465,

			"mailtype" 	=> "html",

			"charset" 	=> "utf-8",

			"newline" 	=> "\r\n"

		];

		$this->load->library('email', $config);

		$this->email->initialize($config); 

		$this->email->from('adrimedia.indonesia@gmail.com', 'Adrimedia');

		$this->email->to($this->input->post('email'));

		if($type == 'verify' ){

			$this->email->subject('Verifikasi akun');

			$this->email->message('Klik link ini untuk verifikasi akun anda <a href="'. base_url() . 'login/verify?email=' . $this->input->post('email', true) . '&token=' . urlencode($token) . '">Activate</a> ');

		} else if($type == 'forgot'){

			$this->email->subject('Ganti password');

			$this->email->message('Klik link ini untuk mengganti password anda <a href="'. base_url() . 'login/resetPassword?email=' . $this->input->post('email', true) . '&token=' . urlencode($token) . '">Ganti password</a> ');

		}		

		if ($this->email->send()){

			return true;

		} else {

			echo $this->email->print_debugger();

			die;

		}

	}

}
