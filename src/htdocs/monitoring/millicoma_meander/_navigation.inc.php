<?php

$section = "/monitoring";

echo	navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("{$section}/millicoma_meander/", "Millicoma Meander, Elliott
												State Forest, Oregon") ,
								navItem("{$section}/millicoma_meander/rtdmonitoring.php", "Real-time Data")
		);
