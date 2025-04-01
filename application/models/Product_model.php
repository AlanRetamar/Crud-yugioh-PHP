<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


    public function save($data){
        $this->db->query('ALTER TABLE producto AUTO_INCREMENT 1');
        $this->db->insert('producto', $data);
    }

    public function getProducts(){
         $this->db->select("*");
         $this->db->from("producto");
         $results = $this->db->get();
         return $results->result();
    }

    
    public function getProduct($id){
        $this->db->select("p.*");
        $this->db->from("producto p");
        $this->db->where("p.id",$id);
        $results = $this->db->get();
        return $results->row();
   }

   public function update($data,$id){
    $this->db->where("id",$id);
    $this->db->update('producto', $data);
   }

   
   public function delete($id){
    $this->db->where("id",$id);
    $this->db->delete('producto');
   }
}
