<?php

	/**
	 * 
	 */
	class Home extends MY_Controller
	{

		public function index(){
			$this->page('pages/home/index', 'pages/home/jscript');
		}

		public function create(){
			
			$post = $this->input->post();
			$post['date_created'] = date('Y-m-d');

			$parents_data = [];
			$sei_data     = [];
			$osa_data     = [];
			$req_data     = [];

			// unset parents data after adding to parents_data[]
			$parents_data['father_name'] = $post['father_name'];
			$parents_data['father_occupation'] = $post['father_occupation'];
			$parents_data['mother_name'] = $post['mother_name'];
			$parents_data['mother_occupation'] = $post['mother_occupation'];
			$parents_data['guardian_name'] = $post['guardian_name'];
			$parents_data['guardian_relationship'] = $post['guardian_relationship'];
			unset($post['father_name']);
			unset($post['father_occupation']);
			unset($post['mother_name']);
			unset($post['mother_occupation']);
			unset($post['guardian_name']);
			unset($post['guardian_relationship']);

			// unsert school data after adding to sy_enrolled[]
			$sei_data['sy'] 	  = $post['sy'];
			$sei_data['semester'] = $post['semester'];
			$sei_data['grade_level'] = $post['grade_level'];
			$sei_data['school'] = $post['school'];
			$sei_data['track']  = $post['track'];
			$sei_data['strand'] = $post['strand'];
			$sei_data['status'] = 'enrolled';
			unset($post['sy']);
			unset($post['grade_level']);
			unset($post['school']);
			unset($post['semester']); // senior high
			unset($post['track']); 
			unset($post['strand']);

			// others schools
			$osa_data['last_sy'] = $post['last_sy'];
			$osa_data['last_grade'] = $post['last_grade'];
			$osa_data['last_school'] = $post['last_school'];
			$osa_data['last_school_id'] = $post['last_school_id'];
			$osa_data['last_school_addr'] = $post['last_school_addr'];
			unset($post['last_sy']);
			unset($post['last_grade']);
			unset($post['last_school']);
			unset($post['last_school_id']);
			unset($post['last_school_addr']);

			// others
			$req_data['form137']     = isset($post['form137']) ? $post['form137'] : '0';
			$req_data['good_moral']  = isset($post['good_moral']) ? $post['good_moral'] : '0';
			$req_data['nso'] 		 = isset($post['nso']) ? $post['nso'] : '0';
			$req_data['test_result'] = $post['test_result'];

			unset($post['form137']);
			unset($post['good_moral']);
			unset($post['nso']);
			unset($post['test_result']);

			$si_id = $this->student_information->insert($post);

			$parents_data['si_id'] = $si_id;
			$sei_data['si_id'] = $si_id;
			$osa_data['si_id'] = $si_id;
			$req_data['si_id'] = $si_id;

			$this->parents_information->insert($parents_data);
			$this->sei->insert($sei_data);
			$this->osa->insert($osa_data);
			$this->reqs->insert($req_data);
		}

		public function retrieve(){
			$result = $this->student_information->get();
			echo json_encode($result);
		}
		
	}

?>