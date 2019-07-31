<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Bonusadpoint_model extends CI_Model
{

	public function update_bap($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('income');
		$baps = $query->row_array();
		//print_r($baps); die;
		$bap = $baps['bap'];
		$addbap = $bap + 20;

		$this->db->set('bap',$addbap);
		$this->db->where('user_id',$user_id);
		$query = $this->db->update('income');
		if($query)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function get_all_url_to_promote($state_id,$seen_url_id_array=array())
	{
		//print_r($seen_url_id_array); die;
		$this->db->select('*');
		$this->db->where('state_id',$state_id);
		//$this->db->or_where('state_id',1);
		if(!empty($seen_url_id_array))
		{
			$this->db->where_not_in('id',$seen_url_id_array);
		}
		//$this->db->where('status','1');
		
		$query = $this->db->get('buyads');
		//echo $this->db->last_query(); die;
		return $query->result_array();
	}
	public function get_url_by_id($id)
	{
		$this->db->select('url');
		$this->db->where('id',$id);
		$query = $this->db->get('buyads');
		return $query->row_array();
	}
	public function insert_seen_add($data)
	{
		$query = $this->db->insert('seen_add',$data);
		if($query)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
	public function get_already_seen_url_id($user_id)
	{
		$this->db->select('url_id');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('seen_add');
		return $query->result_array();
	}
}


?>