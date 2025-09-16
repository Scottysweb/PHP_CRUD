<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<html>
    <head>
    <link rel="stylesheet"  href="main.css">
    <?php include('nav_bar.php'); ?>
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
    $sql = "SELECT * FROM myjq WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
    $idit = $row['id'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$email = $row['email'];
	$phone = $row['phone'];
	$artist = $row['artist'];
	$whdt = $row['whdt'];
	
?>
</head>
<body>
<!-- <ul>
            <li><a href = "myjq.php">Show All Orders</a></li>
            <li><a href = "show_archived_orders.php">Show All Archived Orders</a></li>
           
            <li><a href = "jquery_db.php">Add an Record</a></li>
            
        </ul> -->
        <br><br> 
    <form action = "editres.php" method ="post">
<div>
    <input type ="hidden" name ="id" value = "<?PHP echo $id; ?>">
<span class="error" id = "fname-error">*</span>
<label for = "fname">First Name</label>
<input type = "text" id ="fname" name ="fname" value = "<?PHP echo $fname; ?>">
</div>
<div>
<span class="error">*</span>
<label for = "lname">Last Name</label>
<input type = "text" id ="lname" name ="lname" value = "<?PHP echo $lname; ?>">
</div>

<div>
<span class="error">*</span>
<label for = "email">Email</label>
<input type = "email" id ="email" name ="email" value = "<?PHP echo $email; ?>">
</div>
<div>
<span class="error">*</span>
<label for = "phone">Phone</label>
<input type = "number" id ="phone" name ="phone" value = "<?PHP echo $phone; ?>">
</div>
<div>
<span class="error">*</span>
<label for = "artist">Artist</label>
<input type = "text" id ="artist" name ="artist" value = "<?PHP echo $artist; ?>">
</div>
<input type ="hidden" name ="whdt" id ="whdt" value = "<?PHP echo $whdt; ?>">
<input type ="submit" id ="submit" value = "Update">
    </form>
<?PHP
    }
}
}

?>