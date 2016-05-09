<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/09/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  '2013 Springs Fire, Ventura County, California';
      $NAVIGATION  = true;
      $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
        <link rel="stylesheet" href="/monitoring/index.css"/>
      ';
      $FOOT = '
      <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
      <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
      <script src="/monitoring/stations.js"></script>
      ';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">
    <p>
      Rainfall on steep burned basins can quickly transform into potentially
      dangerous flash floods and debris flows. The Springs Fire burned many
      steep basins in the Santa Monica Mountains east of Oxnard, CA in May,
      2013. The USGS has installed a telemetered rain gage to monitor the
      rainfall conditions in the Springs Fire burn area. Data collection at this
      site is intended to advance the understanding of post-fire runoff,
      erosion, and debris-flow generation processes and to provide information
      from the burned area to the National Weather Service for warning
      decision-making.
    </p>

    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Dennis Staley</strong><br />
          U.S. Geological Survey<br />
          Geologic Hazards Team<br />
          Box 25046, MS 966<br />
          Denver, CO 80225<br />
          <a href="mailto:dstaley@usgs.gov">dstaley@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Jason Kean</strong><br />
          <a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
        </p>
      </li>
    </ul>

    <h2>Cooperators</h2>
    <ul>
      <li>National Oceanic and Atmospheric Association</li>
    </ul>

    <h2>For More Information</h2>
    <ul>
      <li>
        <a href="https://pubs.er.usgs.gov/publication/ofr20141001">
          Debris-flow hazard assessment for Springs Fire
        </a>
      </li>
      <li>
        <a href="/hazards/warningsys.php">
          NOAA/USGS Demonstration Flash-flood and debris-flow early warning system
        </a>
      </li>
    </ul>
  </div>

  <div class="column one-of-three">

    <h2>Location Map</h2>
    <div id="map">
    </div>

    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>
    <p>A rain gage was installed in November 2015 and is used to monitor
    </p>
    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
    </ul>
    <p>
      Data is <strong>updated every 60 minutes</strong>.
    </p>
  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/Springs1.jpeg"><img src="images/Springs1.jpeg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/Springs2.jpeg"><img src="images/Springs2.jpeg" alt=""/></a>
  </figure>
</section>
