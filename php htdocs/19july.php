<?php
$a=mysqli_connect("localhost","root","","kuchnahi");
$b="UPDATE logo SET username='mansi',password='mansi123' WHERE username='nshi'and password='nshi123'";
$c=mysqli_query($a,$b);
echo $c;
?>