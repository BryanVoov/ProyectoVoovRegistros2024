<?php
// Include your database connection file
include('db.php');

if (isset($_GET['idAsociadoVA'])) {
    $idAsociadoVA = $_GET['idAsociadoVA'];

    // Prepare the delete statement
    $queryEval = "DELETE FROM relacionAsociadoClienteVA WHERE idAsociado = ?";
        if ($stmtEval = $conn->prepare($queryEval)) {
            $stmtEval->bind_param("i", $idAsociadoVA);
            $stmtEval->execute();
           $stmtEval->close();
        } else {
            throw new Exception('Error: No se pudo preparar la consulta de eliminación de evaluaciones.');
        }
    
    
    
    $query = "DELETE FROM asociadoVA WHERE idAsociadoVA = ?"; 
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $idAsociadoVA);
        

      // Attempt to execute the prepared statement
      if ($stmt->execute()) {
        $_SESSION['msg_type'] = 'Info'; // Set the message type
        // Redirect to the list page after deletion
        header("Location: ../vista/verAsociadosVA.php");
        exit();
    } else {
        $_SESSION['message'] = 'Error: No se pudo eliminar el cliente.';
        $_SESSION['msg_type'] = 'sucess';
    }
} ;

// Close statement
$stmt->close();
} else {
$_SESSION['message'] = 'Error: No se proporcionó ningún ID.';
$_SESSION['msg_type'] = 'danger';
}

    



// Close connection
$conn->close();
?>
