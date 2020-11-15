<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DHfilm_signup_m extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db',TRUE);
    }

    public function insert_newbie($info)
    {
        $sql = "INSERT INTO guest(userID,userPW,userName,userAge,userSex)VALUES";
        $sql .= "('{$info['userID']}','{$info['userPW']}','{$info['userName']}','{$info['userAge']}','{$info['userSex']}');";
        $result = $this->db->query($sql);
        return $result;
    }
}