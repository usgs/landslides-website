<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    include_once 'functions.inc.php';
    $HEAD = '<link rel="stylesheet" href="/research/featured/styles.css"/>';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<h3>2018</h3>
<!-- Featured Items -->
  <?php
  include_once '2018/_features.inc.php';
  echo $LS_FEATURES->toHtml(-1);
  ?>

<h3>2017</h3>
<ul class="no-style linklist feature">
  <li><a href="/research/featured/2017/maria-pr/">
    <h4>Preliminary Locations &amp; Map data showing concentration of landslides caused by Hurricane Maria in Puerto Rico</h4>
    <img class="feature-image" src="/research/featured/2017/maria-pr/images/PR_Maria_LS_density_map_sm.jpg" alt=""/>
  </a>
  </li>
  <li><a href="/research/featured/2017/nuugaatsiaq/">
    <h4>Preliminary Analysis of Satellite Imagery and Seismic Observations of the Nuugaatsiaq Landslide and Tsunami, Greenland</h4>
    <img class="feature-image" src="/research/featured/2017/nuugaatsiaq/images/nuug-landslide.jpg" alt=""/>
</a>
  </li>
</ul>

<h4>2016</h4>
<ul class="no-style linklist feature">
  <li><a href="/research/featured/2015-westsaltcreek/">
        <h4>Reconstruction of an Avalanche: The West Salt Creek Rock Avalanche, Colorado, May 25, 2014</h4>
        <img class="feature-image" src="/research/featured/2015-westsaltcreek/images/westsaltcreek-sm.jpg" alt=""/>
      </a>
  </li>
</ul>
