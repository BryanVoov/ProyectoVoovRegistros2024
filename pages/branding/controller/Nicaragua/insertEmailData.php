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
if (isset($_POST['insertEmailData'])) {
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]. '-01' : null;
    $reNewsletterSent = isset($_POST["reNewsletterSent"]) ? $_POST["reNewsletterSent"] : 0;
    $dripEmailSent = isset($_POST["dripEmailSent"]) ? $_POST["dripEmailSent"] : 0;
    $nRecipientsRENL = isset($_POST["nRecipientsRENL"]) ? $_POST["nRecipientsRENL"] : 0;
    $nRecipientsDripEmails = isset($_POST["nRecipientsDripEmails"]) ? $_POST["nRecipientsDripEmails"] : 0;
    $openRateRENL = isset($_POST["openRateRENL"]) ? $_POST["openRateRENL"] : 0;
    $openRateDripEmails = isset($_POST["openRateDripEmails"]) ? $_POST["openRateDripEmails"] : 0;
    $ctrRENL = isset($_POST["ctrRENL"]) ? $_POST["ctrRENL"] : 0;
    $ctrDripEmails = isset($_POST["ctrDripEmails"]) ? $_POST["ctrDripEmails"] : 0;
    $linkClicksRENL = isset($_POST["linkClicksRENL"]) ? $_POST["linkClicksRENL"] : 0;
    $linkClicksDripEmails = isset($_POST["linkClicksDripEmails"]) ? $_POST["linkClicksDripEmails"] : 0;
    $appointmentEmails = isset($_POST["appointmentEmails"]) ? $_POST["appointmentEmails"] : 0;
    
    // Prepare the SQL query
    $sql = "INSERT INTO emailNic (fecha, reNewsletterSent, dripEmailSent, nRecipientsRENL, nRecipientsDripEmails, openRateRENL, openRateDripEmails, ctrRENL, ctrDripEmails, linkClicksRENL, linkClicksDripEmails, appointmentEmails) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("siiiiddddiii", 
        $fecha, $reNewsletterSent, $dripEmailSent, $nRecipientsRENL, $nRecipientsDripEmails, $openRateRENL, $openRateDripEmails, $ctrRENL, $ctrDripEmails, $linkClicksRENL, $linkClicksDripEmails, $appointmentEmails
    );

    // Execute the SQL query
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Client Saved Successfully';
        $_SESSION['message_type'] = 'success';
        header("location: /adminvoov/pages/branding/vista/Nicaragua/email.php");
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
