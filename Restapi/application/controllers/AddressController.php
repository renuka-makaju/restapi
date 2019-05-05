<?php

class AddressController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Address_model');
    }
    
    function index()
    {
        echo "Renuka's Address";
    }
    
    function response($data, $status)
    {
        
        echo json_encode($data);
        exit;
    }
    
    function zones()
    {
        
        $result = $this->Address_model->fetch_all_zones();
        if ($result) {
            $this->response($result, 200);
            exit;
             } else {
            $this->response("Invalid", 404);
            exit;
        }
    }
    
    function districts()
    {
        $segs   = $this->uri->segment_array();
        $zoneID = end($segs);      
        $result = $this->Address_model->fetchall_District_of_zone($zoneID);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("No found", 404);
        }
    }
    
    function vdcs()
    { 
        $segs       = $this->uri->segment_array();
        $districtID = end($segs);
        $result     = $this->Address_model->fetch_VDC_from_district($districtID);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("no found", 404);
        }
        
    }
    
}

