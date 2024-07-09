<?php 
session_start(); 

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminvoov";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Capturar las variables enviadas por el formulario
$idCliente = $_POST["idCliente"];
$nombrePOC = $_POST["nombrePOC"];
$emailPOC = $_POST["emailPOC"];
$telefonoPOC = $_POST["telefonoPOC"];
$cumplePOC = $_POST["cumplePOC"];
$origenContacto = $_POST["origenContacto"];
$cargoPOC = $_POST["cargoPOC"];

// Preparar la consulta SQL para insertar los datos en la tabla POC
$sql = "INSERT INTO poc (idCliente, nombrePOC, emailPOC, telefonoPOC, cumplePOC, origenContacto, cargoPOC) 
VALUES ('$idCliente', '$nombrePOC', '$emailPOC', '$telefonoPOC', '$cumplePOC', '$origenContacto', '$cargoPOC')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'POC added successfully';
    $_SESSION['message_type'] = 'success';
    header("location:../verclientes.php");
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>