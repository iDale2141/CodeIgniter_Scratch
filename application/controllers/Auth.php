<?php 


	/**
	 * 
	 */
	class Auth extends CI_Controller
	{

		public function index(){
			if($this->session->has_userdata('user') && $this->session->logged_in ){
				redirect('/home');
			}
			$this->load->view('layouts/header');
			$this->load->view('login');
			$this->load->view('layouts/footer');
		}

		public function verify(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
			);
			$user = $this->users->get($where, 1);

			if($user){
				$this->session->set_userdata('user', $user);
				$this->session->set_userdata('logged_in', TRUE);
				redirect('/home');
			}
			else{
				$this->session->set_flashdata('login_error', 'Invalid credentials');
				redirect('/');
			}
		}

		public function register(){
			$this->load->view('layouts/header');
			$this->load->view('register');
			$this->load->view('layouts/footer');
		}

		public function validate_registration(){
			
			$this->form_validation->set_rules('username', 'Username', 'min_length[4]|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'Password', 'min_length[4]');
			$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'matches[password]');

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('registration_error', validation_errors());
				redirect('/register');
			}
			else{
				$admin_password = md5($this->input->post('admin_password'));
				$where = [
					'password' => $admin_password,
					'user_role' => 'developer'
				];
				$admin = $this->users->get($where, 1);
				
				if($admin){
					$row = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'user_role' => 'Personnel',
						'status'   => 'active'
					);
					$this->users->insert($row);
					redirect('/');
				}
				else{
					$this->session->set_flashdata('registration_error', 'Admin Password is incorrect');
					redirect('/register');
				}
			}
		}	
		
		public function logout(){
			$this->session->sess_destroy();
			redirect('/');
		}
		
	}

?>