<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {


    public function save($data){
        $this->db->query('ALTER TABLE cliente AUTO_INCREMENT 1');
        $this->db->insert('cliente', $data);
    }

    public function getClients(){
         $this->db->select("*");
         $this->db->from("cliente");
         $results = $this->db->get();
         return $results->result();
    }

    
    public function getClient($id){
        $this->db->select("c.*");
        $this->db->from("cliente c");
        $this->db->where("c.id",$id);
        $results = $this->db->get();
        return $results->row();
   }

   public function update($data,$id){
    $this->db->where("id",$id);
    $this->db->update('cliente', $data);
   }

   
   public function delete($id){
    $this->db->where("id",$id);
    $this->db->delete('cliente');
   }
}