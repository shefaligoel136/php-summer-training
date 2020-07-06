<?php
session_start();
$a= $_POST["FIRST_NAME"];
$b= $_POST["LAST_NAME"];
$c= $_POST["EMAIL"];
$d= $_POST["PASSWORD"];
$e= $_POST["PHONE_NO"];
$f= $_POST["AADHAR"];
$g= $_POST["ADDRESS"];
$h= $_POST["PINCODE"];

$conn= mysqli_connect("localhost","root","","thefir");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$check ="select * from signup where email = '$c'";
$ee= mysqli_query($conn,$check);// gets store in a query $conn- connection $sql- asked query
$ff = mysqli_num_rows($ee);// that whole row gets selected

if($ff<1) {

    $sql = "INSERT INTO signup (FIRST_NAME,LAST_NAME,EMAIL,PASSWORD,PHONE,AADHAR,ADDRESS,PINCODE) 
VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
    if (mysqli_query($conn, $sql)) {

        $check1 ="select id from signup where email = '$c'";
        $ee= mysqli_query($conn,$check);
        $row=mysqli_fetch_array($e,MYSQLI_ASSOC);

        $_SESSION['sid'] = $row['Id'];

        header("location: newFir.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

else{
    header("location: iindexx.php");
}
mysqli_close($conn);

?>


