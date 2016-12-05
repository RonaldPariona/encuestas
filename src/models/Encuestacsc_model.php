<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modulo_model
 *
 * @author locador1dnce
 */
class Encuestacsc_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listcuest() {
        $query = $this->db->get('sedes_sunat');
        return $query->result();
    }

    public function listcuestusuario($usuario) {
        $this->db->where('usucre', $usuario);
        $query = $this->db->get('cuest_usuario');
        return $query->result();
    }

    public function sedes() {
        $query = $this->db->get('sedes_sunat');
        return $query->result();
    }

    public function getdistrito($ubigeo) {
        $this->db->select('dist');
        $this->db->where('ubigeo', $ubigeo);
        return $this->db->get('ubigeo')->row();
    }

    public function insertpag1($registro) {
        $this->db->set($registro);
        $this->db->where('ID', $registro['ID']);
        $this->db->update('t_csc_pag1', $registro);
    }

    public function insertpag2($registro) {
        $this->db->set($registro);
        $this->db->where('ID', $registro['ID']);
        $this->db->update('t_csc_pag2', $registro);
    }

    public function insertpag3($registro) {
        $this->db->set($registro);
        $this->db->where('ID', $registro['ID']);
        $this->db->update('t_csc_pag3', $registro);
    }

    /* public function addcuest($sede, $codigo_sede, $usuario, $zona, $cuest) {
      $registro1 = array(
      'CSC_NOMBRE' => $sede,
      'CSC_CODIGO' => $codigo_sede,
      'CUEST' => $cuest,
      'usucre' => $usuario,
      'ZONA_SUNAT' => $zona);
      $this->db->set($registro1);
      $this->db->insert('t_csc_pag1');
      } */

    public function addcuest($sede, $codigo_sede, $usuario, $zona, $cuest) {
        $registro1 = array(
            'CSC_NOMBRE' => $sede,
            'CSC_CODIGO' => $codigo_sede,
            'CUEST' => $cuest,
            'usucre' => $usuario,
            'ZONA_SUNAT' => $zona);
        $this->db->set($registro1);
        $this->db->insert('t_csc_pag1');
        $insert_id = $this->db->insert_id();
        $registro2 = array(
            'ID' => $insert_id,
            'CUEST' => $cuest,
            'usucre' => $usuario);
        $this->db->set($registro2);
        $this->db->insert('t_csc_pag2');
        $registro3 = array(
            'ID' => $insert_id,
            'CUEST' => $cuest,
            'usucre' => $usuario);
        $this->db->set($registro3);
        $this->db->insert('t_csc_pag3');
    }

    public function ultcuest($usuario) {
        $this->db->select('ncuest');
        $this->db->where('usuario_id', $usuario);
        return $this->db->get('carga_usuario')->row();
    }

    public function findpage1($id) {
        $this->db->where('ID', $id);
        return $this->db->get('t_csc_pag1')->row();
    }

    public function findpage2($id) {
        $this->db->where('ID', $id);
        return $this->db->get('t_csc_pag2')->row();
    }

    public function findpage3($id) {
        $this->db->where('ID', $id);
        return $this->db->get('t_csc_pag3')->row();
    }

    public function delete($id) {
        $desactivar = 0;
        $activo = array('ACTIVO' => $desactivar);
        $this->db->where('id', $id);
        $this->db->update('t_csc_pag1', $activo);
        $this->db->update('t_csc_pag2', $activo);
        $this->db->update('t_csc_pag3', $activo);
    }

}
