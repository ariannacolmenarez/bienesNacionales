<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar Módulos</h1>
                <a href="<?= BASE_URL; ?>modulos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" action="<?= BASE_URL; ?>modulos/actualizar?c=<?=$_GET['c']?>" >
                        <div class="form-row">
                        <?php $p=new modulosModel; $r=$p->obtener($_GET['c']); ?>
                            <div class="form-group col-md-6">
                                <label for="nombre"> <b>Nombre</b></label>
                                <input type="text" class="form-control bg-light" name="nombre"  placeholder="Escriba el nombre" value="<?=$r->getnombre()?>" maxlength="50" pattern="[a-zA-ZÀ-ÿ\s0-9]{2,75}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descripcion"><b>Descripción</b></label>
                                <input type="text" class="form-control bg-light" name="descripcion" placeholder="Escriba el apellido" value="<?=$r->getdescripcion()?>" maxlength="250" pattern="[a-zA-ZÀ-ÿ\s0-9]{2,250}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 mr-2">Guardar</button>
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

</body>
</html>