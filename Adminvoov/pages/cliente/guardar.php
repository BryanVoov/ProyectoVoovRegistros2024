<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "cb");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener el valor del campo de texto del formulario
//EN UNA VARIABLE GUARDAMOS LO QUE OBTENEMOS DEL METODO POST
$n_empresa = $_POST["n_empresa"];
$n_cliente = $_POST["n_cliente"];
$n_contacto = $_POST["n_contacto"];
$n_comentario = $_POST["n_comentario"];


// Preparar la consulta SQL para insertar los datos en la tabla
// QUERY + nombre de la tabla (nombre de la propiedad) VALUE ('$variable')
$sql = "INSERT INTO prueba (empresa, cliente, contacto, comentario ) VALUES ('$n_empresa','$n_cliente', '$n_contacto', '$n_comentario')";


// Ejecutar la consulta SQL
if ($conexion->query($sql) === TRUE) {
    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'success';
    header("location:clientebasic.php");
} else {
    echo "Error al guardar los datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
