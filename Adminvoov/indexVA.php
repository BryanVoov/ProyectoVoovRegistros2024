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
            

<!-- Area de codigo de prueba para agregar menu Asociado - inicio -->
    <li class="nav-item has-treeview">  
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
           <p>
           Associate Dashboard
         <i class="fas fa-angle-left right"></i>
       <span class="badge badge-info right"></span>
          </p>
         </a>
      <ul class="nav nav-treeview">
          <li class="nav-item">
             <a href="/adminvoov/pages/asociadoVA/vista/verasociadosva.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>VA</p>
            </a>
    </li>
    
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadoMK/vista/verasociadosMK.php" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Marketing</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadoISA/vista/verasociadosISA.php" class="nav-link">
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
     Client Dashboard
   <i class="fas fa-angle-left right"></i>
 <span class="badge badge-info right"></span>
    </p>
   </a>
<ul class="nav nav-treeview">
    <li class="nav-item">
       <a href="pages/cliente/clienteAdd.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Client</p>
      </a>
</li>
<li class="nav-item">
<a href="pages/cliente/verclientes.php" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>All Clients</p>
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
          <h1 class="m-0 text-dark">Client Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Client Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php
    include("db.php");
    // Fetch the selected client details if `idCliente` is provided
    $nombreCliente = '';
    $logoContenido = '';
    $logoMimeType = '';

// Fetch client data including the logo
if (isset($_GET['idCliente'])) {
    $idCliente = $_GET['idCliente'];
    $query = "SELECT * FROM cliente WHERE idCliente = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $idCliente);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombreCliente = $row["nombreCliente"];
        $nombrePropietario = $row["nombrePropietario"];
        $sitioWeb = $row["sitioWeb"];
        $correspondencia = $row["correspondencia"];
        $carpetaCompartida = $row["carpetaCompartida"];
        $estadoActividad = $row["estadoActividad"];
        $tipoContrato = $row["tipoContrato"];
        $aniversario = $row["aniversario"];
        $cuotaInstalacion = $row["cuotaInstalacion"];
        $estadoPago = $row["estadoPago"];
        $industria = $row["industria"];
        $pais = $row["pais"];
        $zonaHoraria = $row["zonaHoraria"];
        $estadoAsignacionPersonal = $row['estadoAsignacionPersonal'];
        $logoContenido = $row['logo'];

        // Determine the MIME type
        if (!empty($logoContenido)) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $logoMimeType = finfo_buffer($finfo, $logoContenido);
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
                if (!empty($logoContenido)) {
                    $base64Logo = base64_encode($logoContenido);
                    echo '<img src="data:' . $logoMimeType . ';base64,' . $base64Logo . '" alt="Logo">';
                } else {
                    echo '<img src="voov group logo.webp" alt="VOOV Logo">';
                }
                ?>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><strong> Client Name: </strong><?= $nombreCliente ? $nombreCliente : '' ?></div>
            <div class="info-content">
                
                <p><i class="fas fa-briefcase"></i><strong> Industry Type: </strong><?=$industria ?  " " .$industria : '' ?></p>
                <p><i class="fas fa-calendar-alt"></i><strong> Contract Sign Date: </strong><?= $aniversario ? $aniversario : '' ?></p>
                <p><i class="fas fa-globe"></i><strong> Main Website: </strong> <a href="<?php echo $sitioWeb; ?>"><?php echo $sitioWeb; ?></a></p>
                <p><i class="fas fa-home"></i><strong> Correspondence Address: </strong><?=$correspondencia ? " ". $correspondencia : ' ' ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><strong> Owner: </strong><?=$nombrePropietario ? $nombrePropietario : '' ?></div>
            <div class="info-content">
                <p><i class="fas fa-file-contract"></i><strong> Business Line: </strong> <?= $tipoContrato ? " ". $tipoContrato : '' ?></p>
                <p><i class="fas fa-map-marker-alt"></i><strong> Country: </strong> <?= $pais ? " ".$pais : '' ?></p>       
                <p><i class="fas fa-clock"></i><strong> Time Zone: </strong> <?= $zonaHoraria ? " ".$zonaHoraria : '' ?></p>
                <p id="clock" style="font-weight: bold;"></p> <!-- Placeholder for the clock -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><?php if ($estadoActividad == 'Active') {
                            echo '<span class="badge badge-success" style="display: block; width: 100%;"><strong> Status: </strong> Active Client</span>';
                        } elseif($estadoActividad == 'Pending') {
                            echo '<span class="badge badge-warning" style="display: block; width: 100%;"><strong> Status: </strong> Pending Client</span>';
                        }
                        else {
                          echo '<span class="badge badge-danger" style="display: block; width: 100%;"><strong> Status: </strong> Inactive Client</span>';
                      } ?></p></div>
            <div class="info-content">
                              <p><i class="fas fa-money-bill-wave"></i> <strong> Payment Status: </strong> <?php if ($estadoPago == 'Timely') {
                            echo '<span class="badge badge-success">Timely Payment</span>';
                        } else {
                            echo '<span class="badge badge-danger">Delinquent</span>';
                        } ?></p></p>
                
                <p><i class="fas fa-chalkboard-teacher"></i> <strong> Training Fee: </strong>  <?= $cuotaInstalacion ? $cuotaInstalacion : '' ?></p>
                <p><i class="fas fa-cloud"></i><strong> Drive Shared Folder: </strong> <a href="<?php echo $carpetaCompartida; ?>"><?php echo $carpetaCompartida; ?></a></p>
            </div>
        </div>
    </div>
</div>

<script>
    // Mapping of your time zone options to IANA time zone names
    const timeZoneMap = {
        'Pacific Time Zone (UTC-8)': 'America/Los_Angeles',
        'Mountain Time Zone (UTC-7)': 'America/Denver',
        'Central Time Zone (UTC-7)': 'America/Chicago',
        'Eastern Time Zone (UTC-5)': 'America/New_York',
        'Atlantic Time Zone (UTC-4)': 'America/Halifax'
    };

    function updateClock() {
        // Time zone from PHP variable
        const userTimeZone = '<?= $zonaHoraria ?>';
        const timeZone = timeZoneMap[userTimeZone] || 'UTC'; // Default to UTC if not found

        // Get current time in the specified time zone
        const now = new Date().toLocaleString('en-US', { timeZone: timeZone });
        const timeString = new Date(now).toLocaleTimeString();

        // Update the clock element
        document.getElementById('clock').innerText = timeString;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial call to display the time immediately
    updateClock();
</script>

<?php
// Database connection (make sure you have the connection setup correctly)
include('db.php');  // Adjust this to your actual connection file

$idCliente = isset($_GET['idCliente']) ? (int)$_GET['idCliente'] : 0;

// Query to get the average CSAT for the specific client
$sql = "SELECT AVG(cSat) as avg_csat FROM clienteevaluacion WHERE idCliente = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
$avg_csat = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $avg_csat = round($row['avg_csat'], 2); // Round to 2 decimal places
}

// Query to count the number of POCs for the specific client
$poc_sql = "SELECT COUNT(*) as total_poc FROM poc WHERE idCliente = ?";
$stmt = $conn->prepare($poc_sql);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
$total_poc = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_poc = $row['total_poc'];
}

// Query to count the number of evaluations for the specific client
$ev_sql = "SELECT COUNT(*) as total_ev FROM clienteevaluacion WHERE idCliente = ?";
$stmt = $conn->prepare($ev_sql);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
$total_ev = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_ev = $row['total_ev'];
}

// Query to count the number of evaluations with Google review = 1 for the specific client
$googlereview_sql = "SELECT COUNT(*) as total_googlereview FROM clienteevaluacion WHERE idCliente = ? AND reseñaGoogle = 1";
$stmt = $conn->prepare($googlereview_sql);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
$total_googlereview = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_googlereview = $row['total_googlereview'];
}

//PARA EL GRAFICO
// Fetch monthly CSAT averages for the current year
$monthly_csat_sql = "SELECT 
        DATE_FORMAT(fechaEvaluacion, '%Y-%m') AS month, 
        ROUND(AVG(cSat), 2) AS avg_cSat 
    FROM clienteEvaluacion 
    WHERE idCliente = ? AND YEAR(fechaEvaluacion) = YEAR(CURRENT_DATE())
    GROUP BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')
    ORDER BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')";
$stmtMonthlyCSAT = $conn->prepare($monthly_csat_sql);
$stmtMonthlyCSAT->bind_param("i", $idCliente);
$stmtMonthlyCSAT->execute();
$monthly_csat_result = $stmtMonthlyCSAT->get_result();

$all_months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$months = [];
$avg_cSat = array_fill(0, 12, null); // Initialize with nulls

while ($row = $monthly_csat_result->fetch_assoc()) {
    $month_index = date("n", strtotime($row['month'] . "-01")) - 1; // Get the month index (0-11)
    $months[$month_index] = date("F", strtotime($row['month'] . "-01")); // Get the month name
    $avg_cSat[$month_index] = $row['avg_cSat'];
}

// Close the statement and connection
$stmt->close();
$stmtMonthlyCSAT->close();

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
              <h3><?php echo $avg_csat; ?>%</h3>
              <p>Average CSAT Evaluation</p>
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
              <h3><?php echo $total_poc; ?><sup style="font-size: 20px"></sup></h3>
              <p>Total POC</p>
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
              <h3><?php echo $total_ev; ?></h3>
              <p>Total Evaluations</p>
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
              <h3><?php echo $total_googlereview; ?></h3>
              <p>Total Google Review</p>
            </div>
            <div class="icon">
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

       <!-- EVALUATION TABLE STARTS HERE -->
      <?php
      $idCliente = isset($_GET['idCliente']) ? $_GET['idCliente'] : '';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            if ($idCliente) {
                $fechaEvaluacion = isset($_POST["fechaEvaluacion"]) ? $_POST["fechaEvaluacion"] : '';
                $cSat = isset($_POST["cSat"]) ? $_POST["cSat"] : '';
                $feedback = isset($_POST["feedback"]) ? $_POST["feedback"] : '';
                $problemas = isset($_POST["problemas"]) ? $_POST["problemas"] : '';
                $proyectos = isset($_POST["proyectos"]) ? $_POST["proyectos"] : '';
                $comentarios = isset($_POST["comentarios"]) ? $_POST["comentarios"] : '';
                $reseñaGoogle = isset($_POST["reseñaGoogle"]) ? $_POST["reseñaGoogle"] : '';
                $idPOC = isset($_POST["idPOC"]) ? $_POST["idPOC"] : '';
                $idLiaison = isset($_POST["idLiaison"]) ? $_POST["idLiaison"] : '';

                // Fetch the POC name
                $sqlPOC = "SELECT nombrePOC FROM poc WHERE idPOC = ?";
                $stmtPOC = $conn->prepare($sqlPOC);
                $stmtPOC->bind_param("i", $idPOC);
                $stmtPOC->execute();
                $stmtPOC->bind_result($nombrePOC);
                $stmtPOC->fetch();
                $stmtPOC->close();

                 // Fetch the Liaison name
                 $sqlLiaison = "SELECT nombreLiaison FROM liaison WHERE idLiaison = ?";
                 $stmtLiaison = $conn->prepare($sqlLiaison);
                 $stmtLiaison->bind_param("i", $idLiaison);
                 $stmtLiaison->execute();
                 $stmtLiaison->bind_result($nombreLiaison);
                 $stmtLiaison->fetch();
                 $stmtLiaison->close();
                
                // Check if the idCliente exists in the cliente table
                $sqlCheck = "SELECT idCliente FROM cliente WHERE idCliente = ?";
                $stmtCheck = $conn->prepare($sqlCheck);
                $stmtCheck->bind_param("i", $idCliente);
                $stmtCheck->execute();
                $resultCheck = $stmtCheck->get_result();

                if ($resultCheck->num_rows > 0) {
                    // Prepare the SQL query to insert data into the database
                    $sqlInsert = "INSERT INTO clienteEvaluacion (idCliente, fechaEvaluacion, cSat, feedback, problemas, proyectos, comentarios, reseñaGoogle, nombrePOC, nombreLiaison) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bind_param("isisssssss", $idCliente, $fechaEvaluacion, $cSat, $feedback, $problemas, $proyectos, $comentarios, $reseñaGoogle, $nombrePOC, $nombreLiaison);

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

        $idCliente = isset($_GET['idCliente']) ? $_GET['idCliente'] : '';
        $startDate = isset($_GET['startDate']) ? $_GET['startDate'] : date('Y-01-01');
        $endDate = isset($_GET['endDate']) ? $_GET['endDate'] : date('Y-12-31');

        if ($idCliente) {
            // Fetch evaluations for the specific client
            $evaluation_sql = "SELECT * FROM clienteEvaluacion WHERE idCliente = ?";
            $stmt = $conn->prepare($evaluation_sql);
            $stmt->bind_param("i", $idCliente);
            $stmt->execute();
            $evaluation_result = $stmt->get_result();
        }
          // Fetch monthly CSAT averages PARA EL GRAFICO DE BARRA ABAJO DE LA TABLA
          $monthly_csat_sql = "SELECT 
                    DATE_FORMAT(fechaEvaluacion, '%Y-%m') AS month, 
                    AVG(cSat) AS avg_cSat 
                FROM clienteEvaluacion 
                WHERE idCliente = ? AND fechaEvaluacion BETWEEN ? AND ?
                GROUP BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')
                ORDER BY DATE_FORMAT(fechaEvaluacion, '%Y-%m')";
            $stmtMonthlyCSAT = $conn->prepare($monthly_csat_sql);
            $stmtMonthlyCSAT->bind_param("iss", $idCliente, $startDate, $endDate);
            $stmtMonthlyCSAT->execute();
            $monthly_csat_result = $stmtMonthlyCSAT->get_result();

            $monthly_csat_data = [];
            while ($row = $monthly_csat_result->fetch_assoc()) {
                $monthly_csat_data[] = $row;
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
                                <label>CSAT</label>
                                <select class="form-control custom-select" name="cSat" required>
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

                            <?php
                            $idCliente = isset($_GET['idCliente']) ? $_GET['idCliente'] : '';

                            if ($idCliente) {
                                $sql = "SELECT idPOC, nombrePOC FROM poc WHERE idCliente = ?";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("i", $idCliente);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                $options = '';
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $options .= '<option value="' . $row['idPOC'] . '">' . $row['nombrePOC'] . '</option>';
                                    }
                                } else {
                                    $options .= '<option value="">No POC available</option>';
                                }
                                $stmt->close();
                            } else {
                                $options = '<option value="">No client ID provided</option>';
                            }
                            ?>
                            <div class="form-group">
                                        <label for="POCSelect">POC</label>
                                        <select class="form-control" id="POCSelect" name="idPOC">
                                        <?php echo $options; ?>
                                        </select>
                                    </div>
                                <!--Fetch Liaison Names-->
                                <?php
                                $sqlLiaison = "SELECT idLiaison, nombreLiaison FROM liaison";
                                $stmtLiaison = $conn->prepare($sqlLiaison);
                                $stmtLiaison->execute();
                                $resultLiaison = $stmtLiaison->get_result();

                                $options2 = '';
                                if ($resultLiaison->num_rows > 0) {
                                    while ($row = $resultLiaison->fetch_assoc()) {
                                        $options2 .= '<option value="' . $row['idLiaison'] . '">' . $row['nombreLiaison'] . '</option>';
                                    }
                                } else {
                                    $options2 .= '<option value="">No Liaison available</option>';
                                }
                                $stmtLiaison->close();
                                ?>

                            <div class="form-group">
                                <label for="LiaisonSelect">Liaison</label>
                                  <select class="form-control" id="LiaisonSelect" name="idLiaison">
                                    <?php echo $options2; ?>
                                    </select>
                            </div>        
                            <div class="form-group">
                                <label for="feedback">Feedback</label>
                                <input type="text" class="form-control" id="feedback" name="feedback" required>
                            </div>
                            <div class="form-group">
                                <label for="problemas">Issues</label>
                                <input type="text" class="form-control" id="problemas" name="problemas" required>
                            </div>
                            <div class="form-group">
                                <label for="proyectos">Projects</label>
                                <input type="text" class="form-control" id="proyectos" name="proyectos" required>
                            </div>
                            <div class="form-group">
                                <label for="comentarios">Comments</label>
                                <textarea class="form-control" id="comentarios" name="comentarios" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Google Review</label>
                                <select class="form-control custom-select" name="reseñaGoogle" required>
                                    <option selected disabled>Select one</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
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
                url: 'indexVA.php?idCliente=<?= $idCliente ?>',
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    console.log("Response:", response);
                    // Redirect to the current page with the idCliente parameter
                    var idCliente = new URLSearchParams(window.location.search).get('idCliente');
                    window.location.href = 'indexVA.php?idCliente=' + idCliente;
                },
                error: function(xhr, status, error) {
                    console.error("Error:", status, error);
                    alert('Failed to add evaluation.');
                }
            });
        }
        </script>

        <!-- Pass PHP data to JavaScript -->
        <script>
            var monthlyCSATData = <?php echo json_encode($monthly_csat_data); ?>;
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
                                <th id="evalNumberHeader" data-sort="asc">Evaluation N° <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th id="dateHeader" data-sort="asc">Date <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th id="csatHeader" data-sort="asc">CSAT <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th>Feedback</th>
                                <th>Issues</th>
                                <th>Projects</th>
                                <th>Comments</th>
                                <th id="reviewHeader" data-sort="asc">Google Review <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th>POC Name</th>
                                <th>Liaison</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                         $evaluationNumber = 1;
                        if ($evaluation_result->num_rows > 0): ?>
                            <?php while ($row = $evaluation_result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $evaluationNumber ?></td> <!-- Display the counter -->
                                    <td><?= $row['fechaEvaluacion'] ?></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($row['cSat'] / 10) * 100 ?>%;" aria-valuenow="<?= $row['cSat'] ?>" aria-valuemin="0" aria-valuemax="10">
                                                <?= $row['cSat'] ?>/10
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $row['feedback'] ?></td>
                                    <td><?= $row['problemas'] ?></td>
                                    <td><?= $row['proyectos'] ?></td>
                                    <td><?= $row['comentarios'] ?></td>
                                    <td><?= $row['reseñaGoogle'] ?></td>
                                    <td><?= $row['nombrePOC'] ?></td>
                                    <td><?= $row['nombreLiaison'] ?></td>
                                </tr>
                                <?php $evaluationNumber++; // Increment the counter ?>
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

<!-- Add this where you want the graph to be displayed -->
<div class="row mt-4">
    <div class="col-12">
        <canvas id="monthlyCsatChart" width="400" height="300"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('monthlyCsatChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($all_months); ?>,
            datasets: [{
                label: 'Average Monthly CSAT for Current Year',
                data: <?php echo json_encode($avg_cSat); ?>,
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


<!--POC EMPIEZA ACA-->
            <?php
            if ($idCliente) {
                // Fetch POC data for the specific client
                $poc_sql = "SELECT * FROM poc WHERE idCliente = ?";
                $stmt = $conn->prepare($poc_sql);
                $stmt->bind_param("i", $idCliente);
                $stmt->execute();
                $poc_result = $stmt->get_result();
            }
            ?>

            <!-- POC Table -->
            <div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">POC Info</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Date Of Birth</th>
                                <th>Source of Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($poc_result->num_rows > 0): ?>
                                <?php while ($row = $poc_result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['nombrePOC'] ?></td>
                                        <td><?= $row['emailPOC'] ?></td>
                                        <td><?= $row['telefonoPOC'] ?></td>
                                        <td><?= $row['cumplePOC'] ?></td>
                                        <td><?= $row['origenContacto'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan='5'>No records found</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--END ADD POC TO CLIENT-->

                            <!--SHOW ASSOCIATES TABLE -->
        <?php
           if ($idCliente) {
            // SQL query to fetch associates from different departments along with the latest cost and salary
            $sql = "
                SELECT a.idAsociadoISA AS idAsociado, a.numeroEmpleado, a.nombreAsociado, a.departamento, a.cargoCliente, a.fechaContratacionC, a.salarioInicial, a.estadoActividad, a.email,
                    (SELECT ingresoAsociado FROM pagosCliente pc WHERE pc.idAsociado = a.idAsociadoISA AND pc.sourceTable = 'ISA' ORDER BY pc.fecha DESC LIMIT 1) AS latest_cost,
                    (SELECT salario FROM pagosAsociadoISA pa WHERE pa.idAsociadoISA = a.idAsociadoISA ORDER BY pa.fecha DESC LIMIT 1) AS latest_salary
                FROM asociadoISA a
                JOIN relacionAsociadoClienteISA rac ON a.idAsociadoISA = rac.idAsociadoISA
                WHERE rac.idCliente = ?
                UNION ALL
                SELECT a.idAsociadoMK AS idAsociado, a.numeroEmpleado, a.nombreAsociado, a.departamento, a.cargoCliente, a.fechaContratacionC, a.salarioInicial, a.estadoActividad, a.email,
                    (SELECT ingresoAsociado FROM pagosCliente pc WHERE pc.idAsociado = a.idAsociadoMK AND pc.sourceTable = 'MK' ORDER BY pc.fecha DESC LIMIT 1) AS latest_cost,
                    (SELECT salario FROM pagosAsociadoMK pa WHERE pa.idAsociadoMK = a.idAsociadoMK ORDER BY pa.fecha DESC LIMIT 1) AS latest_salary
                FROM asociadoMK a
                JOIN relacionAsociadoClienteMK rac ON a.idAsociadoMK = rac.idAsociadoMK
                WHERE rac.idCliente = ?
                UNION ALL
                SELECT a.idAsociadoVA AS idAsociado, a.numeroEmpleado, a.nombreAsociado, a.departamento, a.cargoCliente, a.fechaContratacionC, a.salarioInicial, a.estadoActividad, a.email,
                    (SELECT ingresoAsociado FROM pagosCliente pc WHERE pc.idAsociado = a.idAsociadoVA AND pc.sourceTable = 'VA' ORDER BY pc.fecha DESC LIMIT 1) AS latest_cost,
                    (SELECT salario FROM pagosAsociadoVA pa WHERE pa.idAsociadoVA = a.idAsociadoVA ORDER BY pa.fecha DESC LIMIT 1) AS latest_salary
                FROM asociadoVA a
                JOIN relacionAsociadoClienteVA rac ON a.idAsociadoVA = rac.idAsociadoVA
                WHERE rac.idCliente = ?
            ";
    
            // Prepare the statement
            $stmt = $conn->prepare($sql);
    
            // Bind the parameters
            $stmt->bind_param("iii", $idCliente, $idCliente, $idCliente);
    
            // Execute the statement
            $stmt->execute();
    
            // Get the result
            $result = $stmt->get_result();
        }
            ?>

  <div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Associates Info</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Employee N°</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Occupation</th>
                                <th>Initial Salary</th>
                                <th>Email</th>
                                <th>Start Date</th>
                                <th>Status</th>
                                <th>Latest Cost</th>
                                <th>Latest Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['numeroEmpleado'] ?></td>
                                        <td><?= $row['nombreAsociado'] ?></td>
                                        <td><?= $row['departamento'] ?></td>
                                        <td><?= $row['cargoCliente'] ?></td>
                                        <td><?= $row['salarioInicial'] ?></td>
                                        <td><?= $row['email'] ?></td>     
                                        <td><?= $row['fechaContratacionC'] ?></td>          
                                        <td><?= $row['estadoActividad'] ?></td>     
                                        <td><?= $row['latest_cost'] !== null ? $row['latest_cost'] : 'N/A' ?></td>
                                        <td><?= $row['latest_salary'] !== null ? $row['latest_salary'] : 'N/A' ?></td>  
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan='5'>No records found</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

  

        <!-- /.content -->
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
