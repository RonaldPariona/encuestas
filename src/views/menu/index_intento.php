<div class="page-header">
	<h1>Opciones de Menú <small>mantenimiento de menús</small></h1>
</div>
<?= form_open('menu/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder' => 'Buscar por nombre...', 'class' => 'input-medium search-query','onkeyup' => 'this.value=this.value.toUpperCase()'));?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn')); ?>
   	<?= anchor('menu/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
<div>
	<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Controlador</th>
			<th>Acci&oacute;n</th>
			<th>URL</th>
			<th>Orden</th>
			<th>Creado</th>
			<th>Modificado</th>
			<th>Accesos</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $item): ?>
		<tr>
			<td><?= anchor('menu/edit/'.$item['id'],$item['id']); ?></td>
			<td><?= $item['menu']?></td>
			<td><?= $item['controlador']?></td>
			<td><?= $item['accion']?></td>
			<td><?= $item['url']?></td>
			<td><?= $item['orden']?></td>
			<td><?= date("d/m/Y - H:i",strtotime($item['created_at'])); ?></td>
			<?php if ($item['updated_at']): ?>
				<td><?= date("d/m/Y - H:i",strtotime($item['updated_at'])); ?></td>
			<?php else: ?>
				<td></td>
			<?php endif; ?>
			<td><?= anchor('menu/menu_perfiles/'.$item['id'],'<i class="icon-lock"></i>'); ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>