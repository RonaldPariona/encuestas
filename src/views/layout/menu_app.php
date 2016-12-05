        <!-- Barra superior fija con opciones principales de menú -->
        <!--<nav class="navbar navbar-default navbar-fixed-top" role="navigation">-->
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
                <div class="container-fluid">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-main">
                    <!--<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    <!--</a>-->
                    </button>
                    <a class="navbar-brand" href="#"> <?= $titulo ?> </a>

                    <div id="menu-main" class="navbar-collapse collapse" aria-expanded="true">
                        <ul class="nav navbar-nav">
                        	<?= my_menu_ppal(); ?>
                        </ul>
                    </div>
                </div>
            
        </nav>