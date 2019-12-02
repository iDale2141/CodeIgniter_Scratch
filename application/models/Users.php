<?php 

	/**
	 * 
	 */
	class Users extends MY_model
	{
		public $table = "users";
		public $pk = "user_id";

		function __construct(){
			parent::__construct();
		}
	}

?>