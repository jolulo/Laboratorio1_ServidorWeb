<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Registrar médicos</title>
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
          <a href="consultar.php">Médicos</a>
        </li>
        <li class="breadcrumb-item active">Registrar</li>
      </ol>


      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registro de Médicos</div>
        <div class="card-body">

      <form action="../../controllers/medicoController.php?accionm=registrar" method="post">
        <div class="form-group">
            <div class="form-row">
            <div class="col-md-2">
                <label>ID</label>
                <input type="text" name="identificacion" class="form-control" />
            </div>

            <div class="col-md-5">
                <label>Nombres</label>
                <input type="text" name="nombres" class="form-control" />
            </div>
            <div class="col-md-5">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" />
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label>Correo</label>
                    <input type="text" name="correo" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control" />
                </div>
                <div class="col-md-5">
                    <label>Provincia</label>
                    <input type="text" name="departamento" class="form-control" />
                </div>
                <div class="col-md-5">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-4">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fnacimiento" class="form-control" />
                </div>
                <div class="col-md-3">
                    <label>Género</label>
                    <select name="genero" class="form-control">
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label>Especialidad</label>
                    <input type="text" name="especialidad" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary btn-block" value="Registrar" >
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>

<hr/>

<?php

include_once "../general/footer.php";
?>
  </div>
</body>

</html>
