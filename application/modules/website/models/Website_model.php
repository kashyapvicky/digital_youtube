<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Website_model extends CI_Model
{

	public function register_data($data)
	{
		$bool = $this->db->insert('user',$data);
		return $bool;
	}
	public function check_credential($email,$password)
	{
		$this->db->select('*');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('user');
		return $query->row_array();
	}
	public function check_email($email)
	{
		$this->db->select('*');
		$this->db->where('email',$email);
		$query = $this->db->get('user');
		return $query->row_array();

	}
	public function get_country()
	{
		$this->db->select('*');
		$query = $this->db->get('countries');
		return $query->result_array();
	}
	public function get_state_by_country_id($country_id)
	{
		$this->db->select('*');
		$this->db->where('country_id',$country_id);
		$query = $this->db->get('states');
		return $query->result_array();
	}
	public function get_city_by_country_id($state_id)
	{
		$this->db->select('*');
		$this->db->where('state_id',$state_id);
		$query = $this->db->get('cities');
		return $query->result_array();
	}
}


?>