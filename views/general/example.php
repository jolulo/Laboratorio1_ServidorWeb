<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include_once "header.php";
?>

<title>Example</title>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
include_once "navigation.php";
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">MedicApp</a>
        </li>
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
      <!-- Icon Cards-->


      <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Título del panel</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 my-auto">

                </div>

              </div>
            </div>
            <div class="card-footer small text-muted">Título footer</div>
          </div>
        </div>
      </div>
    </div>
    <?php
include_once "footer.php";
?>
  </div>
</body>

</html>
