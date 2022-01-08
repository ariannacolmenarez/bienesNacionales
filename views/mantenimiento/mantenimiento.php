<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h3 class="fw-bold">Mantenimiento</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row align-center">
                        <div class="col-lg-4 col-md-6 col-xs-12 text-center py-2 table-bordered">
                            <i class="fas fa-copy fa-9x"></i>
                            <h5 class="mt-2">Respaldar Base de Datos</h5>
                            <h6>Crear un archivo de respaldo con la información de la base de datos</h6>
                            <a><button onclick="respaldo();" class="btn btn-primary">Respaldo</button></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12 text-center py-2 table-bordered">
                        <i class="fas fa-trash-restore fa-9x"></i>
                            <h5 class="mt-2">Restaurar Base de Datos</h5>
                            <h6>Cargar la base de datos desde una copia de seguridad anterior</h6>
                            <a href="<?= BASE_URL; ?>mantenimiento/form"><button class="btn btn-primary">Restaurar</button></a>                        </div>
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