<?php
session_start(); // Esto debe estar al principio, antes de cualquier salida HTML.

?>



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
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
           Associate Control
         <i class="fas fa-angle-left right"></i>
       <span class="badge badge-info right">4</span>
          </p>
         </a>
      <ul class="nav nav-treeview">
          <li class="nav-item">
             <a href="asociadoAdd.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Associate</p>
            </a>
    </li>
    
    <li class="nav-item">
      <a href="verAsociadosISA.php" class="nav-link">
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
<ul class="nav nav-treeview">
    <li class="nav-item">
       <a href="clienteAdd.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Crear Cliente</p>
      </a>
</li>
<li class="nav-item">
<a href="verclientes.php" class="nav-link">
  <i class="far fa-circle nav-icon"></i>
  <p>Ver Cliente</p>
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
            <h1>New Associate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Associate</li>
            </ol>
            
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
   

    
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
            <!-- MALDITA ALERTA QUE ME COSTO UN DIA HACER TE ODIO -->
        
                
        <!-- MALDITA ALERTA QUE ME COSTO UN DIA HACER TE ODIO -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Associate Overview</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            
        
            <form action="/adminvoov/pages/asociadoISA/controller/agregarAsociado.php" method ="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label >Associate Name </label>
                <input type="text" name ="nombreAsociado"  class="form-control">
              </div>

              <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="text" id="cedula" name="cedula" class="form-control" pattern="\d{3}-\d{6}-\d{4}[A-Za-z]" title="Format: 000-000000-0000X" required>
              </div>

              <div class="form-group">
                <label >Email</label>
                <input type="email" name ="email"  class="form-control">
              </div>

              <div class="form-group">
                <label >Phone Number</label>
                <input type="text" name ="telefono"  class="form-control">
              </div>

              <div class="form-group">
                <label>Address</label>
                <textarea  name ="direccion" class="form-control" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label >Employee Number</label>
                <input type="text" name ="numeroEmpleado"  class="form-control">
              </div>

              <div class="form-group">
                <label >Date of Birth</label>
                <input type="date" name ="cumple"  class="form-control">
              </div>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    
        </div>
        <div class="col-md-6">
        
          <div class="card card-info">
          <div class="card-header">
              <h3 class="card-title">Administrative Info</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label>Contract</label>
                <select class="form-control custom-select"  name = "tipoContrato">
                  <option selected disabled>Select one</option>
                  <option>VOOV</option>
                  <option>Skillcloud</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label >Contract Start Date</label>
                <input type="date" name ="fechaContratacionV"  class="form-control">
              </div>

              <div class="form-group">
                <label >Client Contract Start Date</label>
                <input type="date" name ="fechaContratacionC"  class="form-control">
              </div>

              <div class="form-group">
                <label >Occupation with Client</label>
                <input type="text" name ="cargoCliente"  class="form-control">
              </div>

              <div class="form-group">
                <label >Starting Salary</label>
                <input type="number" name ="salarioInicial"  class="form-control">
              </div>
              <div class="form-group">
                <label >Entry Time</label>
                <input type="time" name ="horarioEntrada"  class="form-control">
              </div>

              <div class="form-group">
                <label >Exit Time</label>
                <input type="time" name ="horarioSalida"  class="form-control">
              </div>
              

              <div class="form-group">
                <label>Associate Activity Status</label>
                <select class="form-control custom-select"  name = "estadoActividad">
                  <option selected disabled>Select one</option>
                  <option>Active</option>
                  <option>Inactive</option>
                </select>
              </div>

              
 
            
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


      
      <div class="row">
        <div class="col-12">
          <a href="verAsociadosISA.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" name = "../controller/agregarAsociado.php"value="Add Associate" class="btn btn-success float-right">
       
        </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </form>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://voovtech.net">Bryan Mercado</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
</body>
</html>
