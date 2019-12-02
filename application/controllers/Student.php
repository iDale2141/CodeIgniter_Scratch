<?php


/**
 * 
 */
class Student extends MY_Controller
{
	public function index(){
		$this->page('pages/student/index', 'pages/student/jscript');
	}
}

?>