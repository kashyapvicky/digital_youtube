<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard_model extends CI_Model
{

	public function get_investment($id)
	{

		$this->db->select('*');
		$this->db->where('user_id', $id);
		$query = $this->db->get('investment');
		return $query->row_array();
	}

	public function get_total_under_income($id)
	{
		$this->db->select_sum('investment');
		$this->db->where('sponser_id',$id);
		$query = $this->db->get('relationship');
		$row_array = $query->row_array();
		return $total_under_income = $row_array['investment']; 
	}

	public function get_first_level_id($id)
	{

		$this->db->select('id');
		$this->db->where('sponser_id', $id);
		$query = $this->db->get('bit_users');
		return $query->result_array();
	}

	public function get_second_level_id($direct_id)
	{
		$this->db->select('user_id');
		$this->db->where('id', $direct_id);
		$query = $this->db->get('relationship');
		print_r($query->result_array()); die;
	}
	public function get_users_via_sponser($sponser_id)
	{
		 $query = $this->db->select_sum('investment')
		         ->where('sponser_id', $sponser_id)
		         ->get('relationship');

		         return $query->result_array();

	}

	public function get_downline_id($id)
	{
		$this->db->select('id,bit_name');
		$this->db->where('sponser_id', $id);
		$query = $this->db->get('bit_users');
		return $query->result_array();
	}
}


?>