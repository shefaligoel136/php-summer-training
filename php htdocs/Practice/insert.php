<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests(firstname,lastname,email) 
VALUES
('akash','goel','akash101@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if($conn->multi_query($sql) === TRUE){
	$last_id = $conn->insert_id;
	echo "New records created. Last inserted id is " . $last_id;
}
else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>