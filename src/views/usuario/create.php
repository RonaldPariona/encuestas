<div class="panel-default">
<?= form_open('usuario/insert', array('class'=>'form-horizontal')); ?>

    <div class="page-header"><h1>Nuevo usuario</h1>
  <?= my_validation_errors(validation_errors()); ?>
    </div>
  <div class="form-group">
   <?= form_label('Nombres :', 'nombres', array('class'=>'col-xs-2 control-label')); ?>
      <div class="col-xs-4">
   <?= form_input(array('type'=>'text', 'name'=>'nombres', 'id'=>'nombres', 'value'=>set_value('nombres'),'onkeyup' => 'this.value=this.value.toUpperCase()'));?>
      </div>
  </div>
<div class="form-group">
   <?= form_label('Apellidos :', 'apellidos', array('class'=>'col-xs-2 control-label')); ?>
      <div class="col-xs-4">
   <?= form_input(array('type'=>'text', 'name'=>'apellidos', 'id'=>'apellidos', 'value'=>set_value('apellidos'),'onkeyup' => 'this.value=this.value.toUpperCase()'));?>
      </div>
  </div>
  <div class="form-group">
   <?= form_label('Usuario :', 'usuario', array('class'=>'col-xs-2 control-label')); ?>
      <div class="col-xs-4">
   <?= form_input(array('type'=>'text', 'name'=>'usuario', 'id'=>'usuario', 'value'=>set_value('usuario'),'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
      </div>
  </div>

  <div class="form-group">
   <?= form_label('Email :', 'email', array('class'=>'col-xs-2 control-label')); ?>
      <div class="col-xs-4">
   <?= form_input(array('type'=>'email', 'name'=>'email', 'id'=>'email', 'value'=>set_value('email'),'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
      </div>
  </div>

  <div class="form-group">
      
   <?= form_label('Cargo :', 'cargo', array('class'=>'col-xs-2 control-label')); ?>
      <div class="col-xs-4">
   <?= form_dropdown('cargo',$perfiles,5); ?>
      </div>
  </div>

  <div class="form-actions col-xs-5 col-xs-offset-3">
   <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
   <?= anchor('usuario/index', 'Cancelar', array('class'=>'btn btn-warning')); ?>
  </div>

 <?= form_close(); ?>
</div>