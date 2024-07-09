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
if (isset($_POST['agregarcliente'])) {
    $nombreCliente = $_POST["nombreCliente"];
    $nombrePropietario = $_POST["nombrePropietario"];
    $sitioWeb = $_POST["sitioWeb"];
    $correspondencia = $_POST["correspondencia"];
    $carpetaCompartida = $_POST["carpetaCompartida"];
    $estadoActividad = $_POST["estadoActividad"];
    $tipoContrato = $_POST["tipoContrato"];
    $aniversario = $_POST["aniversario"];
    $cuotaInstalacion = $_POST["cuotaInstalacion"];
    $estadoPago = $_POST["estadoPago"];
    $industria = $_POST["industria"];
    $pais = $_POST["pais"];
    $zonaHoraria = $_POST["zonaHoraria"];
    $estadoAsignacionPersonal = $_POST['estadoAsignacionPersonal'];
    $logoContenido = NULL;

    // Handle the logo file upload
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5 MB

        $fileType = $_FILES['logo']['type'];
        $fileSize = $_FILES['logo']['size'];

        if (in_array($fileType, $allowedTypes) && $fileSize <= $maxFileSize) {
            $logoTempPath = $_FILES['logo']['tmp_name'];
            $logoContenido = file_get_contents($logoTempPath);
        } else {
            $_SESSION['message'] = 'Invalid file type or size.';
            $_SESSION['message_type'] = 'danger';
            header("location:../verclientes.php");
            exit();
        }
    }

    // Prepare the SQL query
    $sql = "INSERT INTO cliente (nombreCliente, nombrePropietario, sitioWeb, correspondencia, carpetaCompartida, estadoActividad, tipoContrato, aniversario, cuotaInstalacion, estadoPago, industria, pais, zonaHoraria, logo, estadoAsignacionPersonal) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssbs", 
        $nombreCliente, $nombrePropietario, $sitioWeb, $correspondencia, $carpetaCompartida, $estadoActividad, $tipoContrato, $aniversario, $cuotaInstalacion, 
        $estadoPago, $industria, $pais, $zonaHoraria, $logoContenido, $estadoAsignacionPersonal
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location:../verclientes.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
