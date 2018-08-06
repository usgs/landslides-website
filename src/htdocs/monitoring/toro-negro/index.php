<?php
//  Author:  Lisa Wald
//  Contact:  Jonathan Godt
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Toro Negro, Puerto Rico';
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
      <li><a href="rtdmonitoring.php#moisture">Soil moisture</a></li>
      <li><a href="rtdmonitoring.php#ground">Ground water level</a></li>
      <li><a href="rtdmonitoring.php#pore">Pore pressure</a></li>
      <li><a href="rtdmonitoring.php#temp">Soil temperature</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
    </ul>

    <hr/>

    <p>
      Most of the measurements are taken at <strong>1-minute intervals</strong> and <strong>data are transmitted hourly</strong> and displayed on graphs.
    </p>

    <p>
      On September 20, 2017, Hurricane Maria hit the U.S. territory of Puerto Rico as a category 4 storm. Heavy rainfall associated with Hurricane Maria caused landslides in mountainous regions throughout the territory, but rainfall from Hurricane Irma during the first week of September and rainfall from thunderstorms after Hurricane Maria may have also initiated landslides. Preliminary USGS mapping describes high concentration of these landslides in and around Utuado.
    </p>
    <p>
      The USGS has installed instruments in a steep hillside east of the municipality of Utuado. Data collection at this site supports research on hydrologic factors that control landslide initiation. In many landslide-prone hillsides, infiltration of water from rainfall increases ground-water pressures. These elevated pressures can, in turn, induce landslide movement.
    </p>

    <h2>For More Information</h2>
      <ul>
        <li>
          <a href="https://www.usgs.gov/natural-hazards/landslide-hazards/science/preliminary-locations-landslide-impacts-hurricane-maria">Preliminary USGS map of landslide occurrence following Hurricane Maria</a>
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
            <strong>Ben Mirus</strong><br />
            U.S. Geological Survey<br />
            Geologic Hazards Team<br />
            Box 25046, MS 966<br />
            Denver, CO 80225 <br />
            <a href="mailto:bbmirus@usgs.gov">bbmirus@usgs.gov</a>
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
      <img src="images/toro-negro-1.png" alt=""/>
  </figure>
  <figure>
      <img src="images/toro-negro-2.png" alt=""/>
  </figure>
</section>
