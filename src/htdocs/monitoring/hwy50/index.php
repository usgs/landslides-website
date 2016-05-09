<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/29/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'U.S. Highway 50, California';
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
      During January 1997, several large landslides closed Highway 50 between Placerville and South Lake Tahoe, California. The photograph below shows the catastrophic Mill Creek landslide that closed Highway 50 for 4 weeks. A number of other landslides are episodically active in this corridor during wet years.
    </p>
    <p>
      The Highway 50 landslide monitoring system uses data acquisition systems and radio telemetry developed by the USGS Volcano Hazards Program to operate in remote, hazardous sites with limited power. In many landslides, infiltration of rainfall or rapid snowmelt increases groundwater pressures.  These elevated pressures can, in turn, trigger landslide movement.
    </p>

    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Mark Reid</strong><br/>
          U.S. Geological Survey<br/>
          Landslide Hazards<br/>
          345 Middlefield Road MS 910<br/>
          Menlo Park, CA  94025<br/>
          <a href="mailto:mreid@usgs.gov">mreid@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Rick LaHusen</strong><br/>
          U.S. Geological Survey<br/>
          Volcano Hazards<br/>
          1300 SE Cardinal Court, Building 10, Suite 100<br/>
          Vancouver, WA 98683<br/>
          <a href="mailto:rlahusen@usgs.gov">rlahusen@usgs.gov</a>
        </p>
      </li>
    </ul>

    <h2>For More Information</h2>
    <ul class="spaced">
      <li><a href="report.php">Highway 50 Landslide Monitoring Report</a></li>
      <li><a href="yearly.php">Yearly Information</a></li>
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
      The U.S. Geological Survey, in cooperation with the Eldorado National Forest, has installed monitoring instruments on the Cleveland Corral landslide that has the potential to affect Highway 50.  Data from these instruments are used to detect changes in local conditions including
    </p>

    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#ground">Groundwater data from pressure sensors</a></li>
      <li><a href="rtdmonitoring.php#downslope">Movement data from displacement sensors</a></li>
      <li><a href="rtdmonitoring.php#geophone">Ground vibration from geophones</a></li>
    </ul>

    <p>
      Sensors are <strong>sampled every second</strong> and data are
      <strong>transmitted from the landslide to a USGS computer every 15
      minutes</strong>.Monitoring sensors on the landslide use
      commercially available components.
    </p>

  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/CT_tall.jpg"><img src="images/CT_tall_sm.jpg" alt=""/></a>
    <figcaption>
      Photograph of the Mill Creek landslide that closed Highway 50 for 4 weeks. CALTRANS. Photo by Lynn Harrison, 1997.
    </figcaption>
  </figure>
  <figure>
    <a href="images/drill.jpg"><img src="images/drill_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/house.jpg"><img src="images/house_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/meter.jpg"><img src="images/meter_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/pipe.jpg"><img src="images/pipe_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/ridge.jpg"><img src="images/ridge_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/slide1.jpg"><img src="images/slide1_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/slide2.jpg"><img src="images/slide2_sm.jpg" alt=""/></a>
  </figure>
  <figure>
    <a href="images/slide3b.jpg"><img src="images/slide3b_sm.jpg" alt=""/></a>
  </figure>
</section>
