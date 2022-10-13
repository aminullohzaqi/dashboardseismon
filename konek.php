<?php
$servername = "localhost";
$database = "nandapro_seismon";
$username = "nandapro_nawi";
$password = "nawi_seismonapp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
