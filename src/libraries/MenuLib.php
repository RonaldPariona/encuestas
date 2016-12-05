<?php

if (!defined('BASEPATH'))
    exit('No permitir el acceso directo al script');

// Validaciones para el modelo de usuarios (login, cambio clave, CRUD Usuario)
class MenuLib {

    function __construct() {
        $this->CI = & get_instance(); // Esto para acceder a la instancia que carga la librería
    }

    public function validation($registro) {
        $ctr = ($registro['controlador'] != '');
        $acc = ($registro['accion'] != '');
        $url = ($registro['url'] != '');

        // No puede no ingresar controlador, acción, url
        if (!$ctr AND ! $acc AND ! $url) {
            $this->CI->form_validation->set_message('my_validation', 'Debe ingresar controlador y acci&oacute;n o una URL');
            return FALSE;
        }

        // Si ingresó controlador debe ingresar acción
        if ($ctr AND ! $acc) {
            $this->CI->form_validation->set_message('my_validation', 'Ingresó controlador, falta acci&oacute;n');
            return FALSE;
        }

        // Si ingresó acción debe ingresar controlador
        if (!$ctr AND $acc) {
            $this->CI->form_validation->set_message('my_validation', 'Ingresó acci&oacute;n, falta controlador');
            return FALSE;
        }

        // Si ingresó url, no puede haber controlador ni acción
        if ($url AND ( $ctr OR $acc)) {
            $this->CI->form_validation->set_message('my_validation', 'Si ingresó URL, no ingresar controlador ni acción');
            return FALSE;
        }

        return TRUE;
    }

    public function get_perfiles_asig_noasig($menu_id) {
        $lista_asig = array();
        $lista_noasig = array();

        $this->CI->load->model('Perfil_Model');
        $perfiles = $this->CI->Perfil_Model->all();

        foreach ($perfiles as $perfil) {
            $this->CI->db->where('menu_id', $menu_id);
            $this->CI->db->where('perfil_id', $perfil->id);
            $query = $this->CI->db->get('menu_perfil');
            $existe = ($query->num_rows() > 0);

            if ($existe) {
                $lista_asig[] = array($perfil->id, $perfil->cargo, $menu_id);
            } else {
                $lista_noasig[] = array($perfil->id, $perfil->cargo, $menu_id);
            }
        }

        return array($lista_noasig, $lista_asig);
    }

    public function findByControlador($controlador) {
        $this->CI->db->where('controlador', $controlador);
        return $this->CI->db->get('menus')->row();
    }

}
