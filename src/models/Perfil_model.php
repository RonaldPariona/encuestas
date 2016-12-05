<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function all() {
    $query = $this->db->get('perfiles');
    return $query->result();
  }

  public function all_by_name($value) {
    $this->db->like('cargo', $value); 
    $query = $this->db->get('perfiles');
    return $query->result();
  }

  public function all_filter($field,$value) {
    $this->db->like($field, $value); 
    $query = $this->db->get('perfiles');
    return $query->result();
  }

  public function find($id) {
    $this->db->where('id', $id);
    return $this->db->get('perfiles')->row();
  }

  public function insert($registro) {
    $this->db->set($registro);
    $this->db->insert('perfiles');
  }

  public function update($registro) {
    $this->db->set($registro);
    $this->db->where('id', $registro['id']);
    $this->db->update('perfiles');
  }

  public function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('perfiles');
  }

}