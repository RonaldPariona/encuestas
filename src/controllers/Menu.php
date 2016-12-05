<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller {

    //Constructor de la clase
    function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('menuLib');
        $this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
        $this->form_validation->set_message('numeric', '%s debe ser un número');
        $this->form_validation->set_message('is_natural', '%s debe ser un número mayor que 0');
    }

    public function index() {
        $data['contenido'] = 'menu/index';
        $data['titulo'] = 'Menú';
        $data['query'] = $this->Menu_model->all();
        $this->load->view('layout/main', $data);
    }

    public function my_validation() {
        return $this->menulib->validation($this->input->post());
    }

    public function search() {
        $data['contenido'] = 'menu/index';
        $data['titulo'] = 'Inicio';
        $value = $this->input->post('buscar');
        $data['query'] = $this->Menu_model->all_by_name($value);
        $this->load->view('layout/main', $data);
    }

    public function edit($id) {
        //$id = $this->uri->segment(3);
        $data['contenido'] = 'menu/edit';
        $data['titulo'] = 'Actualizar menú';
        $data['registro'] = $this->Menu_model->find($id);
        $this->load->view('layout/main', $data);
    }

    public function update() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('menu', 'Menu', 'required|callback_my_validation');
        $this->form_validation->set_rules('orden', 'Orden', 'numeric|is_natural');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($registro['id']);
        } else {
            $registro['updated_at'] = date('Y/m/d H:i');
            $this->Menu_model->update($registro);
            redirect('menu/index');
        }
    }

    public function create() {
        $data['contenido'] = 'menu/create';
        $data['titulo'] = 'Crear menu';
        $this->load->view('layout/main', $data);
    }

    public function insert() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('menu', 'Menu', 'required|callback_my_validation');
        $this->form_validation->set_rules('orden', 'Orden', 'numeric|is_natural');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $registro['created_at'] = date('Y/m/d H:i');
            $this->Menu_model->insert($registro);
            redirect('menu/index');
        }
    }

    public function delete($id) {
        $this->Menu_model->delete($id);
        redirect('menu/index');
    }

    public function menu_perfiles($menu_id) {
        $data['contenido'] = 'menu/menu_perfiles';
        $data['titulo'] = 'Accesos de ' . $this->Menu_model->find($menu_id)->menu;

        // Cargar arreglos izq y der
        $perfiles = $this->menulib->get_perfiles_asig_noasig($menu_id);
        $data['query_izq'] = $perfiles[0];
        $data['query_der'] = $perfiles[1];

        $this->load->view('layout/main', $data);
    }

    public function mp_asig() {
        $perfil_id = $this->uri->segment(3);
        $menu_id = $this->uri->segment(4);
        $this->load->library('menu_PerfilLib');
        $this->menu_perfillib->dar_acceso($perfil_id, $menu_id);
        redirect('menu/menu_perfiles/' . $menu_id);
    }

    public function mp_noasig() {
        $perfil_id = $this->uri->segment(3);
        $menu_id = $this->uri->segment(4);
        $this->load->library('menu_PerfilLib');
        $this->menu_perfillib->quitar_acceso($perfil_id, $menu_id);
        redirect('menu/menu_perfiles/' . $menu_id);
    }

}
