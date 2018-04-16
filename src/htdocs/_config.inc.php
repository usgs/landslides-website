<?php
// site search url, leave blank for all usgs
$SITE_URL = 'https://landslides.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
  '<a href="/hazards/">Post-Fire Debris-Flow Hazards</a>' .
  '<a href="/monitoring/">Monitoring</a>' .
  '<a href="/learn/">Learn</a>' .
  '<a href="/research/">Research</a>';

// at bottom of page
$SITE_COMMONNAV =
  navItem(($SITE_URL), 'Home') .
  navItem('/aboutus/', 'About Us') .
  navItem('/contactus/', 'Contacts') .
  navItem('/legal.php', 'Legal');

$HEAD =
// site theme, should use a site root-relative URL
  '<link rel="stylesheet" href="/theme/site/landslides/index.css"/>' .
// page head content
  ($HEAD ? $HEAD : '') .
// description meta
  '<meta name="description" content="' .
      'USGS Landslide Hazards Program, responsible for monitoring, ' .
      'reporting, and researching landslides and landslide hazards' .
    '"/>' .
// keywords meta
  '<meta name="keywords" content="' .
      'landslide, landslides, mudflow, erosion' .
    '"/>' .
// universal analytics (should be last in $HEAD)
  '<script id="_fed_an_ua_tag" async="async" src="' .
      'https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js' .
      '?agency=DOI&amp;subagency=USGS&amp;pua=UA-7320779-2' .
      '"></script>';

// comments and questions default
if (!isset($CONTACT)) {
  $CONTACT_URL = 'https://answers.usgs.gov/cgi-bin/gsanswers';
}
else {
  $CONTACT_URL = 'mailto:{CONTACT}?subject=Landslides%20Website%20Email%20';
}
?>
