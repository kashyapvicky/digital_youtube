<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

//echo"hello"; die;

	function __construct()
	{
        parent::__construct();
        $this->load->model('user_model');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }   
    }

    public function register()
    {

    	$fullname = $this->input->post('fullname');
    	$btc = $this->input->post('btc');
    	$email = $this->input->post('email');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$data = array(

    		'fullname' => $fullname,
    		'username' => $username,
    		'email' => $email,
    		'password' => $password,
    		'btc_add' => $btc
    	);

    		$bool = $this->user_model->do_registration($data);
    		if($bool)
    		{
    			$this->session->set_flashdata('reg_success','Registration Successfull');
    		}
    		else
    		{
    			$this->session->set_flashdata('reg_error','Registration Error');
    		}

    		redirect('login');
    }		
}



