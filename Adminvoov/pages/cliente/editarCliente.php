<?php
include("db.php");

if (isset($_GET['idCliente'])) {
    $idCliente = $_GET['idCliente'];
    $query = "SELECT * FROM cliente WHERE idCliente = $idCliente";
    $result = mysqli_query($conn, $query);

    // Check if the query executed successfully
    if ($result === false) {
        echo 'Error en la consulta: ' . mysqli_error($conn);
    } else {
        // Check if $result is a valid mysqli_result object
        if ($result instanceof mysqli_result) {
            // Check if there is exactly one row in the result
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nombreCliente = $row["nombreCliente"];
                $nombrePropietario = $row["nombrePropietario"];
                $sitioWeb = $row["sitioWeb"];
                $correspondencia = $row["correspondencia"];
                $carpetaCompartida = $row["carpetaCompartida"];
                $estadoActividad = $row["estadoActividad"];
                $tipoContrato = $row["tipoContrato"];
                $aniversario = $row["aniversario"];
                $cuotaInstalacion = $row["cuotaInstalacion"];
                $estadoPago = $row["estadoPago"];
                $industria = $row["industria"];
                $pais = $row["pais"];
                $zonaHoraria = $row["zonaHoraria"];
                $estadoAsignacionPersonal = $row['estadoAsignacionPersonal'];
                $logoContenido = $row['logo'];
            } else {
                echo 'No se encontró ninguna tarea con ese ID.';
            }
        } else {
            echo 'Error: No se pudo obtener el conjunto de resultados.';
        }
    }
}

if (isset($_POST['update'])) {
    $idCliente = $_GET["idCliente"];
    $nombreCliente = $_POST["nombreCliente"];
    $nombrePropietario = $_POST["nombrePropietario"];
    $sitioWeb = $_POST["sitioWeb"];
    $correspondencia = $_POST["correspondencia"];
    $carpetaCompartida = $_POST["carpetaCompartida"];
    $estadoActividad = $_POST["estadoActividad"];
    $tipoContrato = $_POST["tipoContrato"];
    $aniversario = $_POST["aniversario"];
    $cuotaInstalacion = $_POST["cuotaInstalacion"];
    $estadoPago = $_POST["estadoPago"];
    $industria = $_POST["industria"];
    $pais = $_POST["pais"];
    $zonaHoraria = $_POST["zonaHoraria"];
    $estadoAsignacionPersonal = $_POST['estadoAsignacionPersonal'];

    // Handle the logo file upload
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $logoTempPath = $_FILES['logo']['tmp_name'];
        $logoContenido = file_get_contents($logoTempPath);
    } else {
        // If no new logo is uploaded, keep the existing one
        $logoContenido = $row['logo'];
    }

    // Prepare and execute the update query
    $query = "UPDATE cliente SET 
        nombreCliente = '$nombreCliente', 
        nombrePropietario = '$nombrePropietario', 
        sitioWeb = '$sitioWeb', 
        correspondencia = '$correspondencia', 
        carpetaCompartida = '$carpetaCompartida', 
        estadoActividad = '$estadoActividad', 
        tipoContrato = '$tipoContrato', 
        aniversario = '$aniversario', 
        cuotaInstalacion = '$cuotaInstalacion', 
        estadoPago = '$estadoPago', 
        industria = '$industria', 
        pais = '$pais', 
        zonaHoraria = '$zonaHoraria', 
        estadoAsignacionPersonal = '$estadoAsignacionPersonal', 
        logo = ? 
        WHERE idCliente = $idCliente";

    // Prepare the statement to handle the binary data
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'b', $logoContenido);
    mysqli_stmt_send_long_data($stmt, 0, $logoContenido);
    mysqli_stmt_execute($stmt);

    $_SESSION['message'] = 'Tarea actualizada correctamente';
    $_SESSION['message_type'] = 'warning';
    header("Location: verclientes.php");
}
?>