<?php
echo navGroup(navItem('/learn/','Learn'),
  navItem('http://www.stategeologists.org/','State Geologists &amp; Geological Surveys') .
  navItem('/learn/ls101.php', 'Landslides 101') .
  navItem('/learn/glossary.php', 'Landslides Glossary') .
  navitem('https://www.usgs.gov/faq/?q=taxonomy/term/9752', 'Frequently Asked Questions (FAQ)') .
  navItem('/learn/majorls.php', 'Catastrophic Landslides') .
  navItem('/learn/prepare.php', 'Landslide Preparedness') .
  navItem('/learn/movie/', 'Landslide Hazards Video') .
  navItem('/learn/useful_links.php', 'Additional Landslide Information')
);
?>
