<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username , $password, $dbname);

if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

$sql = "CREATE TABLE login(
id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
)"; 

if($conn->query($sql) === TRUE){
	echo "Table created successfully";
}
else{
	echo "Error creating table:" . $conn->error;
}

$conn->close();
?>