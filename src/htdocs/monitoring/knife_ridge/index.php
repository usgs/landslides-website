<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt
      //  Last  modified:  06/21/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Knife Ridge, Elliott State Forest, Oregon';
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
      The instruments were installed in the summer and fall of 2009 and are used to monitor and detect changes in local conditions, including
    </p>

    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#ten">Ground-water Pressure - Tensiometers</a></li>
      <li><a href="rtdmonitoring.php#pres">Ground-water and Atmospheric Pressure - Piezometers</a></li>
      <li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
      <li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery</a></li>
    </ul>
    <p>
      <strong>Measurements are taken at 15-minute intervals</strong> and data are <strong>transmitted hourly</strong> and displayed on graphs that are updated hourly.
    </p>
    <hr/>

    <p>
      Landslides in the Oregon Coast Range impact people and the environment and are commonly induced by intense or prolonged rainfall associated with strong storms in the late fall and winter seasons. For example, in February and November of 1996 heavy rainfall from two unusually large storms induced thousands of landslides over a large part of western Oregon.
    </p>
    <p>
      The USGS and its cooperators have installed instruments in a steep hillside about 20 km southeast of Reedsport in the Elliott State Forest.   Data collection at this site supports research on hydrologic factors that control landslide initiation.  In many landslide-prone hillsides, infiltration of water from rainfall or snowmelt increases ground-water pressures. These elevated pressures can, in turn, induce landslide movement.
    </p>

    <h2>For More Information</h2>
    <p>
      <a href="https://pubs.usgs.gov/of/2013/1283/">Hydrologic Monitoring of a Landslide-Prone Hillslope in the Elliott State Forest, Southern Coast Range, Oregon, 2009–2012</a> (OFR-2013-1283).
    </p>

    <hr/>
    <section class="photos">
      <figure>
        <a href="images/photo2-lg.jpg"><img src="images/photo2-sm.jpg" alt=""/></a>
      </figure>
      <figure>
        <a href="images/photo1-lg.jpg"><img src="images/photo1-sm.jpg" alt=""/></a>
      </figure>
      <figure>
        <a href="images/photo.jpg"><img src="images/photo_sm.jpg" alt=""/></a>
      </figure>
      <figure>
        <a href="images/ContourMap.png"><img src="images/ContourMap_sm.jpg" alt=""/></a>
        <figcaption>Laser suspended 8 meters above channel.</figcaption>
      </figure>
    </section>
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
          <strong>Jonathan Godt</strong><br />
          U.S. Geological Survey <br />
          Central Region Geologic Hazards Team <br />
          Box 25046, DFC <br />
          Mail Stop 966 <br />
          Denver CO 80225 <br />
          <a href="mailto:jgodt@usgs.gov">jgodt@usgs.gov</a>
        </p>
      </li>
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
    </ul>

    <h2>Cooperators</h2>
    <ul>
      <li>The Oregon Department of Forestry</li>
      <li>the Elliott State Forest</li>
      <li>the Colorado School of Mines</li>
    </ul>
  </div>
</div>
