<?php

class ModeloLoginCliente extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

    function valIngreso($usuario,$pass){        
        $consulta = $this->db->query("SELECT usuario,clave FROM cliente  WHERE usuario = '" . $usuario. "' and clave='" . $pass."'");
       if ($consulta->num_rows() == 1) {
          
       return $consulta->row();
      
       }else {return false;}
    }
}