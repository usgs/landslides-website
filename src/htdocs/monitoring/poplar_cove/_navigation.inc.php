<?php

$section = "/monitoring";

echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/poplar_cove/", "Poplar Cove, Nantahala National
Forest, North Carolina") ,
			navItem("{$section}/poplar_cove/rtdmonitoring.php", "Real-time Data")
		);
