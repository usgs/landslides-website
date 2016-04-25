<?php

$section = '/monitoring';

echo navItem("${section}/index.php", "Monitoring Home");

echo navGroup(navItem("${section}/dunsmore/index.php", "2009 Station Fire, Dunsmore Canyon, Glendale, California"),
              navItem("${section}/dunsmore/rtdmonitoring.php", "Real-time Data")
            );
