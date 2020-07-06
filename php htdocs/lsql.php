<?php
$sql=mysqli_connect("localhost","root","","paperphp");// root is the default name of localhost username, password section is blank
/*$a="select * from logintable where id=2";
$b= mysqli_query($sql,$a);
$c=mysqli_fetch_array($b);
print_r($d);
echo $c["password"];*/
/*$a="INSERT INTO logintable(id,username,password) VALUES('','sgoel','sgoel12')";
$c = mysqli_query($sql,$a);
echo $c;*/

/*$a= "UPDATE logintable SET username='qwjkpg', password='qwjkfg12' where id='6'";//username='hjkfg' and password='hjkfg12
$c= mysqli_query($sql,$a);
echo $c;*/

$a= "DELETE from logintable where id= 5 ";//if not with id then use username='...' and password='....'
$c= mysqli_query($sql,$a);
echo $c;
?>