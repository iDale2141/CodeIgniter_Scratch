<?php 

	/**
	 * 
	 */
	class MY_Model extends CI_Model
	{

		protected $table;

		function __construct(){
			parent::__construct();
		}

		public function get($where = null, $limit = null, $order_by = null){

			if(isset($where)){
				foreach ($where as $key => $value) {
					$this->db->where($key, $value);
				}
			}

			if(isset($order_by)){
				$this->db->order_by($order_by[0], $order_by[1]);
			}

			if(isset($limit)){
				$this->db->limit($limit);
			}

			$result = $this->db->get($this->table);

			return $limit == 1 ? $result->row() : $result->result();
		}

		public function insert($data){ // must be in this format array('column_name' => $value)

			if(is_array($data)){
				if($this->db->insert($this->table, $data)){
					return $this->db->insert_id();
				}
				else{
					return false;
				}
			}
			return false;
		}

		public function delete($where){
			if(!isset($where)){
				return false;
			}
			$this->db->where($where);
			$this->db->delete($this->table);
			return $this->db->affected_rows();
		}
		
		public function update($where, $columns){
			if(!isset($where) || !isset($columns)){
				return false;
			}
			$this->db->where($where);
			$this->db->update($this->table, $columns);
	     	return $this->db->affected_rows();
		}
		

	}
?>