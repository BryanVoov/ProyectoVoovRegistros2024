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
$nombreSupervisor = $_POST["nombreSupervisor"];
$departamento = $_POST["departamento"];

// Preparar la consulta SQL para insertar los datos en la tabla POC
$sql = "INSERT INTO supervisor (nombreSupervisor, departamento) 
VALUES ('$nombreSupervisor', '$departamento')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'Supervisor added successfully';
    $_SESSION['message_type'] = 'success';
    header("location:../../indexVA.php");
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>