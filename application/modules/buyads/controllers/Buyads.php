<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyads extends MX_Controller {


	function __construct()
	{
        parent::__construct();
        $this->load->model('buyads_model');
        $userdata = $this->session->userdata('user_data');
        //print_r($userdata); die;

        if(empty($userdata))
        {
        	redirect('login');
        }      
    }

	public function index()
	{		//session data
		
		$this->template->load('template_user', 'buyadds_view');

	}

	public function insert_buyads_url()
	{
		$name = $this->input->post('url');
		$number = $this->input->post('number');
		$userdata = $this->session->userdata('user_data');
		$user_id = $userdata['id'];
		$data = array(
			'url'=>$name,
			'no_of_packs'=>$number,
			'user_id'=>$user_id,
			'payment'=>'',
		);
		 $bool = $this->buyads_model->insert_url_to_promote($data);
		 if($bool)
		 {
		 	$this->session->set_flashdata('url_added','Added Successfully');
		 	redirect('buyads');
		 }
		 else
		 {
		 	$this->session->set_flashdata('url_fail','Error');
		 	redirect('buyads');
		 }
	}
	
		
}



