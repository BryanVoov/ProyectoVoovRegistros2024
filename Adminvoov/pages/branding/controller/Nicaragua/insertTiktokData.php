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
if (isset($_POST['insertTiktokData'])) {
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $totalFollowers = isset($_POST["totalFollowers"]) ? $_POST["totalFollowers"] : 0;
    $newFollowers = isset($_POST["newFollowers"]) ? $_POST["newFollowers"] : 0;
    $totalViews = isset($_POST["totalViews"]) ? $_POST["totalViews"] : 0;
    $newLikes = isset($_POST["newLikes"]) ? $_POST["newLikes"] : 0;
    $totalTiktoks = isset($_POST["totalTiktoks"]) ? $_POST["totalTiktoks"] : 0;
    
    // Prepare the SQL query
    $sql = "INSERT INTO tiktokNic (fecha, totalFollowers, newFollowers, totalViews, newLikes, totalTiktoks) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("siiiii", 
        $fecha, $totalFollowers, $newFollowers, $totalViews, $newLikes, $totalTiktoks
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/Nicaragua/tiktok.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
