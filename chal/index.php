<html>
<head>
<?php
$servername = "localhost";
$username = "root";
$password = "cmip23wl";
$conn = new mysql_connect($servername, $username, $password);
var_dump($conn);

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
