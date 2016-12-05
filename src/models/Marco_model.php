<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marco_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function all() {
    $query = $this->db->get('marco_usuarios');
    return $query->result();
  }

  public function all_filter($field,$value) {
    $this->db->like($field, $value); 
    $query = $this->db->get('marco_usuarios');
    return $query->result();
  }

  public function find($id) {
    $this->db->where('id', $id);
    return $this->db->get('marco_usuarios')->row();
  }
  
  public function find_usuario($usuario_id) {
    $this->db->where('usuario_id', $usuario_id);
    return $this->db->get('marco_usuarios')->row();
  }

}