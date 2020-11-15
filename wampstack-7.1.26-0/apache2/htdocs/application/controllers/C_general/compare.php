<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {

    public function Compare_f()
    {
        $id = $_POST["id"];
        $pw = $_POST["pwd"];

        $conn = mysqli_connect(
            "localhost", 
            "root", 
            "melgidaek01", 
            "testsql"
        );//접속코드

        $sql = "SELECT * FROM guest";
        $result = mysqli_query($conn,$sql);

        while (($row = mysqli_fetch_array($result)) != NULL) 
        {
            if($row['userID']==$id)
            {
                if($row['userPW']==$pw)
                {
                    header("Location: http://localhost/index.php/Action/login_to_reservation");
                }
            }
        }

        if($result === false)
        {
            echo mysqli_error($conn);
            error_log(mysqli_error());
        }
    }

    public function Sign_up()
    {
        $host = "localhost"; 
        $sql_user = "root"; 
        $sql_password = "melgidaek01"; 
        $sql_database = "testsql";
        $dbConnect = new mysqli($host,$sql_user,$sql_password,$sql_database);
        $dbConnect->set_charset("utf8");

        if(mysqli_connect_errno()){
            echo '데이터베이스 접속 실패';
            echo mysqli_connect_error();
        }

        $id = $_GET['signid'];
        $pw = $_GET['signpwd'];
        $f_name = $_GET['full_name'];
        $age = $_GET['age'];
        $sex = $_GET['sex'];
        
        //$sql = mysqli_query($conn;$sql_select;"INSERT INTO guest(userID;userPW;userName;userAge;userSex)VALUES('{$id}';'{$pw}';'{$f_name}';'{$age}';'{$sex}')");
        
        $sql = "INSERT INTO guest(userID,userPW,userName,userAge,userSex)VALUES";
        $sql .= "('{$id}','{$pw}','{$f_name}','{$age}','{$sex}')";
        $result = $dbConnect->query($sql);

        if($result)
        {       
            header("Location: http://localhost/index.php/Action/starting_point");
        }
        else
        {
            if($dbConnect==NULL)
            echo '접속오류';
            elseif($sql==NULL)
            echo '명령오류';
            elseif($result==NULL)
            echo '실행오류';
        }
    }
}
?>