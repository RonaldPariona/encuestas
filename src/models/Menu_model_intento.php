<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_model extends CI_Model {

    protected $tables = array();
    private $id;

    function __construct() {
        parent::__construct();
        $this->load->library('orm');
    }

    public function all() {
        $tables = $this->orm->menus();
        return $tables;
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

    public function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('menus')->row();
    }

    public function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('menus');
    }

    public function update($registro) {
        $id = $registro['id'];
        return $result = $this->orm->menus()->where('id =?',$id)->update($registro);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('menus');
    }

}
