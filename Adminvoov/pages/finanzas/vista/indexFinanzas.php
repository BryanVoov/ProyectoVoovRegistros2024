<?php
include("db.php");

?>
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
        .chart-container {
            position: relative;
            width: 100%;
            height: 200px;
        }

        
    </style>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.css">
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
    <a href="index3.html" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Finance Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Finance Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Button to trigger the modal for adding an evaluation -->
        <div class="button-wrapper" style="text-align: left; margin-top: 20px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRegisterModal">
                Add Contract Register
            </button>
        </div>

        <!-- Modal for adding new Register -->
        <div class="modal fade" id="addRegisterModal" tabindex="-1" role="dialog" aria-labelledby="addRegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRegisterModalLabel">Add Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addRegisterForm" method="post" action="/adminvoov/pages/finanzas/controller/insertRegister.php">
                            <div class="form-group">
                                <label for="fecha">Register Date</label>
                                <input type="month" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="form-group">
                                <label for="contratosEnviados">Sent Contracts</label>
                                <input type="number" class="form-control" id="contratosEnviados" name="contratosEnviados" required>
                            </div>
                            <div class="form-group">
                                <label for="contratosFirmados">Signed Contracts</label>
                                <input type="number" class="form-control" id="contratosFirmados" name="contratosFirmados" required>
                            </div>
                            <div class="form-group">
                                <label for="costoContratosFirmados">$ Cost Signed Contracts</label>
                                <input type="number" class="form-control" id="costoContratosFirmados" name="costoContratosFirmados" required>
                            </div>
                            <div class="form-group">
                                <label for="contratosTerminados">Terminated Contracts</label>
                                <input type="number" class="form-control" id="contratosTerminados" name="contratosTerminados" required>
                            </div>
                            <div class="form-group">
                                <label for="costoContratosTerminados">$ Cost Terminated Contracts</label>
                                <input type="number" class="form-control" id="costoContratosTerminados" name="costoContratosTerminados" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="insertRegister">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
    <!-- Row for charts -->
    <div class="row">
        <!-- Bar chart canvas -->
        <div class="col-md-6 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Contracts Chart</h3>
                <canvas id="contractsChart"></canvas>
            </div>
        </div>
        <!-- Line chart canvas -->
        <div class="col-md-6 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Signed Rate Chart</h3>
                <canvas id="signedRateChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Row for additional chart -->
    <div class="row">
        <!-- New Contracts vs Terminated Contracts chart canvas -->
        <div class="col-md-6 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Signed vs Terminated Contracts</h3>
                <canvas id="signedTerminatedChart"></canvas>
            </div>
        </div>

        <!-- Terminated Contract Ratio chart canvas -->
        <div class="col-md-6 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Terminated Contract Ratio</h3>
                <canvas id="terminatedContractRatioChart"></canvas>
            </div>
        </div>
    </div>

    <!-- New row for the additional cost chart -->
    <div class="row">
        <!-- Costs Chart canvas -->
        <div class="col-md-12 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Costs Chart</h3>
                <canvas id="costsChart"></canvas>
            </div>
        </div>
    </div>

    <!-- New row for additional charts -->
    <div class="row">
        <!-- Chart for Active Clients by Month -->
        <div class="col-md-12 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Active Clients by Month</h3>
                <canvas id="anotherAdditionalChart"></canvas>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Client Distribution chart canvas 1 -->
        <div class="col-md-4 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Client Distribution Among Departments</h3>
                <canvas id="clientDistributionChart"></canvas>
            </div>
        </div>
        <!-- Client Distribution chart canvas 2 -->
        <div class="col-md-4 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Income from Clients Among Departments</h3>
                <canvas id="clientDistributionChart2"></canvas>
            </div>
        </div>
        <!-- Client Distribution chart canvas 3 -->
        <div class="col-md-4 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Associate Expenses Among Departments</h3>
                <canvas id="clientDistributionChart3"></canvas>
            </div>
        </div>
    </div>


    <div class="row">
    <!-- Existing charts ... -->

    <!-- Utility donut chart canvas -->
        <div class="col-md-12 col-sm-12">
            <div class="chart-container" style="margin-top: 40px; margin-bottom: 40px;">
                <h3 class="text-center">Utilities by Department</h3>
                <canvas id="utilityChart"></canvas>
            </div>
        </div>
    </div>
    <!-- Table for Income, Expenses, Utilities -->
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Department</th>
                                <th>Income</th>
                                <th>Expenses</th>
                                <th>Utilities</th>
                            </tr>
                        </thead>
                        <tbody id="utilitiesTableBody">
                    <?php
                    include("db.php");

                    // Fetch income and expenses data for utilities calculation
                $sqlIncomeExpenses = "
                SELECT 'ISA' as department, SUM(ingresoAsociado) as total_income,
                    (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) FROM pagosAsociadoISA) as total_expense
                FROM pagosCliente
                WHERE sourceTable = 'ISA'
                UNION ALL
                SELECT 'Marketing' as department, SUM(ingresoAsociado) as total_income,
                    (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) FROM pagosAsociadoMK) as total_expense
                FROM pagosCliente
                WHERE sourceTable = 'MK'
                UNION ALL
                SELECT 'VA' as department, SUM(ingresoAsociado) as total_income,
                    (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) FROM pagosAsociadoVA) as total_expense
                FROM pagosCliente
                WHERE sourceTable = 'VA'
            ";

            $resultIncomeExpenses = $conn->query($sqlIncomeExpenses);

            if ($resultIncomeExpenses->num_rows > 0) {
                while ($row = $resultIncomeExpenses->fetch_assoc()) {
                    $department = $row['department'];
                    $totalIncome = (float)$row['total_income'];
                    $totalExpense = (float)$row['total_expense'];
                    $utility = $totalIncome - $totalExpense;

                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($department) . "</td>";
                    echo "<td>" . number_format($totalIncome, 2) . "</td>";
                    echo "<td>" . number_format($totalExpense, 2) . "</td>";
                    echo "<td>" . number_format($utility, 2) . "</td>";
                    echo "</tr>";
                }
            }

                    $conn->close();
                    ?>
                </tbody>
                    </table>
                </div>
            </div>
        </div>



</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Debugging messages to check if the DOM is fully loaded
            console.log('DOM fully loaded and parsed');

            // Fetch data for the chart
            var ctx = document.getElementById('contractsChart').getContext('2d');
            var contractsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [], // Months and years will go here
                    datasets: [
                        {
                            label: 'Sent',
                            backgroundColor: '#3e95cd',
                            data: [] // Sent contracts data will go here
                        },
                        {
                            label: 'Signed',
                            backgroundColor: '#8e5ea2',
                            data: [] // Signed contracts data will go here
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Monthly Sent and Signed Contracts'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ensure y-axis ticks are whole numbers
                            }
                        }
                    }
                }
            });

            // Fetch data for the line chart
            var ctxLine = document.getElementById('signedRateChart').getContext('2d');
            var signedRateChart = new Chart(ctxLine, {
                type: 'line',
                data: {
                    labels: [], // Months and years will go here
                    datasets: [
                        {
                            label: 'Signed Rate (%)',
                            backgroundColor: 'rgba(62, 149, 205, 0.2)',
                            borderColor: '#3e95cd',
                            data: [] // Signed rate data will go here
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Monthly Signed Contracts Rate'
                        },
                        datalabels: {
                            display: true,
                            align: 'top',
                            formatter: function (value, context) {
                                return value + '%';
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                callback: function (value, index, values) {
                                    return new Date(value).toLocaleString('default', { month: 'short', year: 'numeric' });
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                stepSize: 1, // Ensure y-axis ticks are whole numbers
                                callback: function (value) {
                                    return value + '%'; // Append % to the ticks
                                }
                            }
                        }
                    }
                },
            });

            // Fetch data for the new chart (New Contracts Signed vs Terminated Contracts)
            var ctxNew = document.getElementById('signedTerminatedChart').getContext('2d');
            var signedTerminatedChart = new Chart(ctxNew, {
                type: 'bar',
                data: {
                    labels: [], // Months and years will go here
                    datasets: [
                        {
                            label: 'New Contract Signed',
                            backgroundColor: '#3e95cd',
                            data: [] // New Contract Signed data will go here
                        },
                        {
                            label: 'Terminated Contract',
                            backgroundColor: '#8e5ea2',
                            data: [] // Terminated Contract data will go here
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Monthly New Contracts Signed and Terminated Contracts'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1 // Ensure y-axis ticks are whole numbers
                            }
                        }
                    }
                }
            });

            // Fetch data for the Terminated Contract Ratio chart
            var ctxRatio = document.getElementById('terminatedContractRatioChart').getContext('2d');
            var terminatedContractRatioChart = new Chart(ctxRatio, {
                type: 'line',
                data: {
                    labels: [], // Months and years will go here
                    datasets: [
                        {
                            label: 'Terminated Contract Ratio (%)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            data: [] // Terminated contract ratio data will go here
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Monthly Terminated Contract Ratio'
                        },
                        datalabels: {
                            display: true,
                            align: 'top',
                            formatter: function (value, context) {
                                return value.toFixed(2);
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                callback: function (value, index, values) {
                                    return new Date(value).toLocaleString('default', { month: 'short', year: 'numeric' });
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1, // Ensure y-axis ticks are whole numbers
                                callback: function (value) {
                                    return value.toFixed(2); // Append fixed decimal places to the ticks
                                }
                            }
                        }
                    }
                }
            });
                        // Initialize the costs chart
                var ctxCosts = document.getElementById('costsChart').getContext('2d');
                var costsChart = new Chart(ctxCosts, {
                    type: 'bar',
                    data: {
                        labels: [], // Months and years will go here
                        datasets: [
                            {
                                label: 'Cost Signed Contracts',
                                backgroundColor: '#3e95cd',
                                data: [] // Total cost of signed contracts will go here
                            },
                            {
                                label: 'Cost Terminated Contracts',
                                backgroundColor: '#8e5ea2',
                                data: [] // Total cost of terminated contracts will go here
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Monthly Costs of Signed and Terminated Contracts'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1 // Ensure y-axis ticks are whole numbers
                                }
                            }
                        }
                    }
                });


            // Initialize the client distribution charts
            function createClientDistributionChart(ctx) {
                return new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [], // Departments will go here
                        datasets: [{
                            data: [], // Client counts will go here
                            backgroundColor: [
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 159, 64, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Client Distribution by Department'
                            }
                        }
                    }
                });
            }

            var ctxClientDistribution = document.getElementById('clientDistributionChart').getContext('2d');
            var clientDistributionChart = createClientDistributionChart(ctxClientDistribution);

            var ctxClientDistribution2 = document.getElementById('clientDistributionChart2').getContext('2d');
            var clientDistributionChart2 = createClientDistributionChart(ctxClientDistribution2);

            var ctxClientDistribution3 = document.getElementById('clientDistributionChart3').getContext('2d');
            var clientDistributionChart3 = createClientDistributionChart(ctxClientDistribution3);

            // Initialize the another additional chart (anotherAdditionalChart)
            var ctxAnotherAdditional = document.getElementById('anotherAdditionalChart').getContext('2d');
            var anotherAdditionalChart = new Chart(ctxAnotherAdditional, {
                type: 'line',
                data: {
                    labels: [], // Months and years will go here
                    datasets: [{
                        label: 'Active Clients',
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        data: [] // Active clients data will go here
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Tendency of Active Clients by Month'
                        },
                        datalabels: {
                            display: true,
                            align: 'top',
                            formatter: function (value, context) {
                                return value;
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                callback: function (value, index, values) {
                                    return new Date(value).toLocaleString('default', { month: 'short', year: 'numeric' });
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1, // Ensure y-axis ticks are whole numbers
                                callback: function (value) {
                                    return value; // Append fixed decimal places to the ticks
                                }
                            }
                        }
                    }
                }
            });

// Create the utilities chart
var ctx = document.getElementById('utilityChart').getContext('2d');
    var utilityChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [], // Months and years
            datasets: [
                {
                    label: 'ISA',
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    data: [] // ISA Utilities data
                },
                {
                    label: 'Marketing',
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    data: [] // Marketing Utilities data
                },
                {
                    label: 'VA',
                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                    data: [] // VA Utilities data
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Monthly Utilities by Department'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000 // Adjust step size as needed
                    }
                }
            }
        }
    });

        // Fetch data from PHP
        <?php
        include("db.php");

        // Original query for the other charts
        $sqlOriginal = "SELECT DATE_FORMAT(fecha, '%b-%Y') as month_label,
                        SUM(contratosEnviados) as total_sent,
                        SUM(contratosFirmados) as total_signed,
                        SUM(contratosTerminados) as total_terminated, 
                        SUM(costoContratosFirmados) as total_cost_firmados,
                        SUM(costoContratosTerminados) as total_cost_terminados
                    FROM contratos
                    GROUP BY DATE_FORMAT(fecha, '%Y-%m')
                    ORDER BY fecha";

        $stmt = $conn->prepare($sqlOriginal);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $month_label = $row['month_label'];
                $total_sent = (int)$row['total_sent'];
                $total_signed = (int)$row['total_signed'];
                $total_terminated = (int)$row['total_terminated'];
                $total_cost_firmados = (int)$row['total_cost_firmados'];
                $total_cost_terminados = (int)$row['total_cost_terminados'];
                $rate = ($total_sent > 0) ? round(($total_signed / $total_sent) * 100, 2) : 0;
                $terminatedContractRatio = ($total_terminated > 0) ? round(($total_terminated / $total_signed) * 100, 2) : 0;

                // Update contractsChart
                echo "contractsChart.data.labels.push('$month_label');";
                echo "contractsChart.data.datasets[0].data.push($total_sent);";
                echo "contractsChart.data.datasets[1].data.push($total_signed);";

                // Update signedRateChart
                echo "signedRateChart.data.labels.push('$month_label');";
                echo "signedRateChart.data.datasets[0].data.push($rate);";

                // Update signedTerminatedChart
                echo "signedTerminatedChart.data.labels.push('$month_label');";
                echo "signedTerminatedChart.data.datasets[0].data.push($total_signed);";
                echo "signedTerminatedChart.data.datasets[1].data.push($total_terminated);";

                // Update terminatedContractRatioChart
                echo "terminatedContractRatioChart.data.labels.push('$month_label');";
                echo "terminatedContractRatioChart.data.datasets[0].data.push($terminatedContractRatio);";
 
                 // Update costsChart
                echo "costsChart.data.labels.push('$month_label');";
                echo "costsChart.data.datasets[0].data.push($total_cost_firmados);";
                echo "costsChart.data.datasets[1].data.push($total_cost_terminados);";
            }

        }

        // Query to fetch department data
        $sqlDepartments = "
            SELECT 'ISA' as department, COUNT(*) as client_count
            FROM relacionAsociadoClienteISA rac
            JOIN cliente c ON rac.idCliente = c.idCliente
            WHERE c.estadoActividad = 'active'
            UNION ALL
            SELECT 'Marketing' as department, COUNT(*) as client_count
            FROM relacionAsociadoClienteMK rac
            JOIN cliente c ON rac.idCliente = c.idCliente
            WHERE c.estadoActividad = 'active'
            UNION ALL
            SELECT 'VA' as department, COUNT(*) as client_count
            FROM relacionAsociadoClienteVA rac
            JOIN cliente c ON rac.idCliente = c.idCliente
            WHERE c.estadoActividad = 'active'
        ";

        $resultDepartments = $conn->query($sqlDepartments);

        if ($resultDepartments->num_rows > 0) {
            while ($row = $resultDepartments->fetch_assoc()) {
                $department = $row['department'];
                $clientCount = (int)$row['client_count'];

                // Update clientDistributionChart
                echo "clientDistributionChart.data.labels.push('$department');";
                echo "clientDistributionChart.data.datasets[0].data.push($clientCount);";
            }
        }

        // Query to fetch active clients data by month
        $sqlActiveClients = "SELECT DATE_FORMAT(aniversario, '%b-%Y') as month_label, COUNT(*) as active_clients
                            FROM cliente
                            WHERE estadoActividad = 'active'
                            GROUP BY DATE_FORMAT(aniversario, '%Y-%m')
                            ORDER BY aniversario";

        $resultActiveClients = $conn->query($sqlActiveClients);

        if ($resultActiveClients->num_rows > 0) {
            while ($row = $resultActiveClients->fetch_assoc()) {
                $month_label = $row['month_label'];
                $active_clients = (int)$row['active_clients'];

                // Update anotherAdditionalChart with active clients data
                echo "anotherAdditionalChart.data.labels.push('$month_label');";
                echo "anotherAdditionalChart.data.datasets[0].data.push($active_clients);";
            }
        }

        // Query to fetch total cost for each department
        $sqlTotalCost = "
            SELECT 'ISA' as department, SUM(ingresoAsociado) as total_cost
            FROM pagosCliente
            WHERE sourceTable = 'ISA'
            UNION ALL
            SELECT 'Marketing' as department, SUM(ingresoAsociado) as total_cost
            FROM pagosCliente
            WHERE sourceTable = 'MK'
            UNION ALL
            SELECT 'VA' as department, SUM(ingresoAsociado) as total_cost
            FROM pagosCliente
            WHERE sourceTable = 'VA'
        ";

        $resultTotalCost = $conn->query($sqlTotalCost);

        if ($resultTotalCost->num_rows > 0) {
            while ($row = $resultTotalCost->fetch_assoc()) {
                $department = $row['department'];
                $totalCost = (float)$row['total_cost'];

                // Update clientDistributionChart2 with total cost data
                echo "clientDistributionChart2.data.labels.push('$department');";
                echo "clientDistributionChart2.data.datasets[0].data.push($totalCost);";
            }
        }

        // Additional PHP code to fetch expenses data from the pagosAsociado tables
        $sqlExpenses = "
            SELECT 'ISA' as department, SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) as total_expense
            FROM pagosAsociadoISA
            UNION ALL
            SELECT 'Marketing' as department, SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) as total_expense
            FROM pagosAsociadoMK
            UNION ALL
            SELECT 'VA' as department, SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) as total_expense
            FROM pagosAsociadoVA
        ";

        $resultExpenses = $conn->query($sqlExpenses);

        if ($resultExpenses->num_rows > 0) {
            while ($row = $resultExpenses->fetch_assoc()) {
                $department = $row['department'];
                $totalExpense = (float)$row['total_expense'];

                // Update clientDistributionChart3 with total expense data
                echo "clientDistributionChart3.data.labels.push('$department');";
                echo "clientDistributionChart3.data.datasets[0].data.push($totalExpense);";
            }
        }

        // Fetch all unique months from pagosCliente and pagosAsociado tables
    $sqlMonths = "
    SELECT DISTINCT DATE_FORMAT(fecha, '%Y-%m') as month_label 
    FROM (
        SELECT fecha FROM pagosCliente
        UNION ALL
        SELECT fecha FROM pagosAsociadoISA
        UNION ALL
        SELECT fecha FROM pagosAsociadoMK
        UNION ALL
        SELECT fecha FROM pagosAsociadoVA
    ) AS combined
    ORDER BY month_label ASC
";

$resultMonths = $conn->query($sqlMonths);
$months = [];

if ($resultMonths->num_rows > 0) {
    while ($row = $resultMonths->fetch_assoc()) {
        $months[] = $row['month_label'];
    }
}

$sqlIncomeExpenses = "
    SELECT DATE_FORMAT(fecha, '%Y-%m') as month_label, 'ISA' as department, SUM(ingresoAsociado) as total_income,
        (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) 
         FROM pagosAsociadoISA 
         WHERE pagosAsociadoISA.fecha = pagosCliente.fecha) as total_expense
    FROM pagosCliente
    WHERE sourceTable = 'ISA'
    GROUP BY DATE_FORMAT(fecha, '%Y-%m')
    UNION ALL
    SELECT DATE_FORMAT(fecha, '%Y-%m') as month_label, 'Marketing' as department, SUM(ingresoAsociado) as total_income,
        (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) 
         FROM pagosAsociadoMK 
         WHERE pagosAsociadoMK.fecha = pagosCliente.fecha) as total_expense
    FROM pagosCliente
    WHERE sourceTable = 'MK'
    GROUP BY DATE_FORMAT(fecha, '%Y-%m')
    UNION ALL
    SELECT DATE_FORMAT(fecha, '%Y-%m') as month_label, 'VA' as department, SUM(ingresoAsociado) as total_income,
        (SELECT SUM(salario + costosAdministrativos + costoSupervisor + costoManagement) 
         FROM pagosAsociadoVA 
         WHERE pagosAsociadoVA.fecha = pagosCliente.fecha) as total_expense
    FROM pagosCliente
    WHERE sourceTable = 'VA'
    GROUP BY DATE_FORMAT(fecha, '%Y-%m')
    ORDER BY month_label ASC
";

$resultIncomeExpenses = $conn->query($sqlIncomeExpenses);

$monthlyData = [];
foreach ($months as $month) {
    $monthlyData[$month] = [
        'ISA' => 0,
        'Marketing' => 0,
        'VA' => 0
    ];
}

if ($resultIncomeExpenses->num_rows > 0) {
    while ($row = $resultIncomeExpenses->fetch_assoc()) {
        $month = $row['month_label'];
        $department = $row['department'];
        $totalIncome = $row['total_income'];
        $totalExpense = $row['total_expense'];
        $utility = $totalIncome - $totalExpense;

        $monthlyData[$month][$department] = $utility;
    }
}

// Prepare data for the chart
$chartLabels = array_keys($monthlyData);
$chartDataISA = [];
$chartDataMarketing = [];
$chartDataVA = [];

foreach ($monthlyData as $month => $departments) {
    $chartDataISA[] = $departments['ISA'];
    $chartDataMarketing[] = $departments['Marketing'];
    $chartDataVA[] = $departments['VA'];
}

// Convert PHP arrays to JavaScript arrays manually
echo "utilityChart.data.labels = " . json_encode($chartLabels) . ";";
echo "utilityChart.data.datasets[0].data = " . json_encode($chartDataISA) . ";";
echo "utilityChart.data.datasets[1].data = " . json_encode($chartDataMarketing) . ";";
echo "utilityChart.data.datasets[2].data = " . json_encode($chartDataVA) . ";";

        
           

        $stmt->close();
        $conn->close();
        ?>

        contractsChart.update();
        signedRateChart.update();
        signedTerminatedChart.update();
        terminatedContractRatioChart.update();
        costsChart.update();
        clientDistributionChart.update();
        clientDistributionChart2.update();
        clientDistributionChart3.update();
        anotherAdditionalChart.update();
        utilityChart.update();

    });
</script>
    </section>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
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