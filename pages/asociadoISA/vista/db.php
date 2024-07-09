<?php 
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminvoov";
mysqli_connect(
    $servername,$username,$password,$dbname
);

$conn = mysqli_connect($servername,$username,$password,$dbname);


// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} echo "Connected successfully <br>";

