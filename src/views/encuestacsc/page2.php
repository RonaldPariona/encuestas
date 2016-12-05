<script>
    $(document).ready(function () {
        $(":input").on("keydown", function (event) {
            if ((event.which == 13 || event.keyCode == 13) && !$(this).is("textarea, :button, :submit")) {
                event.stopPropagation();
                event.preventDefault();
                $(this)
                        .nextAll(":input:not(:disabled, [readonly='readonly'])")
                        .first()
                        .focus();
            }
        });
        $("form[name='page2']").validate({
            ignore: [],
            rules: {
                P12_AUX: {
                    required: true,
                    range: [1, 8]
                },
                P12_O: {
                    required: {
                        depends: function () {
                            return $('input[name=P12_8]:checked').val() == '1';
                        }
                    }
                },
                P13_AUX: {
                    required: true,
                    range: [1, 5]
                },
                P13_O: {
                    required: {
                        depends: function () {
                            return $('input[name=P13_5]:checked').val() == '1';
                        }
                    }
                },
                P14_HOR: {
                    required: true,
                    digits: true,
                    range: [0, 10]
                },
                P14_MIN: {
                    required: true,
                    digits: true,
                    range: [0, 59]
                },
                P15_1: {
                    required: {
                        depends: function () {
                            return $('input[name=P13_1]:checked').val() == '1';
                        }
                    }
                },
                P15_2: {
                    required: {
                        depends: function () {
                            return $('input[name=P13_2]:checked').val() == '1';
                        }
                    }
                },
                P15_3: {
                    required: {
                        depends: function () {
                            return $('input[name=P13_3]:checked').val() == '1';
                        }
                    }
                },
                P15_4: {
                    required: {
                        depends: function () {
                            return $('input[name=P13_4]:checked').val() == '1';
                        }
                    }
                },
                P16: {
                    required: true,
                    range: [1, 2]
                },
                P17: {
                    required: true,
                    range: [1, 2]
                },
                P18: {
                    required: true,
                    range: [1, 2]
                },
                P18_A_AUX: {
                    required: {
                        depends: function () {
                            return $('input[name=P18]:checked').val() === '1';
                        }
                    },
                    range: [1, 5]
                },
                P18_A_O: {
                    required: {
                        depends: function () {
                            return $('input[name=P18_A_5]:checked').val() >= 1;
                        }
                    }
                },
                P18_B_AUX: {
                    required: {
                        depends: function () {
                            return $('input[name=P18]:checked').val() === '2';
                        }
                    },
                    range: [1, 5]
                },
                P18_B_O: {
                    required: {
                        depends: function () {
                            return $('input[name=P18_B_5]:checked').val() >= 1;
                        }
                    }
                },
                P19: "required",
                P20_AUX: {
                    required: true,
                    range: [1, 6]
                },
                P21_HOR: {
                    required: true,
                    digits: true,
                    range: [0, 10]
                },
                P21_MIN: {
                    required: true,
                    digits: true,
                    range: [0, 59]
                },
                P21_1_ENT: {
                    required: true,
                    digits: true,
                    range: [0, 99]
                },
                P21_1_DEC: {
                    required: true,
                    digits: true,
                    range: [0, 99]
                },
                P22: "required",
                P22_1_INI_HORAS: {
                    required: {
                        depends: function () {
                            return $('input[name=P22]:checked').val() == '2';
                        }
                    }
                },
                P22_1_FIN_HORAS: {
                    required: {
                        depends: function () {
                            return $('input[name=P22]:checked').val() == '2';
                        }
                    }
                },
                P23_AUX: {
                    required: true,
                    range: [3, 3]
                },
                P24: "required",
                P25_AUX: {
                    required: {
                        depends: function () {
                            return $('input[name=P24]:checked').val() == '2';
                        }
                    },
                    range: [1, 9]
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
                P12_AUX: "Debe seleccionar alguna alternativa",
                P12_O: "Especifique",
                P13_AUX: "Debe seleccionar alguna alternativa",
                P13_O: "Especifique",
                P14_HOR: "Verifique las horas",
                P14_MIN: "Verifique los minutos",
                P15_1: "Complete esta informacion",
                P15_2: "Complete esta informacion",
                P15_3: "Complete esta informacion",
                P15_4: "Complete esta informacion",
                P16: "Respuesta requerida",
                P17: "Respuesta requerida",
                P18: "Respuesta requerida",
                P18_A_AUX: "Complete esta informacion",
                P18_A_O: "Especifique",
                P18_B_AUX: "Complete esta informacion",
                P18_B_O: "Especifique",
                P19: "Respuesta requerida",
                P20_AUX: "Debe seleccionar alguna alternativa",
                P21_HOR: "Complete esta informacion",
                P21_MIN: "Complete esta informacion",
                P21_1_ENT: "Complete esta informacion",
                P21_1_DEC: "Complete esta informacion",
                P22: "Respuesta requerida",
                P22_1_INI_HORAS: "Ingrese horario sugerido",
                P22_1_FIN_HORAS: "Ingrese horario sugerido",
                P23_AUX: "Respuesta requerida en 3 dias de la semana",
                P24: "Respuesta requerida",
                P25_AUX: "Debe seleccionar alguna alternativa"
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
        //page2
        var $P12_AUX = $('#P12 input[type="checkbox"]');
        $P12_AUX.change(function () {
            var countP12 = $P12_AUX.filter(':checked').length;
            if (countP12 == 0) {
                $('#page2 input[name=P12_AUX]').val('');
            } else {
                $('#page2 input[name=P12_AUX]').val(countP12);
            }
        });
        var $P13_AUX = $('#P13 input[type="checkbox"]');
        $P13_AUX.change(function () {
            var countP13 = $P13_AUX.filter(':checked').length;
            if (countP13 == 0) {
                $('#page2 input[name=P13_AUX]').val('');
            } else {
                $('#page2 input[name=P13_AUX]').val(countP13);
            }
        });
        var $P18_A_AUX = $('#P18_A input[type="checkbox"]');
        $P18_A_AUX.change(function () {
            var countP18_A = $P18_A_AUX.filter(':checked').length;
            if (countP18_A == 0) {
                $('#page2 input[name=P18_A_AUX]').val('');
            } else {
                $('#page2 input[name=P18_A_AUX]').val(countP18_A);
            }
        });
        var $P18_B_AUX = $('#P18_B input[type="checkbox"]');
        $P18_B_AUX.change(function () {
            var countP18_B = $P18_B_AUX.filter(':checked').length;
            if (countP18_B == 0) {
                $('#page2 input[name=P18_B_AUX]').val('');
            } else {
                $('#page2 input[name=P18_B_AUX]').val(countP18_B);
            }
        });
        var $P20_AUX = $('#P20 input[type="checkbox"]');
        $P20_AUX.change(function () {
            var countP20 = $P20_AUX.filter(':checked').length;
            if (countP20 == 0) {
                $('#page2 input[name=P20_AUX]').val('');
            } else {
                $('#page2 input[name=P20_AUX]').val(countP20);
            }
        });
        var $P23_AUX = $('#P23 input[type="radio"]');
        $P23_AUX.change(function () {
            var countP23 = $P23_AUX.filter(':checked').length;
            if (countP23 == 0) {
                $('#page2 input[name=P23_AUX]').val('');
            } else {
                $('#page2 input[name=P23_AUX]').val(countP23);
            }
        });
        var $P25_AUX = $('#P25 input[type="checkbox"]');
        $P25_AUX.change(function () {
            var countP25 = $P25_AUX.filter(':checked').length;
            if (countP25 == 0) {
                $('#page2 input[name=P25_AUX]').val('');
            } else {
                $('#page2 input[name=P25_AUX]').val(countP25);
            }
        });

        $('#page2 input[name=P12_8]').on('change', function () {
            $("#P12_O").val("").attr("readonly", true);
            if ($("#P12_8").is(':checked')) {
                $("#P12_O").removeAttr("readonly");
                $("#P12_O").focus();
            } else {
                $("#P12_O").attr("readonly", true);
                document.getElementById('P13_1').focus();
            }
        });
        $("#P12_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P13_1').focus();
        });
        $('#page2 input[name=P13_5]').on('change', function () {
            $("#P13_O").val("").attr("readonly", true);
            if ($("#P13_5").is(':checked')) {
                $("#P13_O").removeAttr("readonly");
                $("#P13_O").focus();
            } else {
                $("#P13_O").attr("readonly", true);
                document.getElementById('P14_HOR').focus();
            }
        });
        $("#P13_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P14_HOR').focus();
        });
        $("#P14_HOR").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P14_MIN').focus();
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $("#P14_MIN").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P15_1').focus();
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $('#page2 input[name=P16]').on('change', function () {
            if ($('input[name=P16]:checked', '#page2').val() >= 1) {
                $('#P17').focus();
            }
        });
        $('#page2 input[name=P17]').on('change', function () {
            if ($('input[name=P17]:checked', '#page2').val() >= 1) {
                $('#P18').focus();
            }
        });
        $('#page2 input[name=P18]').on('change', function () {
            /*$('#P18_A_1').val("").attr('disabled', true);
             $('#P18_A_2').val("").attr('disabled', true);
             $('#P18_A_3').val("").attr('disabled', true);
             $('#P18_A_4').val("").attr('disabled', true);
             $('#P18_A_5').val("").attr('disabled', true);
             $('#P18_B_1').val("").attr('disabled', true);
             $('#P18_B_2').val("").attr('disabled', true);
             $('#P18_B_3').val("").attr('disabled', true);
             $('#P18_B_4').val("").attr('disabled', true);
             $('#P18_B_5').val("").attr('disabled', true);*/
            if ($('input[name=P18]:checked', '#page2').val() == 1) {
                $('#P18_A_1').removeAttr('disabled');
                $('#P18_A_2').removeAttr('disabled');
                $('#P18_A_3').removeAttr('disabled');
                $('#P18_A_4').removeAttr('disabled');
                $('#P18_A_5').removeAttr('disabled');
                $('#P18_B_1').val("").attr('disabled', true);
                $('#P18_B_1').attr('checked', false);
                $('#P18_B_2').val("").attr('disabled', true);
                $('#P18_B_2').attr('checked', false);
                $('#P18_B_3').val("").attr('disabled', true);
                $('#P18_B_3').attr('checked', false);
                $('#P18_B_4').val("").attr('disabled', true);
                $('#P18_B_4').attr('checked', false);
                $('#P18_B_5').val("").attr('disabled', true);
                $('#P18_B_5').attr('checked', false);
                $("#P18_B_O").val("").attr("readonly", true);
                $('#page2 input[name=P18_B_AUX]').val('');
                $("#P18_A_1").focus();
            } else if ($('input[name=P18]:checked', '#page2').val() == 2) {
                $('#P18_A_1').val("").attr('disabled', true);
                $('#P18_A_1').attr('checked', false);
                $('#P18_A_2').val("").attr('disabled', true);
                $('#P18_A_2').attr('checked', false);
                $('#P18_A_3').val("").attr('disabled', true);
                $('#P18_A_3').attr('checked', false);
                $('#P18_A_4').val("").attr('disabled', true);
                $('#P18_A_4').attr('checked', false);
                $('#P18_A_5').val("").attr('disabled', true);
                $('#P18_A_5').attr('checked', false);
                $("#P18_A_O").val("").attr("readonly", true);
                $('#page2 input[name=P18_A_AUX]').val('');
                $('#P18_B_1').removeAttr('disabled');
                $('#P18_B_2').removeAttr('disabled');
                $('#P18_B_3').removeAttr('disabled');
                $('#P18_B_4').removeAttr('disabled');
                $('#P18_B_5').removeAttr('disabled');
                $("#P18_B_1").focus();
            }
        });
        $('#page2 input[name=P18_A_5]').on('change', function () {
            $("#P18_A_O").val("").attr("readonly", true);
            if ($("#P18_A_5").is(':checked')) {
                $("#P18_A_O").removeAttr("readonly");
                $("#P18_A_O").focus();
            } else {
                $("#P18_A_O").attr("readonly", true);
                document.getElementById('P19').focus();
            }
        });
        $('#page2 input[name=P18_B_5]').on('change', function () {
            $("#P18_B_O").val("").attr("readonly", true);
            if ($("#P18_B_5").is(':checked')) {
                $("#P18_B_O").removeAttr("readonly");
                $("#P18_B_O").focus();
            } else {
                $("#P18_B_O").attr("readonly", true);
                document.getElementById('P19').focus();
            }
        });
        $("#P18_A_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P19').focus();
        });
        $("#P18_B_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P19').focus();
        });
        $('#page2 input[name=P19]').on('change', function () {
            if ($('input[name=P19]:checked', '#page2').val() >= 1) {
                $('#P20_1').focus();
            }
        });

        $('#page2 input[name=P20_6]').on('change', function () {
            $("#P20_O").val("").attr("readonly", true);
            if ($("#P20_6").is(':checked')) {
                $("#P20_O").removeAttr("readonly");
                $("#P20_O").focus();
            } else {
                $("#P20_O").attr("readonly", true);
                document.getElementById('P21_HOR').focus();
            }
        });
        $("#P20_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P21_HOR').focus();
        });

        $("#P21_HOR").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P21_MIN').focus();
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $("#P21_MIN").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P21_1_ENT').focus();
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $("#P21_1_ENT").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P21_1_DEC').focus();
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $("#P21_1_DEC").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P22').focus();
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode == 65 && (e.ctrlKey == true || e.metaKey == true)) ||
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
        $('#page2 input[name=P22]').on('change', function () {
            $('#P22_1_INI_HORAS').val("").attr('disabled', true);
            $('#P22_1_FIN_HORAS').val("").attr('disabled', true);
            if ($('input[name=P22]:checked', '#page2').val() == 2) {
                $('#P22_1_INI_HORAS').removeAttr('disabled');
                $('#P22_1_FIN_HORAS').removeAttr('disabled');
                $('#P22_1_INI_HORAS').focus();
            } else {
                $('#P22_1_INI_HORAS').val("").attr('disabled', true);
                $('#P22_1_FIN_HORAS').val("").attr('disabled', true);
                document.getElementById('P23_1').focus();
            }
        });
        $("#P22_1_INI_HORAS").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P22_1_FIN_HORAS').focus();
        });
        $("#P22_1_FIN_HORAS").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('P23_1').focus();
        });


        $('#page2 input[name=P23_1]').on('change', function () {
            if ($('input[name=P23_1]:checked', '#page2').val() >= 1) {
                $('#P23_2').focus();
            }
        });
        $('#page2 input[name=P23_2]').on('change', function () {
            if ($('input[name=P23_2]:checked', '#page2').val() >= 1) {
                $('#P23_3').focus();
            }
        });
        $('#page2 input[name=P23_3]').on('change', function () {
            if ($('input[name=P23_3]:checked', '#page2').val() >= 1) {
                $('#P23_4').focus();
            }
        });
        $('#page2 input[name=P23_4]').on('change', function () {
            if ($('input[name=P23_4]:checked', '#page2').val() >= 1) {
                $('#P23_5').focus();
            }
        });
        $('#page2 input[name=P23_5]').on('change', function () {
            if ($('input[name=P23_5]:checked', '#page2').val() >= 1) {
                $('#P23_6').focus();
            }
        });
        $('#page2 input[name=P23_6]').on('change', function () {
            if ($('input[name=P23_6]:checked', '#page2').val() >= 1) {
                $('#P23_7').focus();
            }
        });
        $('#page2 input[name=P23_7]').on('change', function () {
            if ($('input[name=P23_7]:checked', '#page2').val() >= 1) {
                $('#P24').focus();
            }
        });

        $('#page2 input[name=P24]').on('change', function () {
            $('#P25_1').val("").attr('disabled', true);
            $('#P25_1').attr('checked', false);
            $('#P25_2').val("").attr('disabled', true);
            $('#P25_2').attr('checked', false);
            $('#P25_3').val("").attr('disabled', true);
            $('#P25_3').attr('checked', false);
            $('#P25_4').val("").attr('disabled', true);
            $('#P25_4').attr('checked', false);
            $('#P25_5').val("").attr('disabled', true);
            $('#P25_5').attr('checked', false);
            $('#P25_6').val("").attr('disabled', true);
            $('#P25_6').attr('checked', false);
            $('#P25_7').val("").attr('disabled', true);
            $('#P25_7').attr('checked', false);
            $('#P25_8').val("").attr('disabled', true);
            $('#P25_8').attr('checked', false);
            $('#P25_9').val("").attr('disabled', true);
            $('#P25_9').attr('checked', false);
            if ($('input[name=P24]:checked', '#page2').val() == 2) {
                $('#P25_1').removeAttr('disabled');
                $('#P25_2').removeAttr('disabled');
                $('#P25_3').removeAttr('disabled');
                $('#P25_4').removeAttr('disabled');
                $('#P25_5').removeAttr('disabled');
                $('#P25_6').removeAttr('disabled');
                $('#P25_7').removeAttr('disabled');
                $('#P25_8').removeAttr('disabled');
                $('#P25_9').removeAttr('disabled');
                $('#P25_1').focus();
            } else {
                $('#P25_1').val("").attr('disabled', true);
                $('#P25_1').attr('checked', false);
                $('#P25_2').val("").attr('disabled', true);
                $('#P25_2').attr('checked', false);
                $('#P25_3').val("").attr('disabled', true);
                $('#P25_3').attr('checked', false);
                $('#P25_4').val("").attr('disabled', true);
                $('#P25_4').attr('checked', false);
                $('#P25_5').val("").attr('disabled', true);
                $('#P25_5').attr('checked', false);
                $('#P25_6').val("").attr('disabled', true);
                $('#P25_6').attr('checked', false);
                $('#P25_7').val("").attr('disabled', true);
                $('#P25_7').attr('checked', false);
                $('#P25_8').val("").attr('disabled', true);
                $('#P25_8').attr('checked', false);
                $('#P25_9').val("").attr('disabled', true);
                $('#P25_9').attr('checked', false);
                document.getElementById('grabar').focus();
            }
        });
        $('#page2 input[name=P25_9]').on('change', function () {
            $("#P25_O").val("").attr("readonly", true);
            if ($("#P25_9").is(':checked')) {
                $("#P25_O").removeAttr("readonly");
                $("#P25_O").focus();
            } else {
                $("#P25_O").attr("readonly", true);
                document.getElementById('grabar').focus();
            }
        });
        $("#P25_O").keydown(function (e) {
            if (e.keyCode == 13 || e.keyCode == 193)
                document.getElementById('grabar').focus();
        });

    });
</script>
<br/>
<ul class="tab">
    <li class="pull-left"><a href="<?= site_url('encuestacsc/irpagina1/' . $form2->ID); ?>">Página 1</a></li>
    <li class="pull-right"><a href="<?= site_url('encuestacsc/irpagina3/' . $form2->ID); ?>">Página 3</a></li>
</ul>


<div class="panel panel-warning">
    <div class="panel-heading">
        II. SOBRE LA ATENCI&Oacute;N DE HOY
    </div>
    <?= form_open('encuestacsc/registrapag2', array('id' => 'page2', 'name' => 'page2', 'class' => 'form-horizontal')); ?>
    <?= validation_errors(); ?>

    <div class="panel-body">

        <fieldset>
            <?= form_hidden('ID', $form2->ID); ?>

            <div class="form-group">
                <?= form_label('12. ¿Qué trámite realizó?', 'P12', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P12" class="col-sm-9">
                    <?php
                    $dataP12_1 = array('name' => 'P12_1', 'id' => 'P12_1', 'style' => 'margin-right:5px');
                    $dataP12_2 = array('name' => 'P12_2', 'id' => 'P12_2', 'style' => 'margin-right:5px');
                    $dataP12_3 = array('name' => 'P12_3', 'id' => 'P12_3', 'style' => 'margin-right:5px');
                    $dataP12_4 = array('name' => 'P12_4', 'id' => 'P12_4', 'style' => 'margin-right:5px');
                    $dataP12_5 = array('name' => 'P12_5', 'id' => 'P12_5', 'style' => 'margin-right:5px');
                    $dataP12_6 = array('name' => 'P12_6', 'id' => 'P12_6', 'style' => 'margin-right:5px');
                    $dataP12_7 = array('name' => 'P12_7', 'id' => 'P12_7', 'style' => 'margin-right:5px');
                    $dataP12_8 = array('name' => 'P12_8', 'id' => 'P12_8', 'style' => 'margin-right:5px');
                    echo form_hidden('P12_AUX', $form2->P12_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_1, 1, set_checkbox('P12_1', '1', $form2->P12_1 == 1 ? TRUE : FALSE)) . ' Obtención de RUC?', 'P12_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_2, 1, set_checkbox('P12_2', '1', $form2->P12_2 == 1 ? TRUE : FALSE)) . ' Habilitación de RUC?', 'P12_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_3, 1, set_checkbox('P12_3', '1', $form2->P12_3 == 1 ? TRUE : FALSE)) . ' Obtención de clave SOL?', 'P12_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_4, 1, set_checkbox('P12_4', '1', $form2->P12_4 == 1 ? TRUE : FALSE)) . ' Consulta sobre declaraciones y pagos?', 'P12_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_5, 1, set_checkbox('P12_5', '1', $form2->P12_5 == 1 ? TRUE : FALSE)) . ' Baja de comprobantes de pago?', 'P12_5'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_6, 1, set_checkbox('P12_6', '1', $form2->P12_6 == 1 ? TRUE : FALSE)) . ' Orientación en temas tributarios?', 'P12_6'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_7, 1, set_checkbox('P12_7', '1', $form2->P12_7 == 1 ? TRUE : FALSE)) . ' Cambio de dirección?', 'P12_7'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP12_8, 1, set_checkbox('P12_8', '1', $form2->P12_8 == 1 ? TRUE : FALSE)) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P12_O', 'id' => 'P12_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P12_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P12_8'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('13. ¿Durante esta visita en qué áreas ha sido atendido?', 'P13', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P13" class="col-sm-9">
                    <?php
                    $dataP13_1 = array('name' => 'P13_1', 'id' => 'P13_1', 'style' => 'margin-right:5px');
                    $dataP13_2 = array('name' => 'P13_2', 'id' => 'P13_2', 'style' => 'margin-right:5px');
                    $dataP13_3 = array('name' => 'P13_3', 'id' => 'P13_3', 'style' => 'margin-right:5px');
                    $dataP13_4 = array('name' => 'P13_4', 'id' => 'P13_4', 'style' => 'margin-right:5px');
                    $dataP13_5 = array('name' => 'P13_5', 'id' => 'P13_5', 'style' => 'margin-right:5px');
                    echo form_hidden('P13_AUX', $form2->P13_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP13_1, 1, set_checkbox('P13_1', '1', $form2->P13_1 == 1 ? TRUE : FALSE)) . ' Orientación?', 'P13_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP13_2, 1, set_checkbox('P13_2', '1', $form2->P13_2 == 1 ? TRUE : FALSE)) . ' Módulo de trámites?', 'P13_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP13_3, 1, set_checkbox('P13_3', '1', $form2->P13_3 == 1 ? TRUE : FALSE)) . ' Cabinas?', 'P13_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP13_4, 1, set_checkbox('P13_4', '1', $form2->P13_4 == 1 ? TRUE : FALSE)) . ' Mesa de partes?', 'P13_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP13_5, 1, set_checkbox('P13_5', '1', $form2->P13_5 == 1 ? TRUE : FALSE)) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P13_O', 'id' => 'P13_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P13_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P13_5'); ?>
                    </div>
                </div>
            </div>

            <div class="bloque col-sm-12">
                III. INFORMACI&Oacute;N SEG&Uacute;N LOS SERVICIOS QUE EL CONTRIBUYENTE INDIQUE QUE HA RECIBIDO
            </div>

            <div class="form-group col-sm-12">
                <?= form_label('14. ¿Cuánto tiempo en total le tomó la atención en el CSC?:', 'P14', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P14_HOR', 'id' => 'P14_HOR', 'placeholder' => 'HORAS', 'maxlength' => '2', 'value' => $form2->P14_HOR, 'size' => '10', 'class' => "form-control input-sm  text-center")); ?>
                </div>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P14_MIN', 'id' => 'P14_MIN', 'placeholder' => 'MINUTOS', 'maxlength' => '2', 'value' => $form2->P14_MIN, 'size' => '10', 'class' => "form-control input-sm text-center")); ?>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?=
                form_label('15. ¿Qué tan satisfecho se siente Ud. con la atención que recibió en los servicios de:<br/>' .
                        form_button(array('type' => 'button', 'id' => 'limpia15', 'content' => 'Limpiar opciones', 'onClick' => 'return Limpiar15()', 'class' => 'btn btn-default')), 'P15', array('class' => 'col-sm-3 control-label'));
                ?>
                <div class="col-sm-9">
                    <?php
                    $dataP15_1_1 = array(
                        'name' => 'P15_1', 'id' => 'P15_1', 'value' => 1, 'checked' => ($form2->P15_1 == '1' ? TRUE : FALSE));
                    $dataP15_1_2 = array(
                        'name' => 'P15_1', 'id' => 'P15_1', 'value' => 2, 'checked' => ($form2->P15_1 == '2' ? TRUE : FALSE));
                    $dataP15_1_3 = array(
                        'name' => 'P15_1', 'id' => 'P15_1', 'value' => 3, 'checked' => ($form2->P15_1 == '3' ? TRUE : FALSE));
                    $dataP15_1_4 = array(
                        'name' => 'P15_1', 'id' => 'P15_1', 'value' => 4, 'checked' => ($form2->P15_1 == '4' ? TRUE : FALSE));
                    $dataP15_1_5 = array(
                        'name' => 'P15_1', 'id' => 'P15_1', 'value' => 5, 'checked' => ($form2->P15_1 == '5' ? TRUE : FALSE));
                    $dataP15_2_1 = array(
                        'name' => 'P15_2', 'id' => 'P15_2', 'value' => 1, 'checked' => ($form2->P15_2 == '1' ? TRUE : FALSE));
                    $dataP15_2_2 = array(
                        'name' => 'P15_2', 'id' => 'P15_2', 'value' => 2, 'checked' => ($form2->P15_2 == '2' ? TRUE : FALSE));
                    $dataP15_2_3 = array(
                        'name' => 'P15_2', 'id' => 'P15_2', 'value' => 3, 'checked' => ($form2->P15_2 == '3' ? TRUE : FALSE));
                    $dataP15_2_4 = array(
                        'name' => 'P15_2', 'id' => 'P15_2', 'value' => 4, 'checked' => ($form2->P15_2 == '4' ? TRUE : FALSE));
                    $dataP15_2_5 = array(
                        'name' => 'P15_2', 'id' => 'P15_2', 'value' => 5, 'checked' => ($form2->P15_2 == '5' ? TRUE : FALSE));
                    $dataP15_3_1 = array(
                        'name' => 'P15_3', 'id' => 'P15_3', 'value' => 1, 'checked' => ($form2->P15_3 == '1' ? TRUE : FALSE));
                    $dataP15_3_2 = array(
                        'name' => 'P15_3', 'id' => 'P15_3', 'value' => 2, 'checked' => ($form2->P15_3 == '2' ? TRUE : FALSE));
                    $dataP15_3_3 = array(
                        'name' => 'P15_3', 'id' => 'P15_3', 'value' => 3, 'checked' => ($form2->P15_3 == '3' ? TRUE : FALSE));
                    $dataP15_3_4 = array(
                        'name' => 'P15_3', 'id' => 'P15_3', 'value' => 4, 'checked' => ($form2->P15_3 == '4' ? TRUE : FALSE));
                    $dataP15_3_5 = array(
                        'name' => 'P15_3', 'id' => 'P15_3', 'value' => 5, 'checked' => ($form2->P15_3 == '5' ? TRUE : FALSE));
                    $dataP15_4_1 = array(
                        'name' => 'P15_4', 'id' => 'P15_4', 'value' => 1, 'checked' => ($form2->P15_4 == '1' ? TRUE : FALSE));
                    $dataP15_4_2 = array(
                        'name' => 'P15_4', 'id' => 'P15_4', 'value' => 2, 'checked' => ($form2->P15_4 == '2' ? TRUE : FALSE));
                    $dataP15_4_3 = array(
                        'name' => 'P15_4', 'id' => 'P15_4', 'value' => 3, 'checked' => ($form2->P15_4 == '3' ? TRUE : FALSE));
                    $dataP15_4_4 = array(
                        'name' => 'P15_4', 'id' => 'P15_4', 'value' => 4, 'checked' => ($form2->P15_4 == '4' ? TRUE : FALSE));
                    $dataP15_4_5 = array(
                        'name' => 'P15_4', 'id' => 'P15_4', 'value' => 5, 'checked' => ($form2->P15_4 == '5' ? TRUE : FALSE));
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>M&oacute;dulos</th>
                                <th class="text-center">Muy insatisfecho?</th>
                                <th class="text-center">Insatisfecho?</th>
                                <th class="text-center">Ni satisfecho ni insatisfecho?</th>
                                <th class="text-center">Satisfecho?</th>
                                <th class="text-center">Muy satisfecho?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Orientación</th>
                                <td class="text-center"><?= form_radio($dataP15_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_1_3); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_1_4); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_1_5); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Trámite</th>
                                <td class="text-center"><?= form_radio($dataP15_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_2_3); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_2_4); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_2_5); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Cabina</th>
                                <td class="text-center"><?= form_radio($dataP15_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_3_3); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_3_4); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_3_5); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mesa de partes</th>
                                <td class="text-center"><?= form_radio($dataP15_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_4_3); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_4_4); ?></td>
                                <td class="text-center"><?= form_radio($dataP15_4_5); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bloque col-sm-12">
                IV. ASPECTOS ADICIONALES
            </div>

            <div class="form-group col-sm-12">
                <?= form_label('16. ¿En su opinión, diría que es ACCESIBLE el lugar donde se encuentra ubicado este CSC?', 'P16', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $dataP16_1 = array(
                        'name' => 'P16', 'id' => 'P16', 'value' => 1, 'checked' => ($form2->P16 == '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP16_2 = array(
                        'name' => 'P16', 'id' => 'P16', 'value' => 2, 'checked' => ($form2->P16 == '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP16_1) . ' S&iacute;', 'P16_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP16_2) . ' No', 'P16_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('17. ¿En su opinión, diría que es ADECUADO el lugar donde se encuentra ubicado este CSC?', 'P17', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $dataP17_1 = array(
                        'name' => 'P17', 'id' => 'P17', 'value' => 1, 'checked' => ($form2->P17 == '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP17_2 = array(
                        'name' => 'P17', 'id' => 'P17', 'value' => 2, 'checked' => ($form2->P17 == '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP17_1) . ' S&iacute;', 'P17_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP17_2) . ' No', 'P17_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('18. ¿Este CSC es el que visita con MAYOR frecuencia?', 'P18', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $dataP18_1 = array(
                        'name' => 'P18', 'id' => 'P18', 'value' => 1, 'checked' => ($form2->P18 == 1 ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP18_2 = array(
                        'name' => 'P18', 'id' => 'P18', 'value' => 2, 'checked' => ($form2->P18 == 2 ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP18_1) . ' S&iacute;', 'P18_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP18_2) . ' No', 'P18_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <?= form_label('18.A. ¿Por qué visita más frecuente este CSC?', 'P18_A', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P18_A" class="col-sm-9">
                    <?php
                    $dataP18_A_1 = array('name' => 'P18_A_1', 'id' => 'P18_A_1', 'style' => 'margin-right:5px');
                    $dataP18_A_2 = array('name' => 'P18_A_2', 'id' => 'P18_A_2', 'style' => 'margin-right:5px');
                    $dataP18_A_3 = array('name' => 'P18_A_3', 'id' => 'P18_A_3', 'style' => 'margin-right:5px');
                    $dataP18_A_4 = array('name' => 'P18_A_4', 'id' => 'P18_A_4', 'style' => 'margin-right:5px');
                    $dataP18_A_5 = array('name' => 'P18_A_5', 'id' => 'P18_A_5', 'style' => 'margin-right:5px');
                    echo form_hidden('P18_A_AUX', $form2->P18_A_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_A_1, 1, set_checkbox('P18_A_1', '1', $form2->P18_A_1 == 1 ? TRUE : FALSE)) . ' Porque está cerca de su trabajo', 'P18_A_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_A_2, 1, set_checkbox('P18_A_2', '1', $form2->P18_A_2 == 1 ? TRUE : FALSE)) . ' Porque está cerca de su casa', 'P18_A_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_A_3, 1, set_checkbox('P18_A_3', '1', $form2->P18_A_3 == 1 ? TRUE : FALSE)) . ' Porque la atención es más rápida', 'P18_A_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_A_4, 1, set_checkbox('P18_A_4', '1', $form2->P18_A_4 == 1 ? TRUE : FALSE)) . ' Por la calidez de la atención', 'P18_A_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_A_5, 1, set_checkbox('P18_A_5', '1', $form2->P18_A_5 == 1 ? TRUE : FALSE)) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P18_A_O', 'id' => 'P18_A_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P18_A_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P18_A_5'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <?= form_label('18.B. ¿Por qué motivo decidió realizar su trámite en el CSC en el que lo atendieron el día de hoy?', 'P18_B', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P18_B" class="col-sm-9">
                    <?php
                    $dataP18_B_1 = array('name' => 'P18_B_1', 'id' => 'P18_B_1', 'style' => 'margin-right:5px');
                    $dataP18_B_2 = array('name' => 'P18_B_2', 'id' => 'P18_B_2', 'style' => 'margin-right:5px');
                    $dataP18_B_3 = array('name' => 'P18_B_3', 'id' => 'P18_B_3', 'style' => 'margin-right:5px');
                    $dataP18_B_4 = array('name' => 'P18_B_4', 'id' => 'P18_B_4', 'style' => 'margin-right:5px');
                    $dataP18_B_5 = array('name' => 'P18_B_5', 'id' => 'P18_B_5', 'style' => 'margin-right:5px');
                    echo form_hidden('P18_B_AUX', $form2->P18_B_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_B_1, 1, set_checkbox('P18_B_1', '1', $form2->P18_B_1 == 1 ? TRUE : FALSE)) . ' Cercanía a mi centro de labores', 'P18_B_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_B_2, 1, set_checkbox('P18_B_2', '1', $form2->P18_B_2 == 1 ? TRUE : FALSE)) . ' Cercanía a mi vivienda', 'P18_B_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_B_3, 1, set_checkbox('P18_B_3', '1', $form2->P18_B_3 == 1 ? TRUE : FALSE)) . ' Facilidad de acceso del transporte', 'P18_B_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_B_4, 1, set_checkbox('P18_B_4', '1', $form2->P18_B_4 == 1 ? TRUE : FALSE)) . ' Me encontraba cerca', 'P18_B_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP18_B_5, 1, set_checkbox('P18_B_5', '1', $form2->P18_B_5 == 1 ? TRUE : FALSE)) . ' Otros: ' . form_input(array('type' => 'text', 'name' => 'P18_B_O', 'id' => 'P18_B_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P18_B_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P18_B_5'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('19. ¿En su opinión, diría que son suficientes los CSC de la SUNAT para la Zona Norte 2 de Lima Metropolitana que existen actualmente? ', 'P19', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $dataP19_1 = array(
                        'name' => 'P19', 'id' => 'P19', 'value' => 1, 'checked' => ($form2->P19 == '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP19_2 = array(
                        'name' => 'P19', 'id' => 'P19', 'value' => 2, 'checked' => ($form2->P19 == '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP19_1) . ' S&iacute;', 'P19_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP19_2) . ' No', 'P19_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-12">
                <?= form_label('20. ¿Qué medio de transporte utilizó para dirigirse al CSC?', 'P20', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P20" class="col-sm-9">
                    <?php
                    $dataP20_1 = array('name' => 'P20_1', 'id' => 'P20_1', 'style' => 'margin-right:5px');
                    $dataP20_2 = array('name' => 'P20_2', 'id' => 'P20_2', 'style' => 'margin-right:5px');
                    $dataP20_3 = array('name' => 'P20_3', 'id' => 'P20_3', 'style' => 'margin-right:5px');
                    $dataP20_4 = array('name' => 'P20_4', 'id' => 'P20_4', 'style' => 'margin-right:5px');
                    $dataP20_5 = array('name' => 'P20_5', 'id' => 'P20_5', 'style' => 'margin-right:5px');
                    $dataP20_6 = array('name' => 'P20_6', 'id' => 'P20_6', 'style' => 'margin-right:5px');
                    echo form_hidden('P20_AUX', $form2->P20_AUX);
                    ?>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_1, 1, set_checkbox('P20_1', '1', $form2->P20_1 == 1 ? TRUE : FALSE)) . ' Bus público', 'P20_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_2, 1, set_checkbox('P20_2', '1', $form2->P20_2 == 1 ? TRUE : FALSE)) . ' Auto propio', 'P21'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_3, 1, set_checkbox('P20_3', '1', $form2->P20_3 == 1 ? TRUE : FALSE)) . ' Taxi', 'P21_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_4, 1, set_checkbox('P20_4', '1', $form2->P20_4 == 1 ? TRUE : FALSE)) . ' Colectivo', 'P20_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_5, 1, set_checkbox('P20_5', '1', $form2->P20_5 == 1 ? TRUE : FALSE)) . ' A pie', 'P20_5'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP20_6, 1, set_checkbox('P20_6', '1', $form2->P20_6 == 1 ? TRUE : FALSE)) . ' Otro: ' . form_input(array('type' => 'text', 'name' => 'P20_O', 'id' => 'P20_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P20_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P20_6'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('21. ¿Cuánto tiempo le tomó llegar al CSC en su última atención?', 'P21', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P21_HOR', 'id' => 'P21_HOR', 'placeholder' => 'HORAS', 'maxlength' => '2', 'value' => $form2->P21_HOR, 'size' => '10', 'class' => "form-control input-sm text-center")); ?>
                </div>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P21_MIN', 'id' => 'P21_MIN', 'placeholder' => 'MINUTOS', 'maxlength' => '2', 'value' => $form2->P21_MIN, 'size' => '10', 'class' => "form-control input-sm text-center")); ?>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('21.1. ¿Cuánto gastó?', 'P21_1', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P21_1_ENT', 'id' => 'P21_1_ENT', 'placeholder' => 'SOLES', 'maxlength' => '2', 'value' => $form2->P21_1_ENT, 'size' => '10', 'class' => "form-control input-sm text-center")); ?>
                </div>
                <div class="col-sm-2">
                    <?= form_input(array('type' => 'text', 'name' => 'P21_1_DEC', 'id' => 'P21_1_DEC', 'placeholder' => 'CENTIMOS', 'maxlength' => '2', 'value' => $form2->P21_1_DEC, 'size' => '10', 'class' => "form-control input-sm text-center")); ?>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('22. Ud. ¿Está de acuerdo con el horario de atención?', 'P22', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $dataP22_1 = array(
                        'name' => 'P22', 'id' => 'P22', 'value' => 1, 'checked' => ($form2->P22 == '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP22_2 = array(
                        'name' => 'P22', 'id' => 'P22', 'value' => 2, 'checked' => ($form2->P22 == '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP22_1) . ' S&iacute;', 'P22_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP22_2) . ' No', 'P22_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('22.1. ¿Qué horario sugeriría?', 'P22', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-9  form-inline">
                    <span>De: </span>
                    <div class="input-group bootstrap-timepicker timepicker col-sm-4">
                        <?= form_input(array('type' => 'text', 'name' => 'P22_1_INI_HORAS', 'id' => 'P22_1_INI_HORAS', 'value' => $form2->P22_1_INI_HORAS, 'class' => "form-control")); ?>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                    <span>a: </span>
                    <div class="input-group bootstrap-timepicker timepicker col-sm-4">
                        <?= form_input(array('type' => 'text', 'name' => 'P22_1_FIN_HORAS', 'id' => 'P22_1_FIN_HORAS', 'value' => $form2->P22_1_FIN_HORAS, 'class' => "form-control")); ?>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?=
                form_label('23. Mencione del 1 al 3, tres días de la semana en orden de importancia, en los que prefiere atenderse en los CSC ' .
                        form_button(array('type' => 'button', 'id' => 'limpia23', 'content' => 'Limpiar opciones', 'onClick' => 'return Limpiar23()', 'class' => 'btn btn-default')), 'P23', array('class' => 'col-sm-3 control-label'));
                ?>
                <div id="P23" class="col-sm-9">
                    <?php
                    //$dataP23_1 = array('name' => 'P23_1', 'id' => 'P23_1');
                    $dataP23_1_1 = array(
                        'name' => 'P23_1', 'id' => 'P23_1', 'value' => 1, 'checked' => ($form2->P23_1 == '1' ? TRUE : FALSE));
                    $dataP23_1_2 = array(
                        'name' => 'P23_1', 'id' => 'P23_1', 'value' => 2, 'checked' => ($form2->P23_1 == '2' ? TRUE : FALSE));
                    $dataP23_1_3 = array(
                        'name' => 'P23_1', 'id' => 'P23_1', 'value' => 3, 'checked' => ($form2->P23_1 == '3' ? TRUE : FALSE));
                    //$dataP23_2 = array('name' => 'P23_2', 'id' => 'P23_2');
                    $dataP23_2_1 = array(
                        'name' => 'P23_2', 'id' => 'P23_2', 'value' => 1, 'checked' => ($form2->P23_2 == '1' ? TRUE : FALSE));
                    $dataP23_2_2 = array(
                        'name' => 'P23_2', 'id' => 'P23_2', 'value' => 2, 'checked' => ($form2->P23_2 == '2' ? TRUE : FALSE));
                    $dataP23_2_3 = array(
                        'name' => 'P23_2', 'id' => 'P23_2', 'value' => 3, 'checked' => ($form2->P23_2 == '3' ? TRUE : FALSE));
                    //$dataP23_3 = array('name' => 'P23_3', 'id' => 'P23_3');
                    $dataP23_3_1 = array(
                        'name' => 'P23_3', 'id' => 'P23_3', 'value' => 1, 'checked' => ($form2->P23_3 == '1' ? TRUE : FALSE));
                    $dataP23_3_2 = array(
                        'name' => 'P23_3', 'id' => 'P23_3', 'value' => 2, 'checked' => ($form2->P23_3 == '2' ? TRUE : FALSE));
                    $dataP23_3_3 = array(
                        'name' => 'P23_3', 'id' => 'P23_3', 'value' => 3, 'checked' => ($form2->P23_3 == '3' ? TRUE : FALSE));
                    //$dataP23_4 = array('name' => 'P23_4', 'id' => 'P23_4');
                    $dataP23_4_1 = array(
                        'name' => 'P23_4', 'id' => 'P23_4', 'value' => 1, 'checked' => ($form2->P23_4 == '1' ? TRUE : FALSE));
                    $dataP23_4_2 = array(
                        'name' => 'P23_4', 'id' => 'P23_4', 'value' => 2, 'checked' => ($form2->P23_4 == '2' ? TRUE : FALSE));
                    $dataP23_4_3 = array(
                        'name' => 'P23_4', 'id' => 'P23_4', 'value' => 3, 'checked' => ($form2->P23_4 == '3' ? TRUE : FALSE));
                    //$dataP23_5 = array('name' => 'P23_5', 'id' => 'P23_5');
                    $dataP23_5_1 = array(
                        'name' => 'P23_5', 'id' => 'P23_5', 'value' => 1, 'checked' => ($form2->P23_5 == '1' ? TRUE : FALSE));
                    $dataP23_5_2 = array(
                        'name' => 'P23_5', 'id' => 'P23_5', 'value' => 2, 'checked' => ($form2->P23_5 == '2' ? TRUE : FALSE));
                    $dataP23_5_3 = array(
                        'name' => 'P23_5', 'id' => 'P23_5', 'value' => 3, 'checked' => ($form2->P23_5 == '3' ? TRUE : FALSE));
                    //$dataP23_6 = array('name' => 'P23_6', 'id' => 'P23_6');
                    $dataP23_6_1 = array(
                        'name' => 'P23_6', 'id' => 'P23_6', 'value' => 1, 'checked' => ($form2->P23_6 == '1' ? TRUE : FALSE));
                    $dataP23_6_2 = array(
                        'name' => 'P23_6', 'id' => 'P23_6', 'value' => 2, 'checked' => ($form2->P23_6 == '2' ? TRUE : FALSE));
                    $dataP23_6_3 = array(
                        'name' => 'P23_6', 'id' => 'P23_6', 'value' => 3, 'checked' => ($form2->P23_6 == '3' ? TRUE : FALSE));
                    //$dataP23_7 = array('name' => 'P23_7', 'id' => 'P23_7');
                    $dataP23_7_1 = array(
                        'name' => 'P23_7', 'id' => 'P23_7', 'value' => 1, 'checked' => ($form2->P23_7 == '1' ? TRUE : FALSE));
                    $dataP23_7_2 = array(
                        'name' => 'P23_7', 'id' => 'P23_7', 'value' => 2, 'checked' => ($form2->P23_7 == '2' ? TRUE : FALSE));
                    $dataP23_7_3 = array(
                        'name' => 'P23_7', 'id' => 'P23_7', 'value' => 3, 'checked' => ($form2->P23_7 == '3' ? TRUE : FALSE));
                    echo form_hidden('P23_AUX', $form2->P23_AUX);
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>D&iacute;as</th>
                                <th class="text-center">Mayor importancia (1)</th>
                                <th class="text-center">Regular importancia (2)</th>
                                <th class="text-center">Menor importancia (3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Lunes</th> 
                                <td class="text-center"><?= form_radio($dataP23_1_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_1_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_1_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Martes</th> 
                                <td class="text-center"><?= form_radio($dataP23_2_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_2_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_2_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mi&eacute;rcoles</th>
                                <td class="text-center"><?= form_radio($dataP23_3_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_3_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_3_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jueves</th>
                                <td class="text-center"><?= form_radio($dataP23_4_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_4_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_4_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Viernes</th>
                                <td class="text-center"><?= form_radio($dataP23_5_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_5_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_5_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">S&aacute;bado</th>
                                <td class="text-center"><?= form_radio($dataP23_6_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_6_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_6_3); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Domingo</th>
                                <td class="text-center"><?= form_radio($dataP23_7_1); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_7_2); ?></td>
                                <td class="text-center"><?= form_radio($dataP23_7_3); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('24. ¿Logró realizar el trámite (la gestión) que fue a realizar a la SUNAT la última vez?', 'P24', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    //$dataP24 = array('name' => 'P24', 'id' => 'P24', 'style' => 'margin-right:5px');
                    $dataP24_1 = array(
                        'name' => 'P24', 'id' => 'P24', 'value' => 1, 'checked' => ($form2->P24 == '1' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    $dataP24_2 = array(
                        'name' => 'P24', 'id' => 'P24', 'value' => 2, 'checked' => ($form2->P24 == '2' ? TRUE : FALSE), 'style' => 'margin-right:5px');
                    ?>
                    <div class="col-sm-3">                        
                        <?= form_label(form_radio($dataP24_1) . ' S&iacute;', 'P24_x1', array('class' => 'radio-inline')); ?>
                    </div>
                    <div class="col-sm-3">
                        <?= form_label(form_radio($dataP24_2) . ' No', 'P24_x2', array('class' => 'radio-inline')); ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <?= form_label('25. Si la respuesta es NO, ¿Por qué no pudo terminar o concretar el trámite que vino a realizar?', 'P25', array('class' => 'col-sm-3 control-label')); ?>
                <div id="P25" class="col-sm-9">
                    <?php
                    $dataP25_1 = array('name' => 'P25_1', 'id' => 'P25_1', 'style' => 'margin-right:5px');
                    $dataP25_2 = array('name' => 'P25_2', 'id' => 'P25_2', 'style' => 'margin-right:5px');
                    $dataP25_3 = array('name' => 'P25_3', 'id' => 'P25_3', 'style' => 'margin-right:5px');
                    $dataP25_4 = array('name' => 'P25_4', 'id' => 'P25_4', 'style' => 'margin-right:5px');
                    $dataP25_5 = array('name' => 'P25_5', 'id' => 'P25_5', 'style' => 'margin-right:5px');
                    $dataP25_6 = array('name' => 'P25_6', 'id' => 'P25_6', 'style' => 'margin-right:5px');
                    $dataP25_7 = array('name' => 'P25_7', 'id' => 'P25_7', 'style' => 'margin-right:5px');
                    $dataP25_8 = array('name' => 'P25_8', 'id' => 'P25_8', 'style' => 'margin-right:5px');
                    $dataP25_9 = array('name' => 'P25_9', 'id' => 'P25_9', 'style' => 'margin-right:5px');
                    echo form_hidden('P25_AUX', $form2->P25_AUX);
                    ?>                
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_1, 1, set_checkbox('P25_1', '1', $form2->P25_1 == 1 ? TRUE : FALSE)) . ' Faltaban papeles o documentos', 'P25_1'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_2, 1, set_checkbox('P25_2', '1', $form2->P25_2 == 1 ? TRUE : FALSE)) . ' Por falta de información antes de venir al centro', 'P25_2'); ?>                        
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_3, 1, set_checkbox('P25_3', '1', $form2->P25_3 == 1 ? TRUE : FALSE)) . ' Debe solucionar algunos problemas previamente', 'P25_3'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_4, 1, set_checkbox('P25_4', '1', $form2->P25_4 == 1 ? TRUE : FALSE)) . ' Deben realizar la verificación domiciliaria', 'P25_4'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_5, 1, set_checkbox('P25_5', '1', $form2->P25_5 == 1 ? TRUE : FALSE)) . ' Mala información entregada', 'P25_5'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_6, 1, set_checkbox('P25_6', '1', $form2->P25_6 == 1 ? TRUE : FALSE)) . ' Problemas del sistema computacional', 'P25_6'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_7, 1, set_checkbox('P25_7', '1', $form2->P25_7 == 1 ? TRUE : FALSE)) . ' Tiene que consultar', 'P25_7'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_8, 1, set_checkbox('P25_8', '1', $form2->P25_8 == 1 ? TRUE : FALSE)) . ' El trámite demoraba mucho', 'P25_8'); ?>
                    </div>
                    <div class="checkbox">
                        <?= form_label(form_checkbox($dataP25_9, 1, set_checkbox('P25_9', '1', $form2->P25_9 == 1 ? TRUE : FALSE)) . ' Otro' . form_input(array('type' => 'text', 'name' => 'P25_O', 'id' => 'P25_O', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'maxlength' => '60', 'value' => $form2->P25_O, 'readonly' => 'true', 'size' => '100', 'class' => 'form-control')), 'P25_9'); ?>
                    </div>
                </div>
            </div>
            <div class="form-actions col-sm-5 col-sm-offset-5">
                <?= form_button(array('type' => 'submit', 'id' => 'grabar', 'content' => 'Siguiente pagina', 'class' => 'btn btn-primary')); ?>
                <!--?= form_button(array('type' => 'reset', 'id' => 'limpiar', 'content' => 'Limpiar pagina', 'class' => 'btn btn-danger', 'onClick' => 'return P12_1.focus()')); ?>-->
                <?= anchor('encuestacsc/index', 'Cancelar', array('class' => 'btn btn-warning')); ?>
            </div><!--<button class="btn-block btn-danger btn-default btn-group btn-info btn-link btn-navbar btn-primary btn-success btn-toolbar btn-warning"-->
        </fieldset>

        <?= form_close(); ?>
    </div>
</div>


<script>
    $('#P22_1_INI_HORAS').timepicker({
        minuteStep: 5,
        showSeconds: false,
        showMeridian: true,
        defaultTime: false,
        template: 'modal'
    });
    $('#P22_1_FIN_HORAS').timepicker({
        minuteStep: 5,
        showSeconds: false,
        showMeridian: true,
        defaultTime: false,
        template: true
    });
    function Limpiar15() {
        $("#page2 input[name=P15_1]").prop('checked', false);
        $("#page2 input[name=P15_2]").prop('checked', false);
        $("#page2 input[name=P15_3]").prop('checked', false);
        $("#page2 input[name=P15_4]").prop('checked', false);
    }
    function Limpiar23() {
        $("#page2 input[name=P23_1]").prop('checked', false);
        $("#page2 input[name=P23_2]").prop('checked', false);
        $("#page2 input[name=P23_3]").prop('checked', false);
        $("#page2 input[name=P23_4]").prop('checked', false);
        $("#page2 input[name=P23_5]").prop('checked', false);
        $("#page2 input[name=P23_6]").prop('checked', false);
        $("#page2 input[name=P23_7]").prop('checked', false);
    }
</script>