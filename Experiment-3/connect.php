<!-- <?php
$conn = mysqli_connect("localhost","root","","test");
if (!$conn) {
die ("connect FAILED" .mysqli_connect_error());
}
?> -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>