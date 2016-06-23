<?php

$TITLE = "Rainfall";
include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

	$contents = file( 'http://landslides.usgs.gov/realtime/plots/ThCurrTabl.htm'); 
	print join('', $contents);
?>

<ul>
	<li><a href="http://www.wrh.noaa.gov/sew/observations.php">National Weather Service Observations</a></li>
</ul>
