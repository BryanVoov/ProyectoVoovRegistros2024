<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminvoov";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully <br>";

// Get POST data
$idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '';
$idAsociado = isset($_POST['idAsociado']) ? $_POST['idAsociado'] : '';
$sourceTable = isset($_POST['sourceTable']) ? $_POST['sourceTable'] : '';
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] . '-01' : '';
$ingresoAsociado = isset($_POST['ingresoAsociado']) ? $_POST['ingresoAsociado'] : '';
$descuento = isset($_POST['descuento']) ? $_POST['descuento'] : '';
$ingresoClienteNuevo = isset($_POST['ingresoClienteNuevo']) ? $_POST['ingresoClienteNuevo'] : '';
$ingresoComision = isset($_POST['ingresoComision']) ? $_POST['ingresoComision'] : '';

// Debugging output
echo "idCliente: $idCliente<br>";
echo "idAsociado: $idAsociado<br>";
echo "sourceTable: $sourceTable<br>";
echo "fecha: $fecha<br>";
echo "ingresoAsociado: $ingresoAsociado<br>";
echo "descuento: $descuento<br>";
echo "ingresoClienteNuevo: $ingresoClienteNuevo<br>";
echo "ingresoComision: $ingresoComision<br>";

// Insert data into pagosCliente table
$sql = "INSERT INTO pagosCliente (idCliente, idAsociado, sourceTable, fecha, ingresoAsociado, descuento, ingresoClienteNuevo, ingresoComision) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind the parameters
$stmt->bind_param("iissdddd", $idCliente, $idAsociado, $sourceTable, $fecha, $ingresoAsociado, $descuento, $ingresoClienteNuevo, $ingresoComision);

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