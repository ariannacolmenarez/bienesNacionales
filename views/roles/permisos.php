<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $data['page_title']; ?></h1>
                <a href="<?= BASE_URL; ?>roles" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-undo fa-sm text-white-50"></i>
                    Volver
                </a>
            </div>

            <!-- Tabla Datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Permisos Roles de Usuario</h6>
                </div>
                <div class="card-body">
                    
              <div class="table-responsive">
                    <form method="POST" action="<?= BASE_URL; ?>roles/guardarPermisos?c=<?=$_GET['c']?>">
                        <table class="table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Modulo</th>
                                    <th>Ver</th>
                                    <th>Crear</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- <?= roles::listar_permisos()?>  -->
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Usuarios</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="1" <?= in_array("Consultar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="2" <?= in_array("Crear Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="3" <?= in_array("Modificar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="4" <?= in_array("Eliminar Usuarios", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Encargados</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="5" <?= in_array("Consultar Encargados", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="6" <?= in_array("Crear Encargados", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="7" <?= in_array("Modificar Encargados", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="8" <?= in_array("Eliminar Encargados", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Dependencias</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="9" <?= in_array("Consultar Dependencias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="10" <?= in_array("Crear Dependencias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="11" <?= in_array("Modificar Dependencias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="12" <?= in_array("Eliminar Dependencias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>	
                                <tr class="text-center">
                                    <td>4</td>
                                    <td>Categorías</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="13" <?= in_array("Consultar Categorias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="14" <?= in_array("Crear Categorias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="15" <?= in_array("Modificar Categorias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="16" <?= in_array("Eliminar Categorias", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>5</td>
                                    <td>Actas</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="17" <?= in_array("Consultar Actas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="18" <?= in_array("Crear Actas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="19" <?= in_array("Modificar Actas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="20" <?= in_array("Eliminar Actas", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>6</td>
                                    <td>Asignar Bien</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="21" <?= in_array("Consultar Asignar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="22" <?= in_array("Crear Asignar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>7</td>
                                    <td>Desincorporar Bien</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="23" <?= in_array("Consultar Desincorporar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="24" <?= in_array("Crear Desincorporar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>8</td>
                                    <td>Reasignar Bien</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="25" <?= in_array("Consultar Reasignar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="26" <?= in_array("Crear Reasignar Bien", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>9</td>
                                    <td>Reportes</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="27" <?= in_array("Consultar Reportes", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>10</td>
                                    <td>Seguridad</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="28" <?= in_array("Consultar Seguridad", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="29" <?= in_array("Crear Seguridad", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="30" <?= in_array("Modificar Seguridad", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="31" <?= in_array("Eliminar Seguridad", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>11</td>
                                    <td>Configuración</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="32" <?= in_array("Consultar Configuracion", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="33" <?= in_array("Crear Configuracion", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="34" <?= in_array("Modificar Configuracion", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="35" <?= in_array("Eliminar Configuracion", $data['permisos']) ? "checked='1'": '' ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>12</td>
                                    <td>Mantenimiento</td>
                                    <td>
                                        <label class="switchBtn">
                                            <input type="checkbox" name="permisos[]" value="36" <?= in_array("Consultar Mantenimiento", $data['permisos']) ? "checked='1'": "" ?>>
                                            <div class="slide round">ON</div>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <button type="submit" class=" btn btn-primary mt-2 mr-2">Guardar</button>
                            <button type="reset" class="btn btn-danger mt-2">Borrar</button>
                        </div>
                    </form>
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