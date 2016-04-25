<?php

$section = "/monitoring";

echo navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("${section}/seattle/", "Seattle Area, Washington") ,
			navItem("${section}/seattle/rtdmonitoring.php", "Real-time Data").
			navItem("{$section}/seattle/report.php", "Report") .
			navItem("http://www.wrh.noaa.gov/sew/", "Current Conditions") .
			navItem("{$section}/seattle/histories.php", "Yearly Information")
		);
