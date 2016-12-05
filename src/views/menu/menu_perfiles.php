<div class="row-fluid">
  <div class="span6">
    <table class="table table-condensed table-bordered">
    <caption><h1> No asignados </h1></caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($query_izq as $item): ?>
      <tr>
        <td><?= $item[0]?></td>
        <td><?= $item[1]?></td>
        <td><?= anchor('menu/mp_asig/'.$item[0].'/'.$item[2], '<i class="icon-arrow-right"></i>'); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
  <div class="span6">
    <table class="table table-condensed table-bordered">
    <caption><h1> Asignados </h1></caption>
    <thead>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Nombre</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($query_der as $item): ?>
      <tr>
        <td><?= anchor('menu/mp_noasig/'.$item[0].'/'.$item[2], '<i class="icon-arrow-left"></i>'); ?></td>
        <td><?= $item[0]?></td>
        <td><?= $item[1]?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
</div>
<div class="form-control">
   <?= anchor('menu/index', 'Volver', array('class'=>'btn btn-primary')); ?>
  </div>