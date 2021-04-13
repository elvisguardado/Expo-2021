<?php
//Se incluye la clase con plantillas del documento.
include("../../app/helpers/dashboard/plantilla_index.php");
//Se imprime la plantilla del encabezado y se establece el titulo para la pagina web.
plantilla_index::headerTemplate('Principal');
?>

<!-- Estructura formulario que esta dentro de una card para que se mire mejor -->
<br>
<div class="section container">
    <div class="row">
        <form class="col12">
            <div class="row card-panel">
                <div class="card">
                    <div class="card-content">
                        <!-- Es Un mensaje centralizado para mostrar en la seccion en la que se encuentra -->
                        <div class="center-align">
                            <h5>Gestión de Caja Personalizada</h5>
                        </div>
                        <br>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                        <h6>Para crear una caja personalizada, porfavor presiona el siguiente boton</h6>
                        </div>
                        <!-- Boton Para finalizar la creacion del registro-->
                        <br>
                        <div class="right-align">
                            <a class="waves-effect waves-light btn"><i class="material-icons left"></i>Crear una caja personalizada</a>
                        </div>
                        </div>
                        <!-- Estructura del texto -->
                            <div class="card-content  lighten-4">
                                <div class="nav-wrapper">
                                    <form>
                                      <div class="input-field">
                                         <div class="center-align">
                                          <h5>Creación de Caja Personalizada</h5>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                        <br>
                        <br>
                        <!-- Estructura de la segunda parte de la pagina -->
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                      
                      <div class="input-field col s12 m6">
                            <select >
                                 <option value=""  disabled  selected>tipo de producto</option>
                                 <option value="1">Camisas Cortez</option>
                                 <option value="2">Apprael</option>
                                 <option value="3">Destroy</option>
                            </select>
                                 <label>Tipo de producto</label>
                      </div>

                         <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                      <div class="input-field col s12 m6">
                              <i class="material-icons prefix">swap_vert</i>
                              <input type="text"  value="Ingrese la cantidad del productos" id="nombre">
                              <label for="nombre">Escriba la cantidad del producto</label>
                      </div>
                         <!-- Estructura del formulario, botones para finalizar la caja -->
                         <div class="right-aling">
                             <a class=" waves-effect waves-light btn modal-trigger" href="#modal1">Finalizar caja</a>
                        <!-- Estructura del formulario, botones para agregar otra caja -->
                             <a class="waves-effect waves-light btn">Agregar otra caja</a>
                         </div>
                             </div>
                        </div>        
                          <!--Estructura modal 1-->
                          <div id="modal1" class="modal">
                              <div class="modal-content">
                                    <h4>Confirmación</h4>
                                    <p>¿Estas seguro que deseas finalizar esta caja?</p>
                              </div>
                          <div class="modal-footer">
                             <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Si</a>
                             <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
                          </div>
                        </div>
                        <!--Estructura modal 2-->
                        <div id="modal2" class="modal">
                              <div class="modal-content">
                                    <h4>Caja finalizada con exito</h4>
                                    <p>Su total a cobrar seria de $15</p>
                              </div>
                          <div class="modal-footer">
                             <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                          </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
plantilla_index::footerTemplate('caja.js');
?>