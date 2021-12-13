<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Registrar Reasignaciones</h1>
                <a href="<?= BASE_URL; ?>reasignar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-undo fa-sm text-white-50"></i>
                    Volver
                </a>
            </div>

            <!-- Tabla Datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rellene todos los datos del formulario*</h6>
                </div>
                <div class="card-body">
                <form method="POST" action="<?= BASE_URL; ?>reasignar/guardar" id="form_reasignar">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="movimiento">Movimiento</label>
                                <input type="text" class="form-control bg-light" name="movimiento" placeholder="Número generado" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo" title="Tipo reasignacion">Tipo de reasignacion</label>
                                <select class="form-control bg-light" name="tipo" id="tipo">
                                    <option selected disabled>Seleccione una dependencia</option>
                                    <?= reasignar::select_tipo(0); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control bg-light" name="fecha" id="fecha">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codigo_bien" >Código del bien</label>
                                <select class="form-control bg-light" name="codigo_bien" id="cod_bien">
                                    <option selected disabled>Seleccione un bien</option>
                                    <?= reasignar::select_bienes(0); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codigo_dependencia" >Dependencia actual</label>
                                <select class="form-control bg-light" name="codigo_dependencia" id="cod_dep">
                                    <option selected disabled>Seleccione una dependencia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dependencia" title="Categoría Sigecof">Dependencia nueva</label>
                                <select class="form-control bg-light" name="dependenciaN" id="dependenciaN">
                                    <option selected disabled>Seleccione una dependencia</option>
                                    <?= reasignar::select_dependencias(0); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="concepto">Concepto</label>
                                <textarea class="form-control bg-light" name="concepto" id="concepto" placeholder="Concepto" rows="4" ></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary mt-2 mr-2">Guardar</button>
                        <button type="reset" class="btn btn-danger mt-2">Borrar</button>
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
    <script src="<?= media(); ?>/js/scripts/bienes/desincorporar.js"></script>
    <script src="<?= media(); ?>/js/validation/reasignar.js"></script>

</body>
</html>