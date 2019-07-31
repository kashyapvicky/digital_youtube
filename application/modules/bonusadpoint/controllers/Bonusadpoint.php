<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonusadpoint extends MX_Controller {


	function __construct()
	{
        parent::__construct();
        $this->load->model('bonusadpoint_model');

        $userdata = $this->session->userdata('user_data');
        //print_r($userdata); die;

        if(empty($userdata))
        {
        	redirect('login');
        }      
    }

	public function index()
	{		
		$userdata = $this->session->userdata('user_data');
		$user_id = $userdata['id'];
		$seen_url_id_array = $this->bonusadpoint_model->get_already_seen_url_id($user_id);
		$seen_urls=array();
		foreach ($seen_url_id_array as $key => $value) {
			array_push($seen_urls,$value['url_id']);
			# code...
		}
		//echo "<pre>";print_r($seen_urls); die;
		$state_id = $userdata['state_id'];
		$url_array = $this->bonusadpoint_model->get_all_url_to_promote($state_id,$seen_urls);
		$data['urls'] =$url_array;
		$this->template->load('template_user', 'bonusadpoint_view',$data);
	}

	public function confirm_button()
	{ 

		$url_id = $this->input->get('url_id');
		$userdata = $this->session->userdata('user_data');
		$user_id = $userdata['id'];
		$data = array(
			'user_id'=>$user_id,
			'url_id'=>$url_id,
		);
		$bool = $this->bonusadpoint_model->update_bap($user_id);
		if($bool)
		{
			$this->bonusadpoint_model->insert_seen_add($data);
			redirect ('bonusadpoint');
		}
		
	}

	public function show_data()
	{
		$id = $this->input->get('id');
		$url_row = $this->bonusadpoint_model->get_url_by_id($id);
		$url = $url_row['url'];
		$data['site_url'] = $url;
		$data['url_id'] = $id;
		//echo $url; die;
		//$url = 'https://rockwellsoftech.com';
		$this->load->view('frame_view',$data);
				
	}
		
}

?>
