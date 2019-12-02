<?php

	/**
	 * 
	 */
	class Student_information extends MY_Model
	{
		public $table = "student_information";
		public $pk = "si_id";

		function __construct(){
			parent::__construct();
		}
	}

?>