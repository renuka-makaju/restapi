<?php

class NameController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Name_model');
    }
     
    function response($data, $status)
    {
        
        echo json_encode($data);
        exit;
    }
    
    function menu1()
    {
        
        $result = $this->Name_model->fetch_all_menu1();
        if ($result) {
            $this->response($result, 200);
            exit;
             } else {
            $this->response("Invalid", 404);
            exit;
        }
    }
    
    function menu2()
    {
        $segs   = $this->uri->segment_array();
        $this->db->group_by("null");
        $IntegerID = end($segs);      
        $result = $this->Name_model->fetch_all_Integerid_from_menu2($IntegerID);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("No found", 404);
        }
    }
    
    function menu3()
    { 
        $segs  = $this->uri->segment_array();
        $IntegerparentID = end($segs);
        $result = $this->Name_model->fetch_IntegerparentID_from_menu3($IntegerparentID);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("no found", 404);
        }
        
    }
    function menu4()
    { 
        $segs  = $this->uri->segment_array();
        $stringname = end($segs);
        $result = $this->Name_model->fetch_stringname_from_menu4($stringname);
        if ($result)
            $this->response($result, 200);
               
        } 
        else {
            $this->response("no found", 404);
        }       
    }
    
}

