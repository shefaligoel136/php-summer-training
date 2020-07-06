<html>
<head>
<style>
 input
 {
	 height:40px;
	 width:320px;
	 color:#008080;
 }
 select
 {
	 height:40px;
	 width:270px;
	 color:#008080;
 }
 div
 {
	margin-left:170px;
	margin-top:170px;	
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
<form action= "info.php" method="post">
<div>
<span>FROM:</span>
<select name="s1">
    <option value="ADARSH NAGAR">ADARSH NAGAR</option>
    <option value="CHANDNI CHOWK">CHANDNI CHOWK</option>
    <option value="GOVIND PURI">GOVIND PURI</option>
    <option value="MALVIYA NAGAR">MALVIYA NAGAR</option>
	<option value="SADAR BAZAR">SADAR BAZAR</option>
	<option value="SAKET">SAKET</option>
</select>
<span>TO:</span>
<select name="s2">
    <option value="ADARSH NAGAR">ADARSH NAGAR</option>
    <option value="CHANDNI CHOWK">CHANDNI CHOWK</option>
    <option value="GOVIND PURI">GOVIND PURI</option>
    <option value="MALVIYA NAGAR">MALVIYA NAGAR</option>
    <option value="SADAR BAZAR">SADAR BAZAR</option>
	<option value="SAKET">SAKET</option>
</select>
<input type="submit" name="submit">
</div>
</form>
</body>
</html>