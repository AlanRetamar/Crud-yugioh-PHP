<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Client_model');
    }

	public function index()
	{
		$this->load->view('client/add');
	}

    public function save(){
        $dni = $this->input->post('dni');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $mail = $this->input->post('mail');

        $this->form_validation->set_rules('dni', 'Dni', 'required|min_length[5]|is_unique[cliente.usuario]');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required|valid_email|is_unique[cliente.mail]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('client/add');
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
      
              $this->Client_model->save($data); 
              $this->session->set_flashdata('success', 'Se guardaron los datos correctamente');
              redirect(base_url()."clientes"); //$this->load->view('client/main');
        }


    }
}