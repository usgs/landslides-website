<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  04/04/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Millicoma Meander, Elliott State Forest, Oregon';
      $NAVIGATION  = true;
      $HEAD = '<link rel="stylesheet" href="/monitoring/styles.css"/>';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">

    <h2>Purpose of Monitoring</h2>
    <p>
      Landslides in the Oregon Coast Range impact people and the environment
      and are commonly induced by intense or prolonged rainfall associated
      with strong storms in the late fall and winter season. For example, in
      February and November of 1996 heavy rainfall from two unusually large
      storms induced thousands of landslides over a large part of western
      Oregon.
    </p>
    <p>
      The USGS and its cooperators have installed instruments in a steep,
      recently clear-cut basin in the Elliott State Forest. Data collection at
      this site supports research on hydrologic factors that control landslide
      initiation, debris-flow timing, and debris-flow magnitude. In many
      landslide-prone hillsides, infiltration of water from rainfall or
      snowmelt increases ground-water pressures. These elevated pressures can,
      in turn, induce landslide movement which can lead to debris-flows.
    </p>

    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Rex Baum</strong><br />
          U.S. Geological Survey <br />
          Central Region Geologic Hazards Team <br />
          Box 25046, DFC <br />
          Mail Stop 966 <br />
          Denver CO 80225 <br />
          <a href="mailto:baum@usgs.gov">baum@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Jeff Coe</strong><br />
          <a class="mailto:jcoe@usgs.gov">jcoe@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Joel Smith</strong><br />
          <a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
        </p>
      </li>
    </ul>

    <h2>Cooperators</h2>
    <ul>
      <li>The Oregon Department of Forestry</li>
    </ul>
  </div>

  <div class="column one-of-three">
  <!-- Map, Status, Data -->
<!--
  <div id="map" style="width:250px;height:250px">
    <script language="javascript" type="text/javascript">
    var map = null;
    $(document).ready( function() {
    loadStationMap('Millicoma Meander');
    addStationMarkers();
    addEvent(window, 'unload', GUnload);
    });
    </script>
  </div>
-->
    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>

    <h2>Real-time Data</h2>
    <p>
        Instruments were installed in late summer 2012 and are used to monitor and detect changes in local conditions, including
    </p>
    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#channel">Channel Stage</a></li>
      <li><a href="rtdmonitoring.php#ground">Ground water pressure (tensiometers and pressure transducers</a></li>
      <li><a href="rtdmonitoring.php#soiltemp">Soil temperature</a></li>
      <li><a href="rtdmonitoring.php#soilwater">Soil water content</a></li>
      <li><a href="rtdmonitoring.php#geophone">Ground Vibrations</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery voltage and station temperatures</a></li>
    </ul>

    <p>
      Displayed <strong>measurements are taken at 1-minute intervals</strong> and <strong>transmitted hourly</strong> during daylight hours to be displayed on graphs. Updates may be interrupted occasionally by instrument, computer, or network malfunctions.
    </p>

  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/basinMaps.png"><img src='images/basinMaps.png' alt=""/></a>
  </figure>
  <figure>
    <a href="images/LaserDistanceDetail.jpg"><img src="images/LaserDistanceDetail-304.jpg" alt=""/></a>
    <figcaption>Laser suspended 8 meters above channel.</figcaption>
  </figure>
  <figure>
    <a href="images/ContourMap.png"><img src="images/ContourMap_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/LaserDistanceDetail.jpg"><img src="images/LaserDistanceDetail-304.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/photo.jpg"><img src="images/photo.jpg" alt=""/></a>
  </figure>
</section>
