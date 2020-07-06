<?php
$a= array(1,3.6,7);//indexed
print_r($a);
echo "<br>";
$b= array("rohit"=>5 ,"bug"=>"crash");//associative
echo $b["rohit"];
echo "<br>";
$c= array("rohit"=>5 ,"bug"=>"crash");
print_r($c);
//$c[][]=8;
//echo $c["crash"];
$d= array(array(1,2,3), array(5,6,7), array(8,9,4));//multidimensional
print_r($d);
echo "<br>";
echo $d[0][2];
echo "<br>";
?>
