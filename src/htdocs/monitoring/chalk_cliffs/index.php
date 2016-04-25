<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 03/30/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Chalk Cliffs, Colorado, Debris-flow monitoring';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<!--
$TITLE = "Debris-flow monitoring, Chalk Cliffs, Colorado";
$SCRIPTS = "../coordinates.js,../monitoring.js";
$WIDGETS = "gmaps,jquery,imageslider";
include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

include 'status.php';

<script language="javascript" type="text/javascript">
var map = null;
$(document).ready( function() {
  loadStationMap('Chalk Cliffs');
  addStationMarkers();
  addEvent(window, 'unload', GUnload);
});
</script>
?>-->
<div class="row">
  <div class="column two-of-three">
    <h2>Real-time Data</h2>
      <p>The instrumentation was installed in the summer of 2008 and includes a series of three monitoring stations located along the main channel. Data from one of these stations (Station 1) is transmitted from the site and displayed here.</p>

      <ul>
        <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
        <li><a href="rtdmonitoring.php#stage">Flow Stage and Bed Pore Pressure</a></li>
        <li><a href="rtdmonitoring.php#battery">Battery Voltage</a></li>
        <li><a href="rtdmonitoring.php#force">Force Plate</a></li>
        <li><a href="rtdmonitoring.php#video">Video Camera</a></li>
      </ul>
    <h2>Purpose of Monitoring</h2>

    <p>Chalk Cliffs, located 8 miles southwest of Buena Vista, CO, is one of the most active debris-flow areas in the state. Typically one or more debris flows occur each year after intense or prolonged rainfall. The debris flows are triggered by surface-water runoff over loose material stored in channels.</p>

    <p>The U.S. Geological Survey (USGS) and its cooperators have installed debris-flow monitoring equipment in the largest drainage basin at Chalk Cliffs.</p>

    <p>Data collection at this site supports research on the hydrologic factors that control debris-flow initiation, entrainment, and flow dynamics.</p>








    <h2>Interactive Panorama</h2>

    <embed src="mov/s7s.mov" width="480" height="360" controller="false">
    	<noembed>Quicktime player is required to view this interactive panorama.</noembed>
    </embed>

    <h2>For more information</h2>
    <ul class="no-style separator">
    	<li><a href="http://landslides.usgs.gov/docs/coe/CoeGodtKinner08Final.pdf">Research paper on debris flows at Chalk Cliffs</a></li>
    	<li><a href="http://forecast.weather.gov/MapClick.php?lat=38.72944724289828&lon=-106.19247436523437&site=pub&smap=1&marine=0&unit=0&lg=en">National Weather Service forecast for Chalk Cliffs and vicinity</a></li>
    	<li><a href="http://www.dwr.state.co.us/surfacewater/data/detail_graph.aspx?ID=CHCRNACO&MTYPE=DISCHRG">Real-time stream gage on Chalk Creek 4 miles downstream from the monitoring basin</a></li>
    </ul>

    <h2>Monitoring performed in Cooperation with</h2>
      <ul>
        <li>University of Colorado (National Science Foundation award EAR-06-43353 to G.E. Tucker)</li>
        <li>East Carolina University (National Science Foundation award BCS-0934131 to T.A. Wasklewicz).</li>
      </ul>

    <h2>Contact Information</h2>

    <ul class="no-style" style="margin-left:10px">
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
  </div>
  <div class="column one-of-three">
    <h2>Current Monitoring Status</h2>

    <p align="center">ACTIVE</p>

    <h2>Data Updates - 5 minutes</h2>
    <p>Data from the sensors are sampled at high rates (2 seconds to 100 hertz) during rain events and every 2 minutes otherwise. Two-minute data are transmitted by cell phone modem from the site to a USGS computer every 5 minutes. After transmission, the data are graphed and placed on a web server available to the public.</p>

    <p>Typically the most recent data on the graph lags the current time by about 5 minutes.  Updates may be interrupted occasionally by instrument, computer, or network malfunctions.</p>

    <div id="map" style="width:250px;height:250px;"></div>
      <figure style="width:250px;height:250px">
        <img src='/monitoring/chalk_cliffs/images/ProjectInformation.jpg' alt="" />
        <figcaption>View of monitoring basin from the debris-flow fan near Chaffee County Road 162</figcaption>
      </figure>

      <figure style="width:250px;height:250px">
        <a href="/monitoring/chalk_cliffs/images/SensorInformation.jpg"><img src="/monitoring/chalk_cliffs/images/SensorInformation_sm.jpg"/></a>
        <figcaption>Sensors and debris-flow deposits at Station 1 from October 11, 2008 event</figcaption>
      </figure>

      <figure style="width:250px;">
        <img src='/monitoring/chalk_cliffs/images/MapPhotos_Station2.jpg' alt="" />
        <figcaption>Station 2 (view down-channel)</figcaption>
      </figure>

      <figure style="width:250px;">
        <a href="/monitoring/chalk_cliffs/images/MapPhotos_Station3.jpg"><img src='/monitoring/chalk_cliffs/images/MapPhotos_Station3_sm.jpg' alt="" /></a>
        <figcaption>Station 3 (view down-channel)</figcaption>
      </figure>

      <figure style="width:250px;">
        <a href="/monitoring/chalk_cliffs/images/MapPhotos_Map.jpg"><img src='/monitoring/chalk_cliffs/images/MapPhotos_Map_sm.jpg' alt="" /></a>
        <figcaption>Map of the study basin</figcaption>
      </figure>

      <figure style="width:250px;">
        <a href="/monitoring/chalk_cliffs/images/MapPhotos_ViewFromCamera.jpg"><img src='/monitoring/chalk_cliffs/images/MapPhotos_ViewFromCamera_sm.jpg' alt="" /></a>
        <figcaption>View from video camera towards Station 1</figcaption>
      </figure>

      <figure style="width:250px;">
        <img src='/monitoring/chalk_cliffs/images/Rills.jpg' alt="" /></a>
      </figure>

      <figure style="width:250px;">
        <img src='/monitoring/chalk_cliffs/images/TerrestialLaserScanning.jpg' alt="" /></a>
      </figure>

  </div>
</div>
