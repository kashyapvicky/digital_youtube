<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referralfriends extends MX_Controller {


	function __construct()
	{
        parent::__construct();
        $this->load->model('reffer_model');
        //$result=$this->get_downline();
        //$this->data = $result;
        // $userdata = $this->session->userdata('userdata');
        // if(empty($userdata['logged_in']))
        // {
        // 	redirect('login');
        // }      
    }

	public function index()
	{
		$session_data = $this->session->userdata('user_data');
		$user_id = $session_data['id'];
		//echo $user_id; die;
		$direct_array['first_level']= $this->reffer_model->get_down_user_array($user_id);
		// echo"<pre>";print_r($direct_array);die;
		$data['first_level'] = $direct_array;
		if(!empty($direct_array['first_level']))
		{
				foreach ($direct_array['first_level'] as $key => $value) {

					$ids[] = $value['id'];
					# code...
				}
			$second_level_ids['second_level'] = $this->reffer_model->second_level_ids($ids);
			//echo"<pre>";print_r($second_level_ids);die;
			$data['second_level'] = $second_level_ids;
		}
		
		if(!empty($second_level_ids['second_level']))
		{
			foreach ($second_level_ids['second_level'] as $key => $value) {

				$ids_second[] = $value['id'];
				# code...
			}
			$third_level_ids['third_level'] = $this->reffer_model->third_level_ids($ids_second);
			//echo"<pre>";print_r($third_level_ids);die;
			$data['third_level'] = $third_level_ids;
		}
		
		if(!empty($third_level_ids['third_level']))
		{
			foreach ($third_level_ids['third_level'] as $key => $value) {

				$ids_third[] = $value['id'];
				# code...
			}
			$fourth_level_ids['fourth_level'] = $this->reffer_model->fourth_level_ids($ids_third);
			//echo"<pre>";print_r($fourth_level_ids);die;
			$data['fourth_level'] = $fourth_level_ids;
		}
		
		if(!empty($fourth_level_ids['fourth_level']))
		{
			foreach ($fourth_level_ids['fourth_level'] as $key => $value) {

				$ids_fourth[] = $value['id'];
				# code...
			}
			$fifth_level_ids['fifth_level'] = $this->reffer_model->fifth_level_ids($ids_fourth);
			//echo"<pre>";print_r($fifth_level_ids);die;
			$data['fifth_level'] = $fifth_level_ids;
		}
		
		if(!empty($fifth_level_ids['fifth_level']))
		{
			foreach ($fifth_level_ids['fifth_level'] as $key => $value) {

				$ids_fifth[] = $value['id'];
				# code...
			}
			$sixth_level_ids['sixth_level'] = $this->reffer_model->sixth_level_ids($ids_fifth);
			//echo"<pre>";print_r($sixth_level_ids['sixth_level']);
			$data['sixth_level'] = $sixth_level_ids;
		}
		
		//echo"<pre>";print_r($data); die;
		$this->template->load('template_user', 'referralfriends_view',$data);

	}

	public function get_downline()
	{
		$session_data = $this->session->userdata('user_data');
		$user_id = $session_data['id'];
		$direct_array['first_level']= $this->reffer_model->get_down_user_array($user_id);
		echo"<pre>";print_r($direct_array);
		foreach ($direct_array['first_level'] as $key => $value) {

			$ids[] = $value['id'];
			# code...
		}
		$second_level_ids['second_level'] = $this->reffer_model->second_level_ids($ids);
		echo"<pre>";print_r($second_level_ids);
		foreach ($second_level_ids['second_level'] as $key => $value) {

			$ids_second[] = $value['id'];
			# code...
		}
		$third_level_ids['third_level'] = $this->reffer_model->third_level_ids($ids_second);
		echo"<pre>";print_r($third_level_ids);

		foreach ($third_level_ids['third_level'] as $key => $value) {

			$ids_third[] = $value['id'];
			# code...
		}
		$fourth_level_ids['fourth_level'] = $this->reffer_model->fourth_level_ids($ids_third);
		echo"<pre>";print_r($fourth_level_ids);
		foreach ($fourth_level_ids['fourth_level'] as $key => $value) {

			$ids_fourth[] = $value['id'];
			# code...
		}
		$fifth_level_ids['fifth_level'] = $this->reffer_model->fifth_level_ids($ids_fourth);
		echo"<pre>";print_r($fifth_level_ids);
		foreach ($fifth_level_ids['fifth_level'] as $key => $value) {

			$ids_fifth[] = $value['id'];
			# code...
		}
		$sixth_level_ids['sixth_level'] = $this->reffer_model->sixth_level_ids($ids_fifth);
		echo"<pre>";print_r($sixth_level_ids['sixth_level']);



		//return $direct_array;
		// echo "<pre>";print_r($direct_array);
		// echo"<br>";
		// $this->get_second_level_id($direct_array['first_level']);

		//echo"final array";echo"<br>";
		// $data['first_level']=$direct_array;
		// $data['second_level']=$second_level_ids;
		// print_r($data);

	}
	// public function get_second_level_id($first_level_ids)
	// {
	// 	//echo"<pre>";print_r($first_level_ids); die;
	// 	foreach ($first_level_ids as $key => $value) {

	// 		$ids[] = $value['id'];
	// 		# code...
	// 	}
	// 	//echo"<pre>";print_r($ids); die;
	// 	$second_level_ids['second_level'] = $this->reffer_model->second_level_ids($ids);
	// 	print_r($second_level_ids);
	// 	echo"<br>";
	// 	$this->get_third_level_id($second_level_ids['second_level']);
	// 	// $new_array = array_merge($direct_array,$second_level_ids);
	// 	// print_r($new_array);
	// }
	// public function get_third_level_id($second_level_ids)
	// {
	// 	foreach ($second_level_ids as $key => $value) {

	// 		$ids[] = $value['id'];
	// 		# code...
	// 	}
	// 	//echo"<pre>";print_r($ids); die;
	// 	$third_level_ids['third_level'] = $this->reffer_model->third_level_ids($ids);
	// 	print_r($third_level_ids);
	// 	echo"<br>";
	// 	$this->get_fourth_level_id($third_level_ids['third_level']);
	// }
	// public function get_fourth_level_id($third_level_ids)
	// {
	// 	foreach ($third_level_ids as $key => $value) {

	// 		$ids[] = $value['id'];
	// 		# code...
	// 	}
	// 	//echo"<pre>";print_r($ids); die;
	// 	$fourth_level_ids['fourth_level'] = $this->reffer_model->fourth_level_ids($ids);
	// 	print_r($fourth_level_ids);
	// 	$this->get_fifth_level_id($fourth_level_ids['fourth_level']);
	// }
	// public function get_fifth_level_id($fourth_level_ids)
	// {
	// 	foreach ($fourth_level_ids as $key => $value) {

	// 		$ids[] = $value['id'];
	// 		# code...
	// 	}
	// 	//echo"<pre>";print_r($ids); die;
	// 	$fifth_level_ids['fifth_level'] = $this->reffer_model->fifth_level_ids($ids);
	// 	print_r($fifth_level_ids);
	// 	$this->get_sixth_level_id($fifth_level_ids['fifth_level']);
	// }
	// public function get_sixth_level_id($fifth_level_ids)
	// {
	// 	foreach ($fifth_level_ids as $key => $value) {

	// 		$ids[] = $value['id'];
	// 		# code...
	// 	}
	// 	//echo"<pre>";print_r($ids); die;
	// 	$sixth_level_ids['sixth_level'] = $this->reffer_model->sixth_level_ids($ids);
	// 	print_r($sixth_level_ids);
	// 	//$this->get_third_level_id($second_level_ids['second_level']);
	// }

		
}



