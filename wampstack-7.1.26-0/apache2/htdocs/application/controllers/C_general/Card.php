<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Card extends CI_Controller {
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
        //생성자 - DB저장용 모델파일 불러오기
        $this->load->model("/M_general/Connect_to_DB");
        session_start();
    }

    public function intro()
    {
        //시작 페이지 - 대시보드
        $this->load->view("/V_general/intro");
    }


    //역행렬값 구할 대상행렬을 받기위한 페이지(1)
    public function input_target_matrix2()
    {
        //대상행렬 입력받는 페이지
        $size = array('size' => 2);
        $this->load->view("/V_general/input_target_matrix_2x2",$size);
    }

    //역행렬값 구할 대상행렬을 받기위한 페이지(2)
    public function input_target_matrix3()
    {
        //대상행렬 입력받는 페이지
        $size = array('size' => 3);
        $this->load->view("/V_general/input_target_matrix_3x3",$size);
    }

    //역행렬값 구할 대상행렬을 받기위한 페이지(3)3
    public function input_target_matrix4()
    {
        //대상행렬 입력받는 페이지
        $size = array('size' => 4);
        $this->load->view("/V_general/input_target_matrix_4x4",$size);
    }


    //대상 행렬 받는 함수
    public function get_original_matrix_data()
    {
        //행렬 정보받기 - NxN 정방행렬 이름 및 크기
        $name = $_POST['name'];     #입력받은 행렬의 이름을 변수에 저장합니다(1)
        $_SESSION['name'] = $name;  #입력받은 행렬의 이름을 변수에 저장합니다(2)
        $size = $_POST['size'];     #입력받은 행렬의 크기를 변수에 저장합니다
        
        //입력된 행렬을 받을 그릇배열 생성
        $received_matrix = array();

        //반복문으로 행렬정보 받기
        $series = 1;
        for ($i=1; $i <= $size; $i++) 
        { 
            for ($j=1; $j <= $size; $j++) 
            {   #배열과 일반데이터방식 간극없애기 => 행렬에대해 일렬로 받은 데이터를 프로그램에서 행과 열로 정리하여 받는 작업
                $received_matrix[$i][$j] = $_POST[$series]; 
                        
                //대상행렬정보 DB에 저장하기
                $save_to_DB = $this->Connect_to_DB->save_original_matrix($name,$size,$i,$j,$received_matrix[$i][$j]);
                $series++;
            }
        }

        $check = array(
            'matrix' => $received_matrix,
            'name' => $name,
        );


        //대상행렬 확인 및 이후 프로세스 진행여부 묻는 페이지
        switch ($size) 
        {
            case 2:
                $this->load->view("/V_general/input_target_matrix_2x2_recheck",$check);
                break;
            
            case 3:
                $this->load->view("/V_general/input_target_matrix_3x3_recheck",$check);
                break;

            case 4:
                $this->load->view("/V_general/input_target_matrix_4x4_recheck",$check);
                break;
        }
    }


    //역행렬계산후 DB에 저장 및 최종결과완료페이지 표출함수
    public function calculate_and_save_inverse_matrix()
    {
        //프로세스 진행여부 묻기
        $name = $_SESSION['name'];
        

        //프로세스 진행
        if(isset($name))
        {
            #process 1 - 역행렬 연산
            //DB에서 원행렬정보 가져오기
            $matrix = array();
            $load_matrix = $this->Connect_to_DB->load_original_matrix($name);
            $size = $load_matrix[0]->size;

            $k=0;
            for ($i=1; $i <=$size ; $i++) 
            { 
                for ($j=1; $j <=$size ; $j++) 
                { 
                    $matrix[$i][$j] = $load_matrix[$k]->v;
                    $k++;
                }
            }
            
        
            //사이즈 정보를 기준으로 개별 알고리즘 정리
            // 2x2 = 역행렬 공식 || 3x3 = sarrus's law || 4x4 = 소행렬식 및 여인수
            if($size == 2)
            {
                $det = $matrix[1][1]*$matrix[2][2]-$matrix[1][2]*$matrix[2][1];
                if($det != 0)
                {
                    $inverse_matrix[1][1] = $matrix[2][2]/$det;
                    $inverse_matrix[1][2] = -$matrix[2][1]/$det;
                    $inverse_matrix[2][1] = -$matrix[1][2]/$det;
                    $inverse_matrix[2][2] = $matrix[1][1]/$det;
                }
                else
                {
                    echo "<script>역행렬이 존재하지 않습니다</script>";
                }
            }
            else if($size == 3) 
            {
                $line = array();
                $line[1] = $matrix[3][3]*$matrix[2][2]*$matrix[1][1];
                $line[2] = $matrix[3][2]*$matrix[2][1]*$matrix[1][3];
                $line[3] = $matrix[3][1]*$matrix[1][2]*$matrix[2][3];
                $line[4] = $matrix[3][1]*$matrix[2][2]*$matrix[1][3];
                $line[5] = $matrix[3][2]*$matrix[2][3]*$matrix[1][1];
                $line[6] = $matrix[3][3]*$matrix[1][2]*$matrix[2][1];

                $line[1] = $line[1]+$line[2]+$line[3];
                $line[2] = $line[4]+$line[5]+$line[6];
                
                //행렬식 det(A)
                $det = $line[1] - $line[2];
                
                //역행렬이 존재하는 경우
                if($det != 0)
                {
                    $inverse_matrix[1][1] = $matrix[2][2]*$matrix[3][3]-$matrix[2][3]*$matrix[3][2]/$det;
                    $inverse_matrix[1][2] = $matrix[2][1]*$matrix[3][3]-$matrix[2][3]*$matrix[3][1]/$det;
                    $inverse_matrix[1][3] = $matrix[2][1]*$matrix[3][2]-$matrix[2][2]*$matrix[3][1]/$det;
                    $inverse_matrix[2][1] = $matrix[1][2]*$matrix[3][3]-$matrix[1][3]*$matrix[3][2]/$det;
                    $inverse_matrix[2][2] = $matrix[1][1]*$matrix[3][3]-$matrix[1][3]*$matrix[3][1]/$det;
                    $inverse_matrix[2][3] = $matrix[1][1]*$matrix[3][2]-$matrix[1][2]*$matrix[3][1]/$det;
                    $inverse_matrix[3][1] = $matrix[1][2]*$matrix[2][3]-$matrix[1][3]*$matrix[2][2]/$det;
                    $inverse_matrix[3][2] = $matrix[1][1]*$matrix[2][3]-$matrix[1][3]*$matrix[2][1]/$det;
                    $inverse_matrix[3][3] = $matrix[1][1]*$matrix[2][2]-$matrix[1][2]*$matrix[2][1]/$det;
                }
                else//역행렬이 존재하지 않는 경우 = (행렬식 = 0)
                {
                    echo "<script>역행렬이 존재하지 않습니다</script>";
                }
            }
            //정리후 반복문으로 #process2 실행
            #process 2 - DB 저장
            for ($i=1; $i <= $size ; $i++) 
            { 
                for ($j=1; $j <= $size ; $j++) 
                { 
                    $save_to_DB = $this->Connect_to_DB->save_inverse_matrix($name,$size,$i,$j,$inverse_matrix[$i][$j]);
                }
            }

            $count = count($inverse_matrix);

            $check = array(
                'matrix' => $inverse_matrix,
                'count' => $count
            );

            #process 3 - 결과표출
            if(isset($save_to_DB))
            {
                $this->load->view("/V_general/release_result",$check);
                session_destroy();
            }
        }
    }   
}   
    


