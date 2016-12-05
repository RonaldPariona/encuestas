<div class="page-header">
	<h1>Perfiles <small>mantenimiento de registros</small></h1>
</div>
<?= form_open('perfil/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder' => 'Buscar por nombre...', 'class' => 'input-medium search-query','onkeyup' => 'this.value=this.value.toUpperCase()'));?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"></i>', 'class'=>'btn')); ?>
   	<?= anchor('perfil/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
<div>
	<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Creado</th>
			<th>Modificado</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $item): ?>
		<tr>
			<td><?= anchor('perfil/edit/'.$item->id,$item->id); ?></td>
			<td><?= $item->cargo?></td>
			<td><?= date("d/m/Y - H:i",strtotime($item->created_at)); ?></td>
			<?php if ($item->updated_at): ?>
				<td><?= date("d/m/Y - H:i",strtotime($item->updated_at)); ?></td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>