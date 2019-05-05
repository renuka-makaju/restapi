<?php

    class Room_model extends CI_Model{

public function __construct(){
          
        $this->load->database();
        
      }
           
      public function getroombyid($id){  
           $this->db->select('id,price,capacity');
           $this->db->from('room');
           $this->db->where('id',$id);
           $query = $this->db->get();
           
           if($query->num_rows() > 0)
           {
               return $query->result_array();
           }
           else
           {
             return 0;
          }
      }
     public function getuserbyid(){   
        $this->db->select('id,firstname,lastname,email,phone,gender');
        $this->db->from('user');
        $this->db->where("id", "desc"); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return 0;
        }
    }
    public function getalllocation(){   
        $this->db->select('zones,district,place');
        $this->db->from('location');
        $this->db->where("zones", "$zones"); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return 0;
        }
    }
   



