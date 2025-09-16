<?php
 //error_reporting(E_ALL);
// ini_set('display_errors', 1);
 include 'db_config_port.php';
 include('nav_bar.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <br><br>
        <link rel="stylesheet"  href="main.css">
        <style>
  .arbutton {
	color: green;
	border: 1px solid green;
	border-radius: .5em;
	padding: 5px;
	background-color: lightblue;
}

select {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }

  h3 {
	color: blue;
	font-weight: bold;
	font-size: 0.9em;
}
.container {
  width: 1000px;
  border-radius: .5em;
  padding: 20px;
}
  </style>
<?PHP

$conn = mysqli_connect($servername, $username1, $password1, $dbname);
$last_id = mysqli_insert_id($conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

  $sql = "SELECT * FROM myjq WHERE archive = 'yes'";
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
    ?><div class = "container">
  <div class = ""><h4>First Name :
  <h3><?php echo $fname; ?>
  </div>
  <div class = ""><h4>Last Name :
  <h3><?php echo $lname; ?>
  </div>
  <div class = ""><h4>Email: 
  <h3><?php echo $email; ?>
  </div>
  <div class = ""><h4>Phone: 
  <h3><?php echo $phone; ?>
  </div>
  <div class = ""><h4>Artist :
  <h3><?php echo $artist; ?>
  </div>
  <div class = ""><h4>Add Date :
  <h3><?php echo $whdt; ?>
  </div>
  <?PHP
 // echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
        echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
        echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
        echo "<br><br><hr>";
    }
  }
}




?>
<div>


</form>
</div>
</body>
</html>