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
if (isset($_POST['insertFacebookData'])) {
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $reach = isset($_POST["reach"]) ? $_POST["reach"] : 0;
    $pageVisits = isset($_POST["pageVisits"]) ? $_POST["pageVisits"] : 0;
    $totalInteractions = isset($_POST["totalInteractions"]) ? $_POST["totalInteractions"] : 0;
    $totalFans = isset($_POST["totalFans"]) ? $_POST["totalFans"] : 0;
    $newFans = isset($_POST["newFans"]) ? $_POST["newFans"] : 0;
    $nPosts = isset($_POST["nPosts"]) ? $_POST["nPosts"] : 0;
    
    // Prepare the SQL query
    $sql = "INSERT INTO facebookUSA (fecha, reach, pageVisits, totalInteractions, totalFans, newFans, nPosts) 
    VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("siiiiii", 
        $fecha, $reach, $pageVisits, $totalInteractions, $totalFans, $newFans, $nPosts
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/USA/facebook.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
