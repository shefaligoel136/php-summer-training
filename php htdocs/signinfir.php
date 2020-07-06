<?php
$a= $_POST["FIRST_NAME"];
$b= $_POST["LAST_NAME"];
$c= $_POST["EMAIL"];
$d= $_POST["PASSWORD"];
$e= $_POST["PHONE_NO"];
$f= $_POST["AADHAR"];
$g= $_POST["ADDRESS"];
$h= $_POST["PINCODE"];

if($a=="")
{
	echo "first name cannot be blank";
}
else if($b=="")
{
	echo "last name cannot be blank";
}
else if($c=="")
{
	echo "email cannot be blank";
}
else if($d=="")
{
	echo "password cannot be blank";
}
else if($e=="")
{
	echo "phone number cannot be blank";
}
else if($f=="")
{
	echo "aadhar cannot be blank";
}
else if($g=="")
{
	echo "address cannot be blank";
}
else if($h=="")
{
	echo "pincode cannot be blank";
}
else
{
$i= mysqli_connect("localhost","root","","firdatabase");
$j="INSERT INTO signin(FIRST_NAME,LAST_NAME,EMAIL,PASSWORD,PHONE_NO,AADHAR,ADDRESS,PINCODE)== VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
$k = mysqli_query($i,$j);
echo $k;
$l= "INSERT INTO logininfo(USERNAME , PASSWORD) VALUES('$c','$d')";
$m= mysqli_query($i,$l);
echo $k;
$n= "INSERT INTO reviewit(LAST_NAME) VALUES('$b')";
$o= mysqli_query($i,$n);
if($o==1)
{
	header("location:complainform.html");
}

}
?>