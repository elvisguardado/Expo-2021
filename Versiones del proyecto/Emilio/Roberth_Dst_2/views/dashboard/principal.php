<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/dashboard/plantilla_index.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
plantilla_index::headerTemplate('Principal');
?>

<!-- CARD HORIZONTAL -->
<div class="container">
    <div class="card horizontal" id="nuestra_historia">
        <div class="card-image hide-on-med-and-down">
            <!-- Imagen mostrada en la card -->
            <img src="../../resources/img/index_public/nuestra_historia.jpg">
        </div>
        <!-- Contenido de la card -->
        <div class="card-stacked col s12 m12 l6">
            <div class="card-content">
                <h4 class="center">Nuestra historia</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maiores quos repellendus
                    illum fuga, eius enim hic velit nostrum odio atque, ratione commodi maxime?
                    Nihil voluptatibus quae quod consectetur aliquid!
                </p>

                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maiores quos repellendus
                    illum fuga, eius enim hic velit nostrum odio atque, ratione commodi maxime?
                    Nihil voluptatibus quae quod consectetur aliquid!
                </p>

                <!-- Iconos para las redes sociales -->
                <div class="center">
                    <a href="https://www.facebook.com/RoberthDstsv/" target="_blank"><img src="../../resources/img/index_public/facebook.png" HSPACE="25" VSPACE="10">
                    </a>
                    <a href="#" target="_blank"><img src="../../resources/img/index_public/twitter.png" HSPACE="25" VSPACE="10">
                    </a>
                    <a href="#" target="_blank"><img src="../../resources/img/index_public/Whatsapp.png" HSPACE="25" VSPACE="10">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 id="tituloPropositos" class="center"><i>Nuestros propósitos</i></h3>
<!-- Iniciando con la estructura de las cards -->
<div class="row container" id="propositosCard">
    <!-- Columna de las Cards -->
    <div class="col s12 m6 l6">

        <div class="card">
            <!-- Imagen de la card -->
            <div class="card-image">
                <img src="../../resources/img/index_public/vision.jpg" alt="" width="500" height="500">
            </div>
            <!-- Contenido de la card -->
            <div class="card-content">
                <span class="card-title">Nuestra Visión</span>
                <!-- No Sabia que poner -->
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quis laboriosam veritatis repudiandae ipsa repellat, nostrum natus.
                    Beatae itaque maiores perspiciatis nihil architecto inventore,
                    veniam harum distinctio corrupti doloremque, totam dignissimos.
                </p>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l6">
        <div class="card">
            <!-- Imagen de la card -->
            <div class="card-image">
                <img src="../../resources/img/index_public/mision.jpg" alt="" width="500" height="478">
            </div>
            <!-- Contenido de la card -->
            <div class="card-content">
                <span class="card-title">Nuesta mision</span>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quis laboriosam veritatis repudiandae ipsa repellat, nostrum natus.
                    Beatae itaque maiores perspiciatis nihil architecto inventore,
                    veniam harum distinctio corrupti doloremque, totam dignissimos.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Terminando con la estructura de las cards -->

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
plantilla_index::footerTemplate('index.js');
?>