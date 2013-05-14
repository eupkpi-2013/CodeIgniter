<?php
	class add_account_model extends CI_Model {

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function addaccount() {
			$name = $this->input->post("accountname");
			$gmail = $this->input->post("gmail");
			$infosys = $this->input->post("infosys");
			$usertype = $this->input->post("usertype");

			$this->db->query("INSERT INTO kpi_account(accountname, info_sys, gmail, type) VALUES ('$name', '$infosys', '$gmail', '$usertype')");			
		}
	}
?>