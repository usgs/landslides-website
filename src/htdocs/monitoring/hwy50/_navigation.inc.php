<?php

	$section = '/monitoring';
	echo navItem("${section}/index.php", "Monitoring Home");

		echo navGroup(navItem("${section}/hwy50/index.php", "Highway 50, California"),
			navItem("${section}/hwy50/status.php", "Current Landslide Status").
			navItem("${section}/hwy50/rtdmonitoring.php", "Real-time Data").
			navItem("${section}/hwy50/report.php", "Report").
			navItem("${section}/hwy50/yearly.php", "Yearly Information").
			navItem("/learn/photos/landslide_monitoring_sites/u.s._highway_50__ca", "Photos")
	);
?>
