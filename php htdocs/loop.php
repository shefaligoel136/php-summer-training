<?php
$e= array(1,"one",3.5);
foreach($e as $arrayElement)
{
	echo $arrayElement;
}
echo "<br>";
$a=5;
while($a<=9)
{
  echo $a;
  $a++;
}
echo "<br>";
$b=4;
do
 {
	 echo $b;
	 $b++;
 }
 while($b<=18);
echo "<br>";
for ($c=1;$c<=5;$c++)
{
	echo $c;
}
echo "<br>";
echo "<select>";
for ($d=1975;$d<=2015;$d++)
{
	echo $d;
	echo "<option>";
}

?>