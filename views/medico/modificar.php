<?php 
include_once("../../controllers/medicoController.php");
if(!isset($medico)){
 header("location: consultar.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Sistema de Citas Médicas</title>
  <?php
include_once "../general/header.php";
?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
include_once "../general/navigation.php";
?>


  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="consultar.php">Medicos</a>
        </li>
        <li class="breadcrumb-item active">Detalle de Médico <?php echo $medico->nombres." ".$medico->apellidos; ?></li>
      </ol>

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Detalle</div>
      <div class="card-body">
        <form action="../../controllers/medicoController.php?accionm=modificar&id=<?php echo $medico->id;?>" method="post">


        <div class="form-group">
        <div class="form-row">
        <div class="col-md-3">
            <label for="identificacion">Identificación</label>
            <input class="form-control" id="identificacion" name="identificacion" value="<?php echo $medico->identificacion;?>" type="text" aria-describedby="emailHelp" placeholder="Identificación" required >
          </div>
          <div class="col-md-3">
            <label for="seguro">Especialidad</label>
            <input class="form-control" id="especialidad" name="especialidad" type="text" value="<?php echo $medico->especialidad;?>" aria-describedby="emailHelp" placeholder="especialidad" required  >
          </div>
          <div class="col-md-3">
                <label for="exampleInputName">Nombres</label>
                <input class="form-control" id="exampleInputName" name="nombres" value="<?php echo $medico->nombres;?>" type="text" aria-describedby="nameHelp" placeholder="Nombres" required    >
           </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Apellidos</label>
                <input class="form-control" id="exampleInputLastName" name="apellidos" value="<?php echo $medico->apellidos;?>" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required  >
              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Correo</label>
                <input class="form-control" id="exampleInputEmail1" type="email" value="<?php echo $medico->correo;?>" name="correo" aria-describedby="emailHelp" placeholder="Correo" required  >
              </div>

              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input class="form-control" id="telefono" type="tel" name="telefono" value="<?php echo $medico->telefono;?>" aria-describedby="emailHelp" placeholder="Teléfono" required  >
              </div>
           </div>
          </div>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputName">Provincia</label>
                <input class="form-control" id="provincia" type="text" name="departamento" value="<?php echo $medico->departamento;?>" aria-describedby="nameHelp" placeholder="Provincia" required  >
              </div>
              <div class="col-md-3">
                <label for="exampleInputLastName">Ciudad</label>
                <input class="form-control" id="ciudad" type="text" name="ciudad" aria-describedby="nameHelp" value="<?php echo $medico->ciudad;?>" placeholder="Ciudad" required  >
              </div>

              <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input class="form-control" id="direccion" type="address" name="direccion" aria-describedby="emailHelp" value="<?php echo $medico->direccion;?>"  placeholder="Dirección" required  >
              </div>
            </div>
          </div>
         
          <div class="form-group">
          <div class="form-row">
              <div class="col-md-4">
                <label for="direccion">Fecha nacimiento</label>
                <input class="form-control" id="f_nacimiento" type="date" value="<?php echo $medico->f_nacimiento;?>" name="f_nacimiento" aria-describedby="emailHelp" placeholder="Fecha nacimiento" required  >
              </div>
              <div class="col-md-4">
                <label for="direccion">Sexo</label>
                <select class="form-control" name="sexo">
                <option value="M" <?php if($medico->sexo=="M"){ echo "selected";}?>>Masculino</option>
                <option value="F" <?php if($medico->sexo=="F"){ echo "selected";}?>>Fenenino</option>
              </select>
              
              </div>
              <div class="col-md-4">
              <label for="direccion">Estado</label>
              <select class="form-control" name="estado">
              <option value="1" <?php if($medico->estado=="1"){ echo "selected";}?>>Activo</option>
              <option value="0" <?php if($medico->estado=="0"){ echo "selected";}?>>Inactivo</option>
            </select>
            
            </div>
            </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar Datos" >
        </form>
        
      </div>
    </div>
  

<?php

include_once "../general/footer.php";
?>
  
 
</div>
</body>

</html>

