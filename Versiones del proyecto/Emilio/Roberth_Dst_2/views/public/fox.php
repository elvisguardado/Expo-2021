<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/public/plantilla_public.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
Planilla_Public::headerTemplate('Principal');
?>

<div class="container">

    <div class="row">

        <!--Combobox para la busqueda y filtrado de las marcas.-->
        <form id="search_combo">

            <p id="labelCombo">Seleccione la marca deseada:</p>

            <!--Columna para el comboBox-->
                <div class="input-field col s12">

                    <select class="browser-default" id="search_combo_style" onchange="location = this.value;">
                        <option value="">Secciones que puede ver: </option>
                        <option value="../../views/public/catalogo_camisas_marcas.php">Camisetas marca Adidas</option>
                        <option value="../../views/public/aeropostal.php">Camisetas marca Aeropostal</option>
                        <option value="../../views/public/converse.php">Camisetas marca Converse</option>
                        <option value="../../views/public/ecko.php">Camisetas marca Ecko</option>
                        <option value="../../views/public/emporio.php">Camisetas marca Emporio</option>
                        <option value="../../views/public/fox.php">Camisetas marca Fox</option>
                        <option value="../../views/public/hurley.php">Camisetas marca Hurley</option>
                        <option value="../../views/public/jordan.php">Camisetas marca Jordan</option>
                        <option value="../../views/public/marcas_mixtas.php">Camisetas marca Marcas Mixtas</option>
                        <option value="../../views/public/nike.php">Camisetas marca Nike</option>
                        <option value="../../views/public/puma.php">Camisetas marca Puma</option>
                        <option value="../../views/public/quicksilver.php">Camisetas marca QuickSilver</option>
                        <option value="../../views/public/ripcurl.php">Camisetas marca Ripcurl</option>
                        <option value="../../views/public/supreme.php">Camisetas marca Supreme</option>
                        <option value="../../views/public/vans.php">Camisetas marca Vans</option>
                        <option value="../../views/public/volcom.php">Camisetas marca Volcom</option>
                    </select>

                </div>
        </form>

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
                    <img
                        src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Marcas/Aeropostal/Aeropostal 77.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Aeropostal 77</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Marcas/Aeropostal/Aeropostal A.jpg"
                        height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Aeropostal A</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Tercera columna-->
        <div class="col s12 m6 l4">
            <!--Primera Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img
                        src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Marcas/Aeropostal/Aeropostal cursiva.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Aeropostal cursiva</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_camisas_marcas.js');
?>