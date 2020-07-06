<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username , $password, $dbname);

if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

$sql = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)"; 

if($conn->query($sql) === TRUE){
	echo "Table created successfully";
}
else{
	echo "Error creating table:" . $conn->error;
}

$conn->close();
?>