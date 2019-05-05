<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller{

	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    function page(){

    	$limit = $this->input->get('size', TRUE);
    	$page= $this->input->get('page', TRUE);
    	$offset = $page * $limit;
    	

        $result = $this->Student_model->get_students_page($limit, $offset);
        echo json_encode($result);
    }

}
