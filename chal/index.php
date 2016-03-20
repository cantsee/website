<html>
<head>
<?php
//include("functons.php");
//$file = ile_get_contents("points.txt");
//$points = convertToArray($file);
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

<table style="width:100%">
  <tr>
    <td>Danny/Lisa</td>   
    <td><?php $points->danny_lisa?></td>
  </tr>
  <tr>
    <td>Danny/Lisa</td>   
    <td><?php $points->hanah_jon?></td>
  </tr>
  <tr>
    <td>Danny/Lisa</td>   
    <td><?php $points->mike_jeni?></td>
  </tr>
</table>

</body>
</html>
