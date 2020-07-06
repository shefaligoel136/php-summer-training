<?php

$a= $_POST["name"];
$b= $_POST["pass"];
$c= mysqli_connect("localhost","root","","paperphp");
$d= "select * from logintable where username='$a' and password='$b'"; 
$e= mysqli_query($c,$d);// gets store in a query $c- connection $d- asked query
$f = mysqli_num_rows($e);// that whole row gets selected

if($f==1)
{
	SESSION_START();
	$_SESSION['qwerty']=$a;
    header("location:checkit.php");
}
else
{
 header("location:checkform.php");
}
?>