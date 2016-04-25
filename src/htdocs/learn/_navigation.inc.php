<?php
echo navGroup(navItem('/learn/','Learn'),
  navItem('/learn/ls101.php', 'Landslides 101') .
  navitem('http://www.usgs.gov/faq/?q=taxonomy/term/9752', 'Frequently Asked Questions (FAQ)') .
  navItem('/learn/glossary.php', 'Landslides Glossary') .
  navItem('/learn/useful_links.php', 'Additional Landslide Information') .
  navItem('/learn/majorls.php', 'Catastrophic Landslides') .
  navItem('/learn/prepare.php', 'Landslide Preparedness') .
  navItem('/learn/photos/', 'Photo Collections') .
  navItem('/learn/movie/', 'Landslide Hazards Video')
);
?>
