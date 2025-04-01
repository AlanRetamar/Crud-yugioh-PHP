<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Client_model');
        $this->load->model('Product_model');
    }

	public function index()
	{
        $data = array("data"=>$this->Client_model->getClients());
		$this->load->view('client/main',$data);
        
	}

    public function productos()
	{
        $data = array("data"=>$this->Product_model->getProducts());
		$this->load->view('client/product_view',$data);
        
	}
}