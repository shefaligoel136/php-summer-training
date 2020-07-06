<?php
$a= $_POST["review1"];
$c= mysqli_connect("localhost","root","","firdatabase");
$d= "INSERT INTO reviewit(reviews) VALUES('$a')";
$e= mysqli_query($c,$d);// gets store in a query $c- connection $d- asked query
echo $e;
if($e==1)
{
	header("location:home page.php");
}


?>