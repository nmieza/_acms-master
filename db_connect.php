<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "aircargo_system";

$conn = mysqli_connect($server, $user, $pass, $database);
$conn= new mysqli('localhost','root','','aircargo_system')or die("Could not connect to mysql".mysqli_error($con));


if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>