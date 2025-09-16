<?PHP
error_reporting(0);
$servername = "localhost";
$username1 = "tinika14_garage";
$password1 = "Rikkiwme14";
$dbname = "tinika14_algon_final_project";
// include 'db_config_port.php';
// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname);
// $last_id = mysqli_insert_id($conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
	/* if (isset($_FILES["image1"]) && $_FILES["image1"]["error"] == 0) {
		$image1 = $_FILES['image1']['tmp_name'];
		$imgContent = file_get_contents($image1);
$sql = "INSERT INTO myjq VALUES (NULL,'$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[phone]', '$_POST[quanity]', ?";
$statement = $conn->prepare($sql);
    $statement->bind_param('s', $imgContent);
    $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());

    if ($current_id) {
        echo "Image uploaded successfully.";
    } else {
        echo "Image upload failed, please try again.";
    }
} else {
    echo "Please select an image file to upload.";
}
*/
$sql = "INSERT INTO myjq VALUES (NULL,'$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[phone]', '$_POST[artist]' , 'no')";
if(mysqli_query($conn, $sql)){

	echo "<center><font color ='darkblue' size ='3'><B>You have successfully finished an order. An Email will be sent to you with your order details</b></font></center>";
echo "<BR>";
echo "<center><font color ='darkblue' size ='3'><B>You will be redirected in 4 seconds</b></font></center>";

}
}
?>