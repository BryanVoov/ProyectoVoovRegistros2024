
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
            <h1>MK ASSOCIATES PAYMENTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MK Associates Payments</li>
            </ol>
            
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <section>
    <div class="container mt-4">
    <?php
// Database connection
include("db.php");

// Get the idAsociadoMK from the URL
$idAsociadoMK = isset($_GET['idAsociadoMK']) ? $_GET['idAsociadoMK'] : '';
$nombreAsociado = '';

// Fetch clients related to the associate
$clientNames = [];
if (!empty($idAsociadoMK)) {
    $sql = "SELECT c.idCliente, c.nombreCliente 
            FROM relacionAsociadoClienteMK rac
            JOIN cliente c ON rac.idCliente = c.idCliente
            WHERE rac.idAsociadoMK = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $idAsociadoMK);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $clientNames[] = [
                'idCliente' => $row['idCliente'],
                'nombreCliente' => $row['nombreCliente']
            ];
        }

        $stmt->close();
    } else {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
} else {
    echo "<p>No idAsociadoMK found in the URL.</p>";
}

// Fetch the associate's name based on the idAsociadoMK
if ($idAsociadoMK > 0) {
    $sql = "SELECT nombreAsociado FROM asociadoMK WHERE idAsociadoMK = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idAsociadoMK);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $nombreAsociado = $row['nombreAsociado'];
    }
    $stmt->close();
}
?>


<div class="container">
    <div class="row my-4">
        <div class="col-md-12 text-center">
            <h1><strong>Associate Name:</strong> <?php echo htmlspecialchars($nombreAsociado); ?></h1>
        </div>
    </div>

    <!-- Form to submit payment -->
    <form action="/adminvoov/pages/finanzas/controller/processPaymentMK.php" method="post">
        <input type="hidden" name="idAsociadoMK" value="<?php echo htmlspecialchars($idAsociadoMK); ?>">

        <div class="row">
            <div class="form-group col-md-2">
                <label for="idCliente">Client:</label>
                <select class="form-control" name="idCliente" id="idCliente" required>
                    <option value="" disabled selected>Please select</option>
                    <?php
                    if (!empty($clientNames)) {
                        foreach ($clientNames as $client) {
                            echo '<option value="' . htmlspecialchars($client['idCliente']) . '">' . htmlspecialchars($client['nombreCliente']) . '</option>';
                        }
                    } else {
                        echo "<option value=''>No clients found</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="fecha">Fecha:</label>
                <input type="month" class="form-control" name="fecha" id="fecha" required>
            </div>

            <div class="form-group col-md-2">
                <label for="salario">Salario:</label>
                <input type="number" class="form-control" step="0.01" name="salario" id="salario" required>
            </div>
            
            <div class="form-group col-md-2">
                <label for="costosAdministrativos">Costos Administrativos:</label>
                <input type="number" class="form-control" step="0.01" name="costosAdministrativos" id="costosAdministrativos" required>
            </div>
            
            <div class="form-group col-md-2">
                <label for="costoSupervisor">Costo Supervisor:</label>
                <input type="number" class="form-control" step="0.01" name="costoSupervisor" id="costoSupervisor" required>
            </div>
            
            <div class="form-group col-md-2">
                <label for="costoManagement">Costo Management:</label>
                <input type="number" class="form-control" step="0.01" name="costoManagement" id="costoManagement" required>
            </div>
        </div>
        
        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </div>
    </form>
    <div class="card mt-5">
        <div class="card-header">
            <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row mb-0">
                <input type="hidden" name="idAsociadoMK" value="<?php echo htmlspecialchars($idAsociadoMK); ?>">

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

                <div class="form-group col-md-3">
                    <label>From Date</label>
                    <input type="date" class="form-control" name="fromDate" value="<?php echo isset($_GET['fromDate']) ? htmlspecialchars($_GET['fromDate']) : ''; ?>" onchange="this.form.submit()">
                </div>

                <div class="form-group col-md-3">
                    <label>To Date</label>
                    <input type="date" class="form-control" name="toDate" value="<?php echo isset($_GET['toDate']) ? htmlspecialchars($_GET['toDate']) : ''; ?>" onchange="this.form.submit()">
                </div>

                <div class="form-group col-md-2">
                    <label>&nbsp;</label>
                    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?idAsociadoMK=' . htmlspecialchars($idAsociadoMK); ?>" class="btn btn-secondary btn-block">Reset Filters</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive" style="max-height: 400px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Fecha Pago</th>
                            <th>Nombre Cliente</th>
                            <th>Salario</th>
                            <th>Costos Administrativos</th>
                            <th>Costo Supervisor</th>
                            <th>Costo Management</th>
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

                        // Fetch payment data for the table
                        $paymentData = [];
                        $totalSum = 0;
                        $sql = "SELECT p.fecha AS fechaPago, 
                                       c.nombreCliente AS nombreCliente, 
                                       p.salario, 
                                       p.costosAdministrativos,
                                       p.costoSupervisor AS costoSupervisor, 
                                       p.costoManagement, 
                                       (p.salario + p.costosAdministrativos + p.costoSupervisor + p.costoManagement) AS total
                                FROM pagosAsociadoMK p
                                JOIN cliente c ON p.idCliente = c.idCliente
                                WHERE p.idAsociadoMK = ?";

                        // Apply filters
                        if ($month != 'all') {
                            $sql .= " AND MONTH(p.fecha) = " . (int)$month;
                        }
                        if ($year != 'all') {
                            $sql .= " AND YEAR(p.fecha) = " . (int)$year;
                        }
                        if (!empty($fromDate)) {
                            $sql .= " AND p.fecha >= '" . $conn->real_escape_string($fromDate) . "'";
                        }
                        if (!empty($toDate)) {
                            $sql .= " AND p.fecha <= '" . $conn->real_escape_string($toDate) . "'";
                        }

                        $stmt = $conn->prepare($sql);
                        if ($stmt) {
                            $stmt->bind_param("i", $idAsociadoMK);
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
                                echo '<td>' . htmlspecialchars($payment['nombreCliente']) . '</td>';
                                echo '<td>$' . htmlspecialchars(number_format($payment['salario'], 2)) . '</td>';
                                echo '<td>$' . htmlspecialchars(number_format($payment['costosAdministrativos'], 2)) . '</td>';
                                echo '<td>$' . htmlspecialchars(number_format($payment['costoSupervisor'], 2)) . '</td>';
                                echo '<td>$' . htmlspecialchars(number_format($payment['costoManagement'], 2)) . '</td>';
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

</body>
</html>