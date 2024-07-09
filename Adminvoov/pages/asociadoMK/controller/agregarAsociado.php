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

// Obtener el valor del campo de texto del formulario
$nombreAsociado = $_POST["nombreAsociado"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$cumpleAsociado = $_POST["cumple"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$salarioInicial = $_POST["salarioInicial"];
$fechaContratacionV = $_POST["fechaContratacionV"];
$fechaContratacionC = $_POST["fechaContratacionC"];
$estadoActividad = $_POST["estadoActividad"];
$cargoCliente = $_POST["cargoCliente"];
$numeroEmpleado = $_POST["numeroEmpleado"];
$horarioEntrada = $_POST['horarioEntrada'];
$horarioSalida = $_POST['horarioSalida'];
$tipoContrato = $_POST['tipoContrato'];
$departamento = "Virtual Assistant";
$fotoContenido = NULL;

// Manejar la carga de la imagen
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    // Validate the file type and size
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 5 * 1024 * 1024; // 5 MB

    $fileType = $_FILES['foto']['type'];
    $fileSize = $_FILES['foto']['size'];

    if (in_array($fileType, $allowedTypes) && $fileSize <= $maxFileSize) {
        // Get the image content
        $foto = $_FILES['foto']['tmp_name'];
        $fotoContenido = addslashes(file_get_contents($foto));
    } else {
        echo "Invalid file type or size.";
        exit();
    }
}

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO asociadoMK (nombreAsociado, cedula, telefono, cumple, email, direccion, salarioInicial, fechaContratacionV, fechaContratacionC, estadoActividad, cargoCliente, numeroEmpleado, horarioEntrada, horarioSalida, tipoContrato, departamento, foto) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssss", 
    $nombreAsociado, $cedula, $telefono, $cumpleAsociado, $email, $direccion, $salarioInicial, $fechaContratacionV, $fechaContratacionC, $estadoActividad, 
    $cargoCliente, $numeroEmpleado, $horarioEntrada, $horarioSalida, $tipoContrato, $departamento, $fotoContenido
);

// Ejecutar la consulta SQL
if ($stmt->execute()) {
    $_SESSION['message'] = 'Associate Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header("Location: ../vista/verAsociadosMK.php");
    exit();
} else {
    echo "Error al guardar los datos: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
