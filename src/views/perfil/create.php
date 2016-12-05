 <?= form_open('perfil/insert', array('class'=>'form-horizontal')); ?>

  <legend>Nuevo perfil</legend>
  <?= my_validation_errors(validation_errors()); ?>

  <div class="control-group">
   <?= form_label('Nombre :', 'name', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'cargo', 'id'=>'cargo', 'value'=>set_value('cargo'),'onkeyup' => 'this.value=this.value.toUpperCase()'));?>
  </div>

  <div class="form-actions">
   <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
   <?= anchor('perfil/index', 'Cancelar', array('class'=>'btn btn-warning')); ?>
  </div>

 <?= form_close(); ?>