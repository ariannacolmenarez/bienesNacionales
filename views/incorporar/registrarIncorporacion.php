<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Registrar Asignación</h1>
                <a href="<?= BASE_URL; ?>incorporar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" action="<?= BASE_URL; ?>incorporar/guardar" id="form_asignar" >
                        <div class="form-row justify-content-md-center">
                            <div class="form-group col-md-4">
                                <label for="num_movimiento">N Movimiento</label>
                                <input type="text" class="form-control bg-light"  name="num_movimiento" placeholder="codigo generado" disabled>
                            </div>
                        
                            <div class="form-group col-md-4">
                                <label for="num_entrega">Número Entrega</label>
                                <input type="text" class="form-control bg-light"  name="num_entrega" id="num_entrega" placeholder="Numero de entrega">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="prestamo">Prestamo</label>
                                <input type="text" class="form-control bg-light"  name="prestamo" id="prestamo" placeholder="Prestamo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control bg-light" name="fecha" id="fecha">
                            </div>
                            
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="codigo_dependencia" title="Codigo">Código de la dependencia</label>
                                <select class="form-control bg-light" name="codigo_dependencia" id="codigo_dependencia">
                                    <option selected disabled>Seleccione un codigo</option>
                                    <?= incorporar::select_dependencias(0); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="codigo_bien" >Bienes</label>
                                <select class="form-control bg-light" name="codigo_bien" id="codigo_bien" >
                                    <option selected disabled>Seleccione un bien</option>
                                    <?= incorporar::select_bienes(0); ?>
                                </select>
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
    <script src="<?= media(); ?>/js/validation/asignar.js"></script>

</body>
</html>