<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL; ?>inicio">
        <div>
            <img src="" alt="">
        </div>
        <div class="sidebar-brand-text mx-0">Bienes Nacionales</div>
    </a>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        UPTAEB
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL; ?>inicio">
            <i class="fas fa-fw fa-home"></i>
            <span>Inicio</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Usuarios", $_SESSION['bn_permisos'])){ ?>  
      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>usuarios">
              <i class="fas fa-fw fa-user-friends"></i>
              <span>Gestionar Usuarios</span>
          </a>
      </li>
    <?php } ?>
    <!--<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span></span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= BASE_URL; ?>usuarios">Usuarios</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>roles">Roles</a>
          </div>
        </div>
      </li>-->

    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Encargados", $_SESSION['bn_permisos'])){ ?>
      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>encargados">
              <i class="fas fa-fw fa-user-friends"></i>
              <span>Gestionar Encargados</span>
          </a>
      </li>
    <?php } ?>
    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Dependencias", $_SESSION['bn_permisos'])){ ?>
      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>dependencias">
              <i class="fas fa-fw fa-briefcase"></i>
              <span>Gestionar Dependencias</span>
          </a>
      </li>
    <?php } ?>
    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Categorias", $_SESSION['bn_permisos'])){ ?>
      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>categorias">
              <i class="fas fa-fw fa-layer-group"></i>
              <span>Gestionar Categorías</span>
          </a>
      </li>
    <?php } ?>
    <hr class="sidebar-divider my-0">
      <?php if(in_array("Consultar Actas", $_SESSION['bn_permisos'])){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-swatchbook"></i>
            <span>Gestionar Bienes</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?= BASE_URL; ?>bienes">Gestionar Acta</a>
              <?php if(in_array("Consultar Asignar Bien", $_SESSION['bn_permisos'])){ ?>
              <a class="collapse-item" href="<?= BASE_URL; ?>incorporar">Asignar Bien</a>
              <?php } ?>
              <?php if(in_array("Consultar Desincorporar Bien", $_SESSION['bn_permisos'])){ ?>
              <a class="collapse-item" href="<?= BASE_URL; ?>desincorporar">Desincorporar Bien</a>
              <?php } ?>
              <?php if(in_array("Consultar Reasignar Bien", $_SESSION['bn_permisos'])){ ?>
              <a class="collapse-item" href="<?= BASE_URL; ?>reasignar">Reasignar Bien</a>
              <?php } ?>
            </div>
          </div>
        </li>
      <?php } ?>
    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Reportes", $_SESSION['bn_permisos'])){ ?>
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-print"></i>
          <span>Generar Reportes</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/reportesAsignacion">Asignacion</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/reportesDesincorporar">Desincorporacion</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/reportesReasignar">Reasignacion</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/reportesInventarioDep">Inventario por dependencia</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/reportesInventario">Inventario general</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>reportes/estadisticasBienes">Generar Estadísticas</a>
            <a class="collapse-item" href="<?= BASE_URL; ?>bitacora">Consultar Bitácora</a>
          </div>
        </div>
      </li>
    <?php } ?>
    <hr class="sidebar-divider my-0">
    <?php if(in_array("Consultar Seguridad", $_SESSION['bn_permisos'])){ ?>
      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>roles">
              <i class="fas fa-fw fa-shield-alt"></i>
              <span>Gestionar Seguridad</span>
          </a>
      </li>
    <?php } ?>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Buttom Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <div class="d-none d-md-inline text-center">
        <img src="<?= media(); ?>\img\4.svg" class="img-fluid" alt="...">
    </div>
</ul>