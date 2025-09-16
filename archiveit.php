<?php

/* session_start();

if(!isset($_SESSION['passwdlogged']) || $_SESSION['passwdlogged']!=true){
    header("location: login.html");
    exit;
} */
$id = $_GET['id'];
include 'db_config_port.php';

// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
// sql to delete a record
$sql = "UPDATE myjq SET archive = 'yes' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: myjq.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
}
?>