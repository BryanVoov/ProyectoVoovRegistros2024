<?php
// process_associate.php
include ("../../../db.php"); // Including the existing database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAsociado = isset($_POST['idAsociado']) ? $_POST['idAsociado'] : '';
    $idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '';
    $redirect_url = isset($_POST['redirect_url']) ? $_POST['redirect_url'] : 'indexVA.php';

    if ($idAsociado && $idCliente) {
        $sql = "INSERT INTO relacionAsociadoCliente (idAsociado, idCliente) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idAsociado, $idCliente);

        if ($stmt->execute()) {
            header("Location: $redirect_url");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Missing associate or client ID";
    }
} else {
    echo "Invalid request method";
}

$conn->close();
?>