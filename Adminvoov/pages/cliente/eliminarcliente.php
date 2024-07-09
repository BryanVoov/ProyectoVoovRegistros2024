<?php
// Include your database connection file
include('db.php');

if (isset($_GET['idCliente'])) {
    $idCliente = $_GET['idCliente'];

    // Prepare the delete statement
    $queryEval = "DELETE FROM clienteEvaluacion WHERE idCliente = ?";
        if ($stmtEval = $conn->prepare($queryEval)) {
            $stmtEval->bind_param("i", $idCliente);
            $stmtEval->execute();
            $stmtEval->close();
        } else {
            throw new Exception('Error: No se pudo preparar la consulta de eliminación de evaluaciones.');
        }
    
    
    
    $query = "DELETE FROM cliente WHERE idCliente = ?"; 
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $idCliente);
        

      // Attempt to execute the prepared statement
      if ($stmt->execute()) {
        $_SESSION['msg_type'] = 'Info'; // Set the message type
        // Redirect to the list page after deletion
        header("Location: verclientes.php");
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
