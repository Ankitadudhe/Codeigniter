<?php  
 class Main_model extends CI_Model  
 {  
      function can_login($customername, $password)  
      {  
           $this->db->where('customername', $customername);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE customername = '$customername' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
 }  