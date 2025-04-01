<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Client_model');
    }

	public function index($id)
	{
        $data = $this->Client_model->getClient($id);
		$this->load->view('client/edit',$data);
	}

    public function update($id){
        $dni = $this->input->post('dni');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $mail = $this->input->post('mail');

        $this->form_validation->set_rules('dni', 'Dni', 'required|min_length[5]');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data = $this->Client_model->getClient($id);
            $this->load->view('client/edit',$data);
        }
        else
        {
            $data = array(
                'usuario'=>$dni,
                'clave'=>$dni,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'mail'=>$mail,
              );
      
              $this->Client_model->update($data,$id); 
              $this->session->set_flashdata('success', 'Los datos del cliente '.$nombre.' '.$apellido.' se actualizaron correctamente');
              redirect(base_url()."clientes"); 
        }


    }
}