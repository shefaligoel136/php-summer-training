<?php
SESSION_START();
if(empty($_SESSION['qwerty']))
{
	header("location:checkform.php");
}
else
{
?>
	<html>
	<head>
	<body>
	<h1> welcome user <?php echo $_SESSION['qwerty']?> </h1>
	<a href="m4.php">logout</a>
	</body>
	</head>
	</html>
<?php
}
?>