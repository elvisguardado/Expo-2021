<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row center">

        <h2 id="labelTitulo"><i>SDT Camisas:</i></h2>

    </div>

</div>


<div class="container" id="bloqueCards">

    <!--Estructura del catalogo, primera fila-->
    <div class="row">

        <!--Primera columna-->
        <div class="col s12 m6 l4">
            <!--Primera Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Conversa con Dios.jpeg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Conversa con Dios</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Segunda columna-->
        <div class="col s12 m6 l4">
            <!--Segunda Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Dios es amor.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Dios es amor</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Tercera columna-->
        <div class="col s12 m6 l4">
            <!--Segunda Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Jesus Crus.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Jesus Crus</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!--Estructura del catalogo, segunda fila-->
    <div class="row">

        <!--Cuarta columna-->
        <div class="col s12 m6 l4">
            <!--Primera Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img
                        src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Jesus de Carta.jpeg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Jesus de Carta</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Quinta columna-->
        <div class="col s12 m6 l4">
            <!--Segunda Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Jesus mejor amigo.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Jesus mejor amigo</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Sexta columna-->
        <div class="col s12 m6 l4">
            <!--Segunda Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Camisa SDT/Yo tuve que ser perdonado.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Yo tuve que ser perdonado</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_sdt_camisas.js');