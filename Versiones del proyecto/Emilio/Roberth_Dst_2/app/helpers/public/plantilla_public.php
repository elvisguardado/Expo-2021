<?php
class Planilla_Public {
    //Método para imprimir la plantilla del encabezado.
    public static function headerTemplate($title){
        print(
            '<!DOCTYPE html>
            <html lang="">
            
            <head>
                <!--Import Google Icon Font-->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!--Importando la libreria de estilo materialize.css-->
                <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css" media="screen,projection" />
            
                <!--Importando la libreria de estilo personalizada-->
                <link type="text/css" rel="stylesheet" href="../../resources/css/index_public.css" media="screen,projection" />
            
                <!--Let browser know website is optimized for mobile-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!-- Titulo del documento -->
                <title>Roberth Dst '.$title.'</title>
            
            </head>
            
            <body>
                <!--Encabezado del documento-->
                <header>
            
                    <!-- Dropdown Structure (Catálogo Camisas) -->
                    <ul id="id_dropCamisas" class="dropdown-content" >
                        <li><a href="catalogo_camisas_marcas.php">Marcas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_camisas_munecos.php">Muñecos</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Catálogo Camisas) -->
                    <ul id="id_dropCamisasHamburger" class="dropdown-content">
                        <li><a href="catalogo_camisas_marcas.php">Marcas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_camisas_munecos.php">Muñecos</a></li>
                        <li class="divider"></li>
                    </ul>
            
                    <!-- Dropdown Structure (Catálogo Blusas) -->
                    <ul id="id_dropBlusas" class="dropdown-content">
                        <li><a href="catalogo_blusas_marcas.php">Marcas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_blusas_munecos.php">Muñecos</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Catálogo Blusas) -->
                    <ul id="id_dropBlusasHamburger" class="dropdown-content">
                        <li><a href="catalogo_blusas_marcas.php">Marcas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_blusas_munecos.php">Muñecos</a></li>
                        <li class="divider"></li>
                    </ul>
            
                    <!-- Dropdown Structure (Catálogo Batas) -->
                    <ul id="id_dropBatas" class="dropdown-content">
                        <li><a href="catalogo_batas_nino.php">Niño</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_batas_nina.php">Niña</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_batas_mixto.php">Mixto</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Catálogo Batas) -->
                    <ul id="id_dropBatasHamburger" class="dropdown-content">
                        <li><a href="catalogo_batas_nino.php">Niño</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_batas_nina.php">Niña</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_batas_mixto.php">Mixto</a></li>
                        <li class="divider"></li>
                    </ul>
            
                    <!-- Dropdown Structure (Catálogo SDT) -->
                    <ul id="id_dropSDT" class="dropdown-content">
                        <li><a href="catalogo_sdt_camisas.php">SDT Camisas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_sdt_blusas.php">SDT Blusas</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Catálogo SDT) -->
                    <ul id="id_dropSDTHamburger" class="dropdown-content">
                        <li><a href="catalogo_sdt_camisas.php">SDT Camisas</a></li>
                        <li class="divider"></li>
                        <li><a href="catalogo_sdt_blusas.php">SDT Blusas</a></li>
                        <li class="divider"></li>
                    </ul>
            
                    <!-- Inicio del Navbar -->
                    <div class="navbar-fixed">
                        <nav id="navbar">
                            <div class="nav-wrapper indigo lighten-2">
                                <a href="index.php" class="brand-logo">
                                    <div class="row" id="bloqueLogo">
            
                                        <div class="col">
                                            <img src="../../resources/img/index_public/logoCompleto.png" width="350" height="100">
                                        </div>
            
                                    </div>
                                    
                                </a>
                                <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i
                                        class="material-icons">menu</i></a>
                                <ul class="right hide-on-med-and-down" id="navbarMenu">
            
                                    <!-- Dropdown Trigger (Catálogo Camisas) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropCamisas">
                                            Catálogo Camisas
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Catálogo Blusas) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropBlusas">
                                            Catálogo Blusas
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Catálogo Batas) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropBatas">
                                            Catálogo Batas
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Catálogo SDT) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropSDT">
                                            Catálogo STD (Cristiana)
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Fin del Navbar -->
            
                    <!-- Navbar modo hamburguesa. -->
                    <ul class="sidenav" id="menu-responsive">
            
                        <!-- Dropdown Trigger (Catálogo Camisas) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropCamisasHamburger">
                                Catálogo Camisas
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Catálogo Blusas) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropBlusasHamburger">
                                Catálogo Blusas
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Catálogo Batas) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropBatasHamburger">
                                Catálogo Batas
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Catálogo SDT) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropSDTHamburger">
                                Catálogo STD (Cristiana)
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                    </ul>
            
                </header>
            
                <!--Información principal del documento-->
                <main>'

    );
}


    //Método para imprimir la plantilla del pie pagina.
    public static function footerTemplate($controller){
        print(
            ' </main>

            <!--Pie de pagina-->
            <footer class="page-footer indigo lighten-2" id="footer_style">
                <div class="container">
                    <div class="row" id="footer_style_letras">
                        <div class="col l6 s12">
                            <h5>Cotiza con los mejores precios:</h5>
                            <a href="https://www.facebook.com/RoberthDstsv/" target="_blank">Facebook</a>
                            <br>
                            <a href="#">Instagram</a>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5>Términos de uso</h5>
                            <ul>
                                <li><a href="#!">Politicas de privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2020-2021, RoberthDst.com El Salvador. Todos los derechos reservados.
                    </div>
                </div>
            </footer>
        
            <!--Importando la libreria de JavaScript-->
            <script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
            <!-- Importando la libreria de JavaScript personalizada -->
            <script type="text/javascript" src="../../app/controllers/public/'.$controller.'"></script>
        </body>
        
        </html>'

        );
    }

}
?>