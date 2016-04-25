<?php

$section = "/monitoring";

	echo navItem("${section}/", "Monitoring");

	echo navGroup(("California"),
		navItem("${section}/arroyo_seco/", "Station Fire, Pasadena California").
		navItem("${section}/colby/", "Colby Fire, Glendora, California").
		navItem("${section}/dunsmore/", "Dunsmore Canyon, Glendale California").
		navItem("${section}/hwy50/", "Highway 50, California").
		navItem("${section}/springs/", "Springs Fire, California")
	); // End California

	echo navGroup(("Colorado"),
		navItem("${section}/chalk_cliffs/", "Chalk Cliffs, Colorado")
	); // End colorado

	echo navGroup(("North Carolina"),
		navItem("${section}/bent_creek/", "Bent Creek, Experimental Forest,
		North Carolina").
		navItem("${section}/mooneygap/", "Mooney Gap, North Carolina").
		navItem("${section}/poplar_cove/", "Poplar Cove, Nantahala National
		Forest, North Carolina")
	); // End North Carolina

	echo navGroup(("Oregon"),
		navItem("{$section}/knife_ridge/", "Knife Ridge, Elliott State Forest,
		Oregon").
		navItem("{$section}/millicoma_meander/", "Millicoma Meander,  Elliott
		State Forest, Oregon").
		navItem("{$section}/portland/", "Portland, Oregon")
	); // End Oregon

	echo navGroup(("Washington"),
		navItem("${section}/seattle/", "Seattle Area, Washington")
	); // End Washington
?>
