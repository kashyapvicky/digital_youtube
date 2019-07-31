<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Reffer_model extends CI_Model
{

 public function get_down_user_array($user_id)
 {
 	$this->db->select('name,id,joining_date');
 	$this->db->where('sponser_id',$user_id);
 	$query = $this->db->get('user');
 	return $query->result_array();
 }
 public function second_level_ids($first_level_ids)
 {
 	$this->db->select('name,id,joining_date');
 	$this->db->where_in('sponser_id',$first_level_ids);
 	$query = $this->db->get('user');
 	return $query->result_array();

 }
 public function third_level_ids($second_level_ids)
 {
 	$this->db->select('name,id,joining_date');
 	$this->db->where_in('sponser_id',$second_level_ids);
 	$query = $this->db->get('user');
 	return $query->result_array();

 }
 public function fourth_level_ids($third_level_ids)
 {
 	$this->db->select('name,id,joining_date');
 	$this->db->where_in('sponser_id',$third_level_ids);
 	$query = $this->db->get('user');
 	return $query->result_array();

 }
	public function fifth_level_ids($fourth_level_ids)
	{
		$this->db->select('name,id,joining_date');
		$this->db->where_in('sponser_id',$fourth_level_ids);
		$query = $this->db->get('user');
		return $query->result_array();
	}
	public function sixth_level_ids($fifth_level_ids)
	{
		$this->db->select('name,id,joining_date');
		$this->db->where_in('sponser_id',$fifth_level_ids);
		$query = $this->db->get('user');
		//echo $this->db->last_query(); die;
		return $query->result_array();
	}
}


?>