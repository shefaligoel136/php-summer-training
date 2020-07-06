<?php
$conn = mysqli_connect("localhost", "root", "", "thefir");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "update aboutfir set status = 'Solved' where id = '" . $_GET['id'] . "'";
mysqli_query($conn, $sql);
header('location: filledFir.php');
?>