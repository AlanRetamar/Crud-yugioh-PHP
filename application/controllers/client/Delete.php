<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Client_model');
    }

	public function index()
	{
        $data = array("data"=>$this->Client_model->getClients());
		$this->load->view('client/main',$data);
        
	}


    public function delete($id){
        $this->Client_model->delete($id);
        $this->session->set_flashdata('success', 'El producto se elimino correctamente');
        redirect(base_url()."clientes");
    }
}