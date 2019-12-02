<?php 

	/**
	 * 
	 */
	class MY_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->has_userdata('user') || !$this->session->logged_in ){
				redirect('/');
			}
		}

		public function page($content_url, $script = null){
			$this->load->view('layouts/header');
			$this->load->view('layouts/sidebar');
			$content_url ? $this->load->view($content_url) : '';
			$script ? $this->load->view($script) : '';
			$this->load->view('layouts/footer');
		}
	}

?>