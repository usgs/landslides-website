<?php

$section = '/monitoring';

	echo navItem("${section}/index.php", "Monitoring");

echo navGroup(navItem("${section}/arroyo_seco/index.php", "2009 Station Fire, Arroyo Seco, Pasadena California"),
					navItem("${section}/arroyo_seco/rtdmonitoring.php", "Real-time Data")

	 );
?>
