<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/02/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Landslide Monitoring';
      $NAVIGATION  = true;
      $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
        <link rel="stylesheet" href="index.css"/>
      ';
      $FOOT = '
      <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
      <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
      <script src="index.js"></script>
      ';
      include  'template.inc.php';
      }
?>

<div class="row">
  <div class="column two-of-three">
    <p>
    Monitoring is essential to predicting the behavior of landslides and forecasting which storms can trigger large numbers of landslides.
    Scientists in the USGS Landslide Hazards Program monitor selected landslides and hillsides in order to learn more about the physical processes that trigger landslides or control their movement.
    </p>

    <h2>Current Monitoring Sites</h2>
    <p>Hover over marker for name. Click marker for link to site.</p>
    <div id="map">
    </div>

    <p>
      Continuous, real-time monitoring occurs at some sites and periodic monitoring occurs at others; the most recent measurements are provided on-line for a few of our monitoring sites. Graphs showing the most recent data are updated regularly with update cycles ranging from 15 minutes to 24 hours. Updates may be interrupted occasionally by instrument, computer, or network malfunctions.
    </p>
    <p>
      Landslide monitoring data and information provided on this web site are preliminary and have not been reviewed for accuracy; therefore the data are subject to revision.
    </p>

    <img src="images/landslide_monitor.gif" alt="diagram of a typical landslide monitoring setup"/>

  </div>

  <div class="column one-of-three">

<!-- +++++++++++++ EL NINO WEBPAGES ++++++++++++++
<h2>El Ni&ntilde;o Information</h2>
    <ul class="spaced">
      <li><a href="2015elnino/ncal.php">El Ni&ntilde;o and Landslides in Northern and Central California</a></li>
      <li><a href="2015elnino/scal.php">El Ni&ntilde;o and Landslides in Southern California</a></li>
    </ul>
-->

    <h2>Preparedness</h2>
    <ul class="spaced">
      <li><a href="/learn/prepare.php">What To Do and Look For During and Immediately After Heavy Rains</a></li>
      <li><a class="offsite" href="http://www.redcross.org/services/disaster/0,1082,0_588_,00.html" target="_blank">Landslide Preparedness &amp; Safety Information</a></li>
    </ul>

    <h2 class="spaced">Monitoring Information and Publications</h2>
    <ul>
      <li><a href="/research/rtmonitoring/">Real-time Monitoring for Potential Landslides</a></li>
      <li><a href="/docs/reid/Reid_etal_ISL_2008.pdf">Capturing Landslide Dynamics and Hydrologic Triggers Using Near-Real-Time Monitoring (PDF)</a></li>
    <li><a class="offsite" href="http://pubs.usgs.gov/fs/2012/3008/">Real-Time Monitoring of Landslides</a></li>
    </ul>

    <h2>Disclaimer</h2>
    <p>
      Monitoring sites are operated as part of a research project. Active data collection may be discontinued at any time in the future.
    </p>
    <p>
      These data are preliminary and have not received final approval. Data relayed by radio or other telemetry have received little or no review. Inaccuracies in the data may be present because of instrument malfunctions or physical changes at the measurement site. Subsequent review may result in significant revisions to the data.
    </p>
    <p>
      Data users are cautioned to consider carefully the provisional nature of the information before using it for decisions that concern personal or public safety or the conduct of business that involves substantial monetary or operational consequences.
    </p>

  </div>
</div>
