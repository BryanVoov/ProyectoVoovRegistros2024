
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Project Edit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
        .form-group label {
            white-space: nowrap;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../index.php" class="nav-link">Home</a>
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
              <img src="../../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
    <a href="../../../index3.html" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
                Finance Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="indexFinanzas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General Dashboard</p>
                  </a>
                </li>
    
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
             <a href="verAsociadosVA.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>VA Associates</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="verAsociadosMK.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>MK Associates</p>
            </a>
          </li>
          <li class="nav-item">
             <a href="verAsociadosISA.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ISA Associates</p>
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
          <a href="verclientes.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>All Clients</p>
          </a>
        </li>
      </ul>
</li>
   
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLIENT PAYMENTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Client Payments</li>
            </ol>
            
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <section>
    <div class="container mt-4">
    <?php
include("db.php");

// Get the idCliente from the URL
$idCliente = isset($_GET['idCliente']) ? $_GET['idCliente'] : '';
$selectedAssociate = isset($_GET['idAsociado']) ? $_GET['idAsociado'] : '';
$query = "SELECT * FROM cliente WHERE idCliente = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $nombreCliente = $row["nombreCliente"];
}

// Fetch associates related to the client
$associateNames = [];
if (!empty($idCliente)) {
    $sql = "SELECT idAsociadoVA AS idAsociado, 'VA' AS source FROM relacionAsociadoClienteVA WHERE idCliente = ?
            UNION
            SELECT idAsociadoMK AS idAsociado, 'MK' AS source FROM relacionAsociadoClienteMK WHERE idCliente = ?
            UNION
            SELECT idAsociadoISA AS idAsociado, 'ISA' AS source FROM relacionAsociadoClienteISA WHERE idCliente = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iii", $idCliente, $idCliente, $idCliente);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $idAsociado = $row['idAsociado'];
            $sourceTable = $row['source'];

            // Adjust table and column names based on the source table
            $tableMap = [
                'VA' => 'asociadova',
                'MK' => 'asociadomk',
                'ISA' => 'asociadoisa'
            ];
            $columnMap = [
                'VA' => 'idAsociadoVA',
                'MK' => 'idAsociadoMK',
                'ISA' => 'idAsociadoISA'
            ];
            $nameColumnMap = [
                'VA' => 'nombreAsociado',
                'MK' => 'nombreAsociado',
                'ISA' => 'nombreAsociado'
            ];

            $tableName = $tableMap[$sourceTable];
            $columnName = $columnMap[$sourceTable];
            $nameColumn = $nameColumnMap[$sourceTable];

            $sql = "SELECT $columnName AS idAsociado, $nameColumn AS nombreAsociado FROM $tableName WHERE $columnName = ?";
            $stmt2 = $conn->prepare($sql);

            if ($stmt2) {
                $stmt2->bind_param("i", $idAsociado);
                $stmt2->execute();
                $result2 = $stmt2->get_result();

                while ($row2 = $result2->fetch_assoc()) {
                    $associateNames[] = [
                        'idAsociado' => $row2['idAsociado'],
                        'nombreAsociado' => $row2['nombreAsociado'],
                        'sourceTable' => $sourceTable
                    ];
                }

                $stmt2->close();
            } else {
                die("Second prepare failed: (" . $conn->errno . ") " . $conn->error);
            }
        }

        $stmt->close();
    } else {
        die("First prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
} else {
    echo "<p>No idCliente found in the URL.</p>";
}

// Fetch unique years from fechaPago
$years = [];
$sql = "SELECT DISTINCT YEAR(fecha) AS year FROM pagosCliente WHERE idCliente = ?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("i", $idCliente);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $years[] = $row['year'];
    }
    $stmt->close();
}
?>


<div class="container">
    <div class="row my-4">
        <div class="col-md-12 text-center">
            <h1><strong>Client Name: </strong><?= htmlspecialchars($nombreCliente) ? htmlspecialchars($nombreCliente) : 'Unknown' ?></h1>
        </div>
    </div>

    <!-- Form for Submitting Payment -->
    <form action="/adminvoov/pages/finanzas/controller/processPayment.php" method="post" class="row mt-3" onsubmit="return validateForm()">
        <input type="hidden" name="idCliente" value="<?php echo htmlspecialchars($idCliente); ?>">
        <input type="hidden" name="sourceTable" id="sourceTable" value="">

        <div class="form-group col-md-2">
            <label for="idAsociado">Associate:</label>
            <select class="form-control" name="idAsociado" id="idAsociado" required>
              <option value="" disabled selected>Select an Associate</option>
                <?php
                if (empty($associateNames)) {
                    echo "<option value=''>No associates found</option>";
                } else {
                    foreach ($associateNames as $associate) {
                        echo '<option value="' . htmlspecialchars($associate['idAsociado']) . '" data-source="' . htmlspecialchars($associate['sourceTable']) . '">' . htmlspecialchars($associate['nombreAsociado']) . ' (' . htmlspecialchars($associate['sourceTable']) . ')</option>';
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="fecha">Fecha:</label>
            <input type="month" class="form-control" name="fecha" id="fecha" required>
        </div>

        <div class="form-group col-md-2">
            <label for="ingresoAsociado">Ingreso Asociado:</label>
            <input type="number" class="form-control" step="0.01" name="ingresoAsociado" id="ingresoAsociado" required>
        </div>

        <div class="form-group col-md-2">
            <label for="descuento">Descuento:</label>
            <input type="number" class="form-control" step="0.01" name="descuento" id="descuento" required>
        </div>

        <div class="form-group col-md-2">
            <label for="ingresoClienteNuevo">Ingreso Cliente Nuevo:</label>
            <input type="number" class="form-control" step="0.01" name="ingresoClienteNuevo" id="ingresoClienteNuevo" required>
        </div>

        <div class="form-group col-md-2">
            <label for="ingresoComision">Ingreso Comision:</label>
            <input type="number" class="form-control" step="0.01" name="ingresoComision" id="ingresoComision" required>
        </div>

        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </div>
    </form>

    <!-- Table Card -->
    <div class="card mt-5">
        <div class="card-header">
            <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row mb-0">
                <input type="hidden" name="idCliente" value="<?php echo htmlspecialchars($idCliente); ?>">

                <div class="form-group col-md-2">
                    <label>Associate</label>
                    <select class="form-control custom-select" name="idAsociado" onchange="this.form.submit()">
                        <option value="all" <?php if ($selectedAssociate == 'all') echo 'selected'; ?>>All</option>
                        <?php
                        foreach ($associateNames as $associate) {
                            echo '<option value="' . htmlspecialchars($associate['idAsociado']) . '" ' . ($selectedAssociate == $associate['idAsociado'] ? 'selected' : '') . '>' . htmlspecialchars($associate['nombreAsociado']) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>Month</label>
                    <select class="form-control custom-select" name="month" onchange="this.form.submit()">
                        <option value="all" <?php if (isset($_GET['month']) && $_GET['month'] == 'all') echo 'selected'; ?>>All</option>
                        <?php
                        for ($m = 1; $m <= 12; $m++) {
                            $monthName = date('F', mktime(0, 0, 0, $m, 1));
                            echo '<option value="' . $m . '" ' . (isset($_GET['month']) && $_GET['month'] == $m ? 'selected' : '') . '>' . $monthName . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>Year</label>
                    <select class="form-control custom-select" name="year" onchange="this.form.submit()">
                        <option value="all" <?php if (isset($_GET['year']) && $_GET['year'] == 'all') echo 'selected'; ?>>All</option>
                        <?php
                        foreach ($years as $year) {
                            echo '<option value="' . $year . '" ' . (isset($_GET['year']) && $_GET['year'] == $year ? 'selected' : '') . '>' . $year . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>From Date</label>
                    <input type="date" class="form-control" name="fromDate" value="<?php echo isset($_GET['fromDate']) ? htmlspecialchars($_GET['fromDate']) : ''; ?>" onchange="this.form.submit()">
                </div>

                <div class="form-group col-md-2">
                    <label>To Date</label>
                    <input type="date" class="form-control" name="toDate" value="<?php echo isset($_GET['toDate']) ? htmlspecialchars($_GET['toDate']) : ''; ?>" onchange="this.form.submit()">
                </div>

                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?idCliente=' . htmlspecialchars($idCliente); ?>" class="btn btn-secondary btn-block">Reset Filters</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var idAsociadoSelect = document.getElementById('idAsociado');
        var sourceTableInput = document.getElementById('sourceTable');

        function setSourceTable() {
            var selectedOption = idAsociadoSelect.options[idAsociadoSelect.selectedIndex];
            sourceTableInput.value = selectedOption.getAttribute('data-source');
            console.log('Selected Option:', selectedOption.text);
            console.log('Source Table:', selectedOption.getAttribute('data-source'));
        }

        // Set sourceTable on page load
        setSourceTable();

        // Update sourceTable on change
        idAsociadoSelect.addEventListener('change', setSourceTable);
    });

    function validateForm() {
        var sourceTable = document.getElementById('sourceTable').value;
        if (sourceTable === "") {
            alert("Please select a valid associate to set the source table.");
            return false; // Prevent form submission
        }
        console.log('Source Table on Submit:', sourceTable);
        return true; // Allow form submission
    }
</script>
       
      <div class="card-body p-0">
    <div class="table-responsive" style="max-height: 400px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha Pago</th>
                    <th>Nombre Asociado</th>
                    <th>Ingreso Asociado</th>
                    <th>Ingreso Cliente Nuevo</th>
                    <th>Comision</th>
                    <th>Descuento</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Get filter values
                $month = isset($_GET['month']) ? $_GET['month'] : 'all';
                $year = isset($_GET['year']) ? $_GET['year'] : 'all';
                $fromDate = isset($_GET['fromDate']) ? $_GET['fromDate'] : '';
                $toDate = isset($_GET['toDate']) ? $_GET['toDate'] : '';
                $selectedAssociate = isset($_GET['idAsociado']) ? $_GET['idAsociado'] : 'all';

                // Fetch payment data for the table
                $paymentData = [];
                $totalSum = 0;
                $sql = "SELECT p.fecha AS fechaPago, 
                               a.nombreAsociado AS nombreAsociado, 
                               p.ingresoAsociado, 
                               p.ingresoClienteNuevo,
                               p.ingresoComision AS comision, 
                               p.descuento, 
                               (p.ingresoAsociado + p.ingresoClienteNuevo + p.ingresoComision - p.descuento) AS total
                        FROM pagosCliente p
                        JOIN (
                            SELECT idAsociadoVA AS idAsociado, nombreAsociado FROM asociadova
                            UNION
                            SELECT idAsociadoMK AS idAsociado, nombreAsociado FROM asociadomk
                            UNION
                            SELECT idAsociadoISA AS idAsociado, nombreAsociado FROM asociadoisa
                        ) a ON p.idAsociado = a.idAsociado
                        WHERE p.idCliente = ?";

                // Apply filters
                if ($selectedAssociate != 'all') {
                    $sql .= " AND p.idAsociado = ?";
                }
                if ($month != 'all') {
                    $sql .= " AND MONTH(p.fecha) = ?";
                }
                if ($year != 'all') {
                    $sql .= " AND YEAR(p.fecha) = ?";
                }
                if (!empty($fromDate)) {
                    $sql .= " AND p.fecha >= ?";
                }
                if (!empty($toDate)) {
                    $sql .= " AND p.fecha <= ?";
                }

                $stmt = $conn->prepare($sql);

                // Dynamically bind parameters
                $params = [];
                $types = "i";
                $params[] = &$idCliente;
                if ($selectedAssociate != 'all') {
                    $types .= "i";
                    $params[] = &$selectedAssociate;
                }
                if ($month != 'all') {
                    $types .= "i";
                    $params[] = &$month;
                }
                if ($year != 'all') {
                    $types .= "i";
                    $params[] = &$year;
                }
                if (!empty($fromDate)) {
                    $types .= "s";
                    $params[] = &$fromDate;
                }
                if (!empty($toDate)) {
                    $types .= "s";
                    $params[] = &$toDate;
                }

                // Bind parameters dynamically
                call_user_func_array([$stmt, 'bind_param'], array_merge([$types], $params));
                
                if ($stmt) {
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        $paymentData[] = $row;
                        $totalSum += $row['total'];
                    }
                    $stmt->close();
                }

                // Display payment data in the table
                if (!empty($paymentData)) {
                    foreach ($paymentData as $payment) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($payment['fechaPago']) . '</td>';
                        echo '<td>' . htmlspecialchars($payment['nombreAsociado']) . '</td>';
                        echo '<td>$' . htmlspecialchars(number_format($payment['ingresoAsociado'], 2)) . '</td>';
                        echo '<td>$' . htmlspecialchars(number_format($payment['ingresoClienteNuevo'], 2)) . '</td>';
                        echo '<td>$' . htmlspecialchars(number_format($payment['comision'], 2)) . '</td>';
                        echo '<td>$' . htmlspecialchars(number_format($payment['descuento'], 2)) . '</td>';
                        echo '<td>$' . htmlspecialchars(number_format($payment['total'], 2)) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="7">No payment data found</td></tr>';
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="text-right"><strong>Total:</strong></td>
                    <td><?php echo '$' . htmlspecialchars(number_format($totalSum, 2)); ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
// JavaScript to set the hidden field 'sourceTable' based on selected associate
document.getElementById('idAsociado').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var sourceTable = selectedOption.getAttribute('data-source');
    document.getElementById('sourceTable').value = sourceTable;
});

// Ensure sourceTable value is set on form submit
document.querySelector('form').addEventListener('submit', function() {
    var selectedOption = document.getElementById('idAsociado').options[document.getElementById('idAsociado').selectedIndex];
    document.getElementById('sourceTable').value = selectedOption.getAttribute('data-source');
});
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
  <script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- ChartJS -->
  <script src="../../../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../../plugins/moment/moment.min.js"></script>
  <script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../../dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../dist/js/demo.js"></script>

  <!-- Custom script to ensure jQuery is loaded properly -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://voovtech.net">Bryan Mercado</a>.</strong> All rights
    reserved.
  </footer>
</div>
</body>
</html>