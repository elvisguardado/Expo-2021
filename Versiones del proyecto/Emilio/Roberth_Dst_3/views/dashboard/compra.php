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
                            <h5>Gestión de Compra</h5>
                        </div>
                        <br>
                        <div class="col s12 m4">
                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">search</i>
                                            <input type="text" id="autocomplete-input" class="autocomplete">
                                            <label for="autocomplete-input">Buscador</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn center btn-medium waves-effect waves-light deep-purple accent-1"><i class="material-icons">verified_user</i></a>                       
                        <!-- Boton Para finalizar la creacion del registro-->                                                                          
                            <a class="btn right btn-large waves-effect waves-light  teal accent-4 btn modal-trigger" href="#modal1"><i class="material-icons left">add_circle_outline</i>Crear Registro</a>
                    </div>
                    <!-- Un mensaje centralizado para mostrar la seccion en la que se encuentra -->
                    <br>
                    <br>
                    <br>
                    <div class="center-align">
                        <h5>Visualizar las Compras</h5>
                    </div>
                    <!-- Estructura de la barra de busqueda -->
                    <div class="card-content grey lighten-4">


                        <!-- Estructura de la tabla -->
                        <table id="tabla1" class="highlight responsive-table centered">
                            <thead>
                                <tr>
                                    <th>Proveedor</th> <!-- Parte superior de la tabla indicando que tipo de datos se ingresaran -->
                                    <th>Tipo_Producto</th>
                                    <th>Tipo_Color</th>
                                    <th>Detalle_Compra</th>
                                    <th>Cantidad_Compra</th>
                                    <th>Precio_Compra</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Camisetas Cortez</td> <!-- Datos Ingresados -->
                                    <td>Camisa</td>
                                    <td>Negro</td>
                                    <td>Se compraron 50 camisas negras</td>
                                    <td>50</td>
                                    <td>$55.00</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal3"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                    <td>Apprael</td> <!-- Datos Ingresados -->
                                    <td>Batas</td>
                                    <td>Color</td>
                                    <td>Se compraron 48 batas de color rojo </td>
                                    <td>48</td>
                                    <td>$70.00</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal3"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                    <td>Destroy</td> <!-- Datos Ingresados -->
                                    <td>Blusas</td>
                                    <td>Blanco</td>
                                    <td>Se compraron 50 blusas blancas</td>
                                    <td>50</td>
                                    <td>$55.00</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal3"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Structure 1-->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <!-- Mensaje que se muestra para indicarle en que seccion esta ubicado -->
                        <h4>Compra</h4>
                        <p>En el siguiente formulario podra crear registros correspondientes a este crud.</p>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el proveedor</option>
                                <option value="1">Camisas Cortez</option>
                                <option value="2">Apprael</option>
                                <option value="3">Destroy</option>
                            </select>
                            <label>Proveedor</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el tipo producto</option>
                                <option value="1">Camisa</option>
                                <option value="2">Batas</option>
                                <option value="3">Blusas</option>
                            </select>
                            <label>Tipo Producto</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el color</option>
                                <option value="1">Blanco</option>
                                <option value="2">Negro</option>
                                <option value="3">Color</option>
                            </select>
                            <label>Tipo Color</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">assignment</i>
                            <input type="text" placeholder="Ingrese el detalle de la compra" id="nombre">
                            <label for="nombre">Detalle Compra</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">exposure</i>
                            <input type="text" placeholder="Ingrese cantidad compra" id="nombre">
                            <label for="nombre">Cantidad Compra</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">euro_symbol</i>
                            <input type="text" placeholder="Ingrese el precio" id="nombre">
                            <label for="nombre">Precio Compra</label>
                        </div>
                        <!-- Boton para finalizar la creacion del registro -->
                        <div class="center-align">
                            <button class="btn-large waves-effect waves-light teal accent-4" type="submit" name="action"><i class="material-icons left">verified_user</i>Crear Registro</button>
                        </div>
                        <!-- La siguiente opcion es para cerrar el modal -->
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                </div>
                <!-- Modal Structure 2-->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <!-- Mensaje que se muestra para indicarle en que seccion esta ubicado -->
                        <h4>Compra</h4>
                        <p>En el siguiente formulario podra actualizar los registros correspondientes a este crud.</p>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el proveedor</option>
                                <option value="1">Camisas Cortez</option>
                                <option value="2">Apprael</option>
                                <option value="3">Destroy</option>
                            </select>
                            <label>Proveedor</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el tipo producto</option>
                                <option value="1">Camisa</option>
                                <option value="2">Batas</option>
                                <option value="3">Blusas</option>
                            </select>
                            <label>Tipo Producto</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Ingrese el color</option>
                                <option value="1">Blanco</option>
                                <option value="2">Negro</option>
                                <option value="3">Color</option>
                            </select>
                            <label>Tipo Color</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">assignment</i>
                            <input type="text" placeholder="Ingrese el detalle de la compra" id="nombre">
                            <label for="nombre">Detalle Compra</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">exposure</i>
                            <input type="text" placeholder="Ingrese cantidad compra" id="nombre">
                            <label for="nombre">Cantidad Compra</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">euro_symbol</i>
                            <input type="text" placeholder="Ingrese el precio" id="nombre">
                            <label for="nombre">Precio Compra</label>
                        </div>
                        <!-- Boton para finalizar la actualizacion del registro -->
                        <div class="center-align">
                            <button class="btn-large waves-effect waves-light light-blue" type="submit" name="action"><i class="material-icons left">autorenew</i>Actualizar Registro</button>
                        </div>
                        <!-- La siguiente opcion es para cerrar el modal -->
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                </div>
                <!-- Modal Structure 2-->
                <div id="modal3" class="modal">
                    <div class="modal-content">
                        <div class="center-align">
                            <!-- Mensaje que se muestra sobre la accion que va realizar. para alertarlo que son cambios permanentes -->
                            <br>
                            <h4>¿Esta seguro que desea eliminar este Registro?</h4>
                            <p>En el siguiente formulario podra eliminar los datos correspondientes al registro "Esta operación esta irreversible".</p>
                        </div>
                        <br>
                        <!-- Botones para la eliminacion de un registro y el otro para cancelar esta accion -->
                        <div class="center-align">
                            <button class="btn-large waves-effect red" type="submit" name="action"><i class="material-icons right">do_not_disturb</i>Cancelar</button>
                            <button class="btn-large waves-effect green" type="submit" name="action"><i class="material-icons left">delete_forever</i>Eliminar Registro</button>
                        </div>
                        <!-- La siguiente opcion es para cerrar el modal -->
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
//Se imprime la plantilla del pie de pagina y se establece el controlador para la pagina web.
plantilla_index::footerTemplate('compra.js');
?>