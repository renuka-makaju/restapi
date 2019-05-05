<?php

class Address_model extends CI_Model{
   
      public function __construct(){
          
        $this->load->database();
        
      }
            public function fetch_all_zones()
            {  
           $this->db->select('id, name');
           $this->db->from('address');
           $this->db->where('type',0);
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
      
    public function fetchall_District_of_zone($zoneID){   
      $this->db->select('id,name');
        $this->db->from('address'); 
        $this->db->where('parent_id',$zoneID) ;
        $this->db->where('type','1');     
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

    public function fetch_VDC_From_District($districtID)
    {
      $this->db->select('id,name');
      $this->db->from('Address');
       $this->db->where('parent_id',$districtID) ;
        $this->db->where('type','2');    
      $query = $this->db->get();
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }else
        {
          return 0;
        }
    }
    }
   
