<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar proveedores
                </h1>
                <a href="<?= BASE_URL; ?>proveedor" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" action="<?= BASE_URL; ?>proveedor/actualizar?c=<?=$_GET['c']?>" id="form">
                        <div class="form-row">
                        <?php $p=new proveedorModel; $r=$p->obtener($_GET['c']); ?>
                            <div class="form-group col-md-6">
                                <label for="id"> <b>ID</b></label>
                                <input type="text" class="form-control bg-light" name="id"  placeholder="ID generado" value="<?=$r->getid_proveedor()?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="proveedor"><b>Proveedores</b></label>
                                <input type="text" class="form-control bg-light" name="proveedores" id="nombre" placeholder="Escriba el nombre del proveedor" value="<?=$r->getproveedores()?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rif"><b>rif</b></label>
                                <input type="text" class="form-control bg-light" name="rif" id="rif" placeholder="Escriba el rif" value="<?=$r->getrif()?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion"><b>direccion</b></label>
                                <input type="text" class="form-control bg-light" name="direccion" id="direccion" placeholder="Escriba el rif" value="<?=$r->getdireccion()?>">
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
    <script src="<?= media(); ?>/js/validation/proveedores.js"></script>

</body>
</html>