<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Company_model');		
	}

	function page(){

	$limit = $this->input->get('size', TRUE);
    	$page= $this->input->get('page', TRUE);
 //   	$[‘num_links’] = 2;
    	$offset = $page * $limit;
    	

        $result = $this->Company_model->get_company_page($limit, $offset);
        echo json_encode($result);
    }
}










