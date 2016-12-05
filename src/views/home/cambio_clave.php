<div class="panel-default">
    <?= form_open('home/cambiar_clave', array('class' => 'form-horizontal')); ?>
    <div class="page-header"><h1> Cambiar la Clave de Usuario </h1>
        <?= my_validation_errors(validation_errors()); ?>
    </div>
    <div class="form-group">
        <?= form_label('Clave Actual', 'clave_act', array('class' => 'col-xs-2 control-label')); ?>
        <div class="col-xs-2">
        <?= form_input(array('type' => 'password', 'name' => 'clave_act', 'id' => 'clave_act', 'value' => set_value('clave_act'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Clave Nueva', 'clave_new', array('class' => 'col-xs-2 control-label')); ?>
        <div class="col-xs-2">
        <?= form_input(array('type' => 'password', 'name' => 'clave_new', 'id' => 'clave_new', 'value' => set_value('clave_new'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Repita Nueva', 'clave_rep', array('class' => 'col-xs-2 control-label')); ?>
        <div class="col-xs-2">
        <?= form_input(array('type' => 'password', 'name' => 'clave_rep', 'id' => 'clave_rep', 'value' => set_value('clave_rep'))); ?>
        </div>
    </div>

    <div class="form-actions col-xs-5 col-xs-offset-3">
        <?= form_button(array('type' => 'submit', 'content' => 'Confirmar', 'class' => 'btn btn-primary')); ?>
        <?= anchor('home/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
    </div>
    <?= form_close(); ?>
</div>