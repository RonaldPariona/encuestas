<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Helper que da formato a los errores.
 * */
if (!function_exists('my_validation_errors')) {

    function my_validation_errors($errors) {
        $salida = '';
        if ($errors) {
            $salida = '<div class="alert alert-error">';
            $salida = $salida . '<button type="button" class="close" data-dismiss="alert"> × </button>';
            $salida = $salida . '<h4> Mensajes Validacion </h4>';
            $salida = $salida . '<small>' . $errors . '</small>';
            $salida = $salida . '</div>';
        }
        return $salida;
    }

}

// Opciones de menú de la barra superior (las opciones dependen si hay session o no)
if (!function_exists('my_menu_ppal')) {

    function my_menu_ppal() {
        $opciones = '<li>' . anchor('home/index', 'Inicio') . '</li><li class="divider"></li>';
        $opciones = $opciones . '<li>' . anchor('home/acerca_de', 'Acerca de') . '</li>';

        if (get_instance()->session->userdata('usuario')) {
            $opciones = $opciones . '<li>' . anchor('home/cambio_clave', 'Cambio Clave') . '</li><li class="divider"></li>';
            $opciones = $opciones . '<li>' . anchor('home/salir', 'Salir') . '</li>';
        } else {
            $opciones = $opciones . '<li class="divider"></li><li>' . anchor('home/ingreso', 'Ingreso') . '</li>';
        }
        return $opciones;
    }

}
// Opciones de menú lateral que se crean de acuerdo al usuario
if (!function_exists('my_menu_app')) {

    function my_menu_app() {
        $opciones = null;

        if (get_instance()->session->userdata('usuario')) {
            $opciones = '';
            get_instance()->load->model('Menu_model');
            //$query = get_instance()->Menu_model->all_order();
            $query = get_instance()->Menu_model->menu_usuario(get_instance()->session->userdata('perfil_id'));
            foreach ($query as $opcion) {
                if ($opcion->url != '') {
                    $irA = $opcion->url;
                    $param = array('target' => '_blank');
					//$param = array();
                } else {
                    $irA = $opcion->controlador . "/" . $opcion->accion;
                    $param = array();
                }
                $opciones = $opciones . '<li>' . anchor($irA, $opcion->menu, $param) . '</li>';
            }
        }
        return $opciones;
    }

}

// Muestra informacion de la sesion: usuario y perfil
if (!function_exists('my_sesion')) {

    function my_sesion() {
        $info = null;
        if (get_instance()->session->userdata('usuario')) {
            $info = get_instance()->session->userdata('usuario') . ' (' . get_instance()->session->userdata('perfil_name') . ')';
        }
        return $info;
    }

}