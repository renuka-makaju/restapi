<?php


class UserController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room_model');
    }

     function response($data, $status)
    {
        
        echo json_encode($data);
        exit;
    }


     function room()
    {
        $result = $this->Room_model->getroombyid();
        if ($result) {
            $this->response($result, 200);
            exit;
        } else {
            $this->response("Invalid", 404);
            exit;
        }
    }
    
    function user()
    {
        $segs   = $this->uri->segment_array();
        $zoneID = end($segs);      
        $result = $this->Room_model->getalluser($id);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("No found", 404);
        }
    }
    
    function location()
    {
        $segs       = $this->uri->segment_array();
        $districtID = end($segs);
        $result     = $this->Room_model->getalllocation($id);
        if ($result) {
            $this->response($result, 200);
        } else {
            $this->response("no found", 404);
        }
        
    }
    
}