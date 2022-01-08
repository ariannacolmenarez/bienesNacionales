<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Mantenimiento</h1>
                <a href="<?= BASE_URL; ?>mantenimiento" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-undo fa-sm text-white-50"></i>
                    Volver
                </a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Restaurar Base de Datos</h3>
                    <div class="row align-center">
                        <div class="col-lg-4 col-md-6 col-xs-12 text-center py-2 table-bordered">
                            <form method="POST" action="<?= BASE_URL; ?>mantenimiento/restaurar" name="formRest">
                                <div class="form-group col">
                                    <label for="cargo" ><b>Seleccione Archivo</b></label>
                                    <select class="form-control bg-light" name="sql">
                                        <option value="" selected disabled>seleccionar</option>
                                        <?= mantenimiento::select()?>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-2 mr-2" onclick="restaurar();">
                                    restaurar
                                </button>
                            </form>
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