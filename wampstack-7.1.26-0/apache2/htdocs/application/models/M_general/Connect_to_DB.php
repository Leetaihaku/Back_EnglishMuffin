<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Connect_to_DB extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db_c',TRUE);
    }
    
    
    public function save_original_matrix($name,$size,$r,$c,$v)
    {
        $sql = "INSERT into matrix_original(name,size,r,c,v)values('$name','$size','$r','$c','$v')";
        $bool = $this->db->query($sql);
        return $bool;
    }

    public function save_inverse_matrix($name,$size,$r,$c,$v)
    {
        $sql = "INSERT into matrix_inverse(name,size,r,c,v)values";
        $sql .= "('$name','$size','$r','$c','$v')";
        $bool = $this->db->query($sql);
        return $bool;
    }

    public function load_original_matrix($name)
    {
        $sql = "SELECT * from matrix_original where name = '$name'";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    public function delete_original_matrix($name)
    {
        $sql = "DELETE from matrix_original where name = '$name'";
        $bool = $this->db->query($sql);
        return $bool;
    }
}
?>