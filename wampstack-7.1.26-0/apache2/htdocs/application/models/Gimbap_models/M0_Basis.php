<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M0_Basis extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db',TRUE);
    }
    
    
    //계정 확인
    public function recall_db_acc($id,$pw)
    {
        $sql = "SELECT * from member_basis where id = '$id' && password = '$pw'";
        $row = $this->db->query($sql)->row();

        if(isset($row)) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }


    //아이디 중복확인
    public function recall_db_acc_sign_up($id)
    {
        $sql = "SELECT * from member_basis where id = '$id'";
        $row = $this->db->query($sql)->row();

        if(isset($row))
        {
            return false;
        }
        else
        {
            return true;
        }
    }


    //신규회원 가입데이터
    public function save_newbie($id,$pw,$name,$birth,$sex,$address,$phone,$time)
    {
        $sql = "INSERT into member_basis(id,password,name,birth,sex,address,phone,date)values";
        $sql .= "('$id','$pw','$name','$birth','$sex','$address','$phone','$time')";
        $bool = $this->db->query($sql);

        if(isset($bool))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>