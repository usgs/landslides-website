<?php
echo navGroup(navItem('/research/','Research'),
  navItem('/research/research.php', 'Research Projects').
  navItem('/research/software.php', 'Software').
  navItem('/research/inventory/', 'Landslide Inventory Pilot Project').
  navItem('/research/publications.php','Recent Publications')
);

echo navGroup(("Landslide Inventory Pilot Project"),
 navItem("http://gsa.state.al.us/gsa/geologichazards/Landslides.htm", 'Alabama').
 navItem("/research/inventory/california/", 'California').
 navItem("http://coloradogeologicalsurvey.org/geologic-hazards/landslides-2/colorado-landslide-inventory/", 'Colorado').
 navItem("/research/inventory/kentucky/", 'Kentucky').
 navItem("/research/inventory/newjersey/", 'New Jersey').
 navItem("/research/inventory/northcarolina/", 'North Carolina').
 navItem("https://www.dmr.nd.gov/ndgs/landslides/", 'North Dakota').
 navItem("/research/inventory/oregon/", 'Oregon').
 navItem("/research/inventory/pennsylvania/", 'Pennsylvania').
 navItem("/research/inventory/utah/", 'Utah').
 navItem("/research/inventory/washington/", 'Washington').
 navItem("http://www.wrds.uwyo.edu/wrds/wsgs/hazards/landslides/lshome.html", 'Wyoming')
);
?>
