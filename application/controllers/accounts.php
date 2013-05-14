<?php
	class accounts extends CI_Controller {

		public function __construct() {
			parent::__construct();				
			
			$this->data['styles'] = array(
				1 => 'style.css',
			);
		}

		public function index(){
			$this->load->helper('url');

			$this->load->view('header');
			$this->load->view('header2');
			$this->load->view('usernav');
			$this->load->model('get_accounts_model');
			$data['accounts'] = $this->get_accounts_model->getaccountdetails();
			$this->load->view('accounts_view', $data);
			$this->load->view('footer');
		}
	}
?>