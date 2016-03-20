<?php
include("functons.php");
	$currentStateInfo['michael_jeni'] = 0;
	$currentStateInfo['hanah_jon'] = 0;
	$currentStateInfo['danny_lisa'] = 0;
	$newStateString = convertToString($currentStateInfo);
	file_put_contents("points.txt", $newStateString);
?>