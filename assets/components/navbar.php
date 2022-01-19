<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="navbar">

    <!-- Sidebar Toggle Resposiv-->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Search -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
      
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Notificaciones -->
        
        <li class="nav-item">
            
            <i class="fas fa-bell nav-link" id="bell"><div id="cantidadNotificaciones" style="display: none;"></div></i>
            <div class="notifications" id="box" style="display: none;">
                <h2 class="mb-0">Notificaciones <i id="getout" class="fas fa-times"></i></h2>
                <div class="notifications-item">
                    <div class="text" onClick="window.location = 'desincorporar'">
                        <h4><i class="fas fa-boxes"></i> Bien Desincorporado</h4>
                        <p class="mb-0">El Bien "Cornetas" fue desincorporado de la dependencia "Informática"<br>2021-12-10</p>
                    </div>
                    <div class="notifications-item-close" onClick="dismissNotificacion(1)"><i class="fas fa-times"></i></div>
                </div>
            </div>
        </li>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= empty($_SESSION['bn_usuario']) ? 'USUARIO' : $_SESSION['bn_usuario'] ?></span>
                <img class="img-profile rounded-circle"
                    src="<?= empty($_SESSION['bn_imagen']) ? media().'/img/undraw_profile.svg' :  BASE_URL.$_SESSION['bn_imagen'] ?> ">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= BASE_URL; ?>usuarios/perfil">
                    <i class="fas fa-book-reader fa-sm fa-fw mr-2 text-gray-400"></i>
                    Perfil
                </a>
                <?php if(in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){ ?>
                    <a class="dropdown-item" href="<?= BASE_URL; ?>configuracion">
                        <i class="fas fa-wrench fa-sm fa-fw mr-2 text-gray-400"></i>
                        Configuración
                    </a>
                <?php } ?>
                <?php if(in_array("Consultar Mantenimiento", $_SESSION['bn_permisos'])){ ?>
                <a class="dropdown-item" href="<?= BASE_URL; ?>mantenimiento">
                    <i class="fas fa-book-reader fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mantenimiento
                </a>
                <?php } ?>
                <a class="dropdown-item" href="<?= BASE_URL; ?>ayuda">
                    <i class="fas fa-book-reader fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ayuda
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Salir
                </a>
            </div>
        </li>

    </ul>

</nav>