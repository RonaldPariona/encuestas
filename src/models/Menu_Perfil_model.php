<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_Perfil_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function all() {
        $this->db->select('menu_perfil.*, menus.menu, perfiles.cargo');
        $this->db->from('menu_perfil');
        $this->db->join('menus', 'menu_perfil.menu_id = menus.id', 'left');
        $this->db->join('perfiles', 'menu_perfil.perfil_id = perfiles.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function all_by_menu($value) {
        $this->db->select('menu_perfil.*, menus.menu, perfiles.cargo');
        $this->db->from('menu_perfil');
        $this->db->join('menus', 'menu_perfil.menu_id = menus.id');
        $this->db->join('perfiles', 'menu_perfil.perfil_id = perfiles.id');
        $this->db->like('menus.menu', $value);
        $query = $this->db->get();
        return $query->result();
    }

    public function all_filter($field, $value) {
        $this->db->select('menu_perfil.*, menus.menu, perfiles.cargo');
        $this->db->from('menu_perfil');
        $this->db->join('menus', 'menu_perfil.menu_id = menus.id', 'left');
        $this->db->join('perfiles', 'menu_perfil.perfil_id = perfiles.id', 'left');
        $this->db->like('menu_perfil.' . $field, 'menu_perfil' . $value);
        $query = $this->db->get();
        return $query->result();
    }

    public function find($id) {
        $this->db->select('menu_perfil.*, menus.menu, perfiles.cargo');
        $this->db->from('menu_perfil');
        $this->db->join('menus', 'menu_perfil.menu_id = menus.id');
        $this->db->join('perfiles', 'menu_perfil.perfil_id = perfiles.id');
        $this->db->where('menu_perfil.id', $id);
        return $this->db->get()->row();
    }

    public function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('menu_perfil');
    }

    public function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('menu_perfil');
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('menu_perfil');
    }

}
