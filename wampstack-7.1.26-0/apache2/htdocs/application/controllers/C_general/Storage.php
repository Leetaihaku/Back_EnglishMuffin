<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Storage extends CI_Controller {

	public function storage_action()
	{    $ID = $_POST["userID"];
    $PASSWORD = $_POST["userPASSWORD"];

    if($ID=="testeve" && $PASSWORD == "123456")
    {   
        echo "접근승인";   
        header ("Location: http://localhost/index.php/Active/end_point");
    }
    else
    {
        echo "아이디 재확인 하십시요";
    }
    }
}