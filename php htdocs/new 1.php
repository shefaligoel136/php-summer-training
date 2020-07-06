<?php
$a="hello world";
$b=1;
$c=$b;
$d=2;
$e=3;
$f=15;
$g=20;
echo $a;
echo "<br>";
echo $c;
echo "<br>";
echo $d+$e;
echo "<br>";
echo $f-$g;
echo "<br>";
echo $c*$f;
echo "<br>";
echo $f%$d;
echo "<br>";
echo $e%$f;
echo "<br>";
echo $c/$f;
echo "<br>";#-*%/
$d++;
echo $d;
echo "<br>";
$f--;
echo $f;
echo "<br>";
$m="shefali";
echo gettype($m);
echo "<br>";
$v=3.78;
echo gettype($v);
echo "<br>";
settype($v,"integer");
echo gettype($v);
echo "<br>";
echo $v;
echo "<br>";
$w= array("hello",1.5,8);#indexed array
$q= array("bye",1.9,2);
echo $w[2],$q[2];#concatination
echo "<br>";
echo $w[0];
echo "<br>";
echo $q[0];
echo "<br>";
$n= array("hello"=>8,"bye"=>6);#associative array
echo $n["hello"];
echo "<br>";
$k= array(array(1,2,3.8), array("hello",5,6));# multidimensional array
echo $k[0][2];
?>