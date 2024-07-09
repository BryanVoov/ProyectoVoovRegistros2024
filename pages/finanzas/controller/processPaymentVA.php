<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminvoov";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data
$idAsociadoVA = isset($_POST['idAsociadoVA']) ? $_POST['idAsociadoVA'] : '';
$idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '';
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] . '-01' : '';
$salario = isset($_POST['salario']) ? $_POST['salario'] : '';
$costosAdministrativos = isset($_POST['costosAdministrativos']) ? $_POST['costosAdministrativos'] : '';
$costoSupervisor = isset($_POST['costoSupervisor']) ? $_POST['costoSupervisor'] : '';
$costoManagement = isset($_POST['costoManagement']) ? $_POST['costoManagement'] : '';

// Insert data into pagosAsociadoVA table
$sql = "INSERT INTO pagosAsociadoVA (idAsociadoVA, idCliente, fecha, salario, costosAdministrativos, costoSupervisor, costoManagement) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind the parameters (note that fecha is a string, so we use 's' for it)
$stmt->bind_param("iissddd", $idAsociadoVA, $idCliente, $fecha, $salario, $costosAdministrativos, $costoSupervisor, $costoManagement);

if ($stmt->execute()) {
    echo "Payment recorded successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect to the previous page
header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>
