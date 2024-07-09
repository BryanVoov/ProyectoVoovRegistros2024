<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
             <a href="/adminvoov/pages/asociadova/vista/verasociadosva.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>VA</p>
            </a>
    </li>
    
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadomk/vista/verasociadosmk.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Marketing</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadoisa/vista/verasociadosisa.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>ISA</p>
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
<ul class="nav nav-treeview">
    <li class="nav-item">
       <a href="pages/cliente/clienteAdd.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Crear Cliente</p>
      </a>
</li>
<li class="nav-item">
<a href="pages/cliente/verclientes.php" class="nav-link">
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
          <h1 class="m-0 text-dark">General Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


<?php
include('db.php');
//CLIENTS
// Get the selected dates from the form
$startDate = isset($_GET['start_date']) ? $_GET['start_date'] : date('Y-m-01'); // Default to the first day of the current month
$endDate = isset($_GET['end_date']) ? $_GET['end_date'] : date('Y-m-t'); // Default to the last day of the current month

// Function to get the average values based on date range
function getAverage($conn, $column, $startDate, $endDate, $table, $dateColumn) {
    $sql = "SELECT AVG($column) as avg_value FROM $table WHERE $dateColumn BETWEEN ? AND ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();
    $avg_value = 0;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $avg_value = round($row['avg_value'], 2); // Round to 2 decimal places
    }

    return $avg_value;
}

// Function to get the sum of cost within the date range
function getSum($conn, $column, $tables, $dateColumn, $startDate, $endDate) {
    $sql = "SELECT SUM($column) AS sum_value FROM (";
    foreach ($tables as $table) {
        $sql .= "SELECT $column FROM $table WHERE $dateColumn BETWEEN ? AND ? UNION ALL ";
    }
    $sql = rtrim($sql, " UNION ALL ") . ") AS combined";
    
    $stmt = $conn->prepare($sql);
    $params = [];
    foreach ($tables as $table) {
        $params[] = $startDate;
        $params[] = $endDate;
    }
    $stmt->bind_param(str_repeat("ss", count($tables)), ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    $sum_value = 0;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $sum_value = $row['sum_value'];
    }

    return $sum_value;
}

// Get the average values for the selected date range
$avg_asatVA = getAverage($conn, 'aSat', $startDate, $endDate, 'asociadoEvaluacionVA', 'fechaEvaluacion');
$avg_productividadVA = getAverage($conn, 'productividad', $startDate, $endDate, 'asociadoEvaluacionVA', 'fechaEvaluacion');
$avg_attendanceVA = getAverage($conn, 'asistencia', $startDate, $endDate, 'asociadoEvaluacionVA', 'fechaEvaluacion');
$avg_workloadVA = getAverage($conn, 'tareasCompletadas', $startDate, $endDate, 'asociadoEvaluacionVA', 'fechaEvaluacion');

$avg_asatMK = getAverage($conn, 'aSat', $startDate, $endDate, 'asociadoEvaluacionMK', 'fechaEvaluacion');
$avg_productividadMK = getAverage($conn, 'productividad', $startDate, $endDate, 'asociadoEvaluacionMK', 'fechaEvaluacion');
$avg_attendanceMK = getAverage($conn, 'asistencia', $startDate, $endDate, 'asociadoEvaluacionMK', 'fechaEvaluacion');
$avg_workloadMK = getAverage($conn, 'tareasCompletadas', $startDate, $endDate, 'asociadoEvaluacionMK', 'fechaEvaluacion');

$avg_asatISA = getAverage($conn, 'aSat', $startDate, $endDate, 'asociadoEvaluacionISA', 'fechaEvaluacion');
$avg_productividadISA = getAverage($conn, 'productividad', $startDate, $endDate, 'asociadoEvaluacionISA', 'fechaEvaluacion');
$avg_attendanceISA = getAverage($conn, 'asistencia', $startDate, $endDate, 'asociadoEvaluacionISA', 'fechaEvaluacion');
$avg_workloadISA = getAverage($conn, 'tareasCompletadas', $startDate, $endDate, 'asociadoEvaluacionISA', 'fechaEvaluacion');

// Get the total cost
$costoCliente = getSum($conn, 'costoCliente', ['asociadoISA', 'asociadoMK', 'asociadoVA'], 'fechaContratacionC', $startDate, $endDate);

// Get the total number of active associates based on the selected date range
$sqlAsociadoTotal = "SELECT COUNT(*) AS nombreAsociado FROM (
  SELECT nombreAsociado FROM asociadoISA WHERE estadoActividad = 'Active' AND (fechaTerminacion IS NULL OR fechaTerminacion > ?)
  UNION ALL
  SELECT nombreAsociado FROM asociadoMK WHERE estadoActividad = 'Active' AND (fechaTerminacion IS NULL OR fechaTerminacion > ?)
  UNION ALL
  SELECT nombreAsociado FROM asociadoVA WHERE estadoActividad = 'Active' AND (fechaTerminacion IS NULL OR fechaTerminacion > ?)
) AS combined";

$stmt = $conn->prepare($sqlAsociadoTotal);
$stmt->bind_param('sss', $endDate, $endDate, $endDate);
$stmt->execute();
$result = $stmt->get_result();
$nombreAsociado = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombreAsociado = $row['nombreAsociado'];
}


// Get the total number of active clients
$sqlClienteTotal = "SELECT count(nombreCliente) as nombreCliente FROM cliente where estadoActividad = 'Active'";
$stmt = $conn->prepare($sqlClienteTotal);
$stmt->execute();
$result = $stmt->get_result();
$nombreCliente = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombreCliente = $row['nombreCliente'];
}

// Get the total number of pending clients
$sqlClienteTotalPendiente = "SELECT count(nombreCliente) as nombreClientePendiente FROM cliente where estadoAsignacionPersonal = 'Pending'";
$stmt = $conn->prepare($sqlClienteTotalPendiente);
$stmt->execute();
$result = $stmt->get_result();
$nombreClientePendiente = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombreClientePendiente = $row['nombreClientePendiente'];
}
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Date filter form -->
        <div class="row mb-3">
            <div class="col-12">
                <form method="GET" action="">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control mb-2" id="start_date" name="start_date" value="<?php echo htmlspecialchars($startDate); ?>">
                        </div>
                        <div class="col-auto">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control mb-2" id="end_date" name="end_date" value="<?php echo htmlspecialchars($endDate); ?>">
                        </div>
                        <div class="col-auto mt-4">
                            <button type="submit" class="btn btn-primary mb-2">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- CLIENTS -->
        <div class="row mb-3">
            <div class="col-12">
                <h2>CLIENTS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $nombreAsociado; ?></h3>
                        <p>Total Associates</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>$<?php echo $costoCliente; ?><sup style="font-size: 20px"></sup></h3>
                        <p>Total from Client</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $nombreCliente; ?></h3>
                        <p>Total Clients</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $nombreClientePendiente; ?></h3>
                        <p>Pending Clients to Assign Associate</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- VA ASSOCIATES -->
        <div class="row mb-3">
            <div class="col-12">
                <h2>VA Associates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $avg_asatVA; ?>%</h3>
                        <p>AVG ASAT FOR THE MONTH</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $avg_productividadVA; ?>%</h3>
                        <p>AVG PRODUCTIVITY</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $avg_attendanceVA; ?>%</h3>
                        <p>AVG ATTENDANCE</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $avg_workloadVA; ?></h3>
                        <p>Average Workload</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- MARKETING ASSOCIATES -->
        <div class="row mb-3">
            <div class="col-12">
                <h2>Marketing Associates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $avg_asatMK; ?></h3>
                        <p>AVG ASAT FOR THE MONTH</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $avg_productividadMK; ?>%</h3>
                        <p>AVG PRODUCTIVITY</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $avg_attendanceMK; ?>%</h3>
                        <p>AVG ATTENDANCE</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $avg_workloadMK; ?></h3>
                        <p>Average Workload</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- ISA ASSOCIATES -->
        <div class="row mb-3">
            <div class="col-12">
                <h2>ISA Associates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $avg_asatISA; ?></h3>
                        <p>AVG ASAT FOR THE MONTH</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $avg_productividadISA; ?>%</h3>
                        <p>AVG PRODUCTIVITY</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $avg_attendanceISA; ?>%</h3>
                        <p>AVG ATTENDANCE</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $avg_workloadISA; ?></h3>
                        <p>Average Workload</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
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
 
  
 <!-- Scripts Bar Chart End -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>


</body>
</html>
