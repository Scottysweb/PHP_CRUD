<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username1 = "tinika14_garage";
$password1 = "Rikkiwithme14";
$dbname = "tinika14_garagesales";
// include 'db_config_port.php';
// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname);
// $last_id = mysqli_insert_id($conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

$sql = "UPDATE myjq SET fname = '$_POST[fname]', lname = '$_POST[lname]', email = '$_POST[email]', phone = '$_POST[phone]', artist = '$_POST[artist]', archive = 'no', whdt = '$_POST[whdt]' WHERE id = '$_POST[id]'";
if(mysqli_query($conn, $sql)){
    header('Location: myjq.php'); 
    // echo "<center><font color ='darkblue' size ='3'><B>You have successfully finished an order. An Email will be sent to you with your order details</b></font></center>";
// echo "<BR>";
// echo "<center><font color ='darkblue' size ='3'><B>You will be redirected in 4 seconds</b></font></center>";

}
}