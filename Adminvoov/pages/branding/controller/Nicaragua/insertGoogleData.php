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
if (isset($_POST['insertGoogleData'])) {
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $paidImpressions = isset($_POST["paidImpressions"]) ? $_POST["paidImpressions"] : 0;
    $organicImpressions = isset($_POST["organicImpressions"]) ? $_POST["organicImpressions"] : 0;
    $clics = isset($_POST["clics"]) ? $_POST["clics"] : 0;
    $CTR = isset($_POST["CTR"]) ? $_POST["CTR"] : 0;
    $CPC = isset($_POST["CPC"]) ? $_POST["CPC"] : 0;

    
    // Prepare the SQL query
    $sql = "INSERT INTO googleNic (fecha, paidImpressions, organicImpressions, clics, CTR, CPC) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("siiiii", 
        $fecha, $paidImpressions, $organicImpressions, $clics, $CTR, $CPC
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/Nicaragua/google.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
