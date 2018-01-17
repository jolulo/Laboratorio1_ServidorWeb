<?php 
@session_start();
?>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="../index.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Inicio</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">Médicos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/medico/consultar.php">Consultar</a>
          </li>
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/medico/registrar.php">Registrar</a>
          </li>
        </ul>
      </li>
     
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pacientes" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Pacientes</span>
        </a>
        <ul class="sidenav-second-level collapse" id="pacientes">
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewCrearPaciente.php">Crear Paciente</a>
          </li>
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewListarPaciente.php?accion=listar">Listado Pacientes</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-link"></i>
          <span class="nav-link-text">Link</span>
        </a>
      </li>
    </ul>



