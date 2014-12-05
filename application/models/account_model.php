<?php
class Account_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_accounts ()
	{
		$query = $this->db->get('account');

		return $query->result_array();
	}


}
?>
