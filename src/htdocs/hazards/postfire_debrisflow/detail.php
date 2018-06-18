<?php

if (!isset($TEMPLATE)) {
  // template functions
  include_once 'functions.inc.php';

  $TITLE = 'Emergency Assessment of Post-Fire Debris-Flow Hazards';
  $HEAD = '
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
  ';
  $NAVIGATION = true;
  $FOOT = '
    <script>
      var Objectid = ' . intval($_GET['objectid']) . ';
    </script>
    <script src="/lib/leaflet-0.7.7/leaflet.js"></script>
    <script src="js/detail.js"></script>
  ';

  include 'template.inc.php';
}

?>


<p class="alert info">
  What to do if you live in a recently-burned area where debris flows
  are possible, and there is a rainstorm - before, during, and after.

  Download the
  <a href="https://www.wrh.noaa.gov/lox/hydrology/files/DebrisFlowSurvivalGuide.pdf">
    National Weather Service
    Post Wildfire Flash Flood and Debris Flow Guide
    (PDF 7.2 MB)
  </a>
</p>


<div id="application">
  <noscript>
  <p>
    <a href="https://www.google.com/search?q=javascript">
      This page requires javascript.
    </a>
  </p>
  </noscript>
</div>
