<?php
if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class Area_restrita extends CI_controller {

	function __construct(){
		parent::__construct();
		$this->load->model('membership_model', 'membership');
		$this->membership->logged();
	}

	public function index(){

		$this->load->view('login');
	}
}