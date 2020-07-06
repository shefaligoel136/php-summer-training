<?php
/*echo readfile('file.txt');
echo "<br>";
echo file_exists('file.txt');
echo "<br>";
echo filesize('file.txt');*/

/*$file = "file.txt";
if(is_file($file))
{
	echo ("$file is a regular file");
}
else
{
	 echo("$file is not a regular file");
}*/

/*$file = "testing";
if(is_dir($file))
{
	echo ("$file is a directory");
}
else
{
	 echo("$file is not a directory");
}*/

/*$file = "file.txt";
if(is_readable($file))
{
	echo ("$file is a readable");
}
else
{
	 echo("$file is not  readable");
}
echo "<br>";
$file = "file.txt";
if(is_writable($file))
{
	echo ("$file is writable");
}
else
{
	 echo("$file is not writable");
}
echo "<br>";
$file = "file.txt";
if(!unlink($file))
{
	echo ("Error deleting $file");
}
else
{
	 echo("$file is not deleted");
}*/


$file = fopen("filee.txt","r");
echo fgetc($filee);
fclose($filee);



?>