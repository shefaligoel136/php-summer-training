<?php
class tubelight
{
function __destruct()
{
 echo "hello1";
}
function crack()
{
echo "fix";
}
}
echo "<br>";
class fan extends tubelight
{
function h1()
{
	echo "this is h1";
}
function h2()
{
	echo "this is h2";
}
}
$a=new fan();
$a->crack();

	
	
?>