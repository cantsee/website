<?php
function convertToString($x)
{
	$string = implode(', ', array_map(
	    function ($v, $k) { return $k . '=' . $v; }, 
		    $x, 
		    array_keys($x)
		));
	return $string;
}

function convertToArray($x)
{
	$result  = explode(', ', $x);

	foreach( $result as $val ){
	  $tmp = explode( '=', $val );
	  $finalArray[ $tmp[0] ] = $tmp[1];
	}
	
	return $finalArray;
}
?>