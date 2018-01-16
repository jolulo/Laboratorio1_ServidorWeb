<?php 
@session_start();
?>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo $_SESSION['baseurl'] ?>">
          <i class="fa fa-fw fa-home"></i>
          <span class="nav-link-text">Inicio</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-address-book-o"></i>
          <span class="nav-link-text">Médicos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
        <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/medico/registrar.php"><i class="fa fa-fw fa-plus-square"></i> Registro Medicos</a>
          </li>
          <li>
            
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/medico/consultar.php"><i class="fa fa-fw fa-reorder"></i> Listado Medicos</a>
          </li>
         
        </ul>
      </li>
     
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pacientes" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-group"></i>
          <span class="nav-link-text">Pacientes</span>
        </a>
        <ul class="sidenav-second-level collapse" id="pacientes">
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewCrearPaciente.php"><i class="fa fa-fw fa-plus-square"></i> Crear Paciente</a>
          </li>
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewListarPaciente.php?accion=listar"><i class="fa fa-fw fa-reorder"></i> Listado Pacientes</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#citas" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-address-card-o"></i>
          <span class="nav-link-text">Citas</span>
        </a>
        <ul class="sidenav-second-level collapse" id="citas">
          <li>
            
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewCrearPaciente.php"><i class="fa fa-fw fa-plus-square"></i> Registro Citas</a>
          </li>
          <li>
            <a href="<?php echo $_SESSION['baseurl'] ?>/views/paciente/ViewListarPaciente.php?accion=listar"><i class="fa fa-fw fa-reorder"></i> Listado Citas</a>
          </li>
        </ul>
      </li>
     
    </ul>



