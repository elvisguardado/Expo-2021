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
                        <!-- Es un mensaje centralizado para mostrar en la seccion en la que se encuentra -->
                        <div class="center-align">
                            <h5>Gestión de Salida</h5>
                        </div>
                        <br>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Selecciona el Empleado</option>
                                <option value="1">Elvis</option>
                                <option value="2">Emilio</option>
                                <option value="3">Marcos</option>
                            </select>
                            <label>Tipo de Empleado</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Seleccione el diseño</option>
                                <option value="1">Girasoles</option>
                                <option value="2">Pandas</option>
                                <option value="3">Mariposas</option>
                            </select>
                            <label>Tipo de diseño</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <input type="text" class="datepicker">
                            <label for="nombre">Seleccione la fecha</label>
                        </div>
                        <!-- Boton Para finalizar la creacion del registro-->
                        <div class="center-align">
                            <button class="btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons left">add_circle_outline</i>Crear Registro</button>
                        </div>
                    </div>

                    <!-- Estructura de la barra de busqueda -->
                    <div class="card-content white lighten-4">
                    </div>
                    <!-- Cards para poner los combobox 1 --> 
                   
                       <div class="col s12 m6">
                         <div class="card darken-1">
                          <div class="card-content black-text">
                             <select>
                                <option value="" disabled selected>Seleccione el Inventario</option>
                                <option value="1">Girasoles</option>
                                <option value="2">Pandas</option>
                                <option value="3">Mariposas</option>
                             </select>
                              
                            <input type="text" placeholder="Ingrese cantidad de Inventario" id="nombre">
                          </div>
                          </div>
                         </div>
                      
                       <!-- Cards para poner los combobox 2 --> 
                   
                       <div class=" col s12 m6">
                         <div class="card darken-1">
                          <div class="card-content black-text">
                             <select>
                                <option value="" disabled selected>Seleccione el Inventario</option>
                                <option value="1">Girasoles</option>
                                <option value="2">Pandas</option>
                                <option value="3">Mariposas</option>
                             </select>
                             
                            <input type="text" placeholder="Ingrese cantidad de Inventario" id="nombre">
                          </div>
                          </div>
                         </div>
                        <!--Cards para poner los combobox-->
                        <div class="col s12 m6">
                         <div class="card darken-1">
                          <div class="card-content black-text">
                             <select>
                                <option value="" disabled selected>Seleccione el Inventario</option>
                                <option value="1">Girasoles</option>
                                <option value="2">Pandas</option>
                                <option value="3">Mariposas</option>
                             </select>
                              
                            <input type="text" placeholder="Ingrese cantidad de Inventario" id="nombre">
                          </div>
                          </div>
                         </div>
                      </div>
                      <div class="center-align">
                            <button class="btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons left">add_circle_outline</i>Enviar Datos</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
plantilla_index::footerTemplate('salida.js');
?>