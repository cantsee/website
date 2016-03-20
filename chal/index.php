<html>
<head>
<?php
$servername = "localhost";
$username = "root";
$password = "cmip23wl";
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<img src="style/banner.gif" alt="banner" style="width:1004px;height:228px;">
</head>
<body>

<style>
body {
    background-image: url("style/background.jpg");
}
</style>
<form>
	Select Name: <br>
<select name="Users">
  <option value="Danny_Lisa">Danny/Lisa</option>
  <option value="Mike_Jeni">Mike/Jeni</option>
  <option value="Hanah_Jon">Hanah/Jon</option>
</select>
	Enter Points:
	<input type="number" name="points">
	<input type="submit">
</form>

</body>
</html>
