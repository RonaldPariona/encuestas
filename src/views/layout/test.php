<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header_test');
$this->load->view('layout/menu_test');
//$this->load->view('layout/menu_app');
//echo '<div id="page-wrapper">';
echo '<br/><br/>';
echo '<div id="principal" class="container-fluid">';
?>

    <!-- ... Your content goes here ... -->
    <?php $this->load->view($contenido); ?>

<?php
echo "</div>";
$this->load->view('layout/footer');
