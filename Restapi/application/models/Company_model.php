<?php

class Company_model extends CI_Model{

	public function __construct(){

		$this->load->database();		
	}

	public function get_company_page($limit, $offset)
			{
	
				$query = $this->db->get('user', $limit, $offset);
			    $count = $this->db->count_all_results('user');         
           
               $resp =  array('total'=> $count, 'contents'=> $query->result_array());
               return $resp;   

       }

      }
      
 
