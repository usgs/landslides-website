<?php

$section = "/monitoring";

echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/mooneygap/", "Mooney Gap, North Carolina"),
							navItem("{$section}/mooneygap/rtdmonitoring.php", "Real-time Data")
		);
