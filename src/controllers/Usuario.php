<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //Constructor de la clase
    function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->model('Perfil_model');
        $this->load->library('usuarioLib');
        $this->load->library('bcrypt');
        $this->form_validation->set_message('required', 'Debe ingresar campo%s');
        $this->form_validation->set_message('valid_email', 'Campo %s no es un email válido');
        $this->form_validation->set_message('no_repetir', 'Existe otro registro con el mismo %s');
    }

    public function index() {
        $data['contenido'] = 'usuario/index';
        $data['titulo'] = 'Inicio';
        $data['query'] = $this->Usuario_model->all();
        $this->load->view('layout/main', $data);
    }

    public function no_repetir() {
        return $this->usuariolib->no_duplicado($this->input->post());
    }

    public function search() {
        $data['contenido'] = 'usuario/index';
        $data['titulo'] = 'Inicio';
        $value = $this->input->post('buscar');
        $data['query'] = $this->Usuario_model->all_by_name($value);
        $this->load->view('layout/main', $data);
    }

    public function edit($id) {
        //$id = $this->uri->segment(3);
        $data['contenido'] = 'usuario/edit';
        $data['titulo'] = 'Actualizar usuario';
        $data['perfiles'] = $this->Usuario_model->get_perfiles();
        $data['registro'] = $this->Usuario_model->find($id);
        $this->load->view('layout/main', $data);
    }

    public function update() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('nombres', 'Nombres', 'required');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|callback_no_repetir');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($registro['id']);
        } else {
            $registro['updated_at'] = date('Y/m/d H:i');
            $this->Usuario_model->update($registro);
            redirect('usuario/index');
        }
    }

    public function create() {
        $data['contenido'] = 'usuario/create';
        $data['titulo'] = 'Crear usuario';
        $data['perfiles'] = $this->Usuario_model->get_perfiles();
        $this->load->view('layout/main', $data);
    }

    //creamos la clave aleatoria para agregar seguridad a nuestro formulario
    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function insert() {
        //if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {
            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('usuario', 'Usuario', 'required|callback_no_repetir');
            $this->form_validation->set_rules('email', 'Email', 'valid_email');
            //si el proceso falla mostramos errores
            if ($this->form_validation->run() == FALSE) {
                $this->create();
                //en otro caso procesamos los datos
            } else {
                $registro = $this->input->post();
                $registro['contrasenya'] =  $this->bcrypt->hash_password($registro['usuario']);
                //$hash = $this->bcrypt->hash_password($password);
                //$usuario['contrasenya'] = $hash;
                //comprobamos si el password se ha encriptado
                if ($this->bcrypt->check_password($registro['usuario'], $registro['contrasenya'])) {
                    //$usuario['contrasenya'] = $hash;
                    $this->Usuario_model->insert($registro);
                    redirect('usuario/index');
                } else {
                    return false;
                }
            }
        //}
    }

    /* public function insert() {
      $registro = $this->input->post();
      $this->form_validation->set_rules('name', 'Nombre', 'required');
      $this->form_validation->set_rules('login', 'Login', 'required|callback_no_repetir');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if($this->form_validation->run() == FALSE){
      $this->create();
      }else{
      $registro['password'] = password_hash($registro['login'],PASSWORD_DEFAULT);
      $registro['created'] = date('Y/m/d H:i');
      $this->Usuario_model->insert($registro);
      redirect('usuario/index');
      }
      } */

    public function delete($id) {
        $this->Usuario_model->delete($id);
        redirect('usuario/index');
    }

}
