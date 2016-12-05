<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	//Constructor de la clase
	function __construct(){
		parent::__construct();
		$this->load->model('Perfil_model');
		$this->load->library('perfilLib');
		$this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
		$this->form_validation->set_message('no_repetir', 'No puede haber valor duplicado para %s');
	}

	public function index() {
		$data['contenido'] = 'perfil/index';
		$data['titulo'] = 'Inicio';
		$data['query'] = $this->Perfil_model->all();
		$this->load->view('layout/main', $data);
	}

	public function no_repetir() {
		return $this->perfillib->no_duplicado($this->input->post());
	}

	public function search() {
		$data['contenido'] = 'perfil/index';
		$data['titulo'] = 'Inicio';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Perfil_model->all_by_name($value);
		$this->load->view('layout/main', $data);
	}

	public function edit($id) {
		//$id = $this->uri->segment(3);
		$data['contenido'] = 'perfil/edit';
		$data['titulo'] = 'Actualizar perfil';
		$data['registro'] = $this->Perfil_model->find($id);
		$this->load->view('layout/main', $data);	
	}

	public function update() {
		$registro = $this->input->post();
		$this->form_validation->set_rules('cargo', 'Nombre', 'required|callback_no_repetir');
		if($this->form_validation->run() == FALSE){
			$this->edit($registro['id']);
		}else{
			$registro['updated_at'] = date('Y/m/d H:i');
			$this->Perfil_model->update($registro);
			redirect('perfil/index');
		}
	}

	public function create() {
		$data['contenido'] = 'perfil/create';
		$data['titulo'] = 'Crear perfil';
		$this->load->view('layout/main', $data);	
	}

	public function insert() {
		$registro = $this->input->post();
		$this->form_validation->set_rules('cargo', 'Nombre', 'required|callback_no_repetir');
		if($this->form_validation->run() == FALSE){
			$this->create();
		}else{
			$registro['created_at'] = date('Y/m/d H:i');
			$this->Perfil_model->insert($registro);
			redirect('perfil/index');
		}
	}

	public function delete($id) {
		$this->Perfil_model->delete($id);
		redirect('perfil/index');	
	}

}
