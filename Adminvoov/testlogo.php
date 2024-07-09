<?php
include("db.php");

$logoContenido = '';
$logoMimeType = '';

// Fetch client data including the logo
$idCliente = 1; // Replace with the actual idCliente you want to test
$query = "SELECT logo FROM cliente WHERE idCliente = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $logoContenido = $row['logo'];

    // Determine the MIME type
    if (!empty($logoContenido)) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $logoMimeType = finfo_buffer($finfo, $logoContenido);
        finfo_close($finfo);
    }
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Display Image</title>
</head>
<body>
    <div class="logo-container">
        <?php
        if (!empty($logoContenido)) {
            $base64Logo = base64_encode($logoContenido);
            // Debug output to check if the base64 string is generated correctly
            echo '<pre>' . substr($base64Logo, 0, 100) . '...</pre>'; // Print first 100 characters for debugging
            echo '<img src="data:' . $logoMimeType . ';base64,' . $base64Logo . '" alt="Logo">';
        } else {
            echo '<p>No image data found.</p>';
        }
        ?>
    </div>
</body>
</html>
