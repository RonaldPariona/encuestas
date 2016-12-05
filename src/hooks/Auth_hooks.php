<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_hooks {

    private $ci;

    public function __construct() {
        $this->ci = & get_instance();
        if (is_object($this->ci)) {
            $this->ci->load->library('MenuLib');
            $this->ci->load->library('Menu_PerfilLib');
        }
    }

    public function autentificar() {
//$this->ci = & get_instance();
        $controlador = $this->ci->uri->segment(1);
        $accion = $this->ci->uri->segment(2);
        $url = $controlador . "/" . $accion;

        $libres = array('/', 'home/index', 'home/acceso_denegado', 'home/ingreso', 'home/acerca_de', 'home/ingresar', 'home/salir');

        if (in_array($url, $libres)) {
            echo $this->ci->output->get_output();
        } else {
            if ($this->ci->session->userdata('usuario')) {
                if ($this->autorizar()) {
                    echo $this->ci->output->get_output();
                } else {
                    redirect('home/acceso_denegado');
                }
            } else {
                redirect('home/acceso_denegado');
            }
        }
    }

    public function autorizar() {
        //$this->ci = & get_instance();

// El perfil del usuario logueado
        $perfil_id = $this->ci->session->userdata('perfil_id');

// Con el controlador, buscar la opcion en la tabla de menus
//$this->ci->load->library('MenuLib');
        $controlador = $this->ci->uri->segment(1);
        $menu_id = $this->ci->menulib->findByControlador($controlador)->id;

        if (!$menu_id) {
            return FALSE;
        }

// 
//$this->ci->load->library('Menu_PerfilLib');
        $controlador = $this->ci->uri->segment(1);
        $acceso = $this->ci->menu_perfillib->findByMenuAndPerfil($perfil_id, $menu_id)->id;
        if (!$acceso) {
            return FALSE;
        }

        return TRUE;
    }

}
