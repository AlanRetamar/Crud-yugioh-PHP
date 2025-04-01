<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->model('ModeloLoginAdmin');
		$this->load->model('Product_model');
	}
	public function index()
	{
		$data['conforme'] ="";
		$data['menu'] = main_menu();
		
		$this->load->view('logueo/login_admin',$data);
	}

	public function ValidarAdmin(){
		
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
		$pass = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
           
		$valido=$this->ModeloLoginAdmin->valIngreso($usuario,$pass);
		
	   
		if($valido != null){
		//var_dump($valido); /*esta funcion nos muestra todo lo que tiene la variable $valido */
			//$datos = array("data"=>$this->Product_model->getProducts());
			redirect(base_url()."productos");
			
		}
		else {               
			$data['conforme']="Clave y usuario incorrectos";
			$data['menu'] = main_menu();
		$this->load->view('logueo/login_admin',$data);
		}
	}   
}
