<?php

	/**
	 * 
	 */
	class Requirements_submitted extends MY_Model
	{
		public $table = "requirements_submitted";
		public $pk = 'req_id';

		function __construct(){
			parent::__construct();
		}
	}

?>