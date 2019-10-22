<?php

	echo navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/monitoring", "Monitoring");

	echo navGroup(("California"),
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/2009-station-fire-arroyo-seco-pasadena-california", "2009 Station Fire, Arroyo Seco, Pasadena CA").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/2009-station-fire-dunsmore-canyon-glendale-california", "2009 Station Fire, Dunsmore Canyon, Glendale, CA").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/us-highway-50-california", "U.S. Highway 50, CA").
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/san-francisco-bay-area-east-bay-balt1-site-near-castro", "SF Bay Area - East Bay (BALT1) Site near Castro Valley, CA").
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/san-francisco-bay-sf-bay-balt2-site-near-brisbane", "SF Bay Area - Marin County (BALT2) Site near San Rafael, CA").
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/san-francisco-bay-area-sf-balt3-site-near-castro", "SF Bay Area - SF Peninsula (BALT3) Site near Brisbane, CA").
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/san-francisco-bay-area-sf-balt4-site-near-castro", "SF Bay Area - SF Peninsula (BALT4) Site near Pacifica, CA").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/2013-springs-fire-ventura-county-california", "2013 Springs Fire, Ventura County, CA")
	); // End California

	echo navGroup(("Colorado"),
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/chalk-cliffs-colorado", "Chalk Cliffs, CO")
	); // End colorado

	echo navGroup(("North Carolina"),
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/bent-creek-experimental-forest-north-carolina", "Bent Creek Experimental Forest, NC").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/mooney-gap-coweeta-experimental-forest-north-carolina", "Mooney Gap, Coweeta Experimental Forest, NC").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/poplar-cove-nantahala-national-forest-north-carolina", "Poplar Cove, Nantahala National
		Forest, NC")
	); // End North Carolina

	echo navGroup(("Oregon"),
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/knife-ridge-elliott-state-forest-oregon", "Knife Ridge, Elliott State Forest,
		OR").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/millicoma-meander-elliott-state-forest-oregon", "Millicoma Meander,  Elliott
		State Forest, OR").
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/portland-oregon", "Portland, OR")
	); // End Oregon

	echo navGroup(("Washington"),
		navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/seattle-area-washington", "Seattle Area, WA")
	); // End Washington

  echo navGroup(("Puerto Rico"),
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/toro-negro-puerto-rico", "Toro Negro, PR").
    navItem("https://www.usgs.gov/natural-hazards/landslide-hazards/science/utuado-puerto-rico", "Utuado, PR")
  ); // End Puerto Rico

?>
