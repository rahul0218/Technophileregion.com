<?php
    class Auser_model extends CI_Model{
        //Log user in
        public function login($username, $password){
            //Validate
            $this->db->where('username', $username);
            $this->db->where('password', $password);


           
  
            $result = $this->db->get('auser');
            if($result->num_rows() == 1){
                return $result->row(0)->id;
            }else{
                return false;
            }
        }
    }