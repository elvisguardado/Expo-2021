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
                            <h5>Gestión de Registro Diseños</h5>
                        </div>
                        <br>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Seleccione un Empleado</option>
                                <option value="1">Camisas Cortez</option>
                                <option value="2">Apprael</option>
                                <option value="3">Destroy</option>
                            </select>
                            <label>Empleado</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">compare</i>
                            <input type="text" placeholder="Ingrese un Modelo" id="nombre">
                            <label for="nombre">Modelo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m12">
                            <form action="#">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Imagen</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <input type="text" class="datepicker">
                            <label for="nombre">Selecciona la Fecha</label>
                        </div>
                        <!-- Boton Para finalizar la creacion del registro-->
                        <div class="center-align">
                            <button class="btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons left">add_circle_outline</i>Crear Registro</button>
                        </div>
                    </div>
                    <!-- Un mensaje centralizado para mostrar la seccion en la que se encuentra -->
                    <div class="center-align">
                        <h5>Visualizar los registros de Diseño</h5>
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
                                    <th>Empleado</th> <!-- Parte superior de la tabla indicando que tipo de datos se ingresaran -->
                                    <th>Modelo</th>
                                    <th>Foto</th>
                                    <th>Fecha</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Emilio Guerra</td> <!-- Datos Ingresados -->
                                    <td>Girasoles</td>
                                    <td><img src="data:image/jpeg;base64,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" height="85" width="85"></td>
                                    <td>26/01/2021</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal1"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                    <td>Marcos Umanzor</td> <!-- Datos Ingresados -->
                                    <td>Pandas</td>
                                    <td><img src="https://i.ytimg.com/vi/Bw0iYYrCzzo/hqdefault.jpg" height="85" width="85"></td>
                                    <td>15/02/2021</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal1"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                    <td>Elvis Guardado</td> <!-- Datos Ingresados -->
                                    <td>Mariposas</td>
                                    <td><img src="https://i.pinimg.com/236x/9e/ee/c0/9eeec0e527fef435eef1d693a43e96a8.jpg" height="85" width="85"></td>
                                    <td>02/03/2021</td> <!-- Los ultimos 2 botones abren un modal en el cual se podra actualizar o eliminar un registro dependiendo lo que elija  -->
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
                        <h4>Compra</h4>
                        <p>En el siguiente formulario podra actualizar los registros correspondientes a este crud.</p>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Seleccione un Empleado</option>
                                <option value="1">Camisas Cortez</option>
                                <option value="2">Apprael</option>
                                <option value="3">Destroy</option>
                            </select>
                            <label>Empleado</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">compare</i>
                            <input type="text" placeholder="Ingrese un Modelo" id="nombre">
                            <label for="nombre">Modelo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m12">
                            <form action="#">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Imagen</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <input type="text" class="datepicker">
                            <label for="nombre">Selecciona la Fecha</label>
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
plantilla_index::footerTemplate('registro_diseño.js');
?>