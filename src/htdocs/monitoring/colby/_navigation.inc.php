<?php

	$section = '/monitoring';
	echo navItem("${section}/index.php", "Monitoring Home");

	echo navGroup(navItem("${section}/colby/index.php", "Colby Fire, Glendora, California"),
							navItem("${section}/colby/rtdmonitoring.php", "Real-time Data").
			 				navItem("/learn/photos/landslide_monitoring_sites/u.s._highway_50__ca", "Photos")
	);
