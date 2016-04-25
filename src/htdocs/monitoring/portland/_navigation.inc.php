<?php

$section = "/monitoring";

echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/portland/", "Portland, Oregon") ,
							navItem("{$section}/portland/rtdmonitoring.php", "Real-time Data")
		);
