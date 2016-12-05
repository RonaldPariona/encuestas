 <?= form_open('perfil/update', array('class'=>'form-horizontal')); ?>

  <legend>Actualización de perfil</legend>
  <?= my_validation_errors(validation_errors()); ?>

  <div class="control-group">
    <?= form_label('ID: ', 'id', array('class'=>'control-label')); ?>
    <span class="uneditable-input"><?=$registro->id?></span>
    <?= form_hidden('id',$registro->id); ?>
  </div>
  <div class="control-group">
   <?= form_label('Nombre: ','cargo', array('class'=>'control-label')); ?>
   <?= form_input(array('type'=>'text', 'name'=>'cargo', 'id'=>'cargo', 'value'=>$registro->cargo,'onkeyup' => 'this.value=this.value.toUpperCase()'));?>
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
   <?= anchor('perfil/index', 'Cancelar', array('class'=>'btn')); ?>
   <?= anchor('perfil/delete/'.$registro->id, 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('Esta seguro');")); ?>
  </div>

 <?= form_close(); ?>