<?php
class plantilla_login {
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
                <link type="text/css" rel="stylesheet" href="../../resources/css/login.css" media="screen,projection" />
            
                <!--Let browser know website is optimized for mobile-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!-- Titulo del documento -->
                <title>Roberth Dst '.$title.'</title>
            
            </head>
            
            <body>
                <!--Encabezado del documento-->
                <header>
            
                    <!-- Inicio del Navbar -->
                    
            
                <!--Información principal del documento-->
                <main>'

    );
}


    //Método para imprimir la plantilla del pie pagina.
    public static function footerTemplate($controller){
        print(
            ' </main>

            <!--Pie de pagina-->
            <footer class="" id="footer_style">
                <div class="container">
                    <div class="row" id="footer_style_letras">
                        <div class="col l6 s12">
                            
                        
                </div>
                
            </footer>
        
            <!--Importando la libreria de JavaScript-->
            <script type="text/javascript" src="../../resources/js/login.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
            <!-- Importando la libreria de JavaScript personalizada -->
            <script type="text/javascript" src="../../app/controllers/public/'.$controller.'"></script>
        </body>
        
        </html>'

        );
    }

}
?>