<?php

class Address_model extends CI_Model{
   
      public function __construct(){
          
        $this->load->database();
        
      }
            public function fetch_all_menu()
            {  
              $this->db->select('id,name');
           $this->db->from('user');
           $this->db->group_by('null');
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
      
    public function fetch_all_Integerid_from_menu1($IntegerID){   
      $this->db->select('id,name');
        $this->db->from('user'); 
        $this->db->group_by('parent_id');    
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

    public function fetch_IntegerparentID_from_menu2($IntegerparentID)
    {
      $this->db->select('id,name');
      $this->db->from('user');
       $this->db->group_by('IntegerparentID');
         $query = $this->db->get();
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }else
        {
          return 0;
        }
    }

     public function fetch_stringname _from_menu3($stringname)
    {
      $this->db->select('id,name');
      $this->db->from('user');
       $this->db->group_by('parent_id') ;
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

    }

    
  

   
