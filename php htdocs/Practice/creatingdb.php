<?php
$servername= "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
echo "Connected Successfully";

$sql = "CREATE DATABASE myDB";
if($conn->query($sql)=== TRUE){
	echo "Database created successfully";
}
else{
	echo "Error creating databse:" . $conn->error;
}

$conn->close();
?>