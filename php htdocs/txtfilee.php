<?php
$file = fopen("filee.txt","r");
echo fgetc($file);
echo "<br>";

echo fgets($file);
echo "<br>";

fread($file,"10");
echo "<br>";
fclose ($file);


$file = fopen("filee.txt","w");
fwrite($file,"hello world");
echo fwrite($file,"hello world");
fclose ($file);
?>