<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row card">
                <div class="col">
                    
                        <div class="card-body">
                            <div class="row text-center">
                            <?php $r=new usuariosModel; $p=$r->clave($_SESSION['bn_id_usuario']);  ?>
                                <div class="col-md-4 col-sm-12">
                                    <label for="foto" class="text-primary"><b>Foto perfil</b></label><br>
                                    <img src="<?= empty($_SESSION['bn_imagen']) ? media().'/img/undraw_profile.svg' :  BASE_URL.$_SESSION['bn_imagen'] ?>" class="rounded-circle" alt="" style="width: 150px;"><br>
                                    <h6 class="mt-2"><b><?= empty($_SESSION['bn_usuario']) ? 'USUARIO' : $_SESSION['bn_usuario'] ?></b></h6>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <h4 class="m-2 font-weight-bold text-primary">Datos Personales</h4>
                                    <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL; ?>usuarios/actualizar?c=<?= $_SESSION['bn_id_usuario']?>">
                                        <input type="hidden" value="perfil" name="perfil" >
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nombre"><b>Nombre Usuario</b></label>
                                                <input type="text" class="form-control bg-light" name="nombre" placeholder="Escriba el nombre" value="<?=$_SESSION['bn_usuario']?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="correo"><b>Correo Electrónico</b></label>
                                                <input type="text" class="form-control bg-light" name="correo" placeholder="Escriba el correo" value="<?=$_SESSION['bn_correo']?>">
                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <label for="clave"><b>Clave</b></label>
                                                <input type="text" class="form-control bg-light" name="clave" placeholder="Escriba la clave" >
                                            </div>
                                            <div class="form-group col-md-6  ">
                                                <label class="mt-4">
                                                    <input name="fotos" type="file">
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2 mr-2">Guardar</button>
                                        <button type="reset" class="btn btn-danger mt-2">Borrar</button>
                                    </form>
                                </div>
                            </div>
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