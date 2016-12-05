<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function all() {
        $query = $this->db->get('menus');
        return $query->result();
    }

    public function all_by_name($value) {
        $this->db->like('menu', $value);
        $query = $this->db->get('menus');
        return $query->result();
    }

    public function all_filter($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('menus');
        return $query->result();
    }

    public function all_order() {
        $this->db->order_by('orden', 'asc');
        $query = $this->db->get('menus');
        return $query->result();
    }
    
    public function menu_usuario($perfil) {
        $query = $this->db->query('select * from menus where id in (select menu_id from menu_perfil where perfil_id='.$perfil.')');
        return $query->result();
    }

    public function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('menus')->row();
    }

    public function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('menus');
    }

    public function update($registro) {
        $menu = array(
            'menu' => $registro['menu'], 
            'controlador' => $registro['controlador'], 
            'accion' => $registro['accion'], 
            'url' => $registro['url'], 
            'orden' => $registro['orden'],
            'updated_at' => $registro['updated_at']);
        $this->db->set($menu);
        $this->db->where('id', $registro['id']);
        //$this->db->update('menus');
        $this->db->update('menus', $menu);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('menus');
    }

}
