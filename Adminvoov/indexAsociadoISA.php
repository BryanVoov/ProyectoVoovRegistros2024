<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        .table-container {
            max-height: 200px;
            overflow-y: auto;
            position: relative;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            cursor: pointer;
            position: relative;
            font-weight: bold;
            background-color: #f4f4f4;
        }
        th:hover {
            background-color: #e4e4e4;
        }
        th .sort-icon {
            margin-left: 5px;
            color: gray;
            font-size: 16px;
        }
        th .sort-icon.active {
            color: black;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        
    </style>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--Style Client Info-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!--Styles-->
  <link rel="stylesheet" href="styleIndexVA.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">BRYAN MERCADO</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Agregue iconos a los enlaces usando la clase .nav-icon
               con font-awesome o cualquier otra biblioteca de fuentes de iconos -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./indexVA.PHP" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index VA</p>
                </a>
              </li>
            

<!-- Area de codigo de prueba para agregar menu Asociado - inicio -->
    <li class="nav-item has-treeview">  
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
           <p>
           Asociado control
         <i class="fas fa-angle-left right"></i>
       <span class="badge badge-info right">4</span>
          </p>
         </a>
      <ul class="nav nav-treeview">
          <li class="nav-item">
             <a href="/adminvoov/pages/asociadoISA/vista/asociadoadd.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Associate</p>
            </a>
    </li>
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadoISA/vista/verasociadosISA.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>All Associates</p>
      </a>
    </li>
  </ul>
</li>

<!-- Area de codigo de prueba para agregar menu Asociado - fin-->

<!-- Area de codigo de prueba para agregar menu cliente - inicio -->
<li class="nav-item has-treeview">  
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-city"></i>
     <p>
     Cliente control
   <i class="fas fa-angle-left right"></i>
 <span class="badge badge-info right">2</span>
    </p>
   </a>
<li class="nav-item">
<a href="/adminvoov/pages/cliente/verclientes.php" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>Ver Cliente</p>
</a>
</li>
</ul>
</li>

<!-- Area de codigo de prueba para agregar menu cliente - fin-->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Associate Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Associate Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php
    include("db.php");
    // Fetch the selected associate details if `idAssociate` is provided
    $nombreAsociado = '';
    $fotoContenido = '';
    $fotoMimeType = '';
    if (isset($_GET['idAsociadoISA'])) {
        $idAsociadoISA = $_GET['idAsociadoISA'];
        $sql = "SELECT * FROM asociadoISA WHERE idAsociadoISA = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idAsociadoISA);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $associate = $result->fetch_assoc();
            $nombreAsociado = $associate['nombreAsociado'];
            $cedula = $associate['cedula'];
            $telefono = $associate['telefono'];
            $email = $associate['email'];
            $direccion = $associate['direccion'];
            $salarioInicial = $associate['salarioInicial'];
            $fechaContratacionC = $associate['fechaContratacionC'];
            $fechaContratacionV = $associate['fechaContratacionV'];
            $estadoActividad = $associate['estadoActividad'];
            $tipoContrato = $associate['tipoContrato'];
            $departamento = $associate['departamento'];
            $costoCliente = $associate['costoCliente'];
            $cargoCliente = $associate['cargoCliente'];
            $horarioEntrada = $associate['horarioEntrada'];
            $horarioSalida = $associate['horarioSalida'];
            $fotoContenido = $associate['foto'];

            // Determine the MIME type
        if (!empty($fotoContenido)) {
          $finfo = finfo_open(FILEINFO_MIME_TYPE);
          $fotoMimeType = finfo_buffer($finfo, $fotoContenido);
          finfo_close($finfo);
      }
  }
  $stmt->close();
}
        

    ?>

  
  <!-- Information Section -->
  <div class="container-fluid">
    <div class="row info-section">
        <div class="col-md-3 logo-container">
            <?php
                if (!empty($fotoContenido)) {
                    $base64Foto = base64_encode($fotoContenido);
                    echo '<img src="data:' . $fotoMimeType . ';base64,' . $base64Foto . '" alt="Foto">';
                } else {
                    echo '<img src="voov group logo.webp" alt="VOOV Logo">';
                }
                ?>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><?= $nombreAsociado ? $nombreAsociado : '' ?></div>
            <div class="info-content">
                
                <p><i class="fas fa-briefcase"></i><?=$cedula ?  " " .$cedula : '' ?></p>
                <p><i class="fas fa-briefcase"></i><?=$telefono ?  " " .$telefono : '' ?></p>
                <p><i class="fas fa-briefcase"></i><?=$email ?  " " .$email : '' ?></p>
                <p><i class="fas fa-home"></i><?=$direccion ? " ". $direccion : ' ' ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><?=$cargoCliente ? $cargoCliente : '' ?></div>
            <div class="info-content">
                 <p><i class="fas fa-home"></i><?=$costoCliente ? " Client Payment: ". $costoCliente : ' ' ?></p>
                 <p><i class="fas fa-home"></i><?=$salarioInicial ? " Starting Salary: ". $salarioInicial : ' ' ?></p>
                 <?php
        // Assume $idAsociadoVA is the ID of the associate.
        // Ensure you have initialized $idAsociadoVA from your context, e.g., from a GET or POST request.
        $idAsociadoISA = $_GET['idAsociadoISA'];

        // Query to fetch the supervisor's name related to the associate
        $sql = "SELECT s.nombreSupervisor
                FROM supervisor s
                JOIN relacionAsociadoSupervisorISA r ON s.idSupervisor = r.idSupervisor
                WHERE r.idAsociadoISA = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idAsociadoISA);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output the supervisor's name
            while ($row = $result->fetch_assoc()) {
                echo "<p><i class='fas fa-user-tie'></i><strong> Supervisor Name: </strong>" . $row["nombreSupervisor"] . "</p>";
            }
        } else {
            echo "<p><i class='fas fa-user-tie'></i><strong> Supervisor Name: </strong> No supervisor assigned.</p>";
        }

        $stmt->close();
        ?>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"> <?php if ($estadoActividad == 'Active') {
                            echo '<span class="badge badge-success" style="display: block; width: 100%;">Active Associate</span>';
                        } else {
                          echo '<span class="badge badge-danger" style="display: block; width: 100%;">Inactive Associate</span>';
                      } ?></p></div>
            <div class="info-content">

                <p><i class="fas fa-file-contract"></i><?= $tipoContrato ? " ". $tipoContrato : '' ?></p>
                <p><i class="fas fa-briefcase"></i><?=$fechaContratacionC ?  " Client Start Date: " .$fechaContratacionC : '' ?></p>
                <p><i class="fas fa-briefcase"></i><?=$fechaContratacionV ?  " Overall Start Date: " .$fechaContratacionV : '' ?></p>
                <p><i class="fas fa-chalkboard-teacher"></i> Entry Time: <?= $horarioEntrada ? $horarioEntrada : '' ?></p>
                <p><i class="fas fa-chalkboard-teacher"></i> Exit Time: <?= $horarioSalida ? $horarioSalida : '' ?></p>
            </div>
        </div>
    </div>
</div>


<?php
// Database connection (make sure you have the connection setup correctly)
include('db.php');  // Adjust this to your actual connection file

$idAsociadoISA = isset($_GET['idAsociadoISA']) ? (int)$_GET['idAsociadoISA'] : 0;

// ESTO ES PARA MOSTRAR EL RANK SCORE POR ASOCIADO
// Initialize the message variables
$message = '';

// SQL query to check the condition
$sqlCondition = "SELECT asistencia FROM asociadoEvaluacionISA WHERE asistencia = 100 AND idAsociadoISA = ? AND MONTH(fechaEvaluacion) = MONTH(CURRENT_DATE())
      AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())"; ;
$stmtCondition = $conn->prepare($sqlCondition);
$stmtCondition->bind_param("i", $idAsociadoISA);
$stmtCondition->execute();
$resultCondition = $stmtCondition->get_result();

// Check if any rows match the condition
if ($resultCondition->num_rows > 0) {
    $message = "Attendance is 100%";
} else {
    $message = "Attendance is not 100%";
}

$sql = "SELECT 
        ROUND(AVG(asistencia), 2) as avg_attendance, 
        ROUND(AVG(productividad), 2) as avg_productivity, 
        ROUND(AVG(tareasCompletadas*10), 2) as avg_tareasCompletadas,
        ROUND((AVG(asistencia) + AVG(productividad) + AVG(tareasCompletadas*10)) / 3, 2) as overall_avg 
    FROM asociadoEvaluacionISA 
    WHERE idAsociadoISA = ?
      AND MONTH(fechaEvaluacion) = MONTH(CURRENT_DATE())
      AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoISA);
$stmt->execute();
$result = $stmt->get_result();

$overall_avg = 0;

if ($row = $result->fetch_assoc()) {
    $overall_avg = $row['overall_avg'];
}


// Query to get the average ASAT for the specific associate for the current month
$sql = "SELECT AVG(aSat) as avg_asat FROM asociadoEvaluacionISA WHERE idAsociadoISA = ? AND MONTH(fechaEvaluacion) = MONTH(CURRENT_DATE())
      AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoISA);
$stmt->execute();
$result = $stmt->get_result();
$avg_asat = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $avg_asat = round($row['avg_asat'], 2); // Round to 2 decimal places
}

// Query to get the average productivity for the specific associate for the current month
$sql = "SELECT AVG(productividad) as avg_productividad FROM asociadoEvaluacionISA WHERE idAsociadoISA = ? AND MONTH(fechaEvaluacion) = MONTH(CURRENT_DATE())
      AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoISA);
$stmt->execute();
$result = $stmt->get_result();
$avg_productividad = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $avg_productividad = round($row['avg_productividad'], 2); // Round to 2 decimal places
}

// Query to get the average productivity for the specific associate for the current month
$sql = "SELECT AVG(asistencia) as avg_asistencia FROM asociadoEvaluacionISA WHERE idAsociadoISA = ? AND MONTH(fechaEvaluacion) = MONTH(CURRENT_DATE())
      AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoISA);
$stmt->execute();
$result = $stmt->get_result();
$avg_asistencia = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $avg_asistencia = round($row['avg_asistencia'], 2); // Round to 2 decimal places
}

//PARA EL GRAFICO
// Fetch monthly ASAT averages for the current year
$monthly_asat_sql = "SELECT 
        DATE_FORMAT(fechaEvaluacion, '%Y-%m') AS month, 
        ROUND(AVG(aSat), 2) AS avg_aSat 
    FROM asociadoEvaluacionISA
    WHERE idAsociadoISA = ? AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())
    GROUP BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')
    ORDER BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')";
$stmtMonthlyASAT = $conn->prepare($monthly_asat_sql);
$stmtMonthlyASAT->bind_param("i", $idAsociadoISA);
$stmtMonthlyASAT->execute();
$monthly_asat_result = $stmtMonthlyASAT->get_result();

$all_months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$months = [];
$avg_aSat = array_fill(0, 12, null); // Initialize with nulls

while ($row = $monthly_asat_result->fetch_assoc()) {
    $month_index = date("n", strtotime($row['month'] . "-01")) - 1; // Get the month index (0-11)
    $months[$month_index] = date("F", strtotime($row['month'] . "-01")); // Get the month name
    $avg_aSat[$month_index] = $row['avg_aSat'];
}

// Close the statement and connection
$stmtCondition->close();
$stmt->close();
$stmtMonthlyASAT->close();





?>

  <!-- /.information-section -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Rank Score: <?php echo $overall_avg; ?>%</h3>
              <p> <?php echo "($message)"; ?></p>
            </div>
            <div class="icon">
              <i class="fas fa-clipboard"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $avg_asat; ?><sup style="font-size: 20px"></sup></h3>
              <p>AVERAGE ASAT</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $avg_productividad; ?></h3>
              <p>AVERAGE PRODUCTIVITY</p>
            </div>
            <div class="icon">
              <i class="fas fa-clipboard-list"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $avg_asistencia; ?></h3>
              <p>AVERAGE ATTENDANCE</p>
            </div>
            <div class="icon">
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

<!--Add Client functionality-->
<div class="wrapper">
        <!-- Main content -->
        <section class="content">
                <!-- Button to trigger the modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addClientModal">
                    Add Client
                </button>

                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Clients</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="clientsTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        <?php
// Assume $idCliente is the ID of the selected client.
// Ensure you have initialized $idCliente from your context, e.g., from a GET or POST request.
$idAsociadoISA = $_GET['idAsociadoISA'];

// Query to fetch data from asociados table joined with relacionAsociadoCliente table
$sql = "SELECT a.idCliente, a.nombreCliente
        FROM cliente a
        JOIN relacionAsociadoClienteISA rac ON a.idCliente = rac.idCliente
        WHERE rac.idAsociadoISA = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoISA);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["idCliente"] . "</td>";
        echo "<td>" . $row["nombreCliente"] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No results found</td></tr>";
}

//$stmt->close(); fijateeeeeeeeeeeee!!

?>   
                        </tbody>
                    </table>
                </div>
            </div>
<!-- Add Associate Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addAssociateModalLabel">Select Associate</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="addClientForm" action="/adminvoov/pages/asociadoISA/controller/processClient.php" method="POST">
                                    
                                
                                  <div class="form-group">
                                        <label for="clientSelect">Client</label>
                                        <select class="form-control" id="clientSelect" name="idCliente">
                                            <?php
                                            
                                            // Fetch clients from the database
                                            $sql = "SELECT idCliente, nombreCliente FROM cliente";
                                            $result = $conn->query($sql);
                                            $options = '';
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $options .= '<option value="' . $row['idCliente'] . '">' . $row['nombreCliente'] . '</option>';
                                                }
                                            } else {
                                                $options .= '<option value="">No clients available</option>';
                                            }
                                            echo $options;
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="idAsociadoISA" value="<?= htmlspecialchars($idAsociadoISA) ?>">
                                    <input type="hidden" name="redirect_url" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
          </section>
</div>

<div class="wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Button to trigger the modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupervisorModal">
            Add Supervisor
        </button>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Supervisors</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover" id="supervisorTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Assume $idAsociadoISA is the ID of the selected associate.
                        // Ensure you have initialized $idAsociadoISA from your context, e.g., from a GET or POST request.
                        $idAsociadoISA = $_GET['idAsociadoISA'];

                        // Query to fetch data from supervisor table joined with relacionAsociadoSupervisorISA table
                        $sql = "SELECT a.idSupervisor, a.nombreSupervisor
                                FROM supervisor a
                                JOIN relacionAsociadoSupervisorISA rac ON a.idSupervisor = rac.idSupervisor
                                WHERE rac.idAsociadoISA = ?";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $idAsociadoISA);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["idSupervisor"] . "</td>";
                                echo "<td>" . $row["nombreSupervisor"] . "</td>";
                                echo "<td>";
                                echo "<form action='/adminvoov/pages/asociadoISA/controller/deleteSupervisor.php' method='POST' style='display:inline;' onsubmit='return confirmDelete();'>";
                                echo "<input type='hidden' name='idAsociadoISA' value='" . htmlspecialchars($idAsociadoISA) . "'>";
                                echo "<input type='hidden' name='idSupervisor' value='" . htmlspecialchars($row["idSupervisor"]) . "'>";
                                echo "<input type='hidden' name='redirect_url' value='" . htmlspecialchars($_SERVER['REQUEST_URI']) . "'>";
                                echo "<button type='submit' class='btn btn-danger btn-sm'>Delete</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No results found</td></tr>";
                        }

                        $stmt->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Supervisor Modal -->
        <div class="modal fade" id="addSupervisorModal" tabindex="-1" role="dialog" aria-labelledby="addSupervisorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSupervisorModalLabel">Select Supervisor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addSupervisorForm" action="/adminvoov/pages/asociadoISA/controller/processSupervisor.php" method="POST">
                            <div class="form-group">
                                <label for="supervisorSelect">Supervisor</label>
                                <select class="form-control" id="supervisorSelect" name="idSupervisor">
                                    <?php
                                    // Fetch supervisors from the database
                                    $sql = "SELECT idSupervisor, nombreSupervisor FROM supervisor";
                                    $result = $conn->query($sql);
                                    $options = '';
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $options .= '<option value="' . $row['idSupervisor'] . '">' . $row['nombreSupervisor'] . '</option>';
                                        }
                                    } else {
                                        $options .= '<option value="">No supervisors available</option>';
                                    }
                                    echo $options;
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="idAsociadoISA" value="<?= htmlspecialchars($idAsociadoISA) ?>">
                            <input type="hidden" name="redirect_url" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function confirmDelete() {
    return confirm('Are you sure you want to delete this supervisor?');
}
</script>

      
       <!-- EVALUATION TABLE STARTS HERE -->
      <?php
      $idAsociadoISA = isset($_GET['idAsociadoISA']) ? $_GET['idAsociadoISA'] : '';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            if ($idAsociadoISA) {
                $fechaEvaluacion = isset($_POST["fechaEvaluacion"]) ? $_POST["fechaEvaluacion"] : '';
                $aSat = isset($_POST["aSat"]) ? $_POST["aSat"] : '';
                $satisfaccionEmpleado = isset($_POST["satisfaccionEmpleado"]) ? $_POST["satisfaccionEmpleado"] : '';
                $tareasCompletadas = isset($_POST["tareasCompletadas"]) ? $_POST["tareasCompletadas"] : '';
                $capacidadAgente = isset($_POST["capacidadAgente"]) ? $_POST["capacidadAgente"] : '';
                $asistencia = isset($_POST["asistencia"]) ? $_POST["asistencia"] : '';
                $productividad = isset($_POST["productividad"]) ? $_POST["productividad"] : '';
                $promedioCompletado = isset($_POST["promedioCompletado"]) ? $_POST["promedioCompletado"] : '';
                $fortalezas = isset($_POST["fortalezas"]) ? $_POST["fortalezas"] : '';
                $areasAMejorar = isset($_POST["areasAMejorar"]) ? $_POST["areasAMejorar"] : '';
                $planDeAccion = isset($_POST["planDeAccion"]) ? $_POST["planDeAccion"] : '';

          
                //Check if the idCliente exists in the cliente table
               $sqlCheck = "SELECT idAsociadoISA FROM asociadoISA WHERE idAsociadoISA = ?";
               $stmtCheck = $conn->prepare($sqlCheck);
               $stmtCheck->bind_param("i", $idAsociadoISA);
               $stmtCheck->execute();
               $resultCheck = $stmtCheck->get_result();

                if ($resultCheck->num_rows > 0) {
                    // Prepare the SQL query to insert data into the database
                    $sqlInsert = "INSERT INTO asociadoEvaluacionISA (idAsociadoISA, fechaEvaluacion, aSat, satisfaccionEmpleado, tareasCompletadas, capacidadAgente, asistencia, productividad, promedioCompletado, fortalezas, areasAMejorar, planDeAccion) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bind_param("isisssssssss", $idAsociadoISA, $fechaEvaluacion, $aSat, $satisfaccionEmpleado, $tareasCompletadas, $capacidadAgente, $asistencia, $productividad, $promedioCompletado, $fortalezas, $areasAMejorar, $planDeAccion);
          
                    // Execute the SQL query
                    if ($stmtInsert->execute()) {
                        $_SESSION['message'] = 'Evaluation added successfully';
                        $_SESSION['message_type'] = 'success';
                        echo "Evaluation added successfully";
                    } else {
                        echo "Error: " . $stmtInsert->error;
                    }
                } else {
                    echo "Error: The Client ID does not exist in the cliente table.";
                }
                exit;
            } else {
                echo "Error: No client ID provided.";
                exit;
            }
        }

        
        if ($idAsociadoISA) {
            // Fetch evaluations for the specific asociado
            $evaluation_sql = "SELECT * FROM asociadoEvaluacionISA WHERE idAsociadoISA = ?";
            $stmt = $conn->prepare($evaluation_sql);
            $stmt->bind_param("i", $idAsociadoISA);
            $stmt->execute();
            $evaluation_result = $stmt->get_result();
        }
        ?>
    <!-- Button to trigger the modal for adding an evaluation -->
    <div class="button-wrapper" style="text-align: left; margin-top: 20px;">
        <!-- Button to trigger the modal for adding an evaluation -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEvaluationModal">
            Add Evaluation
        </button>
    </div>
        <!-- Modal for adding new evaluation -->
        <div class="modal fade" id="addEvaluationModal" tabindex="-1" role="dialog" aria-labelledby="addEvaluationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEvaluationModalLabel">Add Evaluation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>     
                    <!--Este form es llamado de esta manera porque se implemento un script para el funcionamiento
                  del boton save changes para que redirigiera correctamente a la pagina actual-->
                    <form id="addEvaluationForm">
                        <div class="modal-body">  
                            <div class="form-group">
                                <label for="fechaEvaluacion">Evaluation Date</label>
                                <input type="date" class="form-control" id="fechaEvaluacion" name="fechaEvaluacion" required>
                            </div>
                            <div class="form-group">
                                <label for="aSat">ASAT</label>
                                <input type="number" class="form-control" id="aSat" name="aSat" required>
                            </div>

                            <div class="form-group">
                                <label for="satisfaccionEmpleado">Employee Satisfaction</label>
                                <textarea class="form-control" id="satisfaccionEmpleado" name="satisfaccionEmpleado" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Workload (Tasks Completed)</label>
                                <select class="form-control custom-select" name="tareasCompletadas" required>
                                    <option selected disabled>Select one</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Agent Capacity</label>
                                <select class="form-control custom-select" name="capacidadAgente" required>
                                    <option selected disabled>Select one</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="asistencia">Attendance</label>
                                <input type="number" class="form-control" id="asistencia" name="asistencia" required>
                            </div>
                            <div class="form-group">
                                <label for="productividad">Productivity</label>
                                <input type="number" class="form-control" id="productividad" name="productividad" required>
                            </div>
                            <div class="form-group">
                                <label for="promedioCompletado">AVG Completed</label>
                                <input type="number" class="form-control" id="promedioCompletado" name="promedioCompletado" required>
                            </div>
                            <div class="form-group">
                                <label for="fortalezas">Strengths</label>
                                <textarea class="form-control" id="fortalezas" name="fortalezas" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="areasAMejorar">Areas of Improvement</label>
                                <textarea class="form-control" id="areasAMejorar" name="areasAMejorar" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="planDeAccion">Action Plan</label>
                                <textarea class="form-control" id="planDeAccion" name="planDeAccion" rows="4" required></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="submitEvaluationForm()">Save changes</button>

                        </div>
                    
                </div>
            </div>
        </div>

        <script>
        function submitEvaluationForm() {
            var form = $('#addEvaluationForm');
            $.ajax({
                url: 'indexAsociadoISA.php?idAsociadoISA=<?= $idAsociadoISA ?>',
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    console.log("Response:", response);
                    // Redirect to the current page with the idAsociado parameter
                    var idAsociadoISA = new URLSearchParams(window.location.search).get('idAsociadoISA');
                    window.location.href = 'indexAsociadoISA.php?idAsociadoISA=' + idAsociadoISA;
                },
                error: function(xhr, status, error) {
                    console.error("Error:", status, error);
                    alert('Failed to add evaluation.');
                }
            });
        }
        </script>

        <!--- Table Evaluation---->
        <div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Evaluation</h3>
            </div>
           
            <div class="card-body">
                <div class="table-container">
                    <table id="evaluationTable">
                        <thead>
                            <tr>
                                <th id="evalNumberHeader" data-sort="asc">Evaluation Number <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th id="dateHeader" data-sort="asc">Date <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th id="csatHeader" data-sort="asc">ASAT <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th>Employee Satisfaction</th>
                                <th>Workload</th>
                                <th>Capacity</th>
                                <th>Attendance</th>
                                <th>Productivity</th>
                                <th>AVG Completed</th>
                                <th>Strengths</th>
                                <th>Areas of Improvement</th>
                                <th>Action Plan</th>

                                
                        </thead>
                        <tbody>
                        <?php if ($evaluation_result->num_rows > 0): ?>
                            <?php while ($row = $evaluation_result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $row['idAsociadoEvaluacionISA'] ?></td>
                                    <td><?= $row['fechaEvaluacion'] ?></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($row['aSat']) ?>%;" aria-valuenow="<?= $row['aSat'] ?>" aria-valuemin="0" aria-valuemax="10">
                                                <?= $row['aSat'] ?>%
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $row['satisfaccionEmpleado'] ?></td>
                                    <td><?= $row['tareasCompletadas'] ?></td>
                                    <td><?= $row['capacidadAgente'] ?></td>
                                    <td><?= $row['asistencia'] ?></td>
                                    <td><?= $row['productividad'] ?></td>
                                    <td><?= $row['promedioCompletado'] ?></td>
                                    <td><?= $row['fortalezas'] ?></td>
                                    <td><?= $row['areasAMejorar'] ?></td>
                                    <td><?= $row['planDeAccion'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan='8'>No records found</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('th[data-sort]').forEach(header => {
    header.addEventListener('click', function() {
        const table = document.getElementById('evaluationTable');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        const column = header.cellIndex;
        const sortDirection = this.getAttribute('data-sort');
       
        rows.sort((a, b) => {
            let cellA = a.cells[column].innerText;
            let cellB = b.cells[column].innerText;
           
            if (column === 1) { // Date column
                cellA = new Date(cellA);
                cellB = new Date(cellB);
            } else if (column === 2 || column === 7) { // CSAT and Google Review columns
                cellA = parseFloat(cellA);
                cellB = parseFloat(cellB);
            } else { // Evaluation Number column
                cellA = parseInt(cellA);
                cellB = parseInt(cellB);
            }

            return sortDirection === 'asc' ? cellA - cellB : cellB - cellA;
        });

        rows.forEach(row => tbody.appendChild(row));
       
        // Reset all icons and colors
        document.querySelectorAll('.sort-icon').forEach(icon => {
            icon.classList.remove('active');
        });

        // Update icon and color based on sort direction
        const upIcon = this.querySelector('ion-icon[name="arrow-up-outline"]');
        const downIcon = this.querySelector('ion-icon[name="arrow-down-outline"]');
        if (sortDirection === 'asc') {
            upIcon.classList.add('active');
            downIcon.classList.remove('active');
            this.setAttribute('data-sort', 'desc');
        } else {
            downIcon.classList.add('active');
            upIcon.classList.remove('active');
            this.setAttribute('data-sort', 'asc');
        }
    });
});
</script>

<!-- Add this where you want the graph to be displayed -->
<div class="row mt-4">
    <div class="col-12">
        <canvas id="monthlyAsatChart" width="400" height="300"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('monthlyAsatChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($all_months); ?>,
            datasets: [{
                label: 'Average Monthly ASAT for Current Year',
                data: <?php echo json_encode($avg_aSat); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        autoSkip: false
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 10
                }
            }
        }
    });
});
</script>

<div class="container mt-4">
        <!-- Row 1 -->
        <div class="row">
            <div class="col-md-4">
                <canvas id="chart1"></canvas>
            </div>
            <div class="col-md-4">
                <canvas id="chart2"></canvas>
            </div>
            <div class="col-md-4">
                <canvas id="chart3"></canvas>
            </div>
        </div>
        <!-- Row 2 -->
        <div class="row mt-4">
            <div class="col-md-4">
                <canvas id="chart4"></canvas>
            </div>
            <div class="col-md-4">
                <canvas id="chart5"></canvas>
            </div>
            <div class="col-md-4">
                <canvas id="chart6"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Example Chart.js setup for each chart
        const chartConfig = {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sample Data',
                    data: [65, 59, 80, 81, 56, 55],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        };

        // Initialize all six charts
        const ctx1 = document.getElementById('chart1').getContext('2d');
        new Chart(ctx1, chartConfig);

        const ctx2 = document.getElementById('chart2').getContext('2d');
        new Chart(ctx2, chartConfig);

        const ctx3 = document.getElementById('chart3').getContext('2d');
        new Chart(ctx3, chartConfig);

        const ctx4 = document.getElementById('chart4').getContext('2d');
        new Chart(ctx4, chartConfig);

        const ctx5 = document.getElementById('chart5').getContext('2d');
        new Chart(ctx5, chartConfig);

        const ctx6 = document.getElementById('chart6').getContext('2d');
        new Chart(ctx6, chartConfig);
    </script>

           
</body>
</html>


  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <!-- Scripts Bar Chart-->
 
  <script>
    // Sample data for the bar chart
    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    $(function () {
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = jQuery.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })
    })
  </script>
 <!-- Scripts Bar Chart End -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <!-- Custom script to ensure jQuery is loaded properly -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
