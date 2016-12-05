<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_Perfil extends CI_Controller {

    //Constructor de la clase
    function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Perfil_model');
        $this->load->model('Menu_Perfil_model');
        $this->load->library('menu_PerfilLib');
        $this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
        $this->form_validation->set_message('my_validation', 'No puede haber dos permisos de %s para el mismo perfil');
    }

    public function index() {
        $data['contenido'] = 'menu_perfil/index';
        $data['titulo'] = 'Accesos';
        $data['query'] = $this->Menu_Perfil_model->all();
        $this->load->view('layout/main', $data);
    }

    public function my_validation() {
        return $this->menu_perfillib->no_duplicado($this->input->post());
    }

    public function search() {
        $data['contenido'] = 'menu_perfil/index';
        $data['titulo'] = 'Inicio';
        $value = $this->input->post('buscar');
        $data['query'] = $this->Menu_Perfil_model->all_by_menu($value);
        $this->load->view('layout/main', $data);
        //$data['query'] = $this->Menu_Perfil_model->all_filter('menu_id',$value_id);
        //$this->load->view('layout/main', $data);
    }

    public function edit($id) {
        //$id = $this->uri->segment(3);
        $data['contenido'] = 'menu_perfil/edit';
        $data['titulo'] = 'Actualizar permisos';
        $data['registro'] = $this->Menu_Perfil_model->find($id);
        $lista_menu = array();
        $menus = $this->Menu_model->all();
        foreach ($menus as $menu) {
            $lista_menu[$menu->id] = $menu->menu;
        }
        $data['menus'] = $lista_menu;
        $lista_perfil = array();
        $perfiles = $this->Perfil_model->all();
        foreach ($perfiles as $perfil) {
            $lista_perfil[$perfil->id] = $perfil->cargo;
        }
        $data['perfiles'] = $lista_perfil;
        $this->load->view('layout/main', $data);
    }

    public function update() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|callback_my_validation');
        $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($registro['id']);
        } else {
            $registro['updated_at'] = date('Y/m/d H:i');
            $this->Menu_model->update($registro);
            redirect('menu_perfil/index');
        }
    }

    public function create() {
        $data['contenido'] = 'menu_perfil/create';
        $data['titulo'] = 'Asignar permisos';
        $lista_menu = array();
        $menus = $this->Menu_model->all();
        foreach ($menus as $menu) {
            $lista_menu[$menu->id] = $menu->menu;
        }
        $data['menus'] = $lista_menu;
        $lista_perfil = array();
        $perfiles = $this->Perfil_model->all();
        foreach ($perfiles as $perfil) {
            $lista_perfil[$perfil->id] = $perfil->cargo;
        }
        $data['perfiles'] = $lista_perfil;
        $this->load->view('layout/main', $data);
    }

    public function insert() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|callback_my_validation');
        $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            //$registro['created_at'] = date('Y/m/d H:i');
            $this->Menu_Perfil_model->insert($registro);
            redirect('menu_perfil/index');
        }
    }

    public function delete($id) {
        $this->Menu_Perfil_model->delete($id);
        redirect('menu_perfil/index');
    }

}
