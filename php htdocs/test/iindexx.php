<!DOCTYPE html>
<html>
<body>

<form action="loginUser.php" method="post">
Username:<br>
<input type="text" name="email" required>
<br>
Password:<br>
<input type="password" name="password" required>
<br><br>
<input type="submit" value="Login">

</form>

<form action="signUser.php" method="post">
<table style="height:480px; width:500px; border:3px solid #008080; margin-left:430px;">
    <tr>
        <td>
            <span style="color:#008080;"> 1. FIRST NAME</span>
        </td>
        <td>
            <input type="text" placeholder="MEHERE" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="FIRST_NAME" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 2. LAST NAME</span>
        </td>
        <td>
            <input type="text" placeholder="GUPTA" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="LAST_NAME" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 3. EMAIL-ADDRESS</span>
        </td>
        <td>
            <input type="text" placeholder="MEHERGUPTA123@gmail.com" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="EMAIL" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 4. NEW PASSWORD</span>
        </td>
        <td>
            <input type="password" placeholder="12345678" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="PASSWORD" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 5. PHONE NO.</span>
        </td>
        <td>
            <input type="text" placeholder="+91 1234567891" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="PHONE_NO" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 6. AADHAR NMUBER</span>
        </td>
        <td>
            <input type="text" placeholder="11223344" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="AADHAR" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 7. ADDRESS</span>
        </td>
        <td>
            <input type="text" placeholder="palam vihar , new delhi" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="ADDRESS" required>
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:#008080;"> 8. PINCODE</span>
        </td>
        <td>
            <input type="text" placeholder="208001" style="border:1px solid #008080; height:30px; width:200px; text-align:center;" name="PINCODE" required>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio">Male <input type="radio">Female <input type="radio">Others
        </td>
        <td>
            <input type="submit" value="SIGNIN" style="color:white; background-color:#008080;">
        </td>
    </tr>
</table>
</form>
</body>
</html>