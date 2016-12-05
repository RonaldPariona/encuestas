 <?= form_open('menu/update', array('class'=>'form-horizontal')); ?>

  <legend>Actualización de men&uacute;</legend>
  <?= my_validation_errors(validation_errors()); ?>

  <div class="control-group">
    <?= form_label('ID: ', 'id', array('class'=>'control-label')); ?>
    <span class="uneditable-input"><?=$registro->id?></span>
    <?= form_hidden('id',$registro->id); ?>
  </div>

  <div class="control-group">
   <?= form_label('Menu: ','menu', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'menu', 'id'=>'menu', 'value'=>$registro->menu));?>
  </div>

  <div class="control-group">
   <?= form_label('Controlador :', 'controlador', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'controlador', 'id'=>'controlador', 'value'=>$registro->controlador,'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('Acci&oacute;n :', 'accion', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'accion', 'id'=>'accion', 'value'=>$registro->accion,'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('URL :', 'url', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'url', 'id'=>'url', 'value'=>$registro->url,'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
   <?= form_label('Orden :', 'orden', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'number', 'name'=>'orden', 'id'=>'orden', 'value'=>$registro->orden,'onkeyup' => 'this.value=this.value.toLowerCase()'));?>
  </div>

  <div class="control-group">
    <?= form_label('Creado: ', 'created_at', array('class'=>'control-label')); ?>
    <span class="uneditable-input"><?=$registro->created_at?></span>
    <?= form_hidden('created_at',$registro->created_at); ?>
  </div>

  <div class="control-group">
    <?= form_label('Modificado: ', 'updated_at', array('class'=>'control-label')); ?>
    <span class="uneditable-input"><?=$registro->updated_at?></span>
    <?= form_hidden('updated_at',$registro->updated_at); ?>
  </div>

  <div class="form-actions">
   <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
   <?= anchor('menu/index', 'Cancelar', array('class'=>'btn')); ?>
   <?= anchor('menu/delete/'.$registro->id, 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('Esta seguro');")); ?>
  </div>

 <?= form_close(); ?>