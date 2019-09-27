<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');

		if( !$this->session->has_userdata('user_data') ){
			redirect('/');
		}
		// $this->session->unset_userdata('user_data');
	}

	public function index(){
		$this->load->view('layouts/header');
		$this->load->view('pages/index');
		$this->load->view('layouts/footer');
	}

	public function student_list(){
		
	    $arr[] = [
	        "value" => "hello",
			"label" => "daemon"
	    ];

	    echo json_encode($arr);

	}

}

?>