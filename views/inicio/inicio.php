<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $data['page_title']; ?></h1>
            </div>

            <!-- Cuadros de información -->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Encargados</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=inicio::contarencargados();?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Categorías</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=inicio::contarcategorias();?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-layer-group fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dependencias
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=inicio::contardependencias();?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Bienes</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?=inicio::contarbien();?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-swatchbook fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards con contenido -->
            <div class="row">
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard1">
                            <h6 class="m-0 font-weight-bold text-primary">Bienes Nacionales</h6>
                        </a>
                        <div class="collapse show" id="collapseCard1">
                            <div class="card-body">
                                <p>La Unidad de Bienes Nacionales es la oficina encargada de realizar la toma física de inventarios de los bienes en cada una de las dependencias adscritas a la unidad, es decir, funciona como encargada de velar por el resguardo de cada uno de los bienes que pertenecen a la institución.</p>
                                <p>Es la responsable a través del equipo laboral en incorporar bienes a cada dependencia, reasignar en caso de que existan dependencias que no utilicen el activo para ser entregado a otra dependencia, y posteriormente desincorporar una vez que el bien no tenga el uso debido o no se encuentre operativo. Se puede mencionar que esta oficina una vez que la institución adquiere un nuevo bien, lo codifica, lo registra y posteriormente lo incorpora a la dependencia donde es solicitada.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard2">
                            <h6 class="m-0 font-weight-bold text-primary">Misión</h6>
                        </a>
                        <div class="collapse show" id="collapseCard2">
                            <div class="card-body">
                                <p>Facilitar a todos los ciudadanos que laboran en el departamento el ejercicio del derecho al libre acceso a la información organizada y disponible, mediante la recopilación, preservación y difusión del registro de bienes con el fin de propiciarle el pleno desarrollo de sus capacidades intelectuales y productos, contribuyendo al crecimiento económico, social, educativo y cultural sostenido del Estado, de una manera crítica y participativa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-1">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard3" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard3">
                            <h6 class="m-0 font-weight-bold text-primary">Visión</h6>
                        </a>
                        <div class="collapse show" id="collapseCard3">
                            <div class="card-body">
                                <p>Ser el centro líder y de apoyo al desarrollo integral de la población del Estado Lara, que garantice el acceso universal a la información necesaria con respecto a los bienes contenidos en la Universidad para la construcción de sus oportunidades y posibilidades futuras y así asegurarse el crecimiento económico, social, educativo y cultural sostenido del Estado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <a href="#collapseCard4" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCard4">
                            <h6 class="m-0 font-weight-bold text-primary">Ubicación</h6>
                        </a>
                        <div class="collapse show" id="collapseCard4">
                            <div class="card-body">
                                <p>La Unidad de Bienes Nacionales se encuentra dentro de las instalaciones de la Universidad Politécnica Territorial de Lara “Andrés Eloy Blanco”, ubicada al final de la Avenida la Salle con Avenida los Horcones en la Ciudad de Barquisimeto, Parroquia Juan de Villegas Municipio Iribarren, Estado Lara Venezuela.</p>
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


    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>
</html>