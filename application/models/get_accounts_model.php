<?php
	class get_accounts_model extends CI_Model {

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getaccountdetails(){
			$result	= $this->db->query('SELECT accountname, account_id, info_sys, gmail, type, status FROM kpi_account');
			return $result->result_array();
		}
	}
?>