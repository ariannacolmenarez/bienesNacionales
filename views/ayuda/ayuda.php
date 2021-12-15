<?php require_once('assets/components/header.php'); ?>
    
    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $data['page_title']; ?></h1>
            </div>

            <!-- Cards con contenido -->
            <div class="row">
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard1">
                            <h6 class="m-0 font-weight-bold text-primary">1. Iniciar Sesión</h6>
                        </a>
                        <div class="collapse show" id="collapseCard1">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">1.1 Ingresar al sistema</p>  
                                <p>Para entrar   al sistema es necesario ingresar en la página de inicio, el usuario y la clave válidos. El usuario debe contener como mínimo 6 caracteres. La clave debe tener entre sus caracteres letras y algun número.</p>
                                <p class="font-weight-bold text-dark">1.2 Página de Inicio</p>
                                <p>Al ingresar exitosamente en el sistema la primera vista que aparece es la página de inicio, la cual contiene información acerca de la Unidad de Bienes Nacionales, así como la misión, visión y la respectiva ubicación de la misma.</p>
                                <p class="font-weight-bold text-dark">1.3 Salir del sistema</p>
                                <p>En la esquina superior derecha se encuentra un botón con el nombre del usuario, al hacer click se desplegará un menú con la opción para cerrar la sesión y salir del sistema.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard2">
                            <h6 class="m-0 font-weight-bold text-primary">2. Gestionar Usuarios</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">2.1 Consultar usuarios</p> 
                                <p>Al ingresar en el módulo de usuarios, se puede observar una tabla con el listado de todos los usuarios registrados en el sistema. </p>
                                <p class="font-weight-bold text-dark">2.2 Registrar usuarios</p>
                                <p>En la parte superior derecha de la tabla de usuarios se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos del usuario que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">2.3 Editar usuarios</p>
                                <p>La última columna de la tabla de usuarios, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">2.4 Eliminar usuarios</p>
                                <p>La última columna de la tabla de usuarios, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard2">
                            <h6 class="m-0 font-weight-bold text-primary">3. Gestionar Encargados</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">3.1 Consultar encargados</p> 
                                <p>Al ingresar en el módulo de encargados, se puede observar una tabla con el listado de todos los usuarios encargados registrados en el sistema. </p>
                                <p class="font-weight-bold text-dark">3.2 Registrar encargados</p>
                                <p>En la parte superior derecha de la tabla de encargados se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos del encargado que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">3.3 Editar encargados</p>
                                <p>La última columna de la tabla de encargados, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">3.4 Eliminar encargados</p>
                                <p>La última columna de la tabla de encargados, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard4">
                            <h6 class="m-0 font-weight-bold text-primary">4. Gestionar Dependencias</h6>
                        </a>
                        <div class="collapse show" id="collapseCard4">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">4.1 Consultar dependencias</p>    
                                <p>Al hacer click en el menú principal en el módulo de dependencias, se puede observar una tabla con el listado de todas las dependencias registradas en el sistema.</p>
                                <p class="font-weight-bold text-dark">4.2 Registrar dependencias</p>
                                <p>Haciendo click en el botón agregar, ubicado en la esquina superior derecha de la tabla, se muestra un formulario para introducir los datos de la dependencia que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">4.3 Editar dependencias</p>
                                <p>La última columna de la tabla de dependencias, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">4.4 Eliminar dependencias</p>
                                <p>La última columna de la tabla de dependencias, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard3" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard3">
                            <h6 class="m-0 font-weight-bold text-primary">5. Gestionar Categorías</h6>
                        </a>
                        <div class="collapse show" id="collapseCard3">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">5.1 Consultar categorías</p> 
                                <p>Al ingresar en el módulo de categorías, se puede observar una tabla con el listado de todas las categorías registradas en el sistema.</p>
                                <p class="font-weight-bold text-dark">5.2 Registrar categorías</p>
                                <p>En la parte superior derecha de la tabla de categorias se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos de la categoría que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">5.3 Editar categorías</p>
                                <p>La última columna de la tabla de categorias, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">5.4 Eliminar categorias</p>
                                <p>La última columna de la tabla de categorias, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard5" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard5">
                            <h6 class="m-0 font-weight-bold text-primary">6.Gestionar Bienes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard5">
                            <div class="card-body">
                                <h6 class="m-0 font-weight-bold text-primary">6.1 Gestionar Actas</h6>
                                <hr>
                                <p class="font-weight-bold text-dark">6.1.1 Consultar bienes</p>
                                <p>Haciendo click en el sub menú de gestionar bienes , se muestra una tabla con el listado de todos los bienes registrados en el sistema.</p>
                                <p class="font-weight-bold text-dark">6.1.2 Registrar bienes</p> 
                                <p>En la parte superior derecha de la tabla de bienes se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos de los bienes que se van a registrar</p>
                                <p class="font-weight-bold text-dark">6.1.3 Editar bienes</p>
                                <p>La última columna de la tabla de los bienes, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el bien seleccionado.</p>
                                <p class="font-weight-bold text-dark">6.1.4 Eliminar bienes</p>
                                <p>La última columna de la tabla de los bienes, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el bien seleccionado.</p>
                                <hr>
                                <h6 class="m-0 font-weight-bold text-primary">6.2. Asignar bien</h6>
                                <hr>
                                <p class="font-weight-bold text-dark">6.2.1 Consultar asignaciones</p>
                                <p>Haciendo click en el sub menú de gestionar bienes , se muestra una tabla con el listado de todos los bienes que se encuentran asignados a una dependencia.</p>
                                <p class="font-weight-bold text-dark">6.2.2 Registrar asignaciones</p> 
                                <p>En la parte superior derecha de la tabla de asignaciones se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos de los bienes y la dependencia a la cual sera asignado</p>
                                <hr>
                                <h6 class="m-0 font-weight-bold text-primary">6.3 Deincorporar bien</h6>
                                <hr>
                                <p class="font-weight-bold text-dark">6.3.1 Consultar Desincorporaciones</p>
                                <p>Haciendo click en el sub menú de gestionar bienes , se muestra una tabla con el listado de todos los bienes que se encuentran desincorporados de las dependencias.</p>
                                <p class="font-weight-bold text-dark">6.3.2 Registrar Desincorporaciones</p> 
                                <p>En la parte superior derecha de la tabla de desincorporaciones se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos de los bienes y la dependencia se la cual se desincorporará el mismo</p>
                                <hr>
                                <h6 class="m-0 font-weight-bold text-primary">6.4 Reasignar bien</h6>
                                <hr>
                                <p class="font-weight-bold text-dark">6.4.1 Consultar Reasignaciones</p>
                                <p>Haciendo click en el sub menú de gestionar bienes , se muestra una tabla con el listado de todos los bienes que se encuentran Reasignados y la información de la dependencia.</p>
                                <p class="font-weight-bold text-dark">6.4.2 Registrar Reasignaciones</p> 
                                <p>En la parte superior derecha de la tabla de reasignaciones se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos del bien y la dependencia a la cual sera reasignado</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard9" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard9">
                            <h6 class="m-0 font-weight-bold text-primary">7.Generar Reportes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard9">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">7.1 Reportes de asignación</p>   
                                <p>Haciendo click en el sub menú de reportes de asignación , se muestra dos casillas las cuales se deberan llenar con las fechas cuyo rango se quiere generar un reporte de asignación de los bienes.</p>
                                <p class="font-weight-bold text-dark">7.2 Reportes de desincorporación</p>
                                <p>Haciendo click en el sub menú de reportes de desincorporación , se muestra dos casillas las cuales se deberan llenar con las fechas cuyo rango se quiere generar un reporte de desincorporación de los bienes.</p>
                                <p class="font-weight-bold text-dark">7.2 Reportes de Reasignación</p>
                                <p>Haciendo click en el sub menú de reportes de reasignación, se muestra dos casillas las cuales se deberan llenar con las fechas cuyo rango se quiere generar un reporte de reasignación de los bienes.</p>
                                <p class="font-weight-bold text-dark">7.2 Reportes de inventario por dependencia</p>
                                <p>Haciendo click en el sub menú de inventario por dependencia , se muestran tres casillas de las cuales en una se debe seleccionar la dependencia de la cual se quiere generar el reporte de bienes y las otras dos se deberan llenar con las fechas cuyo rango se quiere generar el reporte.</p>
                                <p class="font-weight-bold text-dark">7.2 Reportes de inventario general</p>
                                <p>Haciendo click en el sub menú de inventario general , se muestra un boton el cual al presionar genera un archivo pdf con el inventario de todos los bienes registrados.</p>
                                <p class="font-weight-bold text-dark">7 Generar estadísticas</p>
                                <p>Haciendo click en el sub menú de generar estadísticas , se muestra dos casillas las cuales se deberan llenar con las fechas cuyo rango se quiere generar las estadísticas de asignación y desincorporación de los bienes diriguiendonos a otra pantalla con dichas estadísticas.</p>
                                <p class="font-weight-bold text-dark">7.2 Consultar bitácora</p>
                                <p>Haciendo click en el sub menú de consultar bitácora , se muestra una tabla con todos los movimientos realizados por los usuarios dentro del sistema .</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard2">
                            <h6 class="m-0 font-weight-bold text-primary">8. Gestionar seguridad</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">8.1 Consultar roles</p> 
                                <p>Al ingresar en el módulo de encargados, se puede observar una tabla con el listado de todos los roles registrados en el sistema. </p>
                                <p class="font-weight-bold text-dark">8.2 Registrar roles</p>
                                <p>En la parte superior derecha de la tabla de roles se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos del rol que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">8.3 Editar roles</p>
                                <p>La última columna de la tabla de roles, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">8.4 Eliminar roles</p>
                                <p>La última columna de la tabla de roles, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                                <p class="font-weight-bold text-dark">8.4 Agregar permisos</p>
                                <p>La última columna de la tabla de roles, contiene las opciones para cada registro. Entre ellas se encuentra un botón de agregar permisos con el icono de una llave. Haciendo click se mostrará una pantalla donde al marcar las casillas de cada permiso y enviar la informacion se guardaran los permisos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard2">
                            <h6 class="m-0 font-weight-bold text-primary">9. Configuración</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p>En la esquina superior derecha se encuentra un botón con el nombre del usuario, al hacer click se desplegará un menú con diferentes opciones al pulsar configuración se mostrará una pantalla en la cual apareceran diferentes botones para ingresar la información necesaria para el buen funcionamiento del sistema. 
                                    Cada uno de estas secciones con su formulario para registrar la información, igualmente el apartado para editar la información y eliminar la misma. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End of Main Content -->


    <?php require_once('assets/components/footer.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php require_once('assets/components/modals.php'); ?>
    <?php require_once('assets/components/scripts.php'); ?>

</body>
</html>