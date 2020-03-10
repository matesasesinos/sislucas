<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/datatables/datatables.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/font/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <style>

    </style>
</head>

<body>
<!-- navbar top -->
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">El Coso S.A.</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Salir</a>
    </li>
  </ul>
</nav>
<!-- navbar top -->
<div class="container-fluid">
    <!-- container -->
  <div class="row">
       <!-- row -->
    <nav class="col-md-1 d-none d-md-block bg-light sidebar">
        <!-- menu sidebar -->
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
            <i class="fas fa-tachometer-alt"></i>
            <span class="title-menu">Escritorio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes-table.php">
            <i class="fas fa-users"></i>
            <span class="title-menu">Clientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-piggy-bank"></i>
                <span class="title-menu">Cuentas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-concierge-bell"></i>
              <span class="title-menu">Servicios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-user-shield"></i>
              <span class="title-menu">Equipo</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-wrench"></i>
              <span class="title-menu">Configuración</span>
            </a>
          </li> 
        </ul>

        <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>-->
      </div>
      <!-- menu sidebar -->
    </nav>