<?php
include("db.php");

if (isset($_GET['idAsociadoMK']))
{
    $idAsociadoMK = $_GET['idAsociadoMK'];
    $query = "SELECT * FROM asociadoMK WHERE idAsociadoMK = $idAsociadoMK";
    $result = mysqli_query($conn,$query);
    
         // Verificar si la consulta se ejecutó correctamente
    if ($result === false) {
        echo 'Error en la consulta: ' . mysqli_error($conn);
    } else {
        // Verificar si $result es un objeto mysqli_result válido
        if ($result instanceof mysqli_result) {
            // Verificar si hay exactamente una fila en el resultado
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nombreAsociado = $row["nombreAsociado"];
                $cedula = $row["cedula"];
                $telefono = $row["telefono"];
                $cumpleAsociado = $row["cumple"];
                $email = $row["email"];
                $direccion = $row["direccion"];
                $salarioInicial = $row["salarioInicial"];
                $fechaContratacionV = $row["fechaContratacionV"];
                $fechaContratacionC = $row["fechaContratacionC"];
                $estadoActividad = $row["estadoActividad"];
                $cargoCliente = $row["cargoCliente"];
                $numeroEmpleado = $row["numeroEmpleado"];
                $horarioEntrada = $row['horarioEntrada'];
                $horarioSalida = $row['horarioSalida'];
                $tipoContrato = $row['tipoContrato'];
                $fechaTerminacion = $row['fechaTerminacion'];
                $fotoContenido = $row['foto'];
                
            } else {
                echo 'No se encontró ninguna tarea con ese ID.';
            }
        } else {
            echo 'Error: No se pudo obtener el conjunto de resultados.';
        }
    }
    if(isset($_POST['update'])){
        $idAsociadoMK = $_GET["idAsociadoMK"];
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
        $fechaTerminacion = $_POST['fechaTerminacion'];

        // Handle the logo file upload
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $fotoTempPath = $_FILES['foto']['tmp_name'];
            $fotoContenido = file_get_contents($fotoTempPath);
        } else {
            // If no new logo is uploaded, keep the existing one
            $fotoContenido = $row['foto'];
        }
          
        $query = "UPDATE asociadoMK set nombreAsociado = '$nombreAsociado', cedula = '$cedula', 
        telefono = '$telefono', cumple = '$cumpleAsociado', email = '$email', 
        direccion = '$direccion', salarioInicial = '$salarioInicial', fechaContratacionV = '$fechaContratacionV', fechaContratacionC = '$fechaContratacionC',
        estadoActividad = '$estadoActividad', cargoCliente = '$cargoCliente', numeroEmpleado = '$numeroEmpleado', horarioEntrada = '$horarioEntrada', 
        horarioSalida = '$horarioSalida', tipoContrato = '$tipoContrato', fechaTerminacion = '$fechaTerminacion', foto = ? WHERE idAsociadoMK = $idAsociadoMK";
         
         $stmt = mysqli_prepare($conn, $query);
         mysqli_stmt_bind_param($stmt, 'b', $fotoContenido);
         mysqli_stmt_send_long_data($stmt, 0, $fotoContenido);
         mysqli_stmt_execute($stmt);
        $_SESSION['message'] = 'Tarea actualizada correctamente';
        $_SESSION['message_type'] = 'warning';
        header("Location: /adminvoov/pages/asociadoMK/vista/verAsociadosMK.php");
    }

   
}
?>