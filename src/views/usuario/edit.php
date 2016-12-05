<!--<div class="panel-default"> -->
    <?= form_open('usuario/update', array('class' => 'form-horizontal')); ?>

    <div class="page-header"><h1>Actualización de usuario</h1>
        <?= my_validation_errors(validation_errors()); ?>
    </div>
    <div class="form-group">
        <?= form_label('ID: ', 'id', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <p class="form-control-static"><?=$registro->id ?></p>
        <?= form_hidden('id', $registro->id); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Nombre: ', 'name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <?= form_input(array('type' => 'text', 'name' => 'nombres', 'id' => 'nombres', 'value' => $registro->nombres, 'onkeyup' => 'this.value=this.value.toUpperCase()')); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Nombre: ', 'name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <?= form_input(array('type' => 'text', 'name' => 'apellidos', 'id' => 'apellidos', 'value' => $registro->apellidos, 'onkeyup' => 'this.value=this.value.toUpperCase()')); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Login :', 'login', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <?= form_input(array('type' => 'text', 'name' => 'usuario', 'id' => 'usuario', 'value' => $registro->usuario, 'onkeyup' => 'this.value=this.value.toLowerCase()')); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Email :', 'email', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <?= form_input(array('type' => 'email', 'name' => 'email', 'id' => 'email', 'value' => $registro->email, 'onkeyup' => 'this.value=this.value.toLowerCase()')); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Perfil :', 'perfil_id', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <?= form_dropdown('cargo', $perfiles, $registro->cargo); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Creado: ', 'created_at', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <p class="form-control-static"><?= $registro->created_at ?></p>
        <?= form_hidden('created_at', $registro->created_at); ?>
        </div>
    </div>
    <div class="form-group">
        <?= form_label('Modificado: ', 'updated_at', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-4">
        <p class="form-control-static"><?= $registro->updated_at ?></p>
        <?= form_hidden('updated_at', $registro->updated_at); ?>
        </div>
    </div>
    <div class="form-actions col-xs-5 col-xs-offset-3">
        <?= form_button(array('type' => 'submit', 'content' => 'Aceptar', 'class' => 'btn btn-primary')); ?>
        <?= anchor('usuario/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
        <?= anchor('usuario/delete/' . $registro->id, 'Eliminar', array('class' => 'btn btn-danger', 'onClick' => "return confirm('Esta seguro');")); ?>
    </div>

    <?= form_close(); ?>
<!--</div>-->