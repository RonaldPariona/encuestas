 <?= form_open('menu/insert', array('class'=>'form-horizontal')); ?>

  <legend>Nuevo men&uacute;</legend>
  <?= my_validation_errors(validation_errors()); ?>

  <div class="control-group">
   <?= form_label('Nombre :', 'menu', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'menu', 'id'=>'menu', 'value'=>set_value('menu')));?>
  </div>

  <div class="control-group">
   <?= form_label('Controlador :', 'controlador', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'controlador', 'id'=>'controlador', 'value'=>set_value('controlador'),'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('Acci&oacuten :', 'accion', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'accion', 'id'=>'accion', 'value'=>set_value('accion'),'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('URL :', 'url', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'url', 'id'=>'url', 'value'=>set_value('url'),'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('Orden :', 'orden', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'number', 'name'=>'orden', 'id'=>'orden', 'value'=>set_value('orden'))); ?>
  </div>

  <div class="form-actions">
   <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
   <?= anchor('menu/index', 'Cancelar', array('class'=>'btn btn-warning')); ?>
  </div>

 <?= form_close(); ?>