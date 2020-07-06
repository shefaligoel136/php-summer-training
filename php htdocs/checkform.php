<?php
session_start();
if(empty($_SESSION['qwerty']))
{
echo'
<html>
<head>
</head>
<body>
<h1>welcome</h1>
<form action="updateFir.php" method="POST">
<input type="submit" value="Update">
</form>

<form action="newFir.php" method="POST">
<input type="submit" value="New">
</form>

</body>
</html>';
}
?>