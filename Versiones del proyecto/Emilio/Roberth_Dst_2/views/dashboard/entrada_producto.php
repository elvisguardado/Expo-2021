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
                            <h5>Gestión de Entrada del Producto</h5>
                        </div>
                        <br>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Selecciona el Modelo</option>
                                <option value="1">Batman logo</option>
                                <option value="2">Superman logo</option>
                                <option value="3">Nike</option>
                            </select>
                            <label>Tipo de modelo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Seleccione el producto</option>
                                <option value="1">Camisas</option>
                                <option value="2">Batas</option>
                                <option value="3">Camiseta</option>
                            </select>
                            <label>Tipo de producto</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">exposure</i>
                            <input type="text" placeholder="Ingrese la cantidad" id="nombre">
                            <label for="nombre">Cantidad</label>
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
                    <!-- Un mensaje centralizado para mostrar la seccion en la que se encuentra -->
                    <br>
                    <div class="center-align">
                        <h5>Visualizar Entrada del producto</h5>
                    </div>
                    <!-- Estructura de la barra de busqueda -->
                    <div class="card-content grey lighten-4">
                        <nav class=" blue-grey lighten-5">
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                        <!-- Estructura de la tabla -->
                        <table id="tabla1" class="highlight responsive-table centered">
                            <thead>
                                <tr>
                                    <th>Registro_estampado</th> <!-- Parte superior de la tabla indicando que tipo de datos se ingresaran -->
                                    <th>Tipo_producto</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Batman logo</td> <!-- Datos Ingresados -->
                                    <td>Camisas</td>
                                    <td>50</td>
                                    <td>02/04/2020</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal1"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                <td>Superman logo</td> <!-- Datos Ingresados -->
                                    <td>Batas</td>
                                    <td>25</td>
                                    <td>18/02/2020</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal1"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                <td>Nike</td> <!-- Datos Ingresados -->
                                    <td>Camisetas</td>
                                    <td>75</td>
                                    <td>29/03/2020</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal1"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Modal Structure 1-->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <!-- Mensaje que se muestra para indicarle en que seccion esta ubicado -->
                        <h4>Entrada del producto</h4>
                        <p>En el siguiente formulario podra actualizar los registros correspondientes a este crud.</p>
                         <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Selecciona el Modelo</option>
                                <option value="1">Batman logo</option>
                                <option value="2">Superman logo</option>
                                <option value="3">Nike</option>
                            </select>
                            <label>Tipo de modelo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Seleccione el producto</option>
                                <option value="1">Camisas</option>
                                <option value="2">Batas</option>
                                <option value="3">Camiseta</option>
                            </select>
                            <label>Tipo de producto</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">exposure</i>
                            <input type="text" placeholder="Ingrese la cantidad" id="nombre">
                            <label for="nombre">Cantidad</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <input type="text" class="datepicker">
                            <label for="nombre">Seleccione la fecha</label>
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
                <div id="modal2" class="modal">
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
plantilla_index::footerTemplate('entrada_producto.js');
?>