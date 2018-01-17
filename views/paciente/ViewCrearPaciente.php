<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Sistema de Citas Médicas</title>
  <?php
include_once "../general/header.php";
?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
include_once "../general/navigation.php";
?>


  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="ViewListarPacientes.php">Pacientes</a>
        </li>
        <li class="breadcrumb-item active">Registrar</li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registro de Pacientes</div>
      <div class="card-body">
      <form action="../../controllers/PacienteController.php?accion=registrar" method="post">
        <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" type="text" aria-describedby="emailHelp" placeholder="Identificación" required>
          </div>
          <div class="form-group">
            <label for="seguro">Número Seguro</label>
            <input class="form-control" id="seguro" name="seguro" type="text" aria-describedby="emailHelp" placeholder="número seguro social" required>
          </div> <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" type="text" aria-describedby="nameHelp" placeholder="Nombres" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="correo" aria-describedby="emailHelp" placeholder="Correo" required>
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" id="telefono" type="tel" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" required>
          </div>
          
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" aria-describedby="nameHelp" placeholder="Provincia" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" placeholder="Ciudad" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" placeholder="Dirección" required>
          </div>
          <div class="form-group">
            <label for="direccion">Fecha nacimiento</label>
            <input class="form-control" id="f_nacimiento" type="date" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required>
          </div>
          <div class="form-group">
            <label for="direccion">Sexo</label>
            <select class="form-control" name="sexo">
              <option value="M">Masculino</option>
              <option value="F">Fenenino</option>
            </select>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Registrar" >
         
   
        </form>
        
      </div>
    </div>
  

<?php

include_once "../general/footer.php";
?>
</div>
</body>

</html>

