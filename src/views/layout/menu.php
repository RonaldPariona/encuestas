<!-- Barra superior fija con opciones principales de menú -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <i class="fa fa-home fa-fw"></i>
                <?php 
					if($titulo){
						echo $titulo;
					}else{
						echo "Proyecto";
					} ?>
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php
                        $sess_id = $this->session->userdata('usuario_id');
                        echo '<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>';
                        print_r(strtoupper($this->session->usuario));
                        ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?= my_menu_ppal(); ?>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="menu-main" class="navbar-collapse collapse" aria-expanded="true">
            <ul class="nav navbar-nav">
	    <!--<ul class="nav navbar-nav nav-pills">-->
                <?= my_menu_app(); ?>
            </ul>
        </div>
    </div><!-- /.navbar-collapse -->
    <!-- /.container-fluid -->
</nav>
