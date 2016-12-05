<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Modulos de ENEDU
 *
 * @author locador1dnce
 */
class Encuestacsc extends CI_Controller {

    var $usuario;

    function __construct() {
        parent::__construct();
        $this->load->model('Encuestacsc_model');
        date_default_timezone_set('America/Lima');
        $this->load->model('Marco_model');
        $this->usuario = $this->session->userdata('usuario_id');
    }

    public function index() {
        $data = array();
        //$usuario = $this->session->userdata('usuario_id');
        $data['cuestionarios'] = $this->Encuestacsc_model->listcuestusuario($this->usuario);
        $data['contenido'] = 'encuestacsc/index';
        $data['titulo'] = 'ENCUESTA CSC';
        $data['orden'] = 1;
        $this->load->view('layout/main', $data);
    }

    public function create() {
        $data = array();
        $data['sedes'] = $this->Encuestacsc_model->all();
        $data['contenido'] = 'encuestacsc/create';
        $data['titulo'] = 'ENCUESTA CSC';
        $data['orden'] = 1;
        $this->load->view('layout/main', $data);
    }

    public function addcuestionario() {
        $data = array();
        //$usuario = $this->session->userdata('usuario_id');
        $sede = $this->Marco_model->find_usuario($this->usuario)->sede;
        $codigo_sede = $this->Marco_model->find_usuario($this->usuario)->codigo;
        $zona = $this->Marco_model->find_usuario($this->usuario)->zona;
        $cuest = $this->Encuestacsc_model->ultcuest($this->usuario)->ncuest;
        if ($cuest == NULL)
            $cuest = 0;
        $this->Encuestacsc_model->addcuest($sede, $codigo_sede, $this->usuario, $zona, $cuest + 1);
        redirect('encuestacsc/index');
    }

    public function irpagina1($id = NULL) {
        $data = array();
        $data['titulo'] = 'Encuesta CSC';
        $data['form1'] = $this->Encuestacsc_model->findpage1($id);
        $data['contenido'] = 'encuestacsc/page1';
        $data['orden'] = 1;
        $this->load->view('layout/main', $data);
    }

    public function registrapag1() {
        $registro = $this->input->post();
        if (!isset($registro['P11_1_1']))    $registro['P11_1_1'] = 0;
        if (!isset($registro['P11_1_2']))    $registro['P11_1_2'] = 0;
        if (!isset($registro['P11_1_3']))    $registro['P11_1_3'] = 0;
        if (!isset($registro['P11_1_4']))    $registro['P11_1_4'] = 0;
        if (!isset($registro['P11_1_5']))    $registro['P11_1_5'] = 0;
        $this->form_validation->set_rules('INF_USU_NOM', 'Nombres', 'required|alpha_dash_space');
        $this->form_validation->set_rules('INF_USU_APE', 'Apellidos', 'required|alpha_dash_space');
        $this->form_validation->set_rules('P1_UBIGEO', 'Distrito', 'required');
        $this->form_validation->set_rules('P3', 'Edad', 'min_length[2]|max_length[2]|numeric|greater_than_equal_to[15]');
        $this->form_validation->set_rules('P4', 'RUC', 'required|min_length[11]|max_length[11]|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->irpagina1($registro['ID']);
        } else {
            $this->Encuestacsc_model->insertpag1($registro);
            redirect('encuestacsc/irpagina2/' . $registro['ID']);
        }
    }

    public function irpagina2($id = NULL) {
        $data = array();
        $data['titulo'] = 'Encuesta CSC';
        $data['form2'] = $this->Encuestacsc_model->findpage2($id);
        $data['contenido'] = 'encuestacsc/page2';
        $data['orden'] = 1;
        $this->load->view('layout/main', $data);
    }

    public function registrapag2() {
        $registro = $this->input->post();
        if (!isset($registro['P12_1']))    $registro['P12_1'] = 0;
        if (!isset($registro['P12_2']))    $registro['P12_2'] = 0;
        if (!isset($registro['P12_3']))    $registro['P12_3'] = 0;
        if (!isset($registro['P12_4']))    $registro['P12_4'] = 0;
        if (!isset($registro['P12_5']))    $registro['P12_5'] = 0;
        if (!isset($registro['P12_6']))    $registro['P12_6'] = 0;
        if (!isset($registro['P12_7']))    $registro['P12_7'] = 0;
        if (!isset($registro['P12_8']))    $registro['P12_8'] = 0;
        if (!isset($registro['P13_1']))    $registro['P13_1'] = 0;
        if (!isset($registro['P13_2']))    $registro['P13_2'] = 0;
        if (!isset($registro['P13_3']))    $registro['P13_3'] = 0;
        if (!isset($registro['P13_4']))    $registro['P13_4'] = 0;
        if (!isset($registro['P13_5']))    $registro['P13_5'] = 0;
        if (!isset($registro['P18_A_1']))    $registro['P18_A_1'] = 0;
        if (!isset($registro['P18_A_2']))    $registro['P18_A_2'] = 0;
        if (!isset($registro['P18_A_3']))    $registro['P18_A_3'] = 0;
        if (!isset($registro['P18_A_4']))    $registro['P18_A_4'] = 0;
        if (!isset($registro['P18_A_5']))    $registro['P18_A_5'] = 0;
        if (!isset($registro['P18_B_1']))    $registro['P18_B_1'] = 0;
        if (!isset($registro['P18_B_2']))    $registro['P18_B_2'] = 0;
        if (!isset($registro['P18_B_3']))    $registro['P18_B_3'] = 0;
        if (!isset($registro['P18_B_4']))    $registro['P18_B_4'] = 0;
        if (!isset($registro['P18_B_5']))    $registro['P18_B_5'] = 0;
        if (!isset($registro['P20_1']))    $registro['P20_1'] = 0;
        if (!isset($registro['P20_2']))    $registro['P20_2'] = 0;
        if (!isset($registro['P20_3']))    $registro['P20_3'] = 0;
        if (!isset($registro['P20_4']))    $registro['P20_4'] = 0;
        if (!isset($registro['P20_5']))    $registro['P20_5'] = 0;
        if (!isset($registro['P20_6']))    $registro['P20_6'] = 0;
        if (!isset($registro['P25_1']))    $registro['P25_1'] = 0;
        if (!isset($registro['P25_2']))    $registro['P25_2'] = 0;
        if (!isset($registro['P25_3']))    $registro['P25_3'] = 0;
        if (!isset($registro['P25_4']))    $registro['P25_4'] = 0;
        if (!isset($registro['P25_5']))    $registro['P25_5'] = 0;
        if (!isset($registro['P25_6']))    $registro['P25_6'] = 0;
        if (!isset($registro['P25_7']))    $registro['P25_7'] = 0;
        if (!isset($registro['P25_8']))    $registro['P25_8'] = 0;
        if (!isset($registro['P25_9']))    $registro['P25_9'] = 0;
        $this->form_validation->set_rules('P12_AUX', 'Tramite', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->irpagina2($registro['ID']);
        } else {
            $this->Encuestacsc_model->insertpag2($registro);
            redirect('encuestacsc/irpagina3/' . $registro['ID']);
        }
    }
    
    public function irpagina3($id = NULL) {
        $data = array();
        $data['titulo'] = 'Encuesta CSC';
        $data['form3'] = $this->Encuestacsc_model->findpage3($id);
        $data['contenido'] = 'encuestacsc/page3';
        $data['orden'] = 1;
        $this->load->view('layout/main', $data);
    }

    public function registrapag3() {
        $registro = $this->input->post();
        $this->form_validation->set_rules('V_09', 'Nivel de satifaccion en general', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->irpagina3($registro['ID']);
        } else {
            $this->Encuestacsc_model->insertpag3($registro);
            redirect('encuestacsc/index');
        }
    }
    
    public function borrar($id = NULL) {
        $this->Encuestacsc_model->delete($id);
        redirect('encuestacsc/index');
    }


}
