<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model
{

	public function do_registration($data)
	{

		$query = $this->db->insert('user',$data);
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