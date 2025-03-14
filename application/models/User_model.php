<?php

class User_model extends CI_Model
{
    function insertUser($data)
    {
       $this->db->insert('users',$data);
       if ($this->db->affected_rows()  >= 0) {    
           return true;
       }   else  {
           return false;
       }
    }

    function getUsers()
    {
       $query = $this->db->get('users');
       return $query->result_array();
    }

   function getUser($id){

         $this->db->where('id',$id);          
         $query=$this->db->get('users');
         return $query->row();
   }

   function updateUser($data,$id)
   {
       $this->db->where('id',$id);          
       $this->db->update('users',$data);
       if ($this->db->affected_rows()  >= 0) {
              return true;
       }   else  {
              return false;
           }

   }

   function DeleteUser($id)
   {
       $this->db->where('id',$id);          
       $this->db->delete('users');
       if ($this->db->affected_rows()  >= 0) {    
              return true;
       }   else  {
              return false;
           }

   }


}