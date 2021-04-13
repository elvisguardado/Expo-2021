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

            <p id="labelCombo">Seleccione la temática deseada:</p>

            <!--Columna para el comboBox-->
            <div class="input-field col s12">

                <select class="browser-default" id="search_combo_style" onchange="location = this.value;">
                    <option value="">Secciones que puede ver: </option>
                    <option value="../../views/public/catalogo_blusas_munecos.php">Camisetas sobre BTS</option>
                    <option value="../../views/public/buhos.php">Blusas sobre Buhos</option>
                    <option value="../../views/public/frases.php">Blusas sobre Frases</option>
                    <option value="../../views/public/gatos.php">Blusas sobre Gatos</option>
                    <option value="../../views/public/girasol.php">Blusas sobre Girasol</option>
                    <option value="../../views/public/mickey.php">Blusas sobre Mickey</option>
                    <option value="../../views/public/comida.php">Blusas sobre Comida</option>
                    <option value="../../views/public/stich.php">Blusas sobre Stich</option>
                    <option value="../../views/public/bob_esponja.php">Blusas sobre Bob Esponja</option>
                    <option value="../../views/public/osos.php">Blusas sobre Osos</option>
                    <option value="../../views/public/blusas_super.php">Blusas sobre SuperHeroes</option>
                    <option value="../../views/public/snoopy.php">Blusas sobre Snoopy</option>
                    <option value="../../views/public/blusas_random.php">Blusas random</option>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Muñecos/Buohs/Buohs Love.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Buhos Love</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Muñecos/Buohs/3 Buohs.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Buhos</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Blusas/Blusas Muñecos/Buohs/Buoh Audifonos.jpg" height="550">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Buho Audifonos</strong>
                    </p>
                </div>
            </div>
        </div>
</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_blusas_munecos.js');
?>