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
                    <option value="../../views/public/catalogo_camisas_munecos.php">Camisetas sobre Anime</option>
                    <option value="../../views/public/calaberas.php">Camisetas sobre Calaberas</option>
                    <option value="../../views/public/carros.php">Camisetas sobre Carros</option>
                    <option value="../../views/public/marihuana.php">Camisetas sobre Marihuana</option>
                    <option value="../../views/public/video_juegos.php">Camisetas sobre Juegos</option>
                    <option value="../../views/public/super_heroes.php">Camisetas sobre SuperHeroes</option>
                    <option value="../../views/public/random.php">Camisetas random</option>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/BMW.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Camisa BMW</strong>
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
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/Hyundai.jpeg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Hyundai</strong>
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
                        src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/Japanese.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Japones</strong>
                    </p>
                </div>
            </div>
        </div>

        <!--Cuarta columna-->
        <div class="col s12 m6 l4">
            <!--Segunda Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/JDM.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>JDM</strong>
                    </p>
                </div>
            </div>
        </div>   
        <!--Quinta columna-->
        <div class="col s12 m6 l4">
            <!--Quinta Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/Moto Velocimetro.jpg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Moto Velocimetro</strong>
                    </p>
                </div>
            </div>
        </div>   
        <!--Sexta columna-->
        <div class="col s12 m6 l4">
            <!--Sexta Card-->
            <div class="card">
                <!--Imagen de la Card-->
                <div class="card-image">
                    <img src="../../resources/img/Trabajo_Pagina_Principal/Camisas/Camisas Muñecos/Carros/Yamaha Moto.jpeg" height="662">
                </div>
                <!--Contenido de la Card-->
                <div class="card-content center">
                    <p>
                        <strong>Yamaha Moto</strong>
                    </p>
                </div>
            </div>
        </div>  
</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
Planilla_Public::footerTemplate('catalogo_camisas_munecos.js');
?>