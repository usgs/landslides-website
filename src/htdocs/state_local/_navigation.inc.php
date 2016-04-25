<?php
echo navGroup(navItem('/state_local/','State and Local'),
  navItem('/state_local/seattle.php', 'Seattle') .
  navItem('/state_local/sanfrancisco.php', 'San Francisco Bay') .
  navItem('http://pubs.er.usgs.gov/publication/ofr0317', 'Southwest California')
);
?>
