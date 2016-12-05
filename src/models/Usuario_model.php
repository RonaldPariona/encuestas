<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    private $id;

    function __construct() {
        parent::__construct();
        $this->load->library('bcrypt');
    }

    public function all() {
        $this->db->select('usuarios.*, perfiles.cargo');
        $this->db->from('usuarios');
        $this->db->join('perfiles', 'usuarios.cargo = perfiles.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function all_by_name($value) {
        $this->db->select('usuarios.*, perfiles.cargo');
        $this->db->from('usuarios');
        $this->db->join('perfiles', 'usuarios.cargo = perfiles.id', 'left');
        $this->db->like('usuarios.nombres', $value);
        $query = $this->db->get();
        return $query->result();
    }

    public function all_filter($field, $value) {
        $this->db->select('usuarios.*, perfiles.cargo');
        $this->db->from('usuarios');
        $this->db->join('perfiles', 'usuarios.cargo = perfiles.id', 'left');
        $this->db->like('usuarios.' . $field, $value);
        $query = $this->db->get();
        return $query->result();
    }

    public function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('usuarios')->row();
    }

    public function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('usuarios');
    }

    public function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('usuarios');
    }
    
    public function update_clave($id,$clave) {
        $this->db->set('contrasenya',$clave);
        $this->db->where('id', $id);
        $this->db->update('usuarios');
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
    }

    public function get_login($user, $pass) {
        $this->db->where('usuario', $user);
        $test = $this->db->get('usuarios');
        //si el nombre de usuario coincide y sólo existe uno procedemos
        if ($test->num_rows() == 1) {
            $usuario = $test->row();
            //en pass guardamos el hash del usuario que tenemos en la base
            //de datos para comprobarlo con el método check_password de Bcrypt
            $password = $usuario->contrasenya;
            //esta es la forma de comprobar si el password del 
            //formulario coincide con el codificado de la base de datos
            if ($this->bcrypt->check_password($pass, $password)) {
                $this->db->where('usuario', $user);
                $this->db->where('contrasenya', $password);
                return $this->db->get('usuarios');
            }
        }
    }

    /* public function get_login($user, $pass) {
      //$this->db->where('usuario', $user);
      //$usuario = $this->db->get('usuarios')->row();
      $usuario = array();
      $usuario = $this->all_filter('usuario', $user);
      $clave = substr($usuario->contrasenya,100);
      $hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
      //$hash_password = $hasher->CheckPassword($usuario->contrasenya, $pass);
      //$this->db->where('usuario', $user);
      //$this->db->where('contrasenya', $hash_password);
      //return $this->db->get('usuarios');
      if ($hasher->CheckPassword($clave, $pass)) {
      $this->db->where('usuario', $user);
      return $this->db->get('usuarios');
      }
      unset($hasher);
      } */

    public function get_perfiles() {
        $lista = array();
        $this->load->model('Perfil_model');
        $registros = $this->Perfil_model->all();
        foreach ($registros as $registro) {
            $lista[$registro->id] = $registro->cargo;
        }
        return $lista;
    }

}
