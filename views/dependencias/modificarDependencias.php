<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar Dependencia</h1>
                <a href="<?= BASE_URL; ?>dependencias" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                    <form method="POST" action="<?= BASE_URL; ?>dependencias/actualizar?c=<?=$_GET['c']?>" id="form_dependencia" >
                        <div class="form-row">
                        <?php $p=new dependenciasModel; $r=$p->obtener($_GET['c']); ?>
                            <div class="form-group col-md-4">
                                <label for="clasificacion"><b>Clasificacion</b></label>
                                <select class="form-control bg-light" name="clasificacion" id="clasificacion">
                                    <option selected disabled>Seleccione Clasificacion de la dependencia</option>
                                    <?= dependencias::select_clasificacion($r->getclasificacion()); ?>
                                </select>
                                <span class="error3"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dependencia">Dependencia</label>
                                <input type="text" class="form-control bg-light" name="nombre" id="nombre" placeholder="Escriba el nombre de la dependencia" value="<?=$r->getnombre()?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="locacion"><b>Edificio / Locacion</b></label>
                                <select class="form-control bg-light" name="locacion" id="locacion">
                                    <option selected disabled>Seleccione locacion de la dependencia</option>
                                    <?= dependencias::select_locacion($r->getlocacion()); ?>
                                </select>
                                <span class="error2"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="observacion">Observación</label>
                                <textarea class="form-control bg-light" name="observacion" id="observacion" placeholder="Observaciones" rows="4" ><?php $text=$r->getobservacion(); echo $text; ?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="tomaFisica" value="<?=$r->gettomaFisica()?>" 
                                    <?php if (!empty($r->gettomaFisica())) { echo'checked="checked"'; } ?> >
                                    <label class="form-check-label" for="tomaFisica">
                                    Toma Física
                                  </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="edicion" value="<?=$r->getedicion()?>"
                                    <?php if (!empty($r->getedicion())) { echo'checked="checked"'; } ?> >
                                    <label class="form-check-label" for="edicion">
                                    Edición y Transcripción
                                  </label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="documentacion" value="<?=$r->getdocumentacion()?>"
                                    <?php if (!empty($r->getdocumentacion())) { echo'checked="checked"'; } ?> >
                                    <label class="form-check-label" for="documentacion">
                                    Documentación
                                  </label>
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <h6 class="m-0 font-weight-bold text-primary">Asignar encargado a la dependencia*</h6>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cedula">Cédula</label>
                                <select class="form-control bg-light" name="cedula" id="cedula" >
                                    <option selected disabled>Seleccione una cédula</option>
                                    <?php dependencias::select_encargado($r->getid_encargado()); ?>
                                </select>
                                <span class="error"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="chequeo">Último Chequeo</label>
                                <input type="date" class="form-control bg-light" name="chequeo" id="fecha" value="<?=$r->getchequeo()?>">
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
    <script src="<?= media(); ?>/js/validation/dependencia.js"></script>

</body>
</html>