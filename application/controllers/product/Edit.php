<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
    }

	public function index($id)
	{
        $data = $this->Product_model->getProduct($id);
		$this->load->view('product/edit',$data);
	}

    public function update($id){
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
            $data = $this->Product_model->getProduct($id);
            $this->load->view('product/edit',$data);
        }
        else
        {
            $data = array(
                'descripcion'=>$descripcion,
                'stock'=>$stock,
                'precio'=>$precio,
                'imagen'=>$imagen,
              );
      
              $this->Product_model->update($data,$id); 
              $this->session->set_flashdata('success', 'Los datos de la carta '.$descripcion.' se actualizaron correctamente');
              redirect(base_url()."productos"); //$this->load->view('product/main');
        }


    }
}