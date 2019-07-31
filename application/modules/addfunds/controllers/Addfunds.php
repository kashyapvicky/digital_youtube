<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addfunds extends MX_Controller {

//echo"hello"; die;

	function __construct()
	{
        parent::__construct();
        //$this->load->model('dashboard_model');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }      
    }

	public function index()
	{		//session data
		
		$this->template->load('template_user', 'addfunds_view');

	}
	public function add_fund()
	{		//session data
		
		$this->template->load('template_user', 'payment_box');

	}

	// public function get_downline($id)
	// {
	// 	$downline_data = array();
	// 	$downline_query = $this->db->query("SELECT * FROM bit_users WHERE sponser_id = '" . (int)$id . "'");
	// 	foreach ($downline_query->result() as $down_data) 
	// 	{

	// 		$downline_data[] =array(
 //            'down_id' => $down_data->id,
 //            'down_name' => $down_data->bit_name,
 //        	);
 //        	$children['child_id'] = $this->get_downline($down_data->id);
	// 		if($children)
	// 		{
	// 			$downline_data['indirect'] = array_merge($children['child_id'],$downline_data);
	// 		}
	// 	}

	// 	return $downline_data;
	// }
		
}



