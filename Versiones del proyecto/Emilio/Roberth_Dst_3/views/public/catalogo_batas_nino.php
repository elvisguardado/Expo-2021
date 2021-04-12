<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row center">

        <h2 id="labelTitulo"><i>Batas niños:</i></h2>

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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Cigueña.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Cigueña</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Cool como Papi.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Cool como Papi</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Elefante Girasol Niño.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Elefante Girasol Niño</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Ya Llego.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Ya Llego</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Vegetta.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Vegetta</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Nino/Ya Quiero salir.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Ya Quiero salir</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_batas_nino.js');