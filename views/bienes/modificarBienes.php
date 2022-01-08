<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar Bienes</h1>
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
                    <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL; ?>bienes/actualizar?c=<?=$_GET['c']?>" id="form_bien">
                        <h3><b>Acta de Asignación</b></h3>
                        <div class="form-row">
                            <?php $p=new actaModel; $r=$p->obtener($_GET['c']); ?>
                            <div class="form-group col-md-4">
                                <label for="fecha"><b>Fecha</b></label>
                                <input type="date" class="form-control bg-light" name="fecha" id="fecha" value="<?=$r->getfecha()?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="num_factura"><b>N Factura</b></label>
                                <input type="text" class="form-control bg-light" name="num_factura" id="numFactura" value="<?=$r->getnum_factura()?>" placeholder="Numero de factura ">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_factura"><b>Fecha Factura</b></label>
                                <input type="date" class="form-control bg-light" name="fecha_factura" value="<?=$r->getfecha_factura()?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label> <b>Factura</b></label><br>
                                <input title="Factura" type="file" name="img" id="img" >
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col text-center">
                                    <?php if($r->getfactura() !=""){ ?>
                                    <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="<?php $s=$r->getfactura(); echo BASE_URL.$s; ?>" style="width: 100px;"></button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    
                                    <div class="modal-content">
                                        <img src="<?php $s=$r->getfactura(); echo BASE_URL.$s; ?>" alt="valley" style="width: 100%;">
                                    </div>
                                </div>
                            s</div>
                            <div class="form-group col-md-4">
                                <label for="num_ordenC"><b>N orden de compra</b></label>
                                <input type="text" class="form-control bg-light" name="num_ordenC" id="num_ordenC" value="<?=$r->getnum_ordenC()?>" placeholder="Numero de orden de compra"  >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_ordenC"><b>Fecha orden de compra</b></label>
                                <input type="date" class="form-control bg-light" name="fecha_ordenC" id="fecha_ordenC" value="<?=$r->getfecha_ordenC()?>" placeholder="Fecha de orden de compra" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="num_ordenP"><b>N orden de pago</b></label>
                                <input type="text" class="form-control bg-light" name="num_ordenP" id="num_ordenP" value="<?=$r->getnum_ordenP()?>" placeholder="Numero de orden de pago">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="rif"><b>RIF Proveedor</b></label>
                                <select class="form-control bg-light" name="rif" id="rif">
                                    <option selected disabled>Seleccione RIF del proveedor</option>
                                    <?= bienes::select_proveedor($r->getid_proveedor()); ?>
                                </select>
                            </div>
                            </div>
                        <h3><b>Bienes</b></h3>
                        <?php $p=new bienesModel;
                         foreach($p->obtener($_GET['c']) as $result) : ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="codigo"><b>Código</b></label>
                                <input type="text" class="form-control bg-light" name="codigos[]" id="codigo" value="<?=$result->codigo?>">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control bg-light" name="nombre[]" id="nombre" value="<?=$result->nombre?>" placeholder="Nombre del bien">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_tipo"><b>Tipo del Bien</b></label>
                                <select class="form-control bg-light" name="id_tipo[]" id="id_tipo">
                                    <option selected disabled>Seleccione el Tipo de Bien</option>
                                    <?php $id=$result->id_tipo; foreach ($p->select("tipo_bien") as $r){
				                        if ($r->id_tipo == $id) {
					                        echo'  <option value="'.$id.'" selected>'.$r->tipo.'</option>';
				                        }else{
				                            echo'<option value="'.$r->id_tipo.'">'.$r->tipo.'</option>';
				                        }
		                            }; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codigo_categoria"><b>Categoria SIGECOF</b></label>
                                <select class="form-control bg-light" name="codigo_categoria[]" id="codigo_categoria">
                                    <option selected disabled>Seleccione la categoria SIGECOF</option>
                                    <?php $id=$result->codigo_categoria; foreach ($p->select("categoria_sigecof") as $r){
				                        if ($r->codigo_categoria == $id) {
					                        echo'  <option value="'.$id.'" selected>'.$r->codigo_categoria.'</option>';
				                        }else{
				                            echo'<option value="'.$r->codigo_categoria.'">'.$r->codigo_categoria.'</option>';
				                        }
		                            }; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="descripcion"><b>Descripción</b></label>
                                <textarea class="form-control bg-light" name="descripcion[]" id="descripcion" value="<?=$result->descripcion?>" placeholder="Observaciones" rows="4"></textarea>
                            </div>
                            
                        </div><?php endforeach; ?>
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