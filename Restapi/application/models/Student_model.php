<?php

class Student_model extends CI_Model{

	public function __construct(){

		$this->load->database();

			}

			public function get_students_page($limit, $offset)
			{
	
				$query = $this->db->get('student', $limit, $offset);
			    $count = $this->db->count_all_results('student');         
           
               $resp =  array('total'=> $count, 'contents'=> $query->result_array());
               return $resp;          
       }

      }

     