<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginVisitante extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
	}
	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('logueo/login_visitante',$data);
	}
}
