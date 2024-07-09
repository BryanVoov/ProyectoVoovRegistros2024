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
if (isset($_POST['insertWebsiteData'])) {
    $websiteVisits = isset($_POST["websiteVisits"]) ? $_POST["websiteVisits"] : 0;
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $nVisitors = isset($_POST["nVisitors"]) ? $_POST["nVisitors"] : 0;
    $bounceRate = isset($_POST["bounceRate"]) ? $_POST["bounceRate"] : 0;


    
    // Prepare the SQL query
    $sql = "INSERT INTO websiteNic (websiteVisits, fecha, nVisitors, bounceRate) 
    VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("isii", 
        $websiteVisits, $fecha, $nVisitors, $bounceRate
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/Nicaragua/website.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
