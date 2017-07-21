<?php
echo navGroup(navItem('/learn/','Learn'),
  navItem('http://www.stategeologists.org/','State Geologists &amp; Geological Surveys') .
  navItem('/learn/ls101.php', 'Landslides 101') .
  navItem('/learn/glossary.php', 'Landslides Glossary') .
  navitem('https://www.usgs.gov/faq/?q=taxonomy/term/9752', 'Frequently Asked Questions (FAQ)') .
  navItem('/learn/majorls.php', 'Catastrophic Landslides') .
  navItem('/learn/factsheets.php', 'Factsheets') .
  navItem('/learn/prepare.php', 'Preparedness') .
  navItem('/learn/videos.php', 'Videos') .
  navItem('/learn/useful_links.php', 'Additional Landslide Information')
);
?>
