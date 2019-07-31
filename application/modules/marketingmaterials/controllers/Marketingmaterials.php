<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketingmaterials extends MX_Controller {


	function __construct()
	{
        parent::__construct();
       // $this->load->model('dashboard_model');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }      
    }

	public function index()
	{		//session data
		
		$this->template->load('template_user', 'marketingmaterial_view');

	}
		
}



