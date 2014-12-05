<?php

class Box extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('product_model');
                $this->load->model('account_model');
                $this->load->model('box_model');
        }


        public function view($accountid, $boxid)
        {

		$data['account_id'] = $accountid;
                $data['box_id'] = $boxid;
                $data['title'] = "Products in Box No: $boxid";
	
                $data['products'] = $this->box_model->get_products_in_box($boxid, $accountid);
                $this->load->view('templates/header' , $data);
                $this->load->view('pages/box' , $data);
                $this->load->view('templates/footer');
        }

}

?>
