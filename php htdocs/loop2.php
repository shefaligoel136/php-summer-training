<?php
for($x=1;$x<=20;$x++)
{
	echo $x;
	if($x==5)
	{
		break;
	}
}
echo "<br>";
for($z=1;$z<=20;$z++)
{
	
	if($z==5)
	{
		continue;
	}
	echo $z;
	echo "<br>";
}
echo "<br>";
for($a=1;$a<=5;$a++)
{
	for($b=5;$b>=$a;$b--)
	{
		 echo $b;
	}
	echo "<br>";
}
echo "<br>";
$q= array(1,2,3,4,"sam");
for($j=0;$j<5;$j++)
{
	if($q[$j]=="sam")
		echo $j;
}
echo "<br>";
echo date("d-m-y h:i:sa");
echo "<br>";
echo date("D/M/Y H:I:SA");

?>