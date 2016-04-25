<?php

$section = "/monitoring";


echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/knife_ridge/", "Knife Ridge, Elliott State
												Forest, Oregon") ,
							navItem("{$section}/knife_ridge/rtdmonitoring.php", "Real-time Data")
		);
