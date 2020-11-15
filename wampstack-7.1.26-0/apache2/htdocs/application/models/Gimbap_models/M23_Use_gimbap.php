<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M23_Use_gimbap extends CI_Model{


    //추가 - 변경 
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('db',TRUE);
    }
    
    //김밥 식재료 :: 컨텐츠 이름가져오기
    public function contents_data()
    {
        $sql = "SELECT data_label from contents_label";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    //김밥 조리법 :: 인터프리터 이름가져오기
    public function interpreter_data()
    {
        $sql = "SELECT interpreter_name from interpreter";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    //엑셀 :: 컨텐츠 요약 추가하기
    public function excel_to_contents_label($file_name)
    {
        $sql = "INSERT into contents_label(data_label)values('$file_name')";
        $result = $this->db->query($sql);
        return $result;
    }


    //엑셀 :: 컨텐츠 추가하기
    public function excel_to_contents($data_type_array,$data_eng_array,$data_kor_array,$data_mp3_array,$file_name)
    {
        $i = 0;

        foreach ($data_type_array as $key) {
        $sql = "INSERT into contents(data_type,data_eng,data_kor,data_mp3,data_name)values('$data_type_array[$i]','$data_eng_array[$i]','$data_kor_array[$i]','$data_mp3_array[$i]','$file_name')";
        $result = $this->db->query($sql);
        $i+=1;
        }
        return $result;
    }


    //저장버튼 => 김밥 중복확인 함수
    public function select_gimbap_name()
    {
        $sql = "SELECT label from gimbap_label";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    //저장버튼 => 김밥 속재료 생성 -> 김밥요약정보 저장
    public function save_new_gimbap_to_db($date,$gimbap_name,$gimbap_class,$gimbap_writer)
    {
        $sql = "INSERT into gimbap_label(date,label,class,group_maker)values('$date','$gimbap_name','$gimbap_class','$gimbap_writer')";
        $result = $this->db->query($sql);
        return $result;
    }


    //저장버튼 => 김밥 속재료 생성 -> 속재료 저장
    public function save_new_gimbap_data_to_db($gimbap_name,$ingredient_sequence_array,$data_name_array,$interpreter_name_array,$gimbap_class,$gimbap_writer)
    {
        $i = 0;

        foreach ($ingredient_sequence_array as $key) {
            $sql = "INSERT into ingredient(gimbap_name,ingredient_sequence,data_name,interpreter_name,class,maker)values";
            $sql .= "('$gimbap_name','$ingredient_sequence_array[$i]','$data_name_array[$i]','$interpreter_name_array[$i]','$gimbap_class','$gimbap_writer')";
            $result = $this->db->query($sql);
            $i+=1;
        }
        return $result;
    }


    //저장버튼 => 김밥 속재료 생성 -> 진행률 저장
    public function save_new_gimbap_process_rate_to_db($id,$gimbap_name)
    {
        $sql = "INSERT into process(id,gimbap_name)values('$id','$gimbap_name')";
        $result = $this->db->query($sql);
        return $result;
    }

    
    //김밥 식재료 :: 컨텐츠 요약 삭제
    public function contents_label_delete($delete_btn)
    {
        $sql = "DELETE from contents_label where data_label = '$delete_btn'";
        $result = $this->db->query($sql);
    }
    
    
    //김밥 식재료 :: 컨텐츠 삭제
    public function contents_delete($delete_btn)
    {
        $sql = "DELETE from contents where data_name = '$delete_btn'";
        $result = $this->db->query($sql);
    }


    //김밥 식재료 :: 컨텐츠가 소속된 김밥 삭제
    public function gimbap_which_contents_involved_delete($delete_btn)
    {
        $sql = "DELETE from ingredient where data_name = '$delete_btn'";
        $result = $this->db->query($sql);
    }


     //수정모드 김밥 구성요소 가져오기
    public function remake_ingredient_data($selected_gimbap_name)
    {
        $sql = "SELECT data_name,interpreter_name,ingredient_sequence from ingredient where gimbap_name = '$selected_gimbap_name' ORDER BY ingredient_sequence ASC";
        $result = $this->db->query($sql)->result();
        return $result;
    }


     //수정모드 기존김밥 삭제하기
    public function delete_previous_gimbap($previous_gimbap_name)
    {
        $sql1 = "DELETE from gimbap_label where label = '$previous_gimbap_name'";
        $sql2 = "DELETE from ingredient where gimbap_name = '$previous_gimbap_name'";
        $result1 = $this->db->query($sql1);
        $result2 = $this->db->query($sql2);
        return $result1*$result2;
    }


    //수정모드 기존김밥 난이도데이터 불러오기
    public function class_data($gimbap_name)
    {
        $sql = "SELECT class from gimbap_label where label = '$gimbap_name'";
        $row = $this->db->query($sql)->row();
        return $row;
    }


    public function gimbap_count_by_class($class)
    {
        $sql = "SELECT count(label) as count from gimbap_label where class = '$class'";
        $result = $this->db->query($sql)->row();
        return $result;
    }


    public function target_class_gimbap($class)
    {
        $sql = "SELECT label from gimbap_label where class = '$class'";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    public function search_class_for_load_gimbap($id)
    {
        //아이디로 소속반찾기
        $sql = "SELECT class from member_basis where id = '$id'";
        $result = $this->db->query($sql)->row();
        return $result;
    }
    
    
    public function gimbap_data_for_player($class,$gimbap_name)
    {
        //해당유저의 소속반 -> 김밥정보가져오기
        $sql = "SELECT gimbap_name,ingredient_sequence,data_name,interpreter_name from ingredient where class = '$class' and gimbap_name = '$gimbap_name'";
        $result = $this->db->query($sql)->result();
        return $result;
    }


    public function target_gimbap_ingredient_count($gimbap_name)
    {
        $sql = "SELECT count(ingredient_sequence) as ingredient_count from ingredient where gimbap_name = '$gimbap_name'";
        $result = $this->db->query($sql)->row();
        return $result;
    }


    public function eng_data_sample_data_name($gimbap_name)
    {
        $sql = "SELECT data_name from ingredient where gimbap_name = '$gimbap_name' and ingredient_sequence = '1'";
        $data_name = $this->db->query($sql)->row();
        return $data_name;
    }


    public function eng_data_sample($data_name)
    {
        $sql = "SELECT data_eng from contents where data_name = '$data_name'";
        $data_eng = $this->db->query($sql)->result();
        return $data_eng;
    }


    public function find_data_name($gimbap_name,$ingredient_sequence)
    {
        $sql = "SELECT data_name from ingredient where gimbap_name = '$gimbap_name' and ingredient_sequence = '$ingredient_sequence'";
        $result = $this->db->query($sql)->row();
        return $result;
    }


    public function scrape_eng($data_name)
    {
        $sql = "SELECT data_eng from contents where data_name = '$data_name'";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}   
?>