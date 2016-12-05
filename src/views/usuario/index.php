<div class="page-header">
	<h1>Usuarios <small>mantenimiento de registros</small></h1>
</div>
<?= form_open('usuario/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder' => 'Buscar por nombre...', 'class' => 'input-medium search-query','onkeyup' => 'this.value=this.value.toUpperCase()'));?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"></i>', 'class'=>'btn')); ?>
   	<?= anchor('usuario/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
<div>
    <br>
    <table data-toggle="table" id="table-style" data-row-style="rowStyle">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Login</th>
			<th>Email</th>
			<th>Perfil</th>
			<th>Creado</th>
			<th>Modificado</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $item): ?>
		<tr>
			<td><?= anchor('usuario/edit/'.$item->id,$item->id); ?></td>
			<td><?= $item->nombres.' '.$item->apellidos?></td>
			<td><?= $item->usuario?></td>
			<td><?= $item->email?></td>
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