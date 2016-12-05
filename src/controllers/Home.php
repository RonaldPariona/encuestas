<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

//Constructor de la clase
    function __construct() {
        parent::__construct();
        $this->load->library('bcrypt'); //cargamos la librería
        $this->load->library('usuarioLib');
        $this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
        $this->form_validation->set_message('loginok', 'Usuario o clave incorrectos');
        $this->form_validation->set_message('matches', '%s no coincide con %s');
        $this->form_validation->set_message('cambiook', 'No se puede realizar el cambio de clave');
    }

    public function index() {
        $data['contenido'] = 'home/index';
        $data['titulo'] = 'Inicio';
        //$this->load->view('layout/main', $data);
        $this->load->view('layout/main', $data);
        //print_r($data);
    }

    public function acerca_de() {
        $data['contenido'] = 'home/acerca_de';
        $data['titulo'] = 'Acerca De';
        $this->load->view('layout/main', $data);
    }

    public function acceso_denegado() {
        $data['contenido'] = 'home/acceso_denegado';
        $data['titulo'] = 'Denegado';
        $this->load->view('layout/main', $data);
    }

    public function salir() {
        $this->session->sess_destroy();
        redirect('home/index');
    }

    public function ingreso() {
        $data['contenido'] = 'home/ingreso';
        $data['token'] = $this->token();
        $data['titulo'] = 'Ingreso';
        $this->load->view('layout/main', $data);
    }

//creamos la clave aleatoria para agregar seguridad a nuestro formulario
    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    /* public function ingresar() {
      $login = $this->input->post('login');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('login', 'Usuario', 'required|callback_loginok');
      $this->form_validation->set_rules('password', 'Clave', 'required');
      if ($this->form_validation->run() == FALSE) {
      $this->ingreso();
      } else {
      redirect('home/index');
      }
      } */

    public function ingresar() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');
//si existe la clave token oculta en el formulario y es igual
// que la generada con el método token dejamos pasar
//if ($this->input->post('token') && $this->input->post('token') === $this->session->userdata('token')) {
        if ($login != NULL && $password != NULL) {
            $this->form_validation->set_rules('login', 'Usuario', 'required|callback_loginok');
            $this->form_validation->set_rules('password', 'Clave', 'required');
//si el proceso falla mostramos errores
            if ($this->form_validation->run() == FALSE) {
                $this->ingreso();
//en otro caso procesamos los datos
            } else {
                redirect('encuestacsc/index');
                //redirect('home/index');
            }
        } else {
            redirect('home/acceso_denegado');
        }
//}else{
        //redirect('home/acceso_denegado');
    }

    public function loginok() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        return $this->usuariolib->login($login, $password);
    }

    public function cambio_clave() {
        $data['contenido'] = 'home/cambio_clave';
        $data['titulo'] = 'Cambiar Clave';
        $this->load->view('layout/main', $data);
    }

    public function cambiar_clave() {
        $this->form_validation->set_rules('clave_act', 'Clave Actual', 'required|callback_cambiook');
        $this->form_validation->set_rules('clave_new', 'Clave Nueva', 'required|matches[clave_rep]');
        $this->form_validation->set_rules('clave_rep', 'Repita Nueva', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->cambio_clave();
        } else {
            redirect('home/index');
        }
    }

    public function cambiook() {
        $actual = $this->input->post('clave_act');
//$act_password = $this->bcrypt->hash_password($act);
        //$actual = $this->bcrypt->hash_password($act);
        $nuevo = $this->input->post('clave_new');
        //$nuevo = $this->bcrypt->hash_password($new);
//$new_password = $hasher->HashPassword($new);
        return $this->usuariolib->cambiarPWD($actual, $nuevo);
    }

}
