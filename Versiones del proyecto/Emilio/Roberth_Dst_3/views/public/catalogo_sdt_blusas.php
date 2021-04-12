<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row center">

        <h2 id="labelTitulo"><i>SDT Blusas:</i></h2>

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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/Cara de Cristo.jpeg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Cara de Cristo</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/Cristo es todo.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Cristo es todo</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/DIOS es Amor.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>DIOS es Amor</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/Jesus.jpeg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Jesus</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/Jesus Superman.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Jesus Superman</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/SDT/Blusa SDT/Por Tanto Amo D1OS.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Por Tanto Amo D1OS</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_sdt_blusas.js');