 <?= form_open('menu/update', array('class'=>'form-horizontal')); ?>

  <legend>Actualización de men&uacute;</legend>
  <?= my_validation_errors(validation_errors()); ?>

  <div class="control-group">
    <?= form_label('ID: ', 'id', array('class'=>'control-label')); ?>
    <span class="uneditable-input"><?=$registro->id?></span>
    <?= form_hidden('id',$registro->id); ?>
  </div>

  <div class="control-group">
   <?= form_label('Men&uacute; :', 'menu_id', array('class'=>'control-label')); ?>
   <?= form_dropdown('menu_id',$menus,array('value'=>$registro->menu_id)); ?>
  </div>

  <div class="control-group">
   <?= form_label('Perfil :', 'perfil_id', array('class'=>'control-label')); ?>
   <?= form_dropdown('perfil_id',$perfiles,array('value'=>$registro->perfil_id)); ?>
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
   <?= anchor('menu_perfil/index', 'Cancelar', array('class'=>'btn')); ?>
   <?= anchor('menu_perfil/delete/'.$registro->id, 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('Esta seguro');")); ?>
  </div>

 <?= form_close(); ?>