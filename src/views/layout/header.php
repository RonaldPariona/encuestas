<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php isset($titulo) ? $titulo : "Template - Dashboard"; ?></title>
        <link href="<?= base_url('css/'); ?>bootstrap.min.css" rel="stylesheet">
        <!--<link href="<?= base_url('css/'); ?>bootstrap-sandstone.min.css" rel="stylesheet">-->
        <!--<link href="<?= base_url('css/'); ?>bootstrap-flatly.min.css" rel="stylesheet">-->
        <!--<link href="<?= base_url('css/'); ?>bootstrap-united.min.css" rel="stylesheet">-->
        <link href="<?= base_url('css/'); ?>bootstrap-cosmo.min.css" rel="stylesheet">
        <link href="<?= base_url('css/'); ?>datepicker3.css" rel="stylesheet">

        <link href="<?= base_url('css/'); ?>bootstrap-table.css" rel="stylesheet">
        <link href="<?= base_url('css/'); ?>styles.css" rel="stylesheet">
        <link href="<?= base_url('css/'); ?>bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Icons-->
        <script src="<?= base_url('js/'); ?>lumino.glyphs.js"></script>

        <!--[if lt IE 9]>
        <script src="<?= base_url('js/'); ?>html5shiv.js"></script>
        <script src="<?= base_url('js/'); ?>respond.min.js"></script>
        <![endif]-->

        <!-- Excel -->
        <!--<script src="<?= base_url('lib/'); ?>excellentexport.min.js"></script>-->
        <!--<script src="<?= base_url('lib/'); ?>nicedit/nicEdit.js"></script> -->
        <script src="<?= base_url('js/'); ?>jquery-1.11.1.min.js"></script>
        <script src="<?= base_url('js/'); ?>bootstrap.min.js"></script>
        <script src="<?= base_url('js/'); ?>chart.min.js"></script>
        <script src="<?= base_url('js/'); ?>chart-data.js"></script>
        <script src="<?= base_url('js/'); ?>easypiechart.js"></script>
        <script src="<?= base_url('js/'); ?>easypiechart-data.js"></script>
        <script src="<?= base_url('js/'); ?>bootstrap-datepicker.js"></script>
        <script src="<?= base_url('js/'); ?>bootstrap-table.js"></script>
        <script src="<?= base_url('js/'); ?>bootstrap-timepicker.js"></script>
        <!--<script src="<?= base_url('js/'); ?>jquery.mockjax.js"></script>-->
        <!--<script src="<?= base_url('js/'); ?>jquery.form.js"></script>-->
        <script src="<?= base_url('js/'); ?>jquery.validate.min.js"></script>
        <script>

            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
            }(window.jQuery);
        </script>	
    </head>
    <body>

        <div id="wraper" class="container-fluid">
