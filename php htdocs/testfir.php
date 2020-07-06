<script src="jquery-3.3.1.min.js">
  </script>
<?php
$a= $_POST["name"];
$b= $_POST["pass"];
if($a=="")
{
	echo "username cannot be blank";
}
else if($b=="")
{
	echo "password cannot be blank";
}
else {
    $c = mysqli_connect("localhost", "root", "", "firdatabase");
    $d = "select * from logininfo where username='$a' and password='$b'";
    $e = mysqli_query($c, $d);// gets store in a query $c- connection $d- asked query
    $f = mysqli_num_rows($e);// that whole row gets selected

    if ($f == 1) {
        header("location:my FIR's page3.html");
    } else {
        header("location: user.php");
    }
}
?>