<?php
 //error_reporting(E_ALL);
// ini_set('display_errors', 1);
 include 'db_config_port.php';
 include('nav_bar.php');
 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
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
input {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }
  submit {
    padding: 5px;
    border: 1px solid green;
      border-radius: .5em;
    background-color: lightblue;
    color: grey;
  }
  </style>
</head>

        <br><br>
        <div class = "container">
        <form method="post" id="filtr" name="filtr" action="">
        <div>
          <h4>Filter Results:</h4>
          
        <input type = "text" name = "ssrt" id = "ssrt">
        <select id="whtsrch" name="whtsrch" form = "filtr">
        <option value="fname">First Name</option>
        <option value="lname">Last Name</option>
        <option value="email">Email</option>
        <option value="artist">Artist</option>
        </select>
        <input type ="submit" value="Search" name = "submit">
        <a href ="myjq.php"><button class = 'arbutton'>Reset query</button></a>
        <br>
        <hr>
</form></div>
<?PHP

  

  //$query = "SELECT * FROM uren WHERE DATUM(post_date)='$date'";
  // $respost = mysqli_query($mysqli, $query);
// Create connection

$conn = mysqli_connect($servername, $username1, $password1, $dbname);
$last_id = mysqli_insert_id($conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
  if (isset($_POST['submit'])) {
    $ssrt = $_POST['ssrt'];
    $whtsrch = $_POST['whtsrch'];
  }
 
if ($whtsrch == 'fname'){
$sql = "SELECT * FROM myjq WHERE fname LIKE '%$ssrt%'";
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
<div class = "container">
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
    
	echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
	echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
	echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
	echo "<br><br><hr>";
}
}
} elseif ($whtsrch == 'lname'){
  $sql = "SELECT * FROM myjq WHERE lname LIKE '%$ssrt%'";
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
  <div class = "">
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
      
    echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
    echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
    echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
    echo "<br><br><hr>";
  }
  }
}elseif ($whtsrch == 'email'){
    $sql = "SELECT * FROM myjq WHERE email LIKE '%$ssrt%'";
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
    <div class = "">
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
        
      echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
      echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
      echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
      echo "<br><br><hr>";
    }
    }
  }elseif ($whtsrch == 'artist'){
      $sql = "SELECT * FROM myjq WHERE artist LIKE '%$ssrt%'";
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
      <div class = "">
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
          
        echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
        echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
        echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
        echo "<br><br><hr>";
      }
      }
} else {
  $sql = "SELECT * FROM myjq WHERE archive = 'no'";
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
    ?><div class = "">
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
  echo "<a href = 'archiveit.php?id=".$idit."'><button class = 'arbutton'>Archive Record</button></a>";
        echo "<a href = 'editit.php?id=".$idit."'><button class = 'arbutton'>Edit Record</button></a>";
        echo "<a href = 'deleteit.php?id=".$idit."'><button class = 'arbutton'>Delete Record</button></a>";
        echo "<br><br><hr>";
    }
  }
}
}



?>
<div>


</form>
</div>
</body>
</html>