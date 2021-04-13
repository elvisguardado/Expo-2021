<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row center">

        <h2 id="labelTitulo"><i>Las mejores blusas:</i></h2>

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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Adida Barra.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Adidas Barras</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Adidas Snoopy.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Adidas Snoopy</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Adidas De Hoja.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Adidas De Hoja</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Hollister Califonia.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Hollister Califonia</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Nike Cheke Grande.jpg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Nike Cheke Grande</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Marcas/Coco Chanel Simbolo.jpeg"
                        height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Coco Chanel Simbolo</strong>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_blusas_marcas.js');