<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->dateadded 	= date("Y-m-d");
		$this->addedby 		= "1";
    }  

	public function insert_examinee(){
		$data = array(
			'firstname'         => $this->input->post('firstname'),
			'lastname'          => $this->input->post('lastname'), 
			'dateadded'    		=> $this->dateadded,
			'addedby'      		=> $this->addedby
		);
		
		$sql = $this->db->insert('tbl_examinees', $data);  
		if($sql){ return TRUE;} else { return FALSE;} 
	}
	
}