<html>
<head>
<?php
include("functons.php");
$name = $_POST['Users'];
$newPoints = $_POST['points'];
$file = file_get_contents("points.txt");
$points = convertToArray($file);

switch ($name) {
	case 'danny_lisa':
		$points['danny_lisa'] += $newPoints;
		break;
	case 'hanah_jon':
		$points['hanah_jon'] += $newPoints;
		break;
	case 'michael_jeni':
		$points['michael_jeni'] += $newPoints;
	default:
		//echo "no new points";
		$x = "no new points";
		break;
	}
$newPointsString = convertToString($points);
//var_dump($newPointsString);
$edit = file_put_contents("points.txt", $newPointsString);

$file = file_get_contents("points.txt");
$points = convertToArray($file);
$_POST['points'] = 0;
$newPoints = $_POST['points'];

?>
<img src="style/banner.gif" alt="banner" style="width:1004px;height:228px;">
</head>
<body style="background-color:navy;">
<style>
table, th, td {
    border: 1px solid white;
    color: white;
    width: 400;
    font: 60;
}
p1 {
    color: white;
}
td {
    font-size: 200%;
}
</style>
<img src="style/bodybuilder.jpg" alt="bodybuilder" align="right" style="width:250px;height:250;">
<form action="index.php" method="post">
	<p1>Select Name: <br> </p1>
<select name="Users">
  <option value="danny_lisa">Danny/Lisa</option>
  <option value="hanah_jon">Hanah/Jon</option>
  <option value="michael_jeni">Mike/Jeni</option>
</select>
	<p1>Enter Points: <p1>
	<input type="number" name="points">
	<input type="submit">
</form>

<br><br>
<table>
  <tr>
    <td>Danny/Lisa</td>   
    <td><?php echo $points['danny_lisa']?></td>
  </tr>
  <tr>
    <td>Hanah/Jon</td>   
    <td><?php echo $points['hanah_jon']?></td>
  </tr>
  <tr>
    <td>Mike/Jeni</td>   
    <td><?php echo $points['michael_jeni']?></td>
  </tr>
</table>

<br>
<img src="style/challenge.png" alt="challenge" style="width:700px;height:700;">

</body>
</html>
