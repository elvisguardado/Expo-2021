<?php
class plantilla_index {
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
            
                    <!-- Dropdown Structure (Compra y venta) -->
                    <ul id="id_dropCamisas" class="dropdown-content" >
                        <li><a href="compra.php">Compra</a></li>
                        <li class="divider"></li>
                        <li><a href="inventario_nuevo.php">Inventario Nuevo</a></li>
                        <li class="divider"></li>
                        <li><a href="caja.php">Caja</a></li>
                        <li class="divider"></li>
                        <li><a href="caja_personalizada.php">Caja Personalizada</a></li>
                    </ul>

                    
            
                    <!-- Dropdown Structure para la versión hamburguesa (Compra y venta) -->
                    <ul id="id_dropCamisasHamburger" class="dropdown-content">
                        <li><a href="compra.php">Compra</a></li>
                        <li class="divider"></li>
                        <li><a href="inventario_nuevo.php">Inventario Nuevo</a></li>
                        <li class="divider"></li>
                        <li><a href="caja.php">Caja</a></li>
                        <li class="divider"></li>
                        <li><a href="caja_personalizada.php">Caja Personalizada</a></li>
                    </ul>
            
                    <!-- Dropdown Structure (Entrada y Salida) -->
                    <ul id="id_dropBlusas" class="dropdown-content">
                        <li><a href="salida.php">Salida</a></li>
                        <li class="divider"></li>
                        <li><a href="salida_producto.php">Salida Producto</a></li>
                        <li class="divider"></li>
                        <li><a href="entrada_producto.php">Entrada Producto</a></li>
                        <li class="divider"></li>
                        <li><a href="inventario_estampado.php">Inventario Estampado</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Entrada y Salida) -->
                    <ul id="id_dropBlusasHamburger" class="dropdown-content">
                        <li><a href="salida.php">Salida</a></li>
                        <li class="divider"></li>
                        <li><a href="salida_producto.php">Salida Producto</a></li>
                        <li class="divider"></li>
                        <li><a href="entrada_producto.php">Entrada Producto</a></li>
                        <li class="divider"></li>
                        <li><a href="inventario_estampado.php">Inventario Estampado</a></li>
                        
                    </ul>
            
                    <!-- Dropdown Structure (Equipo de trabajo) -->
                    <ul id="id_dropBatas" class="dropdown-content">
                        <li><a href="proveedores.php">Provedores</a></li>
                        <li class="divider"></li>
                        <li><a href="empleados.php">Empleados</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Equipo de trabajo) -->
                    <ul id="id_dropBatasHamburger" class="dropdown-content">
                        <li><a href="proveedores.php">Provedores</a></li>
                        <li class="divider"></li>
                        <li><a href="empleados.php">Empleados</a></li>
                        <li class="divider"></li>
                    </ul>
            
                    <!-- Dropdown Structure (Taller) -->
                    <ul id="id_dropSDT" class="dropdown-content">
                        <li><a href="registro_diseño.php">Registro Diseño</a></li>
                        <li class="divider"></li>
                        <li><a href="diseño_revelado.php">Diseño Revelado</a></li>
                        <li class="divider"></li>
                        <li><a href="registro_estampado.php">Registro Estampado</a></li>
                    </ul>
            
                    <!-- Dropdown Structure para la versión hamburguesa (Taller) -->
                    <ul id="id_dropSDTHamburger" class="dropdown-content">
                        <li><a href="registro_diseño.php">Registro Diseño</a></li>
                        <li class="divider"></li>
                        <li><a href="diseño_revelado.php">Diseño Revelado</a></li>
                        <li class="divider"></li>
                        <li><a href="registro_estampado.php">Registro Estampado</a></li>
                        
                    </ul>             
            
                    <!-- Inicio del Navbar -->
                    <div class="navbar-fixed">
                        <nav id="navbar">
                            <div class="nav-wrapper indigo lighten-2">
                                <a  class="brand-logo">
                                    <div class="row" id="bloqueLogo">
            
                                        <div class="col">
                                            <img src="../../resources/img/index_public/logoCompleto.png" width="350" height="100">
                                        </div>
            
                                    </div>
                                    
                                </a>
                                <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i
                                        class="material-icons">menu</i></a>
                                <ul class="right hide-on-med-and-down" id="navbarMenu">
            
                                    <!-- Dropdown Trigger (Compra y venta) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropCamisas">
                                    Compra y venta
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Entrada y Salida) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropBlusas">
                                    Entrada y Salida
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Equipo de Trabajo) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropBatas">
                                    Equipo de Trabajo
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
            
                                    <!-- Dropdown Trigger (Taller) -->
                                    <li><a class="dropdown-trigger" href="#!" data-target="id_dropSDT">
                                            Taller
                                            <i class="material-icons right">arrow_drop_down</i>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item active"><a class="waves-effect waves-light deep-purple lighten-3 btn modal-trigger" href="index.php"><i class="material-icons right">verified_user</i>Cerrar sesión</a>
                                    </li>          
                               
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Fin del Navbar -->
            
                    <!-- Navbar modo hamburguesa. -->
                    <ul class="sidenav" id="menu-responsive">
            
                        <!-- Dropdown Trigger (Compra y venta) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropCamisasHamburger">
                            Compra y venta
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Entrada y Salida) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropBlusasHamburger">
                            Entrada y Salida
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Equipo de Trabajo) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropBatasHamburger">
                            Equipo de Trabajo
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
            
                        <!-- Dropdown Trigger (Taller) -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="id_dropSDTHamburger">
                            Taller 
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
            <footer class="page-footer  indigo lighten-2" id="footer_style">
                <div class="container">
                    <div class="row " id="footer_style_letras">
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
            <script type="text/javascript" src="../../app/controllers/dashboard/'.$controller.'"></script>
            <script type="text/javascript" src="../../app/controllers/public/'.$controller.'"></script>
        </body>
        
        </html>'

        );
    }

}
