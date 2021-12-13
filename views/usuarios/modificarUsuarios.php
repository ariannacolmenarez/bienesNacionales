<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar Usuarios</h1>
                <a href="<?= BASE_URL; ?>usuarios" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL; ?>usuarios/actualizar?c=<?=$_GET['c']?>" id="form_usuario">
                        <?php $p=new usuariosModel; $r=$p->obtener($_GET['c']); ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control bg-light" name="nombre" id="nombre" placeholder="Escriba el nombre" value="<?=$r->getnombre()?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="correo">Correo Electrónico</label>
                                <input type="text" class="form-control bg-light" name="correo" id="correo" placeholder="Escriba el correo Electrónico"value="<?=$r->getcorreo()?>">
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="clave">Clave</label>
                                <input type="text" class="form-control bg-light" name="clave" id="clave" placeholder="Escriba el clave" value="<?=$r->getclave()?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="rol" title="Tipo de Rol del Usuario">Tipo de Rol del Usuario</label>
                                <select class="form-control bg-light" name="rol" id="rol" >
                                <?php
                                     usuarios::selected($r->getid_rol()); ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col text-center">
                                    <img src="<?php $s=$r->getimagen(); echo BASE_URL.$s; ?>" alt="" style="width: 200px;">
                                </div>
                                <div class="mt-2">
                                    <label class=""> 
                                        <input title="Hacer Click aqui" type="file" name="fotos" id="fotos"  >
                                    </label>
                                </div>
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
    <script src="<?= media(); ?>/js/validation/usuario.js"></script>

</body>
</html>