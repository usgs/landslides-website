<?php
$section = '/monitoring';

echo navItem("${section}/index.php", "Monitoring Home");

echo navGroup(navItem("${section}/springs/index.php", "Springs, Ventura County, California"),
							navItem("${section}/springs/rtdmonitoring.php", "Real-time Data")
						);
?>
