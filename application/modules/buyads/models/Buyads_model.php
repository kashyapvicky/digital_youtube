<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Buyads_model extends CI_Model
{

	public function insert_url_to_promote($data)
	{
		$query = $this->db->insert('buyads',$data);
		if($query)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
}


?>