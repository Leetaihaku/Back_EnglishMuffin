<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M4_Manage_member extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db',TRUE);
    }
    

    //전체 회원수 반환함수
    public function member_count()
    {
        $sql = "SELECT count(id) as count from member_basis";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    //회원 요약정보(리스트 표출용)
    public function member_list_info()
    {
        $sql = "SELECT * from member_basis";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    //회원 Modal정보(그래프 표출용)
    public function modal_average_process_info($id)
    {
        $sql = "SELECT process_rate,score from process where id = '$id'";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    public function applicable_gimbap_num($id)
    {
        $sql = "SELECT count(gimbap_name) as count from process where id = '$id'";
        $row = $this->db->query($sql)->row();
        return $row;
    }


    //회원 Modal정보 수정값 저장함수
    public function revised_data_save($class,$rank,$phone)
    {
        $sql = "UPDATE member_basis SET class = '$class',rank = '$rank' where phone = '$phone'";
        $result = $this->db->query($sql);
        return $result;
    }


    public function process_rate($id,$gimbap_name)
    {
        $sql = "SELECT process_rate from process where id = '$id' and gimbap_name = '$gimbap_name'";
        $process = $this->db->query($sql)->row();
        return $process;
    }


    //Mobile.ver - 개인정보수정 인증절차 및 성공시 인적사항 불러오기
    public function verification_to_modify_personal_info(/*$id,*/$pw)
    {
        $sql = "SELECT name,birth,sex,address,phone from member_basis where password = '$pw'";//나중에 세션작업후 아이디추가
        $result = $this->db->query($sql)->result();
        if(isset($result))
        {
            return $result;
        }
    }


    public function search_name($id)
    {
        $sql = "SELECT name from member_basis where id = '$id'";
        $row = $this->db->query($sql)->row();
        return $row;
    }


    public function target_user_filtering($class)
    {
        $sql = "SELECT id from member_basis where class = '$class'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function all_user_set_up($id,$gimbap_name)
    {
        $sql = "INSERT into process(id,gimbap_name)values('$id','$gimbap_name')";
        $respond = $this->db->query($sql);
        return $respond;
    }

}
?>