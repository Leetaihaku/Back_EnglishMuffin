<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M1_Gimbap_main extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db',TRUE);
    }
    
    //제 1 페이지 좌측 김밥출력용 함수
    public function gimbap_list()
    {
        $sql = "SELECT label from gimbap_label";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    //제 1 페이지 좌측 김밥선택시 information 상단자료 업로드용 함수
    public function information_gimbap_head($selected_name)
    {
        $sql = "SELECT label,group_maker,date,class from gimbap_label where label = '$selected_name'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    //제 1 페이지 좌측 김밥선택시 information 구성요소자료 업로드용 함수
    public function information_gimbap_body($selected_name)
    {
        $sql = "SELECT gimbap_name,ingredient_sequence,data_name,interpreter_name from ingredient where gimbap_name = '$selected_name'";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    //제 1 페이지 좌측 김밥리스트 :: 김밥 삭제
    public function gimbap_delete($delete_btn)
    {
        $sql_1 = "DELETE from gimbap_label where label = '$delete_btn'";
        $sql_2 = "DELETE from ingredient where gimbap_name = '$delete_btn'";
        $sql_3 = "DELETE from process where gimbap_name = '$delete_btn'";
        $result = $this->db->query($sql_1,$sql_2,$sql_3);
    }
}
?>