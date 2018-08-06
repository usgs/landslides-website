<?php

$section = "/monitoring";

	echo navItem("${section}/", "Monitoring");

	echo navGroup(("California"),
		navItem("${section}/arroyo_seco/", "2009 Station Fire, Arroyo Seco, Pasadena CA").
		navItem("${section}/dunsmore/", "2009 Station Fire, Dunsmore Canyon, Glendale, CA").
		navItem("${section}/hwy50/", "U.S. Highway 50, CA").
		navItem("${section}/springs/", "2013 Springs Fire, Ventura County, CA")
	); // End California

	echo navGroup(("Colorado"),
		navItem("${section}/chalk_cliffs/", "Chalk Cliffs, CO")
	); // End colorado

	echo navGroup(("North Carolina"),
		navItem("${section}/bent_creek/", "Bent Creek Experimental Forest, NC").
		navItem("${section}/mooneygap/", "Mooney Gap, Coweeta Experimental Forest, NC").
		navItem("${section}/poplar_cove/", "Poplar Cove, Nantahala National
		Forest, NC")
	); // End North Carolina

	echo navGroup(("Oregon"),
		navItem("{$section}/knife_ridge/", "Knife Ridge, Elliott State Forest,
		OR").
		navItem("{$section}/millicoma_meander/", "Millicoma Meander,  Elliott
		State Forest, OR").
		navItem("{$section}/portland/", "Portland, OR")
	); // End Oregon

	echo navGroup(("Washington"),
		navItem("${section}/seattle/", "Seattle Area, WA")
	); // End Washington

  echo navGroup(("Puerto Rico"),
    navItem("${section}/toro-negro/", "Toro Negro, PR").
    navItem("${section}/utuado/", "Utuado, PR")
  ); // End Puerto Rico

?>
