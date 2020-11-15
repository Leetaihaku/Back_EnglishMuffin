<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DHfilm_login_m extends CI_Model{

     public function __construct()
     {
         parent::__construct();
         $this->db = $this->load->database('db',TRUE);
     }

public function login_verification_id($id){
     
     $sql = "SELECT * FROM guest WHERE userID= '$id';";
     $result = $this->db->query($sql)->row();   
     return $result;
     }
}