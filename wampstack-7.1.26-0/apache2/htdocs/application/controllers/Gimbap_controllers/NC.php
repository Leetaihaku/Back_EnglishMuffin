<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NC extends CI_Controller {
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
* @see https://codeigniter.com/user_gupwe/general/urls.html
*/
#########################################
    //쿠키테스트파트

    public function __construct()
	{
        parent::__construct();
        session_start();
    }

    public function ses()
    {
        $this->load->view("/gimbap_views/test");
    }

    public function ses1()
    {
        var_dump($this->input->post());
        $id = $_POST['id'];
        $pw = $_POST['pw'];

        setcookie('id',$id,time()+60);
        $_SESSION['pw'] = $pw;
        $this->load->view("/gimbap_views/test01");
    }

    public function ses2()
    {
        $this->load->view("/gimbap_views/test02");   
        var_dump($_COOKIE['id'],$_SESSION['pw']);
    }

    public function ses3()
    {   
        $this->load->view("/gimbap_views/test03");
        var_dump($_COOKIE['id'],$_SESSION['pw']);
    }
##########################################
}