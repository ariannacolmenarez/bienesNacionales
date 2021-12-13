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

            <!-- Tabla Datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Reportes de Invetario General</h6>
                </div>
                <div class="card-body">
                        <a href="<?php BASE_URL ?>pdfInventario" class="btn btn-primary btn-lg btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Reportes</span>
                        </a> 
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