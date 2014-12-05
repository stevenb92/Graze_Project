<?php
class Rating_model extends CI_Model {

	public function __construct()
        {
                $this->load->database();
        }

/*	public function get_account_ratings($accountid)
	{

		$query = $this->db->get_where('rating', array ('account_id' => $accountid));

		return $query->result_array();

	}*/

	public function get_account_ratings($accountid)
	{
		/*
			SELECT bp.box_id, bp.product_id, p.name, p.category, p.image_url  FROM box_to_product bp, product p  WHERE bp.product_id = p.id and bp.box_id = $boxid;
		*/
	//	$query = $this->db->get_where('box_to_product', array ('box_id' => $boxid));

		$this->db->select('r.product_id, p.name, p.category, p.image_url, r.rating') ;
		$this->db->from('rating r, product p');
		$this->db->where('r.product_id = p.id');
		$this->db->where(array ('r.account_id' => $accountid));
		$query = $this->db->get();

		return $query->result_array();

	}
}
?>
