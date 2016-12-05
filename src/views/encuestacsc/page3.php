<script>

    $(document).ready(function () {
        $(":input").on("keydown", function (event) {
            if ((event.which === 13 || event.keyCode === 13) && !$(this).is("textarea, :button, :submit")) {
                event.stopPropagation();
                event.preventDefault();
                $(this)
                        .nextAll(":input:not(:disabled, [readonly='readonly'])")
                        .first()
                        .focus();
            }
        });
        $("form[name='page3']").validate({
            ignore: [],
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                V_01_A_1: "required",
                V_01_A_2: "required",
                V_01_A_3: "required",
                V_01_A_4: "required",
                V_01_B_1: "required",
                V_01_B_2: "required",
                V_01_B_3: "required",
                V_01_B_4: "required",
                V_02_A_1: "required",
                V_02_A_2: "required",
                V_02_A_3: "required",
                V_02_A_4: "required",
                V_02_B_1: "required",
                V_02_B_2: "required",
                V_02_B_3: "required",
                V_02_B_4: "required",
                V_03_1: "required",
                V_03_2: "required",
                V_03_3: "required",
                V_03_4: "required",
                V_03_5: "required",
                V_04_1: "required",
                V_04_2: "required",
                V_05_1: "required",
                V_05_2: "required",
                V_05_3: "required",
                V_06_1: "required",
                V_06_2: "required",
                V_06_3: "required",
                V_07_1: "required",
                V_07_2: "required",
                V_07_3: "required",
                V_08_1: "required",
                V_08_2: "required",
                V_08_3: "required",
                V_09: "required"
            },
            //Estilo para el mensaje de error
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.container'));
                } else if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            // Specify validation error messages
            messages: {
                V_01_A_1: "Respuesta requerida",
                V_01_A_2: "Respuesta requerida",
                V_01_A_3: "Respuesta requerida",
                V_01_A_4: "Respuesta requerida",
                V_01_B_1: "Respuesta requerida",
                V_01_B_2: "Respuesta requerida",
                V_01_B_3: "Respuesta requerida",
                V_01_B_4: "Respuesta requerida",
                V_02_A_1: "Respuesta requerida",
                V_02_A_2: "Respuesta requerida",
                V_02_A_3: "Respuesta requerida",
                V_02_A_4: "Respuesta requerida",
                V_02_B_1: "Respuesta requerida",
                V_02_B_2: "Respuesta requerida",
                V_02_B_3: "Respuesta requerida",
                V_02_B_4: "Respuesta requerida",
                V_03_1: "Respuesta requerida",
                V_03_2: "Respuesta requerida",
                V_03_3: "Respuesta requerida",
                V_03_4: "Respuesta requerida",
                V_03_5: "Respuesta requerida",
                V_04_1: "Respuesta requerida",
                V_04_2: "Respuesta requerida",
                V_05_1: "Respuesta requerida",
                V_05_2: "Respuesta requerida",
                V_05_3: "Respuesta requerida",
                V_06_1: "Respuesta requerida",
                V_06_2: "Respuesta requerida",
                V_06_3: "Respuesta requerida",
                V_07_1: "Respuesta requerida",
                V_07_2: "Respuesta requerida",
                V_07_3: "Respuesta requerida",
                V_08_1: "Respuesta requerida",
                V_08_2: "Respuesta requerida",
                V_08_3: "Respuesta requerida",
                V_09: "Respuesta requerida"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
</script>
<script>
    $(document).ready(function () {
        //page3
        $('#page3 input[name=V_01_A_1]').on('change', function () {
            if ($('input[name=V_01_A_1]:checked', '#page3').val() >= 1) {
                $('#V_01_A_2').focus();
            }
        });
        $('#page3 input[name=V_01_A_2]').on('change', function () {
            if ($('input[name=V_01_A_2]:checked', '#page3').val() >= 1) {
                $('#V_01_A_3').focus();
            }
        });
        $('#page3 input[name=V_01_A_3]').on('change', function () {
            if ($('input[name=V_01_A_3]:checked', '#page3').val() >= 1) {
                $('#V_01_A_4').focus();
            }
        });
        $('#page3 input[name=V_01_A_4]').on('change', function () {
            if ($('input[name=V_01_A_4]:checked', '#page3').val() >= 1) {
                $('#V_01_B_1').focus();
            }
        });
        $('#page3 input[name=V_01_B_1]').on('change', function () {
            if ($('input[name=V_01_B_1]:checked', '#page3').val() >= 1) {
                $('#V_01_B_2').focus();
            }
        });
        $('#page3 input[name=V_01_B_2]').on('change', function () {
            if ($('input[name=V_01_B_2]:checked', '#page3').val() >= 1) {
                $('#V_01_B_3').focus();
            }
        });
        $('#page3 input[name=V_01_B_3]').on('change', function () {
            if ($('input[name=V_01_B_3]:checked', '#page3').val() >= 1) {
                $('#V_01_B_4').focus();
            }
        });
        $('#page3 input[name=V_01_B_4]').on('change', function () {
            if ($('input[name=V_01_B_4]:checked', '#page3').val() >= 1) {
                $('#V_02_A_1').focus();
            }
        });
        $('#page3 input[name=V_02_A_1]').on('change', function () {
            if ($('input[name=V_02_A_1]:checked', '#page3').val() >= 1) {
                $('#V_02_A_2').focus();
            }
        });
        $('#page3 input[name=V_02_A_2]').on('change', function () {
            if ($('input[name=V_02_A_2]:checked', '#page3').val() >= 1) {
                $('#V_02_A_3').focus();
            }
        });
        $('#page3 input[name=V_02_A_3]').on('change', function () {
            if ($('input[name=V_02_A_3]:checked', '#page3').val() >= 1) {
                $('#V_02_A_4').focus();
            }
        });
        $('#page3 input[name=V_02_A_4]').on('change', function () {
            if ($('input[name=V_02_A_4]:checked', '#page3').val() >= 1) {
                $('#V_02_B_1').focus();
            }
        });
        $('#page3 input[name=V_02_B_1]').on('change', function () {
            if ($('input[name=V_02_B_1]:checked', '#page3').val() >= 1) {
                $('#V_02_B_2').focus();
            }
        });
        $('#page3 input[name=V_02_B_2]').on('change', function () {
            if ($('input[name=V_02_B_2]:checked', '#page3').val() >= 1) {
                $('#V_02_B_3').focus();
            }
        });
        $('#page3 input[name=V_02_B_3]').on('change', function () {
            if ($('input[name=V_02_B_3]:checked', '#page3').val() >= 1) {
                $('#V_02_B_4').focus();
            }
        });
        $('#page3 input[name=V_02_B_4]').on('change', function () {
            if ($('input[name=V_02_B_4]:checked', '#page3').val() >= 1) {
                $('#V_03_1').focus();
            }
        });
        $('#page3 input[name=V_03_1]').on('change', function () {
            if ($('input[name=V_03_1]:checked', '#page3').val() >= 1) {
                $('#V_03_2').focus();
            }
        });
        $('#page3 input[name=V_03_2]').on('change', function () {
            if ($('input[name=V_03_2]:checked', '#page3').val() >= 1) {
                $('#V_03_3').focus();
            }
        });
        $('#page3 input[name=V_03_3]').on('change', function () {
            if ($('input[name=V_03_3]:checked', '#page3').val() >= 1) {
                $('#V_03_4').focus();
            }
        });
        $('#page3 input[name=V_03_4]').on('change', function () {
            if ($('input[name=V_03_4]:checked', '#page3').val() >= 1) {
                $('#V_04_1').focus();
            }
        });
        $('#page3 input[name=V_04_1]').on('change', function () {
            if ($('input[name=V_04_1]:checked', '#page3').val() >= 1) {
                $('#V_04_2').focus();
            }
        });
        $('#page3 input[name=V_04_2]').on('change', function () {
            if ($('input[name=V_04_2]:checked', '#page3').val() >= 1) {
                $('#V_05_1').focus();
            }
        });
        $('#page3 input[name=V_05_1]').on('change', function () {
            if ($('input[name=V_05_1]:checked', '#page3').val() >= 1) {
                $('#V_05_2').focus();
            }
        });
        $('#page3 input[name=V_05_2]').on('change', function () {
            if ($('input[name=V_05_2]:checked', '#page3').val() >= 1) {
                $('#V_05_3').focus();
            }
        });
        $('#page3 input[name=V_05_3]').on('change', function () {
            if ($('input[name=V_05_3]:checked', '#page3').val() >= 1) {
                $('#V_06_1').focus();
            }
        });
        $('#page3 input[name=V_06_1]').on('change', function () {
            if ($('input[name=V_06_1]:checked', '#page3').val() >= 1) {
                $('#V_06_2').focus();
            }
        });
        $('#page3 input[name=V_06_2]').on('change', function () {
            if ($('input[name=V_06_2]:checked', '#page3').val() >= 1) {
                $('#V_06_3').focus();
            }
        });
        $('#page3 input[name=V_06_3]').on('change', function () {
            if ($('input[name=V_06_3]:checked', '#page3').val() >= 1) {
                $('#V_07_1').focus();
            }
        });
        $('#page3 input[name=V_07_1]').on('change', function () {
            if ($('input[name=V_07_1]:checked', '#page3').val() >= 1) {
                $('#V_07_2').focus();
            }
        });
        $('#page3 input[name=V_07_2]').on('change', function () {
            if ($('input[name=V_07_2]:checked', '#page3').val() >= 1) {
                $('#V_07_3').focus();
            }
        });
        $('#page3 input[name=V_07_3]').on('change', function () {
            if ($('input[name=V_07_3]:checked', '#page3').val() >= 1) {
                $('#V_08_1').focus();
            }
        });
        $('#page3 input[name=V_08_1]').on('change', function () {
            if ($('input[name=V_08_1]:checked', '#page3').val() >= 1) {
                $('#V_08_2').focus();
            }
        });
        $('#page3 input[name=V_08_2]').on('change', function () {
            if ($('input[name=V_08_2]:checked', '#page3').val() >= 1) {
                $('#V_08_3').focus();
            }
        });
        $('#page3 input[name=V_08_3]').on('change', function () {
            if ($('input[name=V_08_3]:checked', '#page3').val() >= 1) {
                $('#V_09').focus();
            }
        });

        $('#page3 input[name=V_09]').on('change', function () {
            if ($('input[name=V_09]:checked', '#page3').val() >= 1) {
                document.getElementById('grabar').focus();
            }
        }
        );
    });
</script>

<ul class="tab">
    <li class="pull-left"><a href="<?= site_url('encuestacsc/irpagina2/' . $form3->ID); ?>">Página 2</a></li>
    <li class="pull-right"><a href="<?= site_url('encuestacsc/index'); ?>">Regresar a la lista</a></li>
</ul>
<div class="panel panel-info">
    <div class="panel-heading">
        V. SATISFACCIÓN POR EL SERVICIO RECIBIDO EN EL CSC
    </div>
    <div class="panel-body">

        <?= form_open('encuestacsc/registrapag3', array('id' => 'page3', 'name' => 'page3', 'class' => 'form-horizontal')); ?>
        <?= validation_errors(); ?>
        <fieldset>
            <?= form_hidden('ID', $form3->ID); ?>
            <div class="form-group col-sm-12">
                <h3>5.1. CONOCIMIENTO TÉCNICO</h3>
                <p>¿Qué tan satisfecho se siente Ud. con la atención que recibió en los servicios de:</p>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('Respecto al conocimiento de las normas vigentes que demuestra el personal de la SUNAT en el servicio de:', 'V_01', array('class' => 'control-label')); ?>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//$dataV_01_A_1 = array('name' => 'V_01_A_1', 'id' => 'V_01_A_1');
                    $dataV_01_A_1_1 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 1, 'checked' => ($form3->V_01_A_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_1_2 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 2, 'checked' => ($form3->V_01_A_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_1_3 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 3, 'checked' => ($form3->V_01_A_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_1_4 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 4, 'checked' => ($form3->V_01_A_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_1_5 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 5, 'checked' => ($form3->V_01_A_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_1_6 = array(
                        'name' => 'V_01_A_1', 'id' => 'V_01_A_1', 'value' => 6, 'checked' => ($form3->V_01_A_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//$dataV_01_A_2 = array('name' => 'V_01_A_2', 'id' => 'V_01_A_2');
                    $dataV_01_A_2_1 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 1, 'checke3' => ($form3->V_01_A_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_2_2 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 2, 'checked' => ($form3->V_01_A_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_2_3 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 3, 'checked' => ($form3->V_01_A_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_2_4 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 4, 'checked' => ($form3->V_01_A_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_2_5 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 5, 'checked' => ($form3->V_01_A_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_2_6 = array(
                        'name' => 'V_01_A_2', 'id' => 'V_01_A_2', 'value' => 6, 'checked' => ($form3->V_01_A_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//$dataV_01_A_3 = array('name' => 'V_01_A_3', 'id' => 'V_01_A_3');
                    $dataV_01_A_3_1 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 1, 'checked' => ($form3->V_01_A_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_3_2 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 2, 'checked' => ($form3->V_01_A_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_3_3 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 3, 'checked' => ($form3->V_01_A_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_3_4 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 4, 'checked' => ($form3->V_01_A_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_3_5 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 5, 'checked' => ($form3->V_01_A_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_3_6 = array(
                        'name' => 'V_01_A_3', 'id' => 'V_01_A_3', 'value' => 6, 'checked' => ($form3->V_01_A_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//$dataV_01_A_4 = array('name' => 'V_01_A_4', 'id' => 'V_01_A_4');
                    $dataV_01_A_4_1 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 1, 'checked' => ($form3->V_01_A_4 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_4_2 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 2, 'checked' => ($form3->V_01_A_4 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_4_3 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 3, 'checked' => ($form3->V_01_A_4 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_4_4 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 4, 'checked' => ($form3->V_01_A_4 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_4_5 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 5, 'checked' => ($form3->V_01_A_4 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_A_4_6 = array(
                        'name' => 'V_01_A_4', 'id' => 'V_01_A_4', 'value' => 6, 'checked' => ($form3->V_01_A_4 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Orientación</th>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Trámite</th>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cabina</th>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_3_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mesa de partes</th>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_A_4_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('Respecto al conocimiento de las normas vigentes que demuestra el personal de la SUNAT en el servicio de:', '', array('class' => 'control-label')); ?>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_01_B_1 = array('name' => 'V_01_B_1', 'id' => 'V_01_B_1');
                    $dataV_01_B_1_1 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 1, 'checked' => ($form3->V_01_B_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_1_2 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 2, 'checked' => ($form3->V_01_B_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_1_3 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 3, 'checked' => ($form3->V_01_B_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_1_4 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 4, 'checked' => ($form3->V_01_B_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_1_5 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 5, 'checked' => ($form3->V_01_B_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_1_6 = array(
                        'name' => 'V_01_B_1', 'id' => 'V_01_B_1', 'value' => 6, 'checked' => ($form3->V_01_B_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_01_B_2 = array('name' => 'V_01_B_2', 'id' => 'V_01_B_2');
                    $dataV_01_B_2_1 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 1, 'checked' => ($form3->V_01_B_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_2_2 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 2, 'checked' => ($form3->V_01_B_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_2_3 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 3, 'checked' => ($form3->V_01_B_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_2_4 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 4, 'checked' => ($form3->V_01_B_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_2_5 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 5, 'checked' => ($form3->V_01_B_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_2_6 = array(
                        'name' => 'V_01_B_2', 'id' => 'V_01_B_2', 'value' => 6, 'checked' => ($form3->V_01_B_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_01_B_3 = array('name' => 'V_01_B_3', 'id' => 'V_01_B_3');
                    $dataV_01_B_3_1 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 1, 'checked' => ($form3->V_01_B_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_3_2 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 2, 'checked' => ($form3->V_01_B_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_3_3 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 3, 'checked' => ($form3->V_01_B_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_3_4 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 4, 'checked' => ($form3->V_01_B_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_3_5 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 5, 'checked' => ($form3->V_01_B_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_3_6 = array(
                        'name' => 'V_01_B_3', 'id' => 'V_01_B_3', 'value' => 6, 'checked' => ($form3->V_01_B_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_01_B_4 = array('name' => 'V_01_B_4', 'id' => 'V_01_B_4');
                    $dataV_01_B_4_1 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 1, 'checked' => ($form3->V_01_B_4 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_4_2 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 2, 'checked' => ($form3->V_01_B_4 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_4_3 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 3, 'checked' => ($form3->V_01_B_4 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_4_4 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 4, 'checked' => ($form3->V_01_B_4 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_4_5 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 5, 'checked' => ($form3->V_01_B_4 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_01_B_4_6 = array(
                        'name' => 'V_01_B_4', 'id' => 'V_01_B_4', 'value' => 6, 'checked' => ($form3->V_01_B_4 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Orientación</th>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Trámite</th>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cabina</th>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_3_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mesa de partes</th>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_01_B_4_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h3>5.2. COMUNICACI&Oacute;N</h3>
                <?= form_label('Respecto a la habilidad (facilidad) PARA COMUNICARSE que tiene el personal de la SUNAT de:', '', array('class' => 'control-label')); ?>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_02_A_1 = array('name' => 'V_02_A_1', 'id' => 'V_02_A_1');
                    $dataV_02_A_1_1 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 1, 'checked' => ($form3->V_02_A_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_1_2 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 2, 'checked' => ($form3->V_02_A_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_1_3 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 3, 'checked' => ($form3->V_02_A_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_1_4 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 4, 'checked' => ($form3->V_02_A_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_1_5 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 5, 'checked' => ($form3->V_02_A_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_1_6 = array(
                        'name' => 'V_02_A_1', 'id' => 'V_02_A_1', 'value' => 6, 'checked' => ($form3->V_02_A_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_A_2 = array('name' => 'V_02_A_2', 'id' => 'V_02_A_2');
                    $dataV_02_A_2_1 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 1, 'checked' => ($form3->V_02_A_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_2_2 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 2, 'checked' => ($form3->V_02_A_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_2_3 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 3, 'checked' => ($form3->V_02_A_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_2_4 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 4, 'checked' => ($form3->V_02_A_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_2_5 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 5, 'checked' => ($form3->V_02_A_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_2_6 = array(
                        'name' => 'V_02_A_2', 'id' => 'V_02_A_2', 'value' => 6, 'checked' => ($form3->V_02_A_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_A_3 = array('name' => 'V_02_A_3', 'id' => 'V_02_A_3');
                    $dataV_02_A_3_1 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 1, 'checked' => ($form3->V_02_A_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_3_2 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 2, 'checked' => ($form3->V_02_A_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_3_3 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 3, 'checked' => ($form3->V_02_A_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_3_4 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 4, 'checked' => ($form3->V_02_A_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_3_5 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 5, 'checked' => ($form3->V_02_A_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_3_6 = array(
                        'name' => 'V_02_A_3', 'id' => 'V_02_A_3', 'value' => 6, 'checked' => ($form3->V_02_A_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_A_4 = array('name' => 'V_02_A_4', 'id' => 'V_02_A_4');
                    $dataV_02_A_4_1 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 1, 'checked' => ($form3->V_02_A_4 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_4_2 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 2, 'checked' => ($form3->V_02_A_4 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_4_3 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 3, 'checked' => ($form3->V_02_A_4 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_4_4 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 4, 'checked' => ($form3->V_02_A_4 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_4_5 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 5, 'checked' => ($form3->V_02_A_4 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_A_4_6 = array(
                        'name' => 'V_02_A_4', 'id' => 'V_02_A_4', 'value' => 6, 'checked' => ($form3->V_02_A_4 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Orientación</th>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Trámite</th>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cabina</th>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_3_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mesa de partes</th>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_A_4_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('Respecto a la comprensión y claridad del lenguaje utilizado en las RESPUESTAS BRINDADAS por el personal durante el proceso:', '', array('class' => 'control-label')); ?>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_02_B_1 = array('name' => 'V_02_B_1', 'id' => 'V_02_B_1');
                    $dataV_02_B_1_1 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 1, 'checked' => ($form3->V_02_B_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_1_2 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 2, 'checked' => ($form3->V_02_B_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_1_3 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 3, 'checked' => ($form3->V_02_B_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_1_4 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 4, 'checked' => ($form3->V_02_B_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_1_5 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 5, 'checked' => ($form3->V_02_B_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_1_6 = array(
                        'name' => 'V_02_B_1', 'id' => 'V_02_B_1', 'value' => 6, 'checked' => ($form3->V_02_B_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_B_2 = array('name' => 'V_02_B_2', 'id' => 'V_02_B_2');
                    $dataV_02_B_2_1 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 1, 'checked' => ($form3->V_02_B_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_2_2 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 2, 'checked' => ($form3->V_02_B_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_2_3 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 3, 'checked' => ($form3->V_02_B_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_2_4 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 4, 'checked' => ($form3->V_02_B_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_2_5 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 5, 'checked' => ($form3->V_02_B_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_2_6 = array(
                        'name' => 'V_02_B_2', 'id' => 'V_02_B_2', 'value' => 6, 'checked' => ($form3->V_02_B_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_B_3 = array('name' => 'V_02_B_3', 'id' => 'V_02_B_3');
                    $dataV_02_B_3_1 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 1, 'checked' => ($form3->V_02_B_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_3_2 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 2, 'checked' => ($form3->V_02_B_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_3_3 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 3, 'checked' => ($form3->V_02_B_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_3_4 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 4, 'checked' => ($form3->V_02_B_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_3_5 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 5, 'checked' => ($form3->V_02_B_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_3_6 = array(
                        'name' => 'V_02_B_3', 'id' => 'V_02_B_3', 'value' => 6, 'checked' => ($form3->V_02_B_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_02_B_4 = array('name' => 'V_02_B_4', 'id' => 'V_02_B_4');
                    $dataV_02_B_4_1 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 1, 'checked' => ($form3->V_02_B_4 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_4_2 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 2, 'checked' => ($form3->V_02_B_4 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_4_3 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 3, 'checked' => ($form3->V_02_B_4 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_4_4 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 4, 'checked' => ($form3->V_02_B_4 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_4_5 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 5, 'checked' => ($form3->V_02_B_4 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_02_B_4_6 = array(
                        'name' => 'V_02_B_4', 'id' => 'V_02_B_4', 'value' => 6, 'checked' => ($form3->V_02_B_4 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Orientación</th>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Trámite</th>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cabina</th>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_3_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mesa de partes</th>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_02_B_4_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="form-group col-sm-12">
                <h3>5.3. ELEMENTOS TANGIBLES</h3>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_03_1 = array('name' => 'V_03_1', 'id' => 'V_03_1');
                    $dataV_03_1_1 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 1, 'checked' => ($form3->V_03_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_1_2 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 2, 'checked' => ($form3->V_03_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_1_3 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 3, 'checked' => ($form3->V_03_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_1_4 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 4, 'checked' => ($form3->V_03_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_1_5 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 5, 'checked' => ($form3->V_03_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_1_6 = array(
                        'name' => 'V_03_1', 'id' => 'V_03_1', 'value' => 6, 'checked' => ($form3->V_03_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_03_2 = array('name' => 'V_03_2', 'id' => 'V_03_2');
                    $dataV_03_2_1 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 1, 'checked' => ($form3->V_03_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_2_2 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 2, 'checked' => ($form3->V_03_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_2_3 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 3, 'checked' => ($form3->V_03_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_2_4 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 4, 'checked' => ($form3->V_03_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_2_5 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 5, 'checked' => ($form3->V_03_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_2_6 = array(
                        'name' => 'V_03_2', 'id' => 'V_03_2', 'value' => 6, 'checked' => ($form3->V_03_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_03_3 = array('name' => 'V_03_3', 'id' => 'V_03_3');
                    $dataV_03_3_1 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 1, 'checked' => ($form3->V_03_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_3_2 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 2, 'checked' => ($form3->V_03_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_3_3 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 3, 'checked' => ($form3->V_03_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_3_4 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 4, 'checked' => ($form3->V_03_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_3_5 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 5, 'checked' => ($form3->V_03_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_3_6 = array(
                        'name' => 'V_03_3', 'id' => 'V_03_3', 'value' => 6, 'checked' => ($form3->V_03_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_03_4 = array('name' => 'V_03_4', 'id' => 'V_03_4');
                    $dataV_03_4_1 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 1, 'checked' => ($form3->V_03_4 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_4_2 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 2, 'checked' => ($form3->V_03_4 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_4_3 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 3, 'checked' => ($form3->V_03_4 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_4_4 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 4, 'checked' => ($form3->V_03_4 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_4_5 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 5, 'checked' => ($form3->V_03_4 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_4_6 = array(
                        'name' => 'V_03_4', 'id' => 'V_03_4', 'value' => 6, 'checked' => ($form3->V_03_4 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    // $dataV_03_5 = array('name' => 'V_03_5', 'id' => 'V_03_5');
                    $dataV_03_5_1 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 1, 'checked' => ($form3->V_03_5 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_5_2 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 2, 'checked' => ($form3->V_03_5 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_5_3 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 3, 'checked' => ($form3->V_03_5 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_5_4 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 4, 'checked' => ($form3->V_03_5 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_5_5 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 5, 'checked' => ($form3->V_03_5 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_03_5_6 = array(
                        'name' => 'V_03_5', 'id' => 'V_03_5', 'value' => 6, 'checked' => ($form3->V_03_5 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Aspectos</th>
                                <th class="text-center">Muy deficiente?</th>
                                <th class="text-center">Deficiente?</th>
                                <th class="text-center">Ni deficiente ni satisfactorio?</th>
                                <th class="text-center">Satisfactorio?</th>
                                <th class="text-center">Muy satisfactorio?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">La limpieza y orden del local de atención (CSC-Centro de Servicio al Contribuyente) de la SUNAT</th>
                                <td class="text-center"><?= form_radio($dataV_03_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">La comodidad  del local de atención de la SUNAT</th>
                                <td class="text-center"><?= form_radio($dataV_03_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">La presentación del personal (es decir limpieza, orden, postura, fotocheck)</th>
                                <td class="text-center"><?= form_radio($dataV_03_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_3_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">El nivel de tecnología que brinda la SUNAT</th>
                                <td class="text-center"><?= form_radio($dataV_03_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_4_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_4_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">El funcionamiento contínuo del sistema de la SUNAT para atender a los usuarios</th>
                                <td class="text-center"><?= form_radio($dataV_03_5_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_5_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_5_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_5_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_5_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_03_5_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="form-group col-sm-12">
                <h3>5.4. CALIDEZ</h3>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_04_1 = array('name' => 'V_04_1', 'id' => 'V_04_1');
                    $dataV_04_1_1 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 1, 'checked' => ($form3->V_04_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_1_2 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 2, 'checked' => ($form3->V_04_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_1_3 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 3, 'checked' => ($form3->V_04_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_1_4 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 4, 'checked' => ($form3->V_04_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_1_5 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 5, 'checked' => ($form3->V_04_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_1_6 = array(
                        'name' => 'V_04_1', 'id' => 'V_04_1', 'value' => 6, 'checked' => ($form3->V_04_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_04_2 = array('name' => 'V_04_2', 'id' => 'V_04_2');
                    $dataV_04_2_1 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 1, 'checked' => ($form3->V_04_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_2_2 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 2, 'checked' => ($form3->V_04_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_2_3 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 3, 'checked' => ($form3->V_04_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_2_4 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 4, 'checked' => ($form3->V_04_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_2_5 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 5, 'checked' => ($form3->V_04_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_04_2_6 = array(
                        'name' => 'V_04_2', 'id' => 'V_04_2', 'value' => 6, 'checked' => ($form3->V_04_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Aspectos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Respecto a la cordialidad/amabilidad del personal que lo atendió</th>
                                <td class="text-center"><?= form_radio($dataV_04_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Respecto a la disposición del personal para orientarlo y/o atenderlo</th>
                                <td class="text-center"><?= form_radio($dataV_04_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_04_2_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h3>5.5. EFECTIVIDAD</h3>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_05_1 = array('name' => 'V_05_1', 'id' => 'V_05_1');
                    $dataV_05_1_1 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 1, 'checked' => ($form3->V_05_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_1_2 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 2, 'checked' => ($form3->V_05_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_1_3 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 3, 'checked' => ($form3->V_05_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_1_4 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 4, 'checked' => ($form3->V_05_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_1_5 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 5, 'checked' => ($form3->V_05_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_1_6 = array(
                        'name' => 'V_05_1', 'id' => 'V_05_1', 'value' => 6, 'checked' => ($form3->V_05_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_05_2 = array('name' => 'V_05_2', 'id' => 'V_05_2');
                    $dataV_05_2_1 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 1, 'checked' => ($form3->V_05_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_2_2 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 2, 'checked' => ($form3->V_05_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_2_3 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 3, 'checked' => ($form3->V_05_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_2_4 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 4, 'checked' => ($form3->V_05_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_2_5 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 5, 'checked' => ($form3->V_05_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_2_6 = array(
                        'name' => 'V_05_2', 'id' => 'V_05_2', 'value' => 6, 'checked' => ($form3->V_05_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_05_3 = array('name' => 'V_05_3', 'id' => 'V_05_3');
                    $dataV_05_3_1 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 1, 'checked' => ($form3->V_05_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_3_2 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 2, 'checked' => ($form3->V_05_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_3_3 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 3, 'checked' => ($form3->V_05_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_3_4 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 4, 'checked' => ($form3->V_05_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_3_5 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 5, 'checked' => ($form3->V_05_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_05_3_6 = array(
                        'name' => 'V_05_3', 'id' => 'V_05_3', 'value' => 6, 'checked' => ($form3->V_05_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Aspectos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">El tiempo que transcurrió para ser atendido (desde que llega al local)</th>
                                <td class="text-center"><?= form_radio($dataV_05_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">El tiempo dedicado a la atención durante el proceso</th>
                                <td class="text-center"><?= form_radio($dataV_05_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">El resultado de la consulta (que evite cometer errores posteriores)</th>
                                <td class="text-center"><?= form_radio($dataV_05_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_05_3_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h3>5.6. INFRAESTRUCTURA</h3>
                <p>¿Qué tan satisfecho se siente Ud. con las condiciones del local:</p>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_06_1 = array('name' => 'V_06_1', 'id' => 'V_06_1');
                    $dataV_06_1_1 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 1, 'checked' => ($form3->V_06_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_1_2 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 2, 'checked' => ($form3->V_06_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_1_3 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 3, 'checked' => ($form3->V_06_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_1_4 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 4, 'checked' => ($form3->V_06_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_1_5 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 5, 'checked' => ($form3->V_06_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_1_6 = array(
                        'name' => 'V_06_1', 'id' => 'V_06_1', 'value' => 6, 'checked' => ($form3->V_06_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_06_2 = array('name' => 'V_06_2', 'id' => 'V_06_2');
                    $dataV_06_2_1 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 1, 'checked' => ($form3->V_06_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_2_2 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 2, 'checked' => ($form3->V_06_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_2_3 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 3, 'checked' => ($form3->V_06_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_2_4 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 4, 'checked' => ($form3->V_06_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_2_5 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 5, 'checked' => ($form3->V_06_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_2_6 = array(
                        'name' => 'V_06_2', 'id' => 'V_06_2', 'value' => 6, 'checked' => ($form3->V_06_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_06_3 = array('name' => 'V_06_3', 'id' => 'V_06_3');
                    $dataV_06_3_1 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 1, 'checked' => ($form3->V_06_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_3_2 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 2, 'checked' => ($form3->V_06_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_3_3 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 3, 'checked' => ($form3->V_06_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_3_4 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 4, 'checked' => ($form3->V_06_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_3_5 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 5, 'checked' => ($form3->V_06_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_06_3_6 = array(
                        'name' => 'V_06_3', 'id' => 'V_06_3', 'value' => 6, 'checked' => ($form3->V_06_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy deficiente?</th>
                                <th class="text-center">Deficiente?</th>
                                <th class="text-center">Ni deficiente ni satisfactorio?</th>
                                <th class="text-center">Satisfactorio?</th>
                                <th class="text-center">Muy satisfactorio?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Estado de los ambientes en general (sala de atención, servicios higiénicos, ascensores, otros).</th>
                                <td class="text-center"><?= form_radio($dataV_06_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Número de ventanillas destinadas a la atención</th>
                                <td class="text-center"><?= form_radio($dataV_06_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Número del personal que brinda atención en cabina</th>
                                <td class="text-center"><?= form_radio($dataV_06_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_06_3_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h3>5.7. MOBILIARIO</h3>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_07_1 = array('name' => 'V_07_1', 'id' => 'V_07_1');
                    $dataV_07_1_1 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 1, 'checked' => ($form3->V_07_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_1_2 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 2, 'checked' => ($form3->V_07_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_1_3 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 3, 'checked' => ($form3->V_07_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_1_4 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 4, 'checked' => ($form3->V_07_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_1_5 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 5, 'checked' => ($form3->V_07_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_1_6 = array(
                        'name' => 'V_07_1', 'id' => 'V_07_1', 'value' => 6, 'checked' => ($form3->V_07_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_07_2 = array('name' => 'V_07_2', 'id' => 'V_07_2');
                    $dataV_07_2_1 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 1, 'checked' => ($form3->V_07_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_2_2 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 2, 'checked' => ($form3->V_07_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_2_3 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 3, 'checked' => ($form3->V_07_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_2_4 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 4, 'checked' => ($form3->V_07_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_2_5 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 5, 'checked' => ($form3->V_07_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_2_6 = array(
                        'name' => 'V_07_2', 'id' => 'V_07_2', 'value' => 6, 'checked' => ($form3->V_07_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_07_3 = array('name' => 'V_07_3', 'id' => 'V_07_3');
                    $dataV_07_3_1 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 1, 'checked' => ($form3->V_07_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_3_2 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 2, 'checked' => ($form3->V_07_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_3_3 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 3, 'checked' => ($form3->V_07_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_3_4 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 4, 'checked' => ($form3->V_07_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_3_5 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 5, 'checked' => ($form3->V_07_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_07_3_6 = array(
                        'name' => 'V_07_3', 'id' => 'V_07_3', 'value' => 6, 'checked' => ($form3->V_07_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy deficiente?</th>
                                <th class="text-center">Deficiente?</th>
                                <th class="text-center">Ni deficiente ni satisfactorio?</th>
                                <th class="text-center">Satisfactorio?</th>
                                <th class="text-center">Muy satisfactorio?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Sillas de espera</th>
                                <td class="text-center"><?= form_radio($dataV_07_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Módulos de atención</th>
                                <td class="text-center"><?= form_radio($dataV_07_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Señalización del local (puntos de atención)</th>
                                <td class="text-center"><?= form_radio($dataV_07_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_07_3_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h3>5.8. ACCESIBILIDAD Y SEGURIDAD</h3>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_08_1 = array('name' => 'V_08_1', 'id' => 'V_08_1');
                    $dataV_08_1_1 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 1, 'checked' => ($form3->V_08_1 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_1_2 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 2, 'checked' => ($form3->V_08_1 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_1_3 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 3, 'checked' => ($form3->V_08_1 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_1_4 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 4, 'checked' => ($form3->V_08_1 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_1_5 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 5, 'checked' => ($form3->V_08_1 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_1_6 = array(
                        'name' => 'V_08_1', 'id' => 'V_08_1', 'value' => 6, 'checked' => ($form3->V_08_1 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_08_2 = array('name' => 'V_08_2', 'id' => 'V_08_2');
                    $dataV_08_2_1 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 1, 'checked' => ($form3->V_08_2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_2_2 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 2, 'checked' => ($form3->V_08_2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_2_3 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 3, 'checked' => ($form3->V_08_2 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_2_4 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 4, 'checked' => ($form3->V_08_2 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_2_5 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 5, 'checked' => ($form3->V_08_2 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_2_6 = array(
                        'name' => 'V_08_2', 'id' => 'V_08_2', 'value' => 6, 'checked' => ($form3->V_08_2 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
//                        $dataV_08_3 = array('name' => 'V_08_3', 'id' => 'V_08_3');
                    $dataV_08_3_1 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 1, 'checked' => ($form3->V_08_3 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_3_2 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 2, 'checked' => ($form3->V_08_3 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_3_3 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 3, 'checked' => ($form3->V_08_3 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_3_4 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 4, 'checked' => ($form3->V_08_3 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_3_5 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 5, 'checked' => ($form3->V_08_3 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_08_3_6 = array(
                        'name' => 'V_08_3', 'id' => 'V_08_3', 'value' => 6, 'checked' => ($form3->V_08_3 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Característicaas</th>
                                <th class="text-center">Muy deficiente?</th>
                                <th class="text-center">Deficiente?</th>
                                <th class="text-center">Ni deficiente ni satisfactorio?</th>
                                <th class="text-center">Satisfactorio?</th>
                                <th class="text-center">Muy satisfactorio?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Disponibilidad de estacionamiento</th>
                                <td class="text-center"><?= form_radio($dataV_08_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_1_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_1_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Medios de transporte para el acceso al CSC</th>
                                <td class="text-center"><?= form_radio($dataV_08_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_2_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_2_6); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Seguridad en alrededores</th>
                                <td class="text-center"><?= form_radio($dataV_08_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_3_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_08_3_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <h2>ATENCIÓN EN GENERAL</h2>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <?php
//                        $dataV_09_1 = array('name' => 'V_09_1', 'id' => 'V_09_1');
                    $dataV_09_1 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 1, 'checked' => ($form3->V_09 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_09_2 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 2, 'checked' => ($form3->V_09 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_09_3 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 3, 'checked' => ($form3->V_09 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_09_4 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 4, 'checked' => ($form3->V_09 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_09_5 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 5, 'checked' => ($form3->V_09 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataV_09_6 = array(
                        'name' => 'V_09', 'id' => 'V_09', 'value' => 6, 'checked' => ($form3->V_09 === '6' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Aspectos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                                <th class="text-center">No opina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">En general que tan satisfecho se siente con la atención que recibió en el CSC</th>
                                <td class="text-center"><?= form_radio($dataV_09_1); ?></td>
                                <td class="text-center"><?= form_radio($dataV_09_2); ?></td>
                                <td class="text-center"><?= form_radio($dataV_09_3); ?></td>
                                <td class="text-center"><?= form_radio($dataV_09_4); ?></td>
                                <td class="text-center"><?= form_radio($dataV_09_5); ?></td>
                                <td class="text-center"><?= form_radio($dataV_09_6); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bloque col-sm-12">
                VI. Sugerencias y/o comentarios
            </div>
            <div class="form-group col-sm-12">
                <?= form_textarea(array('type' => 'textarea', 'name' => 'descripcion', 'rows' => '10', 'class' => 'form-control input-sm', 'id' => 'descripcion', 'value' => $form3->COMM, 'placeholder' => 'Sugerencias y/o comentarios')); ?>
            </div>

            <div class="form-actions col-sm-5 col-sm-offset-5">
                <?= form_button(array('type' => 'submit', 'id' => 'grabar', 'content' => 'Terminar cuestionario', 'class' => 'btn btn-primary')); ?>
                <!-- ?= form_button(array('type' => 'reset', 'id' => 'limpiar', 'content' => 'Limpiar pagina', 'class' => 'btn btn-danger', 'onClick' => 'return V_01_A_1.focus()')); ?>-->
                <?= anchor('encuestacsc/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
            </div><!--<button class="btn-block btn-danger btn-default btn-group btn-info btn-link btn-navbar btn-primary btn-success btn-toolbar btn-warning"-->
        </fieldset>

        <?= form_close(); ?>
    </div>
</div>