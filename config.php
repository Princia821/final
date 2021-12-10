<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "webfinal";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

