<?php

$section = "/monitoring";

echo navItem("${section}/index.php", "Monitoring Home");

echo	navGroup(navItem("${section}/chalk_cliffs/", "Chalk Cliffs, Colorado"),
        	     navItem("${section}/chalk_cliffs/rtdmonitoring.php", "Real-time Data")
       	);
?>
