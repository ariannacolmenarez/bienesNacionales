<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Registrar Encargados</h1>
                <a href="<?= BASE_URL; ?>encargados" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" action="<?= BASE_URL; ?>encargados/guardar" id="form_encargado">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control bg-light" name="nombre" id="nombre"  placeholder="Escriba el nombre" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido"><b>Apellido</b></label>
                                <input type="text" class="form-control bg-light" name="apellido" id="apellido" placeholder="Escriba el apellido">
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="cargo" ><b>Cargo</b></label>
                                <select class="form-control bg-light" name="cargo" id="cargo">
                                    <option selected disabled>Seleccione una cargo</option>
                                    <?= encargados::selected(0); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="cedula"><b>Cédula</b></label>
                                <input type="text" class="form-control bg-light" name="cedula" id="cedula" placeholder="Escriba la cédula" >
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="telefono"><b>Teléfono</b></label>
                                <input type="text" class="form-control bg-light" name="telefono" id="telefono" placeholder="Escriba el teléfono" >
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
    <script src="<?= media(); ?>/js/validation/encargado.js"></script>


</body>
</html>