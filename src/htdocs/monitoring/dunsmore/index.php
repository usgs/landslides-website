<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/09/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  '2009 Station Fire, Dunsmore Canyon, Glendale, California';
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
      Rainfall on steep burned basins can transform into potentially dangerous
      flash floods and debris flows.  In 2009, the Station Fire burned 160,000
      acres in the San Gabriel Mountains. Vegetation has started to return, but
      it can take many years for a basin to fully recover from the effects of
      fire.
    </p>
    <p>
      The USGS has installed instruments in Dunsmore Canyon
      located in Deukmejian Wilderness Park, Glendale, CA. Data collection at
      this site supports research on the hydrologic factors that control
      debris-flow initiation in burned areas. The USGS conducted debris-flow
      monitoring at this site after the fire from 2009 to 2011. The USGS
      reestablished the monitoring site in the fall of 2015 to understand the
      effects of vegetation recovery on debris-flow susceptibility.
    </p>

    <h2>Contacts</h2>
      <ul class="no-style">
        <li>
          <p>
            <strong>Jason Kean</strong><br/>
            U.S. Geological Survey<br/>
            Geologic Hazards Team<br/>
            Box 25046, MS 966<br/>
            Denver, CO 80225 <br/>
            <a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
          </p>
        </li>
        <li>
          <p>
            <strong>Joel Smith</strong><br/>
            <a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
          </p>
        </li>
      </ul>
    </div>

    <div class="column one-of-three">

      <h2>Location Map</h2>
      <div id="map">
      </div>

      <h2>Monitoring Status</h2>
      <p class="status-active" align="center">ACTIVE</p>

      <h2>Real-time Data</h2>
      <p>
        Instruments and are used to monitor and detect changes in local conditions, including
      </p>
      <ul>
        <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
        <li><a href="rtdmonitoring.php#ground">Soil water content and ground water pressure</a></li>
        <li><a href="rtdmonitoring.php#channel">Channel stage</a></li>
        <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
      </ul>

    <p>
      Most of the measurements are taken at <strong>1-minute intervals</strong>
      and data are <strong>transmitted hourly</strong> and displayed on graphs.
    </p>

  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/Dunsmore1.jpg"><img src="images/Dunsmore1.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/Dunsmore2.JPG"><img src="images/Dunsmore2.JPG" alt=""/></a>
  </figure>
  <figure>
    <a href="images/Dunsmore3.jpg"><img src="images/Dunsmore3.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/Dunsmore4.JPG"><img src="images/Dunsmore4.JPG" alt=""/></a>
  </figure>
  <figure>
    <a href="images/Dunsmore5.JPG"><img src="images/Dunsmore5.JPG" alt=""/></a>
  </figure>
</section>
