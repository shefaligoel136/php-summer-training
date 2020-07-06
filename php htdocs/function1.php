<?php
function hello()
{
 echo "this is class" ;
}
hello();
echo "<br>";
function hello1($a=5,$b=9)
{
	echo $a.$b;echo "<br>";
	echo $a+$b;echo "<br>";
	echo $a-$b;echo "<br>";
	echo $a%$b;echo "<br>";
	echo $a*$b;
}
hello1();
?>