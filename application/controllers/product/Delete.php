<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
    }

	public function index()
	{
        $data = array("data"=>$this->Product_model->getProducts());
		$this->load->view('product/main',$data);
        
	}


    public function delete($id){
        $this->Product_model->delete($id);
        $this->session->set_flashdata('success', 'El producto se elimino correctamente');
        redirect(base_url()."productos");
    }
}