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
                            <h6 class="m-0 font-weight-bold text-primary">2. Encargados</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">2.1 Consultar encargados</p> 
                                <p>Al ingresar en el módulo de encargados, se puede observar una tabla con el listado de todos los usuarios encargados registrados en el sistema. </p>
                                <p class="font-weight-bold text-dark">2.2 Registrar encargados</p>
                                <p>En la parte superior derecha de la tabla de encargados se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos del encargado que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">2.3 Editar encargados</p>
                                <p>La última columna de la tabla de encargados, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">2.4 Eliminar encargados</p>
                                <p>La última columna de la tabla de encargados, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard3" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard3">
                            <h6 class="m-0 font-weight-bold text-primary">3. Categorías</h6>
                        </a>
                        <div class="collapse show" id="collapseCard3">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">3.1 Consultar categorías</p> 
                                <p>Al ingresar en el módulo de categorías, se puede observar una tabla con el listado de todas las categorías registradas en el sistema.</p>
                                <p class="font-weight-bold text-dark">3.2 Registrar categorías</p>
                                <p>En la parte superior derecha de la tabla de categorias se encuentra un botón "Agregar". Haciendo click en el se muestra un formulario para introducir los datos de la categoría que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">3.3 Editar categorías</p>
                                <p>La última columna de la tabla de categorias, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">3.4 Eliminar categorias</p>
                                <p>La última columna de la tabla de categorias, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard4">
                            <h6 class="m-0 font-weight-bold text-primary">4. Dependencias</h6>
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
                        <a href="#collapseCard5" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard5">
                            <h6 class="m-0 font-weight-bold text-primary">5. Bienes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard5">
                            <div class="card-body">
                                <p class="font-weight-bold text-dark">5.1 Consultar bienes</p>
                                <p>Al hacer click en el menú principal, en el módulo de bienes, se muestra una tabla con el listado de todos los bienes registrados en el sistema. En la última columna de cada registro de la tabla se encuentra un botón (color verde), haciendo click se puede consultar información mas detallada acerca del bien seleccionado.</p>
                                <p class="font-weight-bold text-dark">5.2 Registrar bienes</p> 
                                <p>Haciendo nuevamente click en el sub menú de bienes en la opción de registrar, se muestra un formulario para introducir los datos del bien que se va a registrar.</p>
                                <p class="font-weight-bold text-dark">5.3 Editar bienes</p>
                                <p>La última columna de la tabla de los bienes, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el bien seleccionado.</p>
                                <p class="font-weight-bold text-dark">5.4 Eliminar bienes</p>
                                <p>La última columna de la tabla de los bienes, contiene las opciones para cada registro. Entre ellas se encuentra un botón (color rojo) de eliminar con el icono de una papelera. Haciendo click se mostrará una alerta de confirmación para eliminar el bien seleccionado.</p>
                                <p class="font-weight-bold text-dark">5.5 Desincorporar bienes</p>
                                <p>La última columna de la tabla de dependencias, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                                <p class="font-weight-bold text-dark">5.5 Reasignar bienes</p>
                                <p>La última columna de la tabla de dependencias, contiene las opciones para cada registro. Entre ellas se encuentra un botón de editar con el icono de un lapiz. Haciendo click se mostrará un formulario con las opciones disponibles para editar el registro.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard6" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard6">
                            <h6 class="m-0 font-weight-bold text-primary">6. Incorporar bienes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard6">
                            <div class="card-body">
                                <p>Al hacer click en la opcion del menu llamada Incorporar, se muestra una tabla con el listado de todas las incorporaciones realizadas en el sistema. </p>
                                <p class="font-weight-bold text-dark">6.1 Incorporar bienes</p>
                                <p>En la parte superior derecha de la tabla, se encuentra un botón "Incorporar". Al hacer click se muestra un formulario en donde se introducen los datos para la incorporación del bien.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard7" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard7">
                            <h6 class="m-0 font-weight-bold text-primary">7. Desincorporar bienes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard7">
                            <div class="card-body">
                                <p>Al hacer click en la opcion del menu llamada Desincorporar, se muestra una tabla con el listado de todas las desincorporaciones realizadas en el sistema. </p>
                                <p class="font-weight-bold text-dark">7.1 Desincorporar bienes</p>
                                <p>En la parte superior derecha de la tabla, se encuentra un botón "Desincorporar". Al hacer click se muestra un formulario en donde se introducen los datos para la desincorporación de los bienes en el sistema.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard8" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard8">
                            <h6 class="m-0 font-weight-bold text-primary">8. Reasignar bienes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard8">
                            <div class="card-body">
                                <p>Al hacer click en la opcion del menu llamada Reasignar, se muestra una tabla con el listado de todas las reasignaciones realizadas en el sistema. </p>
                                <p class="font-weight-bold text-dark">8.1 Reasignar bienes</p>
                                <p>En la parte superior derecha de la tabla, se encuentra un botón "Reasignar". Al hacer click se muestra un formulario en donde se introducen los datos para la reasignación del bien.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard9" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard9">
                            <h6 class="m-0 font-weight-bold text-primary">9. Reportes</h6>
                        </a>
                        <div class="collapse show" id="collapseCard9">
                            <div class="card-body">
                                <p>En el menú principal se encuentra la opción de reportes. Dentro, se muestra la vista con los botones para generar los distintos reportes en documentos PDF. Al hacer click en un reporte, automaticamente se genera el documento PDF y se muestra en una ventana nueva. </p>
                                <p class="font-weight-bold text-dark">9.1 Descargar reportes</p>   
                                <p>El botón para descargar el reporte se encuentra en la parte superior derecha del documento. Posteriormente se selecciona el directorio donde se guardará y se escribe el nombre del documento en caso de que requiera cambiarlo.</p>
                                <p class="font-weight-bold text-dark">6.2 Imprimir reportes</p>
                                <p>Luego de abrir un reporte, el botón para imprimir está ubicado en la parte superior derecha del documento.</p>
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