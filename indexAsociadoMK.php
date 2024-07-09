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
        .modal-body pre {
        white-space: pre-wrap; /* Preserve line breaks */
        }

        .text-preview {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Show only the first three lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        cursor: pointer;
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
             <a href="/adminvoov/pages/asociadoMK/vista/asociadoadd.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Associate</p>
            </a>
    </li>
    <li class="nav-item">
      <a href="/adminvoov/pages/asociadoMK/vista/verasociadosMK.php" class="nav-link">
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
     Client Dashboard
   <i class="fas fa-angle-left right"></i>
 <span class="badge badge-info right"></span>
    </p>
   </a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/adminvoov/pages/cliente/verclientes.php" class="nav-link">
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
    $totalPago = 0;
    $idCliente = 0;
    $latestSalary = 0;
    if (isset($_GET['idAsociadoMK'])) {
        $idAsociadoMK = $_GET['idAsociadoMK'];
        $sql = "SELECT * FROM asociadoMK WHERE idAsociadoMK = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idAsociadoMK);
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

              // Fetch the related client
        $sqlClient = "SELECT idCliente FROM relacionAsociadoClienteMK WHERE idAsociadoMK = ?";
        $stmtClient = $conn->prepare($sqlClient);
        $stmtClient->bind_param("i", $idAsociadoMK);
        $stmtClient->execute();
        $resultClient = $stmtClient->get_result();
        if ($resultClient->num_rows > 0) {
            $client = $resultClient->fetch_assoc();
            $idCliente = $client['idCliente'];

            // Fetch the latest payment for the associate related to the client
            $sqlLatestPayment = "
                SELECT (ingresoAsociado + descuento + ingresoClienteNuevo + ingresoComision) AS totalPago
                FROM pagosCliente
                WHERE idAsociado = ? AND idCliente = ?
                ORDER BY fecha DESC
                LIMIT 1
            ";
            $stmtLatestPayment = $conn->prepare($sqlLatestPayment);
            $stmtLatestPayment->bind_param("ii", $idAsociadoMK, $idCliente);
            $stmtLatestPayment->execute();
            $resultLatestPayment = $stmtLatestPayment->get_result();
            $latestPayment = $resultLatestPayment->fetch_assoc();
            $totalPago = $latestPayment ? $latestPayment['totalPago'] : 0;
            $stmtLatestPayment->close();
        }
        $stmtClient->close();

         // Fetch the latest salary from pagosAsociadoMK
         $sqlLatestSalary = "SELECT salario FROM pagosAsociadoMK WHERE idAsociadoMK = ? ORDER BY fecha DESC LIMIT 1";
         $stmtLatestSalary = $conn->prepare($sqlLatestSalary);
         $stmtLatestSalary->bind_param("i", $idAsociadoMK);
         $stmtLatestSalary->execute();
         $resultLatestSalary = $stmtLatestSalary->get_result();
         $latestSalaryRow = $resultLatestSalary->fetch_assoc();
         $latestSalary = $latestSalaryRow ? $latestSalaryRow['salario'] : 0;
         $stmtLatestSalary->close();

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
            <div class="info-header text-center"><strong> Name: </strong> <?= $nombreAsociado ? $nombreAsociado : '' ?></div>
            <div class="info-content">
                
                <p><i class="fas fa-briefcase"></i><strong> Cedula: </strong><?=$cedula ?  " " .$cedula : '' ?></p>
                <p><i class="fas fa-briefcase"></i><strong> Phone Number: </strong> <?=$telefono ?  " " .$telefono : '' ?></p>
                <p><i class="fas fa-briefcase"></i><strong> Email: </strong><?=$email ?  " " .$email : '' ?></p>
                <p><i class="fas fa-home"></i><strong> Address: </strong><?=$direccion ? " ". $direccion : ' ' ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-header text-center"><strong> Occupation with Client: </strong><?=$cargoCliente ? $cargoCliente : '' ?></div>
            <div class="info-content">
            <p><i class="fas fa-home"></i><strong> Client Payment: </strong><?=$totalPago ? '$' . number_format($totalPago, 2) : ' ' ?></p>
            <p><i class="fas fa-home"></i><strong> Starting Salary: </strong>$<?=$salarioInicial ? $salarioInicial : ' ' ?></p>
            <p><i class="fas fa-home"></i><strong> Latest Salary: </strong><?= $latestSalary ? '$' . number_format($latestSalary, 2) : ' ' ?></p>


                 <?php
        // Assume $idAsociadomk is the ID of the associate.
        // Ensure you have initialized $idAsociadomk from your context, e.g., from a GET or POST request.
        $idAsociadoMK = $_GET['idAsociadoMK'];

        // Query to fetch the supervisor's name related to the associate
        $sql = "SELECT s.nombreSupervisor
                FROM supervisor s
                JOIN relacionAsociadoSupervisorMK r ON s.idSupervisor = r.idSupervisor
                WHERE r.idAsociadoMK = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idAsociadoMK);
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

                <p><i class="fas fa-file-contract"></i><strong> Contract Type: </strong><?= $tipoContrato ? $tipoContrato : '' ?></p>
                <p><i class="fas fa-briefcase"></i><strong> Client Contract Sign Date: </strong><?=$fechaContratacionC ? $fechaContratacionC : '' ?></p>
                <p><i class="fas fa-briefcase"></i><strong> Overall Start Date: </strong><?=$fechaContratacionV ? $fechaContratacionV : '' ?></p>
                <p><i class="fas fa-chalkboard-teacher"></i><strong> Entry Time: </strong><?= $horarioEntrada ? $horarioEntrada : '' ?></p>
                <p><i class="fas fa-chalkboard-teacher"></i><strong> Exit Time: </strong><?= $horarioSalida ? $horarioSalida : '' ?></p>
            </div>
        </div>
    </div>
</div>




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
              <h4>Rank Score: %</h4>
              <p></p>
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
              <h4><sup style="font-size: 20px"></sup></h4>
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
              <h4></h4>
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
              <h4></h4>
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
$idAsociadoMK = $_GET['idAsociadoMK'];

// Query to fetch data from asociados table joined with relacionAsociadoCliente table
$sql = "SELECT a.idCliente, a.nombreCliente
        FROM cliente a
        JOIN relacionAsociadoClienteMK rac ON a.idCliente = rac.idCliente
        WHERE rac.idAsociadoMK = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAsociadoMK);
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
                                <form id="addClientForm" action="/adminvoov/pages/asociadoMK/controller/processClient.php" method="POST">
                                    
                                
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
                                    <input type="hidden" name="idAsociadoMK" value="<?= htmlspecialchars($idAsociadoMK) ?>">
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
                        // Assume $idAsociadoMK is the ID of the selected associate.
                        // Ensure you have initialized $idAsociadoMK from your context, e.g., from a GET or POST request.
                        $idAsociadoMK = $_GET['idAsociadoMK'];

                        // Query to fetch data from supervisor table joined with relacionAsociadoSupervisorVA table
                        $sql = "SELECT a.idSupervisor, a.nombreSupervisor
                                FROM supervisor a
                                JOIN relacionAsociadoSupervisorMK rac ON a.idSupervisor = rac.idSupervisor
                                WHERE rac.idAsociadoMK = ?";

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $idAsociadoMK);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["idSupervisor"] . "</td>";
                                echo "<td>" . $row["nombreSupervisor"] . "</td>";
                                echo "<td>";
                                echo "<form action='/adminvoov/pages/asociadoMK/controller/deleteSupervisor.php' method='POST' style='display:inline;' onsubmit='return confirmDelete();'>";
                                echo "<input type='hidden' name='idAsociadoMK' value='" . htmlspecialchars($idAsociadoMK) . "'>";
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
                        <form id="addSupervisorForm" action="/adminvoov/pages/asociadoMK/controller/processSupervisor.php" method="POST">
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
                            <input type="hidden" name="idAsociadoMK" value="<?= htmlspecialchars($idAsociadoMK) ?>">
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
        // Get the ID of the associate
        $idAsociadoMK = isset($_GET['idAsociadoMK']) ? $_GET['idAsociadoMK'] : '';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            if ($idAsociadoMK) {
                $fechaEvaluacion = isset($_POST["fechaEvaluacion"]) ? $_POST["fechaEvaluacion"] : '';
                $aSat = isset($_POST["aSat"]) ? $_POST["aSat"] : '';
                $cargaDeTrabajo = isset($_POST["cargaDeTrabajo"]) ? $_POST["cargaDeTrabajo"] : '';
                $diasTrabajados = isset($_POST["diasTrabajados"]) ? $_POST["diasTrabajados"] : '';
                $llegadasTarde = isset($_POST["llegadasTarde"]) ? $_POST["llegadasTarde"] : '';
                $reporteSemanal = isset($_POST["reporteSemanal"]) ? $_POST["reporteSemanal"] : '';
                $proyectos = isset($_POST["proyectos"]) ? $_POST["proyectos"] : '';
                $soluciones = isset($_POST["soluciones"]) ? $_POST["soluciones"] : '';
                $feedbackVoov = isset($_POST["feedbackVoov"]) ? $_POST["feedbackVoov"] : '';
                $notasFeedback = isset($_POST["notasFeedback"]) ? $_POST["notasFeedback"] : '';
                $refuerzoPositivo = isset($_POST["refuerzoPositivo"]) ? $_POST["refuerzoPositivo"] : '';
                $areasAMejorar = isset($_POST["areasAMejorar"]) ? $_POST["areasAMejorar"] : '';
                $planDeAccion = isset($_POST["planDeAccion"]) ? $_POST["planDeAccion"] : '';
                $notasFinales = isset($_POST["notasFinales"]) ? $_POST["notasFinales"] : '';
                $puntuacionTareasSemanales = isset($_POST["puntuacionTareasSemanales"]) ? $_POST["puntuacionTareasSemanales"] : '';
                $puntuacionCualitativaGeneral = isset($_POST["puntuacionCualitativaGeneral"]) ? $_POST["puntuacionCualitativaGeneral"] : '';
                $notasPuntuacionAsat = isset($_POST["notasPuntuacionAsat"]) ? $_POST["notasPuntuacionAsat"] : '';
                $entrevistador = isset($_POST["entrevistador"]) ? $_POST["entrevistador"] : [];
                $problemas = isset($_POST["problemas"]) ? $_POST["problemas"] : '';

                // Convert the entrevistador array into a comma-separated string
                $entrevistadorString = implode(", ", $entrevistador);

                // Check if the idAsociadoMK exists in the asociadoMK table
                $sqlCheck = "SELECT idAsociadoMK FROM asociadoMK WHERE idAsociadoMK = ?";
                $stmtCheck = $conn->prepare($sqlCheck);
                $stmtCheck->bind_param("i", $idAsociadoMK);
                $stmtCheck->execute();
                $resultCheck = $stmtCheck->get_result();

                if ($resultCheck->num_rows > 0) {
                    // Prepare the SQL query to insert data into the database
                    $sqlInsert = "INSERT INTO asociadoEvaluacionMK (idAsociadoMK, fechaEvaluacion, aSat, cargaDeTrabajo, diasTrabajados, llegadasTarde, 
                    reporteSemanal, proyectos, soluciones, feedbackVoov, notasFeedback, refuerzoPositivo, areasAMejorar, planDeAccion, notasFinales, 
                    puntuacionTareasSemanales, puntuacionCualitativaGeneral, notasPuntuacionAsat, entrevistador, problemas) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $stmtInsert->bind_param("isiiissssssssssiisss", $idAsociadoMK, $fechaEvaluacion, $aSat, $cargaDeTrabajo, $diasTrabajados, $llegadasTarde, 
                    $reporteSemanal, $proyectos, $soluciones, $feedbackVoov, $notasFeedback, $refuerzoPositivo, $areasAMejorar, $planDeAccion, $notasFinales, 
                    $puntuacionTareasSemanales, $puntuacionCualitativaGeneral, $notasPuntuacionAsat, $entrevistadorString, $problemas);

                    // Execute the SQL query
                    if ($stmtInsert->execute()) {
                        $_SESSION['message'] = 'Evaluation added successfully';
                        $_SESSION['message_type'] = 'success';
                        echo "Evaluation added successfully";
                    } else {
                        echo "Error: " . $stmtInsert->error;
                    }

                    $stmtInsert->close();
                } else {
                    echo "Error: The Associate ID does not exist in the asociadoMK table.";
                }

                $stmtCheck->close();
                $conn->close();
                exit;
            } else {
                echo "Error: No associate ID provided.";
                exit;
            }
        }

        if ($idAsociadoMK) {
          // Fetch evaluations for the specific associate including the client name
          $evaluation_sql = "
              SELECT ae.*, c.nombreCliente 
              FROM asociadoEvaluacionMK ae
              JOIN relacionAsociadoClienteMK rac ON ae.idAsociadoMK = rac.idAsociadoMK
              JOIN cliente c ON rac.idCliente = c.idCliente
              WHERE ae.idAsociadoMK = ?
          ";
          $stmt = $conn->prepare($evaluation_sql);
          $stmt->bind_param("i", $idAsociadoMK);
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
                            <?php
                            $idAsociadoMK = isset($_GET['idAsociadoMK']) ? $_GET['idAsociadoMK'] : '';

                            if ($idAsociadoMK) {
                                $sql = "SELECT a.idCliente, a.nombreCliente
                                        FROM cliente a
                                        JOIN relacionAsociadoClienteMK rac ON a.idCliente = rac.idCliente
                                        WHERE rac.idAsociadoMK = ?";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("i", $idAsociadoMK);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                $options = '';
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $options .= '<option value="' . $row['idCliente'] . '">' . $row['nombreCliente'] . '</option>';
                                    }
                                } else {
                                    $options .= '<option value="">No Client available</option>';
                                }
                                $stmt->close();
                            } else {
                                $options = '<option value="">No client ID provided</option>';
                            }
                            ?>
                            <div class="form-group">
                                        <label for="ClientSelect">Select Client</label>
                                        <select class="form-control" id="ClientSelect" name="idCliente">
                                        <option selected disabled>Select one</option>
                                        <?php echo $options; ?>
                                        </select>
                                    </div>
                            <div class="form-group">
                                <label>Interviewer</label>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="interviewerSupervisor" name="entrevistador[]" value="Supervisor">
                                    <label for="interviewerSupervisor">Supervisor</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="interviewerManager" name="entrevistador[]" value="Manager">
                                    <label for="interviewerManager">Manager</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="puntuacionTareasSemanales=">W. Tasks Score</label>
                                <input type="number" class="form-control" id="puntuacionTareasSemanales" name="puntuacionTareasSemanales" required>
                            </div>
                            <div class="form-group">
                                <label for="aSat">ASAT</label>
                                <input type="number" class="form-control" id="aSat" name="aSat" required>
                            </div>
                            <div class="form-group">
                                <label for="notasPuntuacionAsat">Score Note:</label>
                                <textarea class="form-control" id="notasPuntuacionAsat" name="notasPuntuacionAsat" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="cargaDeTrabajo">Associate Workload</label>
                                <input type="number" class="form-control" id="cargaDeTrabajo" name="cargaDeTrabajo" required>
                            </div>
                            <div class="form-group">
                                <label for="diasTrabajados">Work Days</label>
                                <input type="number" class="form-control" id="diasTrabajados" name="diasTrabajados" required>
                            </div>
                            <div class="form-group">
                                <label for="llegadasTarde">Late Arrivals (after 5 minutes)</label>
                                <input type="number" class="form-control" id="llegadasTarde" name="llegadasTarde" required>
                            </div>
                            <div class="form-group">
                                <label>Timely Weekly Report</label>
                                <select class="form-control custom-select" name="reporteSemanal" required>
                                    <option selected disabled>Select one</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="proyectos">Main Tasks or Projects</label>
                                <textarea class="form-control" id="proyectos" name="proyectos" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="problemas">Problems of Opportunities</label>
                                <textarea class="form-control" id="problemas" name="problemas" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="soluciones">Solutions</label>
                                <textarea class="form-control" id="soluciones" name="soluciones" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Associate Feedback to VOOV or MKT Department</label>
                                <select class="form-control custom-select" name="feedbackVoov" required>
                                    <option selected disabled>Select one</option>
                                    <option value="Satisfactory">Satisfactory</option>
                                    <option value="Not Satisfactory">Not Satisfactory</option>
                                    <option value="Can be improved">Can be improved</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="notasFeedback">Feedback Notes</label>
                                <textarea class="form-control" id="notasFeedback" name="notasFeedback" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="refuerzoPositivo">Positive Reinforce</label>
                                <textarea class="form-control" id="refuerzoPositivo" name="refuerzoPositivo" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="areasAMejorar">Improvement Areas</label>
                                <textarea class="form-control" id="areasAMejorar" name="areasAMejorar" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="planDeAccion">Action Plan</label>
                                <textarea class="form-control" id="planDeAccion" name="planDeAccion" rows="4" required></textarea>
                            </div>  
                            <div class="form-group">
                                <label for="notasFinales">Final Notes</label>
                                <textarea class="form-control" id="notasFinales" name="notasFinales" rows="4" required></textarea>
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
                url: 'indexAsociadoMK.php?idAsociadoMK=<?= $idAsociadoMK ?>',
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    console.log("Response:", response);
                    // Redirect to the current page with the idAsociado parameter
                    var idAsociadoMK = new URLSearchParams(window.location.search).get('idAsociadoMK');
                    window.location.href = 'indexAsociadoMK.php?idAsociadoMK=' + idAsociadoMK;
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
                                <th id="evalNumberHeader" data-sort="asc">Ass. 1:1 # <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th id="dateHeader" data-sort="asc">Date <ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th>Client</th>                       
                                <th>Interviewer</th>
                                <th>W. Tasks Score</th>
                                <th id="csatHeader" data-sort="asc">ASAT<ion-icon name="arrow-up-outline" class="sort-icon"></ion-icon><ion-icon name="arrow-down-outline" class="sort-icon"></ion-icon></th>
                                <th>Score Note</th>
                                <th>Associate Workload</th>
                                <th>Work Days</th>
                                <th>Late Arrivals (after 5 minutes)</th>
                                <th>Timely Weekly Report</th>
                                <th>Main Tasks or Projects</th>
                                <th>Problems or Opportunities</th>
                                <th>Solutions</th>
                                <th>Assoc. Feedback to VOOV or MKT Dept.</th>
                                <th>Feedback Notes</th>
                                <th>Positive Reinforce</th>
                                <th>Improvement Areas</th>
                                <th>Action Plan</th>
                                <th>Final Notes</th>     
                        </thead>
                        <tbody>
                            <?php if ($evaluation_result->num_rows > 0): ?>
                                <?php while ($row = $evaluation_result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['idAsociadoEvaluacionMK'] ?></td>
                                        <td><?= $row['fechaEvaluacion'] ?></td>
                                        <td><?= $row['nombreCliente'] ?></td>
                                        <td><?= $row['entrevistador'] ?></td>
                                        <td><?= $row['puntuacionTareasSemanales'] ?></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: <?= ($row['aSat']) ?>%;" aria-valuenow="<?= $row['aSat'] ?>" aria-valuemin="0" aria-valuemax="10">
                                                    <?= $row['aSat'] ?>%
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['notasPuntuacionAsat']) ?>"><?= nl2br(htmlspecialchars($row['notasPuntuacionAsat'])) ?></span></td>
                                        <td><?= $row['cargaDeTrabajo'] ?></td>
                                        <td><?= $row['diasTrabajados'] ?></td>
                                        <td><?= $row['llegadasTarde'] ?></td>
                                        <td><?= $row['reporteSemanal'] ?></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['proyectos']) ?>"><?= nl2br(htmlspecialchars($row['proyectos'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['problemas']) ?>"><?= nl2br(htmlspecialchars($row['problemas'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['soluciones']) ?>"><?= nl2br(htmlspecialchars($row['soluciones'])) ?></span></td>
                                        <td><?= $row['feedbackVoov'] ?></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['notasFeedback']) ?>"><?= nl2br(htmlspecialchars($row['notasFeedback'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['refuerzoPositivo']) ?>"><?= nl2br(htmlspecialchars($row['refuerzoPositivo'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['areasAMejorar']) ?>"><?= nl2br(htmlspecialchars($row['areasAMejorar'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['planDeAccion']) ?>"><?= nl2br(htmlspecialchars($row['planDeAccion'])) ?></span></td>
                                        <td><span class="text-preview" data-text="<?= htmlspecialchars($row['notasFinales']) ?>"><?= nl2br(htmlspecialchars($row['notasFinales'])) ?></span></td>
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
<div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="textModalLabel">Full Text</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre id="modalTextContent"></pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const textPreviews = document.querySelectorAll('.text-preview');
        const modalTextContent = document.getElementById('modalTextContent');
        const textModal = new bootstrap.Modal(document.getElementById('textModal'));

        textPreviews.forEach(preview => {
            preview.addEventListener('click', function (event) {
                event.preventDefault();
                const fullText = this.getAttribute('data-text');
                modalTextContent.textContent = fullText;
                textModal.show();
            });
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
