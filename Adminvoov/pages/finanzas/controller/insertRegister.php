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

// Obtener el valor del campo de texto del formulario
if (isset($_POST['insertRegister'])) {
    $fecha = $_POST["fecha"]. '-01';
    $contratosEnviados = $_POST["contratosEnviados"];
    $contratosFirmados = $_POST["contratosFirmados"];
    $contratosTerminados = $_POST["contratosTerminados"];
    $costoContratosFirmados = $_POST["costoContratosFirmados"];
    $costoContratosTerminados = $_POST["costoContratosTerminados"];
    
    // Prepare the SQL query
    $sql = "INSERT INTO contratos (fecha, contratosEnviados, contratosFirmados, contratosTerminados, costoContratosFirmados, costoContratosTerminados) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siiiii", 
        $fecha, $contratosEnviados, $contratosFirmados, $contratosTerminados, $costoContratosFirmados, $costoContratosTerminados
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/finanzas/vista/indexFinanzas.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
