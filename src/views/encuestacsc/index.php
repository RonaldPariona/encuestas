<script>
    $(document).ready(function () {
        $('#v_encuestacsc').dataTable({
            stateSave: true,
            language: {
                url: "<?= base_url('lib'); ?>/Spanish.json",
                decimal: ","
            }/*,
             stateSave: true*/
        });
    });
</script>
<div class="page-header">
    <h1>Encuesta de percepci&oacute;n de servicios <small>Centro de Servicios al Contribuyente</small></h1>
    <?php
    echo anchor('encuestacsc/index', 'TODOS', array('class' => 'btn btn-default btn-sm')) . " ";
    echo anchor('encuestacsc/index', 'COMPLETOS', array('class' => 'btn btn-success btn-sm')) . " ";
    echo anchor('encuestacsc/index', 'PENDIENTES', array('class' => 'btn btn-info btn-sm')) . " ";
    echo anchor('encuestacsc/index', 'OBSERVADOS', array('class' => 'btn btn-warning btn-sm')) . " ";
    echo anchor('encuestacsc/index', 'ELIMINADOS', array('class' => 'btn btn-danger btn-sm')) . " ";
    echo '<div style="float:right; margin-right:10px;">';
    echo anchor('encuestacsc/addcuestionario', 'Agregar cuestionarios', array('class' => 'btn btn-primary btn-sm'));
    echo '</div>';
    ?>
</div>

<div id="tabla-data" role="wrapper" class="dataTable_wrapper form-inline dt-bootstrap"> 
    <table id="v_encuestacsc" role="grid" data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true">ID</th>
                <th data-field="codigo" data-sortable="true">CUEST</th>
                <th>ZONA</th>
                <th>CENTRO DE SERVICIO</th>
                <th>ENCUESTADO</th>
                <th>RUC</th>
                <th>DISTRITO</th>
                <th>ESTADO</th>
                <th>FECHA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>CUEST</th>
                <th>ZONA</th>
                <th>CENTRO DE SERVICIO</th>
                <th>ENCUESTADO</th>
                <th>RUC</th>
                <th>DISTRITO</th>
                <th>ESTADO</th>
                <th>FECHA</th>
                <th>ACCIONES</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($cuestionarios as $item): ?>
                <tr class="todo-list">
                    <td><?= $item->ID ?></td>
                    <td><?= $item->CUEST ?></td>
                    <td><?= $item->ZONA ?></td>
                    <td><?= $item->SEDE ?></td>
                    <td><?= $item->ENCUESTADO ?></td>
                    <td ><?= $item->RUC ?></td>
                    <td ><?= $item->DISTRITO ?></td>
                    <td ><?= $item->ESTADO ?></td>
                    <td ><?= $item->FECHA ?></td>
                    <td class="text-center" >
                        <?= anchor('encuestacsc/irpagina1/' . $item->ID, 'Ir a cuestionario <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>', array('class' => 'btn btn-warning btn-sm')) ?>
                        <?= anchor('encuestacsc/borrar/' . $item->ID, 'Eliminar <svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg>', array('class' => 'trash btn btn-danger btn-sm')) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
