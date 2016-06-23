<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt
      //  Last  modified:  06/21/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  '2009 Station Fire, Arroyo Seco, Pasadena, California';
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

    <hr/>

    <p>
      Most of the measurements are taken at <strong>1-minute intervals</strong> and <strong>data are transmitted hourly</strong> and displayed on graphs.
    </p>

    <p>
      Rainfall on steep burned basins can transform into potentially dangerous
      flash floods and debris flows.  In 2009, the Station Fire burned 160,000
      acres in the San Gabriel Mountains. Vegetation has started to return, but
      it can take many years for a basin to fully recover from the effects of
      fire.
    </p>
    <p>
      The USGS has installed instruments in a small basin of
      Arroyo Seco above Pasadena, CA. Data collection at this site supports
      research on the hydrologic factors that control debris-flow initiation in
      burned areas. The USGS conducted debris-flow monitoring at this site after
      the fire from 2009 to 2011. The USGS reestablished the monitoring site in
      the fall of 2015 to understand the effects of vegetation recovery on
      debris-flow susceptibility.
    </p>
  </div>

  <div class="column one-of-three">

    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>

    <h2>Location Map</h2>
    <div id="map">
    </div>

    <h2>Contacts</h2>
      <ul class="no-style">
        <li>
          <p>
            <strong>Jason Kean</strong><br />
            U.S. Geological Survey<br />
            Geologic Hazards Team<br />
            Box 25046, MS 966<br />
            Denver, CO 80225 <br />
            <a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
          </p>
        </li>
        <li>
          <p>
            <strong>Joel Smith</strong><br />
            <a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
          </p>
        </li>
      </ul>
  </div>
</div>

<hr/>
<section class="photos">
  <figure>
    <a href="images/ArroyoSeco1-lg.jpg">
      <img src="images/ArroyoSeco1-sm.jpg" alt="pole with solar panel and antenna"/>
    </a>
  </figure>
  <figure>
    <a href="images/ArroyoSeco2-lg.jpg">
      <img src="images/ArroyoSeco2-sm.jpg" alt=""/>
    </a>
  </figure>
  <figure>
    <a href="images/ArroyoSeco3-lg.jpg">
      <img src="images/ArroyoSeco3-sm.jpg" alt=""/>
  </figure>
  <figure>
    <a href="images/ArroyoSeco4-lg.jpg">
      <img src="images/ArroyoSeco4-sm.jpg" alt=""/>
    </a>
  </figure>
  <figure>
    <a href="images/ArroyoSeco5-lg.jpg">
      <img src="images/ArroyoSeco5-sm.jpg" alt=""/>
    </a>
  </figure>
</section>
