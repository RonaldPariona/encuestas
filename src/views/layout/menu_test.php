<!-- Navigation -->

<!-- Barra superior fija con opciones principales de menú -->
<header role="navigation">
<div class="nav-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
<a href="#"><i class="fa fa-home fa-fw"></i> <?= $titulo ?></a></li>
    <div class="active">
        <ul class="nav navbar-nav navbar-left navbar-top-links navbar-collapse">
		<li>
            <?= my_menu_ppal(); ?>
        </ul>
		</div>
		<!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php print_r(strtoupper($this->session->usuario)); ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <?= my_menu_ppal(); ?>
            </ul>
        </li>
    </ul>
    
    
</nav>
