<html>
<head>
<?php
include("functons.php");
$file = file_get_contents("points.txt");
$points = convertToArray($file);

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
  <option value="danny_lisa">Danny/Lisa</option>
  <option value="mike_jeni">Mike/Jeni</option>
  <option value="hanah_jon">Hanah/Jon</option>
</select>
	Enter Points:
	<input type="number" name="points">
	<input type="submit">
</form>

<table border="1" style="width:100%">
  <tr>
    <td>Danny/Lisa</td>   
    <td><?php echo $points['danny_lisa']?></td>
  </tr>
  <tr>
    <td>Hanah/Jon</td>   
    <td><?php echo $points['hanah_jon']?</td>
  </tr>
  <tr>
    <td>Mike/Jeni</td>   
    <td><?php echo $points['mike_jeni']?></td>
  </tr>
</table>

</body>
</html>
