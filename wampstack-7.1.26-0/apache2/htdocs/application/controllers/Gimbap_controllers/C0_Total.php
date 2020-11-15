<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C0_Total extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("/gimbap_models/M0_Basis");
        $this->load->model("/gimbap_models/M1_Gimbap_main");
        $this->load->model("/gimbap_models/M23_Use_gimbap");
        $this->load->model("/gimbap_models/M4_Manage_member");
        session_start();
    }
###################################################################################################################################################################################















#############################################################################전체관리[Total_management]#############################################################################


    //잉글리쉬 머핀프로젝트 : 시작
    public function starting_point()
    {
        //모바일 / PC구분
        if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'))
        {
            //Mobile WEB VER.
            $this->load->view("/gimbap_views/MV-1_Login");
            // $this->load->view("/gimbap_views/asdfasdf");//성욱이 음성인식사이트
        }
        else
        {
            //PC WEB VER.
            $this->load->view("/gimbap_views/V-1_Login");
        }
    }

    
    //데스크톱 웹의 시작점
    public function pc_mode()
    {
        //PC WEB VER.
        if(isset($_SESSION['id']) && isset($_COOKIE['id']))//세션 + 쿠키 모두 정상생존상태
        {
            $this->load->view("/gimbap_views/V0_Dashboard");
        }
        elseif(isset($_SESSION['id']) && empty($_COOKIE['id']))//쿠키만료로 세션만 남은경우,세션만료로 로그인행
        {
            echo "<script>세션만료로 페이지 종료됩니다. 다시 로그인해주세요.</script>";
        }
        else//페이지 첫방문 로그인시도
        {
            //id 받기
            $id = $_POST['userID'];
            //pw 받기
            $pw = $_POST['userPASSWORD'];
            

            //id & pw 일치여부
            $acc_confirm = $this->M0_Basis->recall_db_acc($id,$pw);
            
            if(empty($acc_confirm))
            {
                echo "<script>alert('아이디 및 비밀번호 오류');</script>";
                $this->load->view("/gimbap_views/V-1_Login");
            }
            else
            {
                //쿠키 생성
                setcookie('id',$id,time()+(60*60*24));

                //세션 생성
                $_SESSION['id'] = $id;
                $this->load->view("/gimbap_views/V0_Dashboard");
            }
        }
    }


    //학습기 웹의 시작점
    public function mobile_mode()
    {
        //Mobile WEB VER.
        if(isset($_SESSION['id']) && isset($_COOKIE['id']))//세션 + 쿠키 모두 정상생존상태
        {
            $this->load->view("/gimbap_views/MV0_Dashboard");
        }
        elseif(isset($_SESSION['id']) && empty($_COOKIE['id']))//쿠키만료로 세션만 남은경우,세션만료로 로그인행
        {
            echo "<script>세션만료로 앱페이지 종료됩니다. 다시 로그인해주세요.</script>";
        }
        else//페이지 첫방문 로그인시도
        {
            $data = $this->input->post();
        
            extract($data);
            
            $id = $userid;
            $pw = $userpw;

            //id & pw 일치여부
            $acc_exist = $this->M0_Basis->recall_db_acc($id,$pw);

            if($acc_exist == false)
            {
                echo "<script>alert('아이디 및 비밀번호 오류');</script>";
                $this->load->view("/gimbap_views/MV-1_Login");
            }
            else
            {
                // //쿠키 생성
                // setcookie('id',$id,time()+5);

                //세션 생성
                //$_SESSION['id'] = 1;


                //대시보드 인트로 김밥 : 불러오기                
                #데이터 정리배열       
                $class_gimbap_data_array = array();

                #아이디로 소속 반 찾아오기
                $class = $this->M23_Use_gimbap->search_class_for_load_gimbap($id);
                $class = $class->class;

                #소속한 반의 김밥 개수 계산하기
                $target_gimbap_count = $this->M23_Use_gimbap->gimbap_count_by_class($class);
                $target_gimbap_count = $target_gimbap_count->count;

                #소속한 반의 김밥 이름들 불러오기
                $target_gimbap_name = $this->M23_Use_gimbap->target_class_gimbap($class);
                
                #불러온 김밥 이름들 배열정리하기
                for($i=0; $i<$target_gimbap_count; $i++)
                {
                    $target_gimbap_name[$i] = $target_gimbap_name[$i]->label;
                }


                #김밥이름별 재료묶기
                for ($j=0; $j<$target_gimbap_count; $j++)
                {
                    $target_gimbap_data[$j] = $this->M23_Use_gimbap->gimbap_data_for_player($class,$target_gimbap_name[$j]);
                    $target_gimbap_ingredient_count = $this->M23_Use_gimbap->target_gimbap_ingredient_count($target_gimbap_name[$j]);
                    $target_gimbap_ingredient_count = $target_gimbap_ingredient_count->ingredient_count;
                    
                    for ($k=0; $k < $target_gimbap_ingredient_count; $k++) 
                    { 
                        //정리배열[김밥번호][재료번호][헤더:구성요소목차]
                        $remake_gimbap_data[$j][$k]['gimbap_name'] = $target_gimbap_data[$j][$k]->gimbap_name;
                        $remake_gimbap_data[$j][$k]['ingredient_sequence'] = $target_gimbap_data[$j][$k]->ingredient_sequence;
                        $remake_gimbap_data[$j][$k]['data_name'] = $target_gimbap_data[$j][$k]->data_name;
                        $remake_gimbap_data[$j][$k]['interpreter_name'] = $target_gimbap_data[$j][$k]->interpreter_name;
                    }
                }
                
                
                #김밥개수만큼 헤더인덱스데이터 우선정리
                #최종정리배열[김밥번호][재료번호][헤더:구성요소목차]
                for ($i=0; $i<$target_gimbap_count; $i++)
                { 
                    $data_name = $this->M23_Use_gimbap->eng_data_sample_data_name($remake_gimbap_data[$i][0]['gimbap_name']);
                    $data_name = $data_name->data_name;
                    $sample_eng = $this->M23_Use_gimbap->eng_data_sample($data_name);
                    $sample_eng = $sample_eng[0]->data_eng;

                    $process = $this->M4_Manage_member->process_rate($id,$remake_gimbap_data[$i][0]['gimbap_name']);
                    $process = $process->process_rate;

                    #헤더인덱스 : 김밥이름 setting
                    $class_gimbap_data_array[$i]['gimbap'] = $remake_gimbap_data[$i][0]['gimbap_name'];
                    
                    #헤더인덱스 : 첫문장 setting
                    $class_gimbap_data_array[$i]['sample'] = $sample_eng;
                     
                    #헤더인덱스 : 진행률 setting
                    $class_gimbap_data_array[$i]['process'] = $process;
                     
                    #헤더인덱스 : 김밥난이도 setting
                    $class_gimbap_data_array[$i]['class'] = $class;
                }


                #김밥개수만큼 바디인덱스데이터 정리
                #최종정리배열[김밥번호][재료번호][바디:영문재료]
                for ($gimbap=0; $gimbap < $target_gimbap_count; $gimbap++) 
                { 
                    $target_gimbap_ingredient_count = $this->M23_Use_gimbap->target_gimbap_ingredient_count($class_gimbap_data_array[$gimbap]['gimbap']);
                    $target_gimbap_ingredient_count = $target_gimbap_ingredient_count->ingredient_count;
                    
                    for ($ingredient=0; $ingredient < $target_gimbap_ingredient_count; $ingredient++) 
                    {
                        $data_name = $this->M23_Use_gimbap->find_data_name($remake_gimbap_data[$gimbap][$ingredient]['gimbap_name'],$remake_gimbap_data[$gimbap][$ingredient]['ingredient_sequence']);
                        $data_name = $data_name->data_name;
                        $data_eng = $this->M23_Use_gimbap->scrape_eng($data_name);
                        $class_gimbap_data_array[$gimbap]['gimbap_data'][$ingredient] = $data_eng[$ingredient]->data_eng;
                    }
                }

                /*
                총 배열구성 정리표
                최종정리배열
                {
                    [김밥번호]
                    {
                        [재료번호]
                        {
                            [헤더인덱스 : 김밥이름]
                            [헤더인덱스 : 김밥바디구성 첫문장]
                            [헤더인덱스 : 사용자의 해당김밥학습 진행률]
                            [헤더인덱스 : 김밥난이도(학급)]
                            [바디인덱스]
                            {
                                [0]
                                 ↓  김밥(플레이리스트)이(가) 가지고있는 원재료(영문)
                                [n]
                            }
                        }
                    }
                }        
                */
                
                $data = array(
                'gimbap_data' => $class_gimbap_data_array,
                'gimbap_count' => $target_gimbap_count
                );
            
                //모바일 대시보드 표출
                $this->load->view("/gimbap_views/MV0_Dashboard",$data);
            }
        }
    }


    //회원가입
    public function sign_up_pc()
    {
        if(empty($_POST))
        {
            $this->load->view("/gimbap_views/V-2_Sign_up");
        }
        elseif(isset($_POST['id_confirm']) && empty($_POST['id']))
        {
            $id = $_POST['id_confirm'];
            $id_confirm = $this->M0_Basis->recall_db_acc_sign_up($id);
    
            if($id_confirm == true)
            {
                echo "1";
            }
            else
            {
                echo "0";
            }

            $_POST['id_confirm'] = null;
        }
        else
        {
            $id = $_POST['id'];
            $pw = $_POST['password'];
            $name = $_POST['name'];
            $birth = $_POST['birthday'];
            $sex = $_POST['gender'];
            $address = $_POST['address'];
            $phone = $_POST['phone_number'];
            $time = date('Y/m/d H:i:s',time());

            $save_result = $this->M0_Basis->save_newbie($id,$pw,$name,$birth,$sex,$address,$phone,$time);

            if ($save_result == true) 
            {
                echo "<script>alert('잉글리시 머핀의 회원이 되신것을 축하합니다!');</script>";
                $this->load->view("/gimbap_views/V-1_Login");
            } 
            else 
            {
                echo "<script>alert('가입에 실패하였습니다.');</script>";
                $this->load->view("/gimbap_views/V-1_Login");
            }
        }
    }


    public function log_out()
    {
        session_destroy();
        $this->load->view("/gimbap_views/V-1_Login.php");
    }


####################################################################################################################################################################################














#############################################################################김밥관리[gimbap_management]#############################################################################

    
    //김밥(Play_list)관리 웹의 시작점
    public function gimbap_manage()
    {
        if(empty($_GET)){
        $gimbap_list = $this->M1_Gimbap_main->gimbap_list();
            
        $gimbap_data  = array(
            'gimbap_list' => $gimbap_list
        );

        $this->load->view("/gimbap_views/V1_Main_page",$gimbap_data);
        }else{
        $selected_name = $_GET['gimbap_name'];
        
        $information_gimbap_head = $this->M1_Gimbap_main->information_gimbap_head($selected_name);
        $information_gimbap_body = $this->M1_Gimbap_main->information_gimbap_body($selected_name);

        $selected_gimbap_data  = array(
            'information_gimbap_head' => $information_gimbap_head,
            'information_gimbap_body' => $information_gimbap_body
        );

        $selected_gimbap_data = json_encode($selected_gimbap_data);

        echo($selected_gimbap_data);
        }
    }


    //제 1 페이지에서 삭제이벤트 실행(김밥리스트)
    public function gimbap_delete_btn()
    {
        $delete_btn = $_POST['target_name'];

        $delete_btn = $this->M1_Gimbap_main->gimbap_delete($delete_btn);
    }
    
    
    //제 1 페이지에서 제 2 페이지로 전환
    public function making_mode()
    {   
        $contents_data = $this->M23_Use_gimbap->contents_data();
        $interpreter_data = $this->M23_Use_gimbap->interpreter_data();

        $gimbap_data = array(
            'contents_data' => $contents_data,
            'interpreter_data' => $interpreter_data,
            'admin' => $_SESSION['id']
        );

        $this->load->view("/gimbap_views/V2_Add_page",$gimbap_data);
    }


    //엑셀에 새 컨텐츠 추가하기
    public function new_excel_data_on_modal()
    {
        extract($_POST);

        $data_type_array = explode(',',$data_type[0]);
        $data_eng_array = explode(',',$data_eng[0]);
        $data_kor_array = explode(',',$data_kor[0]);
        $data_mp3_array = explode(',',$data_mp3[0]);

        $save_contents_label = $this->M23_Use_gimbap->excel_to_contents_label($file_name);
        $save_contents = $this->M23_Use_gimbap->excel_to_contents($data_type_array,$data_eng_array,$data_kor_array,$data_mp3_array,$file_name);

        if(isset($save_contents))
        {
            echo(1);
        }
    }


    //제 2 페이지에서 삭제이벤트 실행
    public function making_mode_contents_delete_btn()
    {
        $delete_btn = $_POST['target_name'];

        $delete_btn_info = $this->M23_Use_gimbap->contents_label_delete($delete_btn);
        $delete_btn_body = $this->M23_Use_gimbap->contents_delete($delete_btn);
        $delete_btn_gimbap_inside = $this->M23_Use_gimbap->gimbap_which_contents_involved_delete($delete_btn);
    }
    

    //제 2 페이지에서 이름중복체크
    public function prohibit_gimbap_name_overlap()
    {
        $gimbap_name = $this->input->POST('gimbap_name');

        $result = $this->M23_Use_gimbap->select_gimbap_name();

        $inspector = 0;

        foreach ($result as $key) {
            if ($key->label == $gimbap_name) {
                $inspector++;
            }
        }
        
        if ($inspector != 0) {
            echo(0);
        } else {
            echo(1);
        }
    }


    //제 2,3 모듈 : 김밥 저장하기
    public function save_new_gimbap()
    {
        extract($_POST);

        $ingredient_sequence_array = explode(',',$ingredient_sequence[0]);
        $data_name_array = explode(',',$data_name[0]);
        $interpreter_name_array = explode(',',$interpreter_name[0]);
        
        //convert id data -> name data
        $gimbap_writer = $this->M4_Manage_member->search_name($gimbap_writer);
        $gimbap_writer = $gimbap_writer->name;
        //label table save
        $save_info = $this->M23_Use_gimbap->save_new_gimbap_to_db($gimbap_date,$gimbap_name,$gimbap_class,$gimbap_writer);
        //ingredient table save
        $save_body = $this->M23_Use_gimbap->save_new_gimbap_data_to_db($gimbap_name,$ingredient_sequence_array,$data_name_array,$interpreter_name_array,$gimbap_class,$gimbap_writer);

        if (isset($save_info) && isset($save_body))
        {
            $target_user = $this->M4_Manage_member->target_user_filtering($gimbap_class);

            foreach ($target_user as $key => $value) 
            {
                //process table save(each other)
                $this->M4_Manage_member->all_user_set_up($value->id,$gimbap_name);
            }

            echo(1);
        }
    }


    //제 1 페이지에서 제 3 페이지로 전환(김밥이름 검사후 로드)
    public function modifying_mode()
    {
        $selected_gimbap_name = $_GET['gimbap_name'];
        $selected_gimbap_class = $this->M23_Use_gimbap->class_data($selected_gimbap_name);
        $selected_gimbap_class = $selected_gimbap_class->class;
        $contents_data = $this->M23_Use_gimbap->contents_data();
        $interpreter_data = $this->M23_Use_gimbap->interpreter_data();

       
        //수정대상 김밥데이터 불러오기
        $target_ingredient_data = $this->M23_Use_gimbap->remake_ingredient_data($selected_gimbap_name);

        $selected_gimbap_data_array = array(
            'selected_gimbap_name' => $selected_gimbap_name,
            'selected_gimbap_class' => $selected_gimbap_class,
            'contents_data' => $contents_data,
            'interpreter_data' => $interpreter_data,
            'target_ingredient_data' => $target_ingredient_data,
            'admin' => $_SESSION['id']
        );

        $this->load->view("/gimbap_views/V3_Modify_page",$selected_gimbap_data_array);
    }


    //제 3 페이지에서 이름중복체크 및 기존김밥삭제
    public function delete_previous_gimbap_n_prohibit_gimbap_name_overlap()
    {
        extract($_POST);

        $delete_previous = $this->M23_Use_gimbap->delete_previous_gimbap($previous_gimbap_name);

        if($delete_previous == true)
        {
            $result = $this->M23_Use_gimbap->select_gimbap_name();

            $inspector = 0;

            foreach ($result as $key) 
            {
                if ($key->label == $gimbap_name) 
                {
                    $inspector++;
                }
            }

            if ($inspector == 0) 
            {
                echo(1);
            } 
            else 
            {
                echo(0);
            }
        }
        else
        {
           echo "기존김밥데이터 제거실패"; 
        }
    }



####################################################################################################################################################################################













    
#############################################################################회원관리[member_management]#############################################################################


    //회원관리 웹의 시작점
    public function member_manage()
    {
        //모델 전체회원수
        $member_count = $this->M4_Manage_member->member_count();
        //모델 회원데이터 다 끌어오기
        $member_data = $this->M4_Manage_member->member_list_info();

        //회원데이터 배열화(정리)

        #모배열
        $member = array();

        foreach ($member_count as $key => $value) {
            $member_count = $value->count;
        }
        $member['member_count'] = $member_count;

        #자배열
        $i = 1;
        foreach ($member_data as $key => $value) 
        {
            $member['member_data'][$i] = array(
            'name' => $value->name,
            'birth' => $value->birth,
            'id' => $value->id,
            'status' => $value->status,
            'date' => $value->date,
            'sex' => $value->sex,
            'rank' => $value->rank,
            'class' => $value->class,
            'address' => $value->address,
            'phone' => $value->phone
            );
            $i++;
        }
        
        //전체 김밥중 유저가 해당되는 클래스 김밥의 평균진행률 + 평균평점 => 새 배열에 저장
        $average_process_rate = array();
        $average_score = array();
        $applicable_gimbap_num = array();
        $modal_average_process_info = array();


        for ($i=1; $i <= 10; $i++) 
        { 
            var_dump($member['member_data'][$i]['id']);
        }
        

        for ($i=1; $i <= $member_count; $i++) 
        { 
            $modal_average_process_info[$i] = $this->M4_Manage_member->modal_average_process_info($member['member_data'][$i]['id']);
            $applicable_gimbap_num[$i] = $this->M4_Manage_member->applicable_gimbap_num($member['member_data'][$i]['id']);
            $applicable_gimbap_num[$i] = $applicable_gimbap_num[$i]->count;

            for ($j=1; $j <= $applicable_gimbap_num; $j++)
            {
                $average_process_rate[$i] += $modal_average_process_info[$i]->process_rate[$j];
                $average_score[$i] += $modal_average_process_info[$i]->score[$j];
            }

            $member['member_data'][$i]['average_process_rate'] = (float)($average_process_rate[$i]/$applicable_gimbap_num[$i])/100;
            $member['member_data'][$i]['average_score'] = (float)($average_score[$i]/$applicable_gimbap_num[$i])/100;
        }
        var_dump($member['member_data']);
        
        //회원데이터 배열 쏴주기
        $this->load->view("/gimbap_views/V4_Member",$member);
    }


    public function revise_member_data()
    {
        $data = $this->input->post();
        
        $class = $data['change_class'];
        $rank = $data['change_rank'];
        $phone = $data['index_phone'];
        
        $save_revise_data = $this->M4_Manage_member->revised_data_save($class,$rank,$phone);

        if(empty($save_revise_data))
        {
            echo("<script>저장 실패</script>");
        }
    }














    
####################################################################################################################################################################################














#############################################################################학습기[Player_management]###############################################################################


    //사용자정보 수정모드 진입검열
    public function client_info_intro()
    {
        $this->load->view("/gimbap_views/MV1-1_Client_identify_verification");
    }


    //사용자정보 수정모드
    public function client_info()
    {
        //데이터 받기
        $pw = $_POST['password'];
        //비교
        $exist = $this->M4_Manage_member->verification_to_modify_personal_info(/*$id,*/$pw);

        //가져가기
        if(isset($exist))
        {
            var_dump($exist);
            $personal_data = array(
                'name' => $exist[0]->name,
                'birth' => $exist[0]->birth,
                'sex' => $exist[0]->sex,
                'address' => $exist[0]->address,
                'phone' => $exist[0]->phone
            );
            var_dump($personal_data);
            $this->load->view("/gimbap_views/MV1-2_Client_modify_profile",$personal_data);
        }
        else
        {
            echo "<script>인증에 실패하였습니다</script>";
        }
    }


    //사용자정보 수정데이터 저장
    public function client_info_modify()
    {
        //수정한데이터 받아오기
        //모델로 쏴서 저장하고
        //대시보드로 넘어가기
    }


    //학습현황 페이지
    public function learning_status()
    {
        //나중에 데이터 쏘고
        //띄우기
        $this->load->view("/gimbap_views/MV5_Learning_status");
    }

//장면당 익명함수 가상페이지 만들어서 쓰기
//or 함수별로 페이지 수공업해놓기
}
?>


