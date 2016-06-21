<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/09/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Mooney Gap, Coweeta Experimental Forest, North Carolina';
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
      Instruments were installed in the fall of 2013 and are used to monitor and
      detect changes in local conditions, including
    </p>
    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#ground">Ground Water Pressure</a></li>
      <li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
      <li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
    </ul>

    <p>
      <strong>Measurements are taken at 30-minute intervals</strong> and data
      are <strong>transmitted daily</strong> and displayed on graphs.
    </p>
    <hr/>

    <p>
      Landslides in western North Carolina impact people and the environment and
      are commonly induced by intense or prolonged rainfall associated with
      strong storms. For example, in September of 2004 heavy rainfall from two
      hurricanes, Frances and Ivan, induced thousands of landslides over a large
      part of western North Carolina.
  </p>
    <p>
      The USGS and its cooperators have installed instruments in a steep
      hillside about 16 km southeast of Otto, NC in the Coweeta Experimental
      Forest. Data collection at this site supports research on hydrologic
      factors that control landslide initiation. In many landslide-prone
      hillsides, infiltration of water from rainfall or snowmelt increases
      ground-water pressures. These elevated pressures can, in turn, induce
      landslide movement.
    </p>

    <hr/>
    <section class="photos">
      <figure>
        <a href="images/mooneyGapContour.png"><img
        src="images/mooneyGapContour.png" alt="Image provided by
        Rick Wooten, NCDENR"/></a>
      </figure>
      <figure>
        <a href="images/IMG_3.JPG"><img src="images/IMG_3.JPG" alt="Image provided by Rick Wooten, NCDENR"/></a>
      </figure>
      <figure>
        <a href="images/IMG_1.JPG"><img src="images/IMG_1.JPG" alt=""/></a>
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
    </ul>
    <h2>Cooperators</h2>
    <ul>
      <li>The North Carolina Department of Environment and Natural Resources</li>
      <li>The Coweeta Experimental Forest</li>
      <li>Colorado School of Mines (National Science Foundation award CMMI 0855783 to N. Lu and J.W. Godt and NASA NNX12AO19G to N. Lu, D. Kirschbaum, and Y. Hong).</li>
    </ul>
  </div>
</div>
