<?php
echo navGroup(navItem('/hazards/', 'Hazards'),
	navItem('/dysi/', 'Did You See It?').
	navItem('/hazards/warningsys.php', 'Early Warning System').
	navItem('/hazards/postfire_debrisflow/', 'Post-fire Debris-Flow Hazards').
	navItem('/hazards/nationalmap/', 'Landslide Overview Map')
);
?>
