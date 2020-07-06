<?php
session_start();
echo "Printing Session : " . $_SESSION['sid'];
if(isset($_SESSION['sid'])) {
    echo '
<html>
    <head>
    </head>

<body>
<div>
    <h3>FIR Details </h3>
    <form action = "firdetail.php" method="post" id="firform" enctype="multipart/form-data">
        DATE: <input type="date" name="date" required>
        Nearest Police-Station: <input type="text" name="nps" required>
        TYPE: <input type="text" name="typ" required>
        SUBJECT: <input type="text" name="sub" required>
        Documents : <input type="file" name="file">
        <input type="submit" value="FILE">
    </form>
    <textarea rows="30" cols="70" name="fir" form="firform">
            Write your FIR here...
    </textarea>

   
</div>

<div>
    <form action="status.php" method="post">
        <select name="checkStatus">
        <option value="">STATUS</option>
        <option value="Solved">Solved</option>
        <option value="Unsolved">Unsolved</option>
        </select>

    </form>
</div>

<div>
    <form action="logout.php" method="post">
    LOGOUT: <input type="submit" value="Logout">
    </form>
</div>

</body>
</html>';
}
else{
    header(iindexx.php);
}
?>
