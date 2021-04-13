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
                            <h5>Gestión de Empleados</h5>
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
                        <h5>Visualizar los Empleados</h5>
                    </div>
                    <!-- Estructura de la barra de busqueda -->
                    <div class="card-content grey lighten-4">
                        <!-- Estructura de la tabla -->
                        <table id="tabla1" class="highlight responsive-table centered">
                            <thead>
                                <tr>
                                    <th>Nombre</th> <!-- Parte superior de la tabla indicando que tipo de datos se ingresaran -->
                                    <th>Tipo usuario</th>
                                    <th>DUI</th>
                                    <th>Telefono</th>
                                    <th>Dirección</th>
                                    <th>Usuario</th>
                                    <th>Contraseña</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jose Emilio Guerra Fuentes</td> <!-- Datos Ingresados -->
                                    <td>Administrador</td>
                                    <td>124987652</td>
                                    <td>94856126</td>
                                    <td>La gloria, mejicanos</td>
                                    <td>Strike</td>
                                    <td>Coterco</td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal3"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                <td>Elvis Otmaro Guardado Esquivel</td> <!-- Datos Ingresados -->
                                    <td>Estampador</td>
                                    <td>0215487952</td>
                                    <td>46598171</td>
                                    <td>Soyapango</td>
                                    <td>Elvis</td>
                                    <td>321 </td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2"><i class="material-icons">autorenew</i>Modal</a></td>
                                    <td><a class="btn-floating btn-small waves-effect waves-light red btn modal-trigger" href="#modal3"><i class="material-icons">delete</i>Modal</a></td>
                                </tr>
                                <tr>
                                <td>Juan Marcos Hernandez Umanzor</td> <!-- Datos Ingresados -->
                                    <td>Diseñador</td>
                                    <td>9517533842</td>
                                    <td>78451296</td>
                                    <td>Quezaltepeque</td>
                                    <td>Marcos</td>
                                    <td>123</td>
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
                        <h4>Empleados</h4>
                        <p>En el siguiente formulario podra actualizar los registros correspondientes a este crud.</p>
                         <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">assignment</i>
                            <input type="text" placeholder="Ingrese su nombre" id="nombre">
                            <label for="nombre">Nombre Completo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Selecciona el Tipo del Empleado</option>
                                <option value="1">Administrador</option>
                                <option value="2">Estampador</option>
                                <option value="3">Diseñador</option>
                            </select>
                            <label>Tipo de Empleado</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">portrait</i>
                            <input type="text" placeholder="Ingrese el DUI" id="nombre">
                            <label for="nombre">DUI</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">person</i>
                            <input type="text" placeholder="Ingrese el Usuario" id="nombre">
                            <label for="nombre">Usuario</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">phone</i>
                            <input type="text" placeholder="Ingrese el Telefono" id="nombre">
                            <label for="nombre">Telefono</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" placeholder="Ingrese la Contraseña" id="nombre">
                            <label for="password">Contraseña</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">place</i>
                            <input type="text" placeholder="Ingrese la Dirección" id="nombre">
                            <label for="nombre">Dirección</label>
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
                        <h4>Empleados</h4>
                        <p>En el siguiente formulario podra actualizar los registros correspondientes a este crud.</p>
                         <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">assignment</i>
                            <input type="text" placeholder="Ingrese su nombre" id="nombre">
                            <label for="nombre">Nombre Completo</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Selecciona el Tipo del Empleado</option>
                                <option value="1">Administrador</option>
                                <option value="2">Estampador</option>
                                <option value="3">Diseñador</option>
                            </select>
                            <label>Tipo de Empleado</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">portrait</i>
                            <input type="text" placeholder="Ingrese el DUI" id="nombre">
                            <label for="nombre">DUI</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">person</i>
                            <input type="text" placeholder="Ingrese el Usuario" id="nombre">
                            <label for="nombre">Usuario</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">phone</i>
                            <input type="text" placeholder="Ingrese el Telefono" id="nombre">
                            <label for="nombre">Telefono</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input type="password" placeholder="Ingrese la Contraseña" id="nombre">
                            <label for="password">Contraseña</label>
                        </div>
                        <!-- Estructura del formulario, cada div clas imput es una entrada de registro -->
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">place</i>
                            <input type="text" placeholder="Ingrese la Dirección" id="nombre">
                            <label for="nombre">Dirección</label>
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
                <!-- Modal Structure 3-->
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
plantilla_index::footerTemplate('empleados.js');
?>