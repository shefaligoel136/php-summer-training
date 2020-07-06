<html>
<head>
<style>
 input
 {
	 height:40px;
	 width:320px;
	 color:#008080;
 }
 div
 {
	margin-left:170px;
	margin-top:100px;	
	font-size:30px;
	 color:#008080;
 }
 #span1
 {
	 font-size:70px;
	color:#008080;
	margin-left:170px;
 }
 span
 {
	 color:#008080;
 }
 
</style>
</head>
<body>
<span id="span1"> .DELHI METRO INFORMATION.</span>
<div>
<?php
$a1= array(
 array(" ","ADARSH NAGAR","CHANDNI CHOWK","GOVIND PURI","MALVIYA NAGAR","SADAR BAZAR","SAKET"),
 array("SAKET",10, 50 , 20, 40, 25, 00),
 array("SADAR BAZAR",30, 60 , 43, 50, 00, 25),
 array("ADARSH NAGAR",00, 20 , 40, 50, 30, 10),
 array("CHANDNI CHOWK",20, 00 , 30, 45, 60, 50),
 array("GOVIND PURI",40, 30 , 00, 32, 43, 20),
 array("MALVIYA NAGAR",50, 45 , 32, 00, 50, 40)
          );

$v1= $_POST['s1'];
$v2= $_POST['s2'];
echo "<br>";
echo "<br>";
echo "<br>";

if($v1=="")
{
	echo "input station1";
}
else if($v2=="")
{
	echo "input station2";
}
for($i=0;$i<=6;$i++)
  {
	  for($j=0;$j<=6;$j++)
	  {
		  if($a1[$i][$j]==$v1)
		  {
			  $k=$j;
			  break;
		  }
	  }
	  break;
  }
 for($i=0;$i<=6;$i++)
  {
	  for($j=0;$j<=6;$j++)
	  {
		  if($a1[$j][$i]==$v2)
		  {
			  $m=$j;
			  break;
		  }
	  }
	  break;
  }
  echo $a1[$m][$k];
	

?>
</div>
</body>
</html>