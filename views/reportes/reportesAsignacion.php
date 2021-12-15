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
                    <h6 class="m-0 font-weight-bold text-primary">Reportes de asignacion por fechas</h6>
                </div>
                <div class="card-body">
                <form method="POST" action="<?= BASE_URL; ?>reportes/pdfAsignacion" id="form" >
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="desde"><b>Desde</b></label>
                                <input type="date" class="form-control bg-light" name="desde" id="desde"  placeholder="desde">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hasta"><b>Hasta</b></label>
                                <input type="date" class="form-control bg-light" name="hasta" id="hasta" placeholder="hasta">
                            </div>
                        </div>
                        <div class="row justify-content-md-center">   
                        <div  class="col-3 text-center">
                        <button type="submit" id="submit" class="btn btn-primary btn-md btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Reportes</span>
                        </button>
                        </div>
                        </div>
                    </form>
                    
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
    <script src="<?= media(); ?>/js/validation/reportes.js"></script>

</body>
</html>