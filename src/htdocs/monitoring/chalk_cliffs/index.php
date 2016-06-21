<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt
      //  Last  modified:  06/21/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Chalk Cliffs, Colorado';
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
      The instrumentation was installed in the summer of 2008 and includes a series of three monitoring stations located along the main channel. Data from one of these stations (Station 1) is transmitted from the site and displayed here.
    </p>

    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#stage">Flow Stage and Bed Pore Pressure</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery Voltage</a></li>
      <li><a href="rtdmonitoring.php#force">Force Plate</a></li>
      <li><a href="rtdmonitoring.php#video">Video Camera</a></li>
    </ul>

    <p>
      Data from the sensors are sampled at <strong>high rates (2 seconds to 100 hertz) during rain events and every 2 minutes otherwise</strong>. Two-minute data are transmitted by cell phone modem from the site to a USGS computer <strong>every 5 minutes</strong>.
    </p>
    <hr/>

  <p>
    Chalk Cliffs, located 8 miles southwest of Buena Vista, CO, is one of the most active debris-flow areas in the state. Typically one or more debris flows occur each year after intense or prolonged rainfall. The debris flows are triggered by surface-water runoff over loose material stored in channels.
  </p>

  <p>
    The USGS and its cooperators have installed debris-flow monitoring equipment in the largest drainage basin at Chalk Cliffs. Data collection at this site supports research on the hydrologic factors that control debris-flow initiation, entrainment, and flow dynamics.
  </p>

    <h2>For more information</h2>
    <ul>
      <li>
        <a href="/docs/coe/CoeGodtKinner08Final.pdf">Research paper on debris flows at Chalk Cliffs</a>
      </li>
      <li>
        <a href="http://forecast.weather.gov/MapClick.php?lat=38.72944724289828&lon=-106.19247436523437&site=pub&smap=1&marine=0&unit=0&lg=en">National Weather Service forecast for Chalk Cliffs and vicinity</a>
      </li>
      <li>
        <a href="http://www.dwr.state.co.us/surfacewater/data/detail_graph.aspx?ID=CHCRNACO&MTYPE=DISCHRG">Real-time stream gage on Chalk Creek 4 miles downstream from the monitoring basin</a>
      </li>
    </ul>

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
            <strong>Jason Kean</strong><br/>
            <a href=mailto:jwkean@usgs.gov>jwkean@usgs.gov</a>
          </p>
        </li>
        <li>
          <p>
            <strong>Joel Smith</strong><br />
            <a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
          </p>
        </li>
        <li>
          <p>
            <strong>Jeff Coe</strong><br/>
            <a href="mailto:jcoe@usgs.gov">jcoe@usgs.gov</a>
          </p>
        </li>
        <li>
          <p>
            <strong>Mailing Address</strong><br />
            U.S. Geological Survey<br />
            Geologic Hazards Team<br />
            Box 25046, MS 966<br />
            Denver, CO 80225
          </p>
        </li>
      </ul>

      <h2>Cooperators</h2>
      <ul>
        <li>University of Colorado (National Science Foundation award EAR-06-43353 to G.E. Tucker)</li>
        <li>East Carolina University (National Science Foundation award BCS-0934131 to T.A. Wasklewicz).</li>
      </ul>
  </div>
</div>

<hr/>
  <section class="photos">
    <figure>
      <a href="images/ProjectInformation.jpg"><img src='images/ProjectInformation_sm.jpg' alt=""/></a>
      <figcaption>
        View of monitoring basin from the debris-flow fan near Chaffee County Road 162.
      </figcaption>
    </figure>

    <figure>
      <a href="images/ForcePlate_Installation.jpg"><img src="images/ForcePlate_Installation_sm.jpg" alt=""/></a>
      <figcaption>Installing the forceplate.</figcaption>
    </figure>

    <figure>
      <a href="images/ForcePlate_SideView.jpg"><img src="images/ForcePlate_SideView_sm.jpg" alt=""/></a>
      <figcaption>Side view of the forceplate.</figcaption>
    </figure>

    <figure>
      <a href="images/MapPhotos_Station1.jpg"><img src='images/MapPhotos_Station1_sm.jpg' alt=""/></a>
      <figcaption>Station 1 (view up-channel).</figcaption>
    </figure>

    <figure>
      <a href="images/MapPhotos_Station2.jpg"><img src='images/MapPhotos_Station2_sm.jpg' alt=""/></a>
      <figcaption>Station 2 (view down-channel).</figcaption>
    </figure>

    <figure>
      <a href="images/MapPhotos_Station3.jpg"><img src='images/MapPhotos_Station3_sm.jpg' alt=""/></a>
      <figcaption>Station 3 (view down-channel).</figcaption>
    </figure>

    <figure>
      <a href="images/MapPhotos_Map.jpg"><img src='images/MapPhotos_Map_sm.jpg' alt=""/></a>
      <figcaption>Map of the study basin.</figcaption>
    </figure>

    <figure>
      <a href="images/Rills.jpg"><img src="images/Rills.jpg" alt=""/>
    </figure>

    <figure>
      <a href="images/StagePorePressure.jpg"><img src="images/StagePorePressure.jpg" alt=""></a>
    </figure>

    <figure>
      <a href="images/TerrestialLaserScanning.jpg"<img src="images/TerrestialLaserScanning.jpg" alt=""/></a>
    </figure>

    <figure>
      <a href="images/MapPhotos_ViewFromCamera.jpg"><img src='images/MapPhotos_ViewFromCamera_sm.jpg' alt=""/></a>
      <figcaption>View from video camera towards Station 1.</figcaption>
    </figure>

  </section>


<!--
  <h2>Interactive Panorama</h2>

  <embed src="mov/s7s.mov" width="480" height="360" controller="false">
    <noembed>Quicktime player is required to view this interactive panorama.</noembed>
  </embed>
-->
