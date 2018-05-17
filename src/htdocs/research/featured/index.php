<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();
    $HEAD = '<link rel="stylesheet" href="/research/featured/styles.css"/>';
    include 'template.inc.php';
  }
?>

<h3>2018</h3>
<!-- Featured Items -->
  <?php
  include_once '2018/_features.inc.php';
  echo $LS_FEATURES->toHtml(-1);
  ?>

  <h3>Science for Everyone Archives</h3>

<h4>2017</h4>
<ul>
  <li><a href="/research/featured/2017/maria-pr/">Preliminary Locations &amp; Map data showing concentration of landslides caused by Hurricane Maria in Puerto Rico</a>
  </li>
  <li><a href="/research/featured/2017/nuugaatsiaq/">Preliminary Analysis of Satellite Imagery and Seismic Observations of the Nuugaatsiaq Landslide and Tsunami, Greenland</a>
  </li>
</ul>

<h4>2016</h4>
<ul>
  <li><a href="/research/featured/2015-westsaltcreek/">Reconstruction of an Avalanche: The West Salt Creek Rock Avalanche, Colorado, May 25, 2014</a>
  </li>
</ul>
