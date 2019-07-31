<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends MX_Controller {


	function __construct()
	{
        parent::__construct();
        $this->load->model('website_model');
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }      
    }
	public function index()
	{		
		$this->template->load('template', 'home');

	}
	public function  register()
	{
		$country = $this->website_model->get_country();
		$data['country'] = $country;
		$this->template->load('template', 'register',$data);
	}

	public function insert_user()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$btc = $this->input->post('btc');
		$sponser_id = $this->input->post('sponser_id');
		$mobile = $this->input->post('mobile');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$sponser_exploded_id = explode('_', $sponser_id);
		//echo $sponser_exploded_id['0'];
		//echo"<br>";
		 //$sponser_exploded_id['1'];
		//print_r($sponser_exploded_id); die;
		if($password2 != $password)
		{
			$this->session->set_flashdata('pm','password mot match');
			redirect('website/register');

		}

		$data = array(

			'name'=>$name,
			'email'=>$email,
			'btc'=>$btc,
			'sponser_id_orignal'=>$sponser_id,
			'sponser_id' =>$sponser_exploded_id['1'],
			'mobile'=>$mobile,
			'password'=>$password,
			'country_id'=>$country,
			'state_id'=>$state,
			'city_id'=>$city
		);
		 $is_exist_email = $this->website_model->check_email($email);
		 if($is_exist_email)
		 {
		 	$this->session->set_flashdata('email_exist', 'Email Exist');
		 }
		else
		{
			$bool = $this->website_model->register_data($data);

			if($bool)
			{

			$this->session->set_flashdata('suc', 'REGISTRATION SUCCESSFULL');
			// echo "<script>alert('Registration Successfull')</script>";
			}
			else{
			$this->session->set_flashdata('error', 'Error');
			// echo "<script>alert('Registration Successfull')</script>";
			}
		}
		 redirect('website');

	}
	public function login()
	{
		$this->template->load('template', 'login');
	}
	public function login_user()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		//die;

		$user_data = $this->website_model->check_credential($email,$password);
		if($user_data)
		{
			$this->session->set_userdata('user_data',$user_data);
			redirect('dashboard');
		}
		else{
			echo"invalid credenitial";
		}
	}
	public function get_state()
	{
		$country_id = $this->input->post('id');
		//echo $country_id;
		//$state_array = $this->website_model->get_state_by_country_id(1);
		//print_r($state_array);
		$state_array = $this->website_model->get_state_by_country_id($country_id);
		$output ='';
		foreach ($state_array as $key => $value) {

			$output.="<option value='".$value['id']."'>".$value['name']."</option>";
		}
		//print_r($output);
		echo json_encode($output);
	}
	public function get_city()
	{
		$state_id = $this->input->post('id');
		//echo $country_id;
		//$state_array = $this->website_model->get_state_by_country_id(1);
		//print_r($state_array);
		$city_array = $this->website_model->get_city_by_country_id($state_id);
		$output ='';
		foreach ($city_array as $key => $value) {

			$output.="<option value='".$value['id']."'>".$value['name']."</option>";
		}
		//print_r($output);
		echo json_encode($output);
	}
	public function logout()
	{ 

		$this->session->sess_destroy();
		redirect('website');
		
	}
}



