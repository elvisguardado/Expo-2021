<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row center">

        <h2 id="labelTitulo"><i>Batas mixtas:</i></h2>

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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Brilla como Girasol.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Brilla como Girasol</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Cargando Apllicacion Bebe.jpg"
                    height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Cargando Apllicacion Bebe</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Es Para Mi Bebe.jpg"
                    height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Es Para Mi Bebe</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Mama Needs Nap.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Mama Needs Nap</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Ultra.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>>Ultra</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Batas/Bata Mixto/Gemelos puedo Salir ya.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Gemelos puedo Salir ya</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_batas_mixto.js');