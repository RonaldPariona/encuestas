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
        $.validator.addMethod(
                "ranges",
                function (value, element, ranges) {
                    var noUpperBound = false;
                    var valid = false;
                    for (var i = 0; i < ranges.length; i++) {
                        if (ranges[i].length == 1) {
                            noUpperBound = true;
                        }
                        if (value >= ranges[i][0] && (value <= ranges[i][1] || noUpperBound)) {
                            valid = true;
                            break;
                        }
                    }
                    return this.optional(element) || valid;
                },
                "Please check your input."
                );
        $("form[name='page1']").validate({
            focusCleanup: true,
            ignore: [],
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                INF_USU_NOM: {required: true, digits: false, minlength: 2},
                INF_USU_APE: {required: true, digits: false, minlength: 2},
                INF_DIRECCION: "required",
                P1_UBIGEO: "required",
                P2: "required",
                P3: {
                    required: true,
                    digits: true,
                    range: [15, 99]
                },
                P4: {
                    required: true,
                    digits: true,
                    minlength: 11,
                    ranges: [[10000000001, 10999999999], [20000000001, 20999999999]]
                },
                P5: "required",
                P6: "required",
                P7: {
                    required: function (element) {
                        return $("#P6").val() === 1;
                    }
                },
                P8: {
                    required: function (element) {
                        return $("#P6").val() === 1;
                    }
                },
                P9: {
                    required: function (element) {
                        return $("#P6").val() === 1;
                    }
                },
                P10: "required",
                P10_O: {
                    required: function (element) {
                        return $("#P10").val() == 4;
                    }
                },
                P11: "required",
                P11_1_AUX: {
                    required: {
                        depends: function () {
                            return $('input[name=P11]:checked').val() == '1';
                        },
                    },
                    range: [1, 5]
                },
                P11_1_O: {
                    required: {
                        depends: function () {
                            return $('input[name=P11_1_5]:checked').val() == '1';
                        }
                    }
                }

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
                /*P1: "Debe indicar su nombre y apellido",*/
                INF_USU_NOM: "Debe indicar sus nombres",
                INF_USU_APE: "Debe indicar sus apellidos",
                INF_DIRECCION: "Indicar domicilio actual",
                P1_UBIGEO: "Indicar distrito de procedencia",
                P2: "Falta esta informacion",
                P3: "Debe ser mayor o igual a 15",
                P4: "Por favor, ingrese un RUC valido",
                P6: "Este campo es requerido",
                P7: "Este campo es requerido para personas juridicas",
                P8: "Este campo es requerido para personas juridicas",
                P9: "Este campo es requerido para personas juridicas",
                P11_1_AUX: "Debe seleccionar alguna alternativa",
                P11_1_O: "Especifique"
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
        $("#INF_USU_NOM").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('INF_USU_APE').focus();
        });
        $("#INF_USU_APE").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('INF_DIRECCION').focus();
        });
        $("#INF_DIRECCION").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P1_UBIGEO').focus();
        });
        $("#P1_UBIGEO").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P2').focus();
        });
        $("#P2").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P3').focus();
        });
        $("#P3").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P4').focus();
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
        //SOLO NUMEROS
        $("#P4").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P5').focus();
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
        $('#page1 input[name=P5]').on('change', function () {
            if ($('input[name=P5]:checked', '#page1').val() >= 1) {
                $('#P6').focus();
            }
        });
        $('#page1 input[name=P6]').on('change', function () {
            $("#P7").val("").attr("readonly", true);
            $("#P8").val("").attr("readonly", true);
            $("#page1 input[name=P9]").val("").attr('disabled', true);
            $("#P9").prop('checked', false);
            if ($('input[name=P6]:checked', '#page1').val() == 1) {
                $("#P7").removeAttr("readonly");
                $("#P8").removeAttr("readonly");
                $("#page1 input[name=P9]").removeAttr('disabled');
                $("#P7").focus();
            } else if ($('input[name=P6]:checked', '#page1').val() == 2) {
                $("#P7").val("").attr("readonly", true);
                $("#P8").val("").attr("readonly", true);
                $("#page1 input[name=P9]").val("").attr('disabled', true);
                $("#P10").focus();
            }
        });
        $("#P7").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P8').focus();
        });
        $("#P8").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P9').focus();
        });
        $("#P9").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P5').focus();
        });
        $('#page1 input[name=P9]').on('change', function () {
            if ($('input[name=P9]:checked', '#page1').val() >= 1) {
                $('#P10').focus();
            }
        });
        $("#P10_O").val("").attr("readonly", true);
        $('#page1 input[name=P10]').on('change', function () {
            if ($('input[name=P10]:checked', '#page1').val() == 4) {
                $("#P10_O").removeAttr("readonly");
                $("#P10_O").prop('disabled', false);
                $("#P10_O").focus();
            } else if ($('input[name=P10]:checked', '#page1').val() <= 3) {
                $("#P10_O").val("").attr("readonly", true);
                $("#P10_O").prop('disabled', true);
                $("#P11").focus();
            }
        });
        $("#P10_O").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('P11').focus();
        });
        $('#page1 input[name=P11]').on('change', function () {
            /*$('#P11_1_1').val("").attr('disabled', true);
             $('#P11_1_2').val("").attr('disabled', true);
             $('#P11_1_3').val("").attr('disabled', true);
             $('#P11_1_4').val("").attr('disabled', true);
             $('#P11_1_5').val("").attr('disabled', true);*/
            if ($('input[name=P11]:checked', '#page1').val() == 1) {
                $('#P11_1_1').removeAttr('disabled');
                $('#P11_1_2').removeAttr('disabled');
                $('#P11_1_3').removeAttr('disabled');
                $('#P11_1_4').removeAttr('disabled');
                $('#P11_1_5').removeAttr('disabled');
                $("#P11_1_1").focus();
                //$("input[name=P11_1_1]").focus();
            } else if ($('input[name=P11]:checked', '#page1').val() > 1) {
                $('#P11_1_1').val("").attr('disabled', true);
                $('#P11_1_1').attr('checked', false);
                $('#P11_1_2').val("").attr('disabled', true);
                $('#P11_1_2').attr('checked', false);
                $('#P11_1_3').val("").attr('disabled', true);
                $('#P11_1_3').attr('checked', false);
                $('#P11_1_4').val("").attr('disabled', true);
                $('#P11_1_4').attr('checked', false);
                $('#P11_1_5').val("").attr('disabled', true);
                $('#P11_1_5').attr('checked', false);
                $('#P11_1_O').val("").attr("readonly", true);
                document.getElementById('grabar').focus();
            }
        });
        $('#page1 input[name=P11_1_5]').on('change', function () {
            $("#P11_1_O").val("").attr("readonly", true);
            if ($("#P11_1_5").is(':checked')) {
                $("#P11_1_O").removeAttr("readonly");
                $("#P11_1_O").focus();
            } else {
                $("#P11_1_O").attr("readonly", true);
                document.getElementById('grabar').focus();
            }
        });
        $("#P11_1_O").keydown(function (e) {
            if (e.keyCode === 13 || e.keyCode === 193)
                document.getElementById('grabar').focus();
        });
        var $P11_1_AUX = $('#P11_1 input[type="checkbox"]');
        $P11_1_AUX.change(function () {
            var countP11_1 = $P11_1_AUX.filter(':checked').length;
            if (countP11_1 === 0) {
                $('#page1 input[name=P11_1_AUX]').val('');
            } else {
                $('#page1 input[name=P11_1_AUX]').val(countP11_1);
            }
        });
    });
</script>
<br/>
<ul class="tab">
    <li class="pull-left"><a href="<?= site_url('encuestacsc/index/'); ?>">Regresar a la lista</a></li>
    <li class="pull-right"><a href="<?= site_url('encuestacsc/irpagina2/' . $form1->ID); ?>">Página 2</a></li>
</ul>

<div class="panel panel-primary">
    <div class="panel-heading">
        I. DATOS DEL USUARIO
    </div>
    <div class="panel-body">
        <?= form_open('encuestacsc/registrapag1', array('id' => 'page1', 'name' => 'page1', 'class' => 'form-horizontal')); ?>
        <?= validation_errors(); ?>
        <fieldset>
            <?= form_hidden('ID', $form1->ID); ?>
            <div class="form-group">  
                <?= form_label('Nombres y apellidos', 'INF_USU', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-3">
                    <?= form_input(array('type' => 'text', 'name' => 'INF_USU_NOM', 'id' => 'INF_USU_NOM', 'placeholder' => 'NOMBRES', 'value' => $form1->INF_USU_NOM, 'onkeyup' => 'this.value=this.value.toUpperCase()', 'class' => "form-control input-small")); ?>
                </div>
                <div class="col-sm-3">
                    <?= form_input(array('type' => 'text', 'name' => 'INF_USU_APE', 'id' => 'INF_USU_APE', 'placeholder' => 'APELLIDOS', 'value' => $form1->INF_USU_APE, 'onkeyup' => 'this.value=this.value.toUpperCase()', 'class' => "form-control input-small")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Dirección', 'INF_DIRECCION', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?= form_input(array('type' => 'text', 'name' => 'INF_DIRECCION', 'id' => 'INF_DIRECCION', 'value' => $form1->INF_DIRECCION, 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '125', 'class' => "form-control")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('1. Distrito de procedencia', 'P1_UBIGEO', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $distritos = array(
                        '' => 'Seleccione un distrito',
                        '070106' => 'VENTANILLA',
                        '150102' => 'ANCON',
                        '150106' => 'CARABAYLLO',
                        '150110' => 'COMAS',
                        '150125' => 'PUENTE PIEDRA',
                        '150139' => 'SANTA ROSA',);
                    ?>
                    <?= form_dropdown('P1_UBIGEO', $distritos, $form1->P1_UBIGEO, 'class="form-control input-sm" id="P1_UBIGEO"'); ?>
                </div> 
            </div>
            <div class="form-group">
                <?= form_label('2.Sexo', 'P2', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-6">
                    <?php
                    $dataP2_1 = array(
                        'name' => 'P2', 'id' => 'P2', 'value' => 1, 'checked' => ($form1->P2 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP2_2 = array(
                        'name' => 'P2', 'id' => 'P2', 'value' => 2, 'checked' => ($form1->P2 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP2_1) . ' Hombre', 'P2_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP2_2) . ' Mujer', 'P2_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('3. Edad', 'P3', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P3', 'id' => 'P3', 'maxlength' => '2', 'value' => $form1->P3, 'class' => "form-control")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('4. Número de RUC', 'P4', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-3">
                    <?= form_input(array('type' => 'text', 'name' => 'P4', 'id' => 'P4', 'maxlength' => '11', 'value' => $form1->P4, 'class' => "form-control")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('5. NIVEL EDUCATIVO', 'P5', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?php
                    $dataP5_1 = array(
                        'name' => 'P5', 'id' => 'P5', 'value' => 1, 'checked' => ($form1->P5 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP5_2 = array(
                        'name' => 'P5', 'id' => 'P5', 'value' => 2, 'checked' => ($form1->P5 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP5_3 = array(
                        'name' => 'P5', 'id' => 'P5', 'value' => 3, 'checked' => ($form1->P5 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP5_4 = array(
                        'name' => 'P5', 'id' => 'P5', 'value' => 4, 'checked' => ($form1->P5 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP5_5 = array(
                        'name' => 'P5', 'id' => 'P5', 'value' => 5, 'checked' => ($form1->P5 === '5' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="radio">
                        <?= form_label(form_radio($dataP5_1) . ' Sin nivel', 'P5_x1'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP5_2) . ' Primaria', 'P5_x2'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP5_3) . ' Secundaria', 'P5_x3'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP5_4) . ' Superior Técnica', 'P5_x4'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP5_5) . ' Superior Universitaria', 'P5_x5'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('6.Tipo', 'P6', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-8">
                    <?php
                    $dataP6_1 = array(
                        'name' => 'P6', 'id' => 'P6', 'value' => 1, 'checked' => ($form1->P6 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP6_2 = array(
                        'name' => 'P6', 'id' => 'P6', 'value' => 2, 'checked' => ($form1->P6 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-4">                        
                        <?= form_label(form_radio($dataP6_1) . ' Persona Jurídica', 'P6_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-4">                        
                        <?= form_label(form_radio($dataP6_2) . ' Persona Natural', 'P6_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('7. Razón social', 'P7', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?= form_input(array('type' => 'text', 'name' => 'P7', 'id' => 'P7', 'maxlength' => '240', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'readonly' => 'true', 'value' => $form1->P7, 'onkeyup' => 'this.value=this.value.toUpperCase()', 'class' => "form-control")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('8. Dirección fiscal', 'P8', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?= form_input(array('type' => 'text', 'name' => 'P8', 'id' => 'P8', 'maxlength' => '240', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'readonly' => 'true', 'value' => $form1->P8, 'class' => "form-control")); ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('9. PARA ESTE TRÁMITE REPRESENTA A LA EMPRESA COMO', 'P9', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?php
                    $dataP9_1 = array(
                        'name' => 'P9', 'id' => 'P9', 'value' => 1, 'checked' => ($form1->P9 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP9_2 = array(
                        'name' => 'P9', 'id' => 'P9', 'value' => 2, 'checked' => ($form1->P9 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP9_3 = array(
                        'name' => 'P9', 'id' => 'P9', 'value' => 3, 'checked' => ($form1->P9 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP9_1) . ' Titular', 'P9_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP9_2) . ' Tercero con carta poder', 'P9_x2', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP9_3) . ' Representante legal', 'P9_x3', array('class' => 'radio-inline')); ?>
                    </div>
                    <span for="P9" id="P9-error" class="help-block"></span>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('10. EN ESTE LOCAL, USTED ES:', 'P10', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?php
                    $dataP10_1 = array(
                        'name' => 'P10', 'id' => 'P10', 'value' => 1, 'checked' => ($form1->P10 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP10_2 = array(
                        'name' => 'P10', 'id' => 'P10', 'value' => 2, 'checked' => ($form1->P10 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP10_3 = array(
                        'name' => 'P10', 'id' => 'P10', 'value' => 3, 'checked' => ($form1->P10 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP10_4 = array(
                        'name' => 'P10', 'id' => 'P10', 'value' => 4, 'checked' => ($form1->P10 === '4' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="radio">
                        <?= form_label(form_radio($dataP10_1) . ' Usuario frecuente', 'P10_x1'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP10_2) . ' Usuario nuevo', 'P10_x2'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP10_3) . ' Usuario no frecuente', 'P10_x3'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP10_4) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P10_O', 'id' => 'P10_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'readonly' => 'true', 'maxlength' => '60', 'value' => $form1->P10_O, 'size' => '100', 'class' => 'form-control')), 'P10_x4'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('11. ¿Para el uso de los servicios de la SUNAT que canal de atención es de su preferencia?', 'P11', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9">
                    <?php
                    $dataP11_1 = array(
                        'name' => 'P11', 'id' => 'P11', 'value' => 1, 'checked' => ($form1->P11 === '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP11_2 = array(
                        'name' => 'P11', 'id' => 'P11', 'value' => 2, 'checked' => ($form1->P11 === '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP11_3 = array(
                        'name' => 'P11', 'id' => 'P11', 'value' => 3, 'checked' => ($form1->P11 === '3' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="radio">
                        <?= form_label(form_radio($dataP11_1) . ' Canal presencial: en locales y oficinas de SUNAT', 'P11_x1'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP11_2) . ' Canal virtual: Por internet en casa o cabinas públicas', 'P11_x2'); ?>
                    </div>
                    <div class="radio">
                        <?= form_label(form_radio($dataP11_3) . ' Canal Telefónico: mediante llamadas telefónicas', 'P11_x3'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('11.1. ¿Por qué prefiere el canal presencial?', 'P11_1', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P11_1" class="col-sm-9">
                    <?php
                    $dataP11_1_1 = array('name' => 'P11_1_1', 'id' => 'P11_1_1', 'style' => 'margin-right:5px');
                    $dataP11_1_2 = array('name' => 'P11_1_2', 'id' => 'P11_1_2', 'style' => 'margin-right:5px');
                    $dataP11_1_3 = array('name' => 'P11_1_3', 'id' => 'P11_1_3', 'style' => 'margin-right:5px');
                    $dataP11_1_4 = array('name' => 'P11_1_4', 'id' => 'P11_1_4', 'style' => 'margin-right:5px');
                    $dataP11_1_5 = array('name' => 'P11_1_5', 'id' => 'P11_1_5', 'style' => 'margin-right:5px');

                    echo form_hidden('P11_1_AUX', $form1->P11_1_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP11_1_1, 1, set_checkbox('P11_1_1', '1', $form1->P11_1_1 == 1 ? TRUE : FALSE)) . ' Porque está cerca a su casa o trabajo', 'P11_1_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP11_1_2, 1, set_checkbox('P11_1_2', '1', $form1->P11_1_2 == 1 ? TRUE : FALSE)) . ' Porque me pueden explicar mejor mis dudas, consultas, quejas, etc', 'P11_1_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP11_1_3, 1, set_checkbox('P11_1_3', '1', $form1->P11_1_3 == 1 ? TRUE : FALSE)) . ' Porque tiene dificultades en el uso de Internet o teléfono', 'P11_1_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP11_1_4, 1, set_checkbox('P11_1_4', '1', $form1->P11_1_4 == 1 ? TRUE : FALSE)) . ' Por la calidez de la atención', 'P11_1_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP11_1_5, 1, set_checkbox('P11_1_5', '1', $form1->P11_1_5 == 1 ? TRUE : FALSE)) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P11_1_O', 'id' => 'P11_1_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form1->P11_1_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P11_1_5'); ?>
                    </div>
                </div>
            </div>
            <div class="form-actions col-sm-5 col-sm-offset-5">
                <?= form_button(array('type' => 'submit', 'id' => 'grabar', 'content' => 'Siguiente pagina', 'class' => 'btn btn-primary')); ?>
                <!--< ? = form_input(array('type' => 'button', 'id' => 'reset', 'value' => 'Limpiar pagina', 'class' => 'btn btn-danger')); ?>-->
                <?= anchor('encuestacsc/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
            </div><!--<button class="btn-block btn-danger btn-default btn-group btn-info btn-link btn-navbar btn-primary btn-success btn-toolbar btn-warning"-->
        </fieldset>
        <?= form_close(); ?>
    </div>
</div>
