<?php
// deleteSupervisor.php
include("db.php"); // Including the existing database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAsociadoMK = isset($_POST['idAsociadoMK']) ? $_POST['idAsociadoMK'] : '';
    $idSupervisor = isset($_POST['idSupervisor']) ? $_POST['idSupervisor'] : '';
    $redirect_url = isset($_POST['redirect_url']) ? $_POST['redirect_url'] : 'indexAsociadoMK.php';

    if ($idAsociadoMK && $idSupervisor) {
        $sql = "DELETE FROM relacionAsociadoSupervisorMK WHERE idAsociadoMK = ? AND idSupervisor = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idAsociadoMK, $idSupervisor);

        if ($stmt->execute()) {
            header("Location: $redirect_url");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Missing associate or supervisor ID";
    }
} else {
    echo "Invalid request method";
}

$conn->close();
?>
