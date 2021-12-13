<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Registrar Bienes</h1>
                <a href="<?= BASE_URL; ?>bienes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL; ?>bienes/guardar" id="form_bien">
                        <h3><b>Acta de Asignación</b></h3>
                        <div class="form-row">
                            
                            <div class="form-group col-md-4">
                                <label for="num_acta"><b>N Acta</b></label>
                                <input type="text" class="form-control bg-light" name="num_acta" id="num_acta" placeholder="Numero generado" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha"><b>Fecha</b></label>
                                <input type="date" class="form-control bg-light" name="fecha" id="fecha">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="num_factura"><b>N Factura</b></label>
                                <input type="text" class="form-control bg-light" name="num_factura" id="numFactura" placeholder="Numero de factura " >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_factura"><b>Fecha Factura</b></label>
                                <input type="date" class="form-control bg-light" name="fecha_factura" >
                            </div>
                            <div class="form-group col-md-4">
                                <label> <b>Factura</b></label><br>
                                <input title="Factura" type="file" name="img" id="img"  >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="num_ordenC"><b>N orden de compra</b></label>
                                <input type="text" class="form-control bg-light" name="num_ordenC" id="num_ordenC" placeholder="Numero de orden de compra" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_ordenC"><b>Fecha orden de compra</b></label>
                                <input type="date" class="form-control bg-light" name="fecha_ordenC" id="fecha_ordenC" placeholder="Fecha de orden de compra" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="num_ordenP"><b>N orden de pago</b></label>
                                <input type="text" class="form-control bg-light" name="num_ordenP" id="num_ordenP" placeholder="Numero de orden de pago">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_proveedor"><b>RIF Proveedor</b></label>
                                <select class="form-control bg-light" name="id_proveedor" id="id_proveedor">
                                    <option selected disabled>Seleccione RIF del proveedor</option>
                                    <?= bienes::select_proveedor(0); ?>
                                </select>
                            </div>
                        </div>
                        <h3><b>Bienes</b></h3>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="codigo"><b>Código</b></label>
                                <input type="text" class="form-control bg-light" name="codigo[]" id="codigo" placeholder="Codigo del bien">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control bg-light" name="nombre[]" id="nombre" placeholder="Nombre del bien">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_tipo"><b>Tipo del Bien</b></label>
                                <select class="form-control bg-light" name="id_tipo[]" id="id_tipo">
                                    <option selected disabled>Seleccione el Tipo de Bien</option>
                                    <?= bienes::selectTipo(); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codigo_categoria"><b>Categoria SIGECOF</b></label>
                                <select class="form-control bg-light" name="codigo_categoria[]" id="codigo_categoria">
                                    <option selected disabled>Seleccione la categoria SIGECOF</option>
                                    <?= bienes::selectcategoria(); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="descripcion"><b>Descripción</b></label>
                                <textarea class="form-control bg-light" name="descripcion[]" id="descripcion" placeholder="Descripcion" rows="4"></textarea>
                        
                            </div>
                        </div>
                        <div id="copia">

                        </div>
                        <div class="row justify-content-end">
                                <div class="col-2">
                                    <button id="agg" class="btn btn-primary mt-2 mr-2">AGG Bien</button>
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
    <script src="<?= media(); ?>/js/validation/bien.js"></script>

</body>
</html>
