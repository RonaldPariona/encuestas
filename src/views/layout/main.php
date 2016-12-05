<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->session->usuario ? $this->load->view('layout/menu') : $this->load->view('layout/menu_app');
//echo '<br/>';
echo '<div id="principal" class="container-fluid">';
$this->load->view($contenido);
echo "</div>";
$this->load->view('layout/footer');
