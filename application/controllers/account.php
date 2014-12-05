<?php

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('account_model');
		$this->load->model('box_model');
		$this->load->model('rating_model');
	}


	public function view($id)
	{
		

		$data['account_id'] = $id; 
		$data['title'] = "Account No: $id";
		$data['boxes'] = $this->box_model->get_account_boxes($id);	
		$data['ratings'] = $this->rating_model->get_account_ratings($id);	

		$this->load->view('templates/header' , $data);
                $this->load->view('pages/account' , $data);
                $this->load->view('templates/footer');
	}

}

?>
