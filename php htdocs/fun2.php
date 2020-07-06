<?php
class tubelight
{
function hello()
{
 echo "hello1";
}
function crack()
{
echo "fix";
}
}
$obj=new tubelight;
$obj->crack();
echo "<br>";
$obj->hello();
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
echo "<br>";
$a->h2();

	
	
?>