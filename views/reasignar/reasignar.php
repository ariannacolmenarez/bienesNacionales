<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $data['page_title']; ?></h1>
                <?php if(in_array("Crear Reasignar Bien", $_SESSION['bn_permisos'])){ ?>
                    <a href="<?= BASE_URL; ?>reasignar/registrarReasignaciones" class="btn btn-primary btn-sm btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-sync-alt"></i>
                        </span>
                        <span class="text">Agregar</span>
                    </a>
                <?php } ?>
            </div>

            <!-- Tabla Datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Todos los registros</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Movimiento</th>
                                    <th>Fecha</th>
                                    <th>Tipo</th>
                                    <th title="Dependencia Nueva">Dependencia N</th>
                                    <th title="Código">C. Bien</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?= reasignar::listar()?>
                            </tbody>
                        </table>
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