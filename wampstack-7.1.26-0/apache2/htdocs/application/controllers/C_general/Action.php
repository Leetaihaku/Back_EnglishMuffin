<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_controller
{
    public function starting_point()
    {
    $this ->load ->view("Theater_login");
    }

    public function login_to_reservation()
    {
    $this ->load ->view("movie");
    }

    public function sign_up()
    {
    $this ->load ->view("signup");
    }
}
?>
