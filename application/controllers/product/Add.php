<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
    }

	public function index()
	{
		$this->load->view('product/add');
	}

    public function save(){
        $descripcion = $this->input->post('descripcion');
        $stock = $this->input->post('stock');
        $precio = $this->input->post('precio');
        $imagen = $this->input->post('imagen');

        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|min_length[5]');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('precio', 'Precio', 'required');
        $this->form_validation->set_rules('imagen', 'Imagen', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('product/add');
        }
        else
        {
            $data = array(
                'descripcion'=>$descripcion,
                'stock'=>$stock,
                'precio'=>$precio,
                'imagen'=>$imagen,
              );
      
              $this->Product_model->save($data); 
              $this->session->set_flashdata('success', 'Se guardaron los datos correctamente');
              redirect(base_url()."productos");
        }


    }
}