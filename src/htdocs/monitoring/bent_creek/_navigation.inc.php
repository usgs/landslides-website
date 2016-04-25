<?php

$section = "/monitoring";


echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/bent_creek/", "Bent Creek, North Carolina") ,
			navItem("{$section}/bent_creek/rtdmonitoring.php", "Real-time Data")
		);
