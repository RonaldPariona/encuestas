<script>
    $(document).ready(function () {
        window.onload = function () {
            $('#login').focus();
        }
    });
</script>
<?php
if ($this->session->userdata('usuario') != NULL)
    redirect('home/index');
?>
<div id="login-box">
    <h2>Ingreso al sistema</h2>
    <div id="infoMessage"><?= my_validation_errors(validation_errors()); ?></div>
    <hr>
    <?= form_open('home/ingresar'); ?>

    <div class="form-group">
        <?= form_input(array('type' => 'text', 'name' => 'login', 'id' => 'login', 'class' => 'form-control', 'placeholder' => 'Usuario', 'value' => set_value('login'))); ?>
    </div>

    <div class="form-group">
        <?= form_input(array('type' => 'password', 'name' => 'password', 'id' => 'password', 'placeholder' => 'Clave', 'class' => 'form-control', 'value' => set_value('password'))); ?>
    </div>

    <div class="form-group">
        <?= form_button(array('type' => 'submit', 'content' => 'Ingresar', 'class' => 'btn btn-primary')); ?>
        <?= anchor('home/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
    </div>

    <?= form_close(); ?>
</div>
