<?php
session_start();

if(!isset($_SESSION['sid'])){
    header('location: admin.php');
}
else{
    $id = $_SESSION['sid'];
    $conn = mysqli_connect("localhost", "root", "", "thefir");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "";
    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
        $sql = "select * from aboutfir where nps in (select nps from loginadmin where id = '$id') ";
    } else {
        $sql = "select * from aboutfir where uid = '$id'";
    }
    $e = mysqli_query($conn,$sql);
    $tb = "";
    while($row = mysqli_fetch_array($e, MYSQLI_ASSOC)) {
        $tb = $tb . "<tr><td>" . $row['id'] . "</td><td><a href='markSolved.php?id=" . $row['id'] . "'>" . $row['status'] . "</a></td><td>" . $row['subject'] . "</td><td>" . $row['date'] . "</td><td>" . $row['type'] . "</td><td>" . $row['fir'] . "</td><td><a href='" . $row['documents'] . "'>" . $row['documents'] . "</a></td></tr>";
    }
    echo '<html>
<table border="1">
<thead>
<tr><th>Id</th><th>Status</th><th>Subject</th><th>Date</th><th>Type</th><th>FIR</th><th>Documents</th></tr>
</thead>
<tbody>
'. $tb .'
</tbody>
</table>
</html>';
}
?>