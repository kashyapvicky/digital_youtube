<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

//echo"hello"; die;

	function __construct()
	{

        parent::__construct();
        // $this->load->model('user_model');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }   
    }

    public function index()

    {
        
        $this->load->view('login_view');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}



