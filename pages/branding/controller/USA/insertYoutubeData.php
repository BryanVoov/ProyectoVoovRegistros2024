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
if (isset($_POST['insertYoutubeData'])) {
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $totalSubscribers = isset($_POST["totalSubscribers"]) ? $_POST["totalSubscribers"] : 0;
    $newSubscribers = isset($_POST["newSubscribers"]) ? $_POST["newSubscribers"] : 0;
    $nVideos = isset($_POST["nVideos"]) ? $_POST["nVideos"] : 0;
    $totalViews = isset($_POST["totalViews"]) ? $_POST["totalViews"] : 0;
    
    // Prepare the SQL query
    $sql = "INSERT INTO youtubeUSA (fecha, totalSubscribers, newSubscribers, nVideos, totalViews) 
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("siiii", 
        $fecha, $totalSubscribers, $newSubscribers, $nVideos, $totalViews
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/USA/youtube.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
