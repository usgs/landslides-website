<?php
//  Author:  Tiffany Kalin
//  Contact:  Jonathan Godt,
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Recent Conditions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#stage">Flow Stage and Bed Pore Pressure</a>
  <a href="#battery">Battery Voltage</a>
  <a href="#force">Force Plate</a>
  <a href="#video">Video Camera</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>Precipitation is measured using a tipping-bucket rain gage. Each tip of the bucket records 0.254 mm of precipitation. Graphs of rain gage data show the cumulative rainfall since the last gage reset.</p>

  <h3>Rainfall for last 24 Hours</h3>
  <img src="/static/landslides-realtime/plots/chalkCliffsRainfallOneDay.png" alt="Graph showing rainfall for last 24 hours"/>

  <h3>Rainfall for last 14 Days</h3>
  <img src="/static/landslides-realtime/plots/chalkCliffsRainfallTwoWeek.png" alt="Graph showing rainfall for last 14 days"/>


<h2 id="stage">Flow Stage<!-- and Bed Pore Pressure --></h2>
  <figure class="right" style="width: 250px;">
  	<a href="/monitoring/chalk_cliffs/images/StagePorePressure.jpg" ><img src="/monitoring/chalk_cliffs/images/StagePorePressure_sm.jpg" alt="" /></a>
		<figcaption>A non-contact stage sensor (on bridge at left) is suspended approximately 2 meters above <!-- two pressure transducers (not visible) and a force plate (silver square) mounted in --> the channel bed.</figcaption>
  </figure>

  <p>Stage is measured by a non-contact distance meter suspended over the channel. The device measures the distance from the sensor to the surface below. When no runoff is present, the measurement surface is the surface of the channel bed. Distance measurements are converted into a stage above a datum, which is 0.5 m beneath the bedrock channel. Changes in stage detected by the sensor when no runoff is present are usually caused by infilling of the channel by dry ravel processes.</p>

  <!--
  <p>Pressure transducers are used to measure fluid pressures in the pores of the bed directly beneath the stage gage. The pressure transducers are installed next to the force place in the bed of the channel. Pressure is displayed as an equivalent depth of water in meters. The measurement includes pore water pressure and barometric pressure. Barometric pressure is measured by a separate instrument above the channel and has not been removed from the data displayed.</p>
  -->

  <p class="alert info">
    Note that data for the stage sensor is only logged once a rainfall threshold is
    exceeded, so these plots may be non-existent or outdated.
  </p>

  <h3>Stage for last 24 hours</h3>
  <img src="/static/landslides-realtime/plots/chalkCliffsStageOneDay.png" alt="Graph showing stage for last 24 hours"/>

  <h3>Stage and Rainfall for last 14 days</h3>
  <img src="/static/landslides-realtime/plots/chalkCliffsStageRainfallTwoWeek.png" alt="Graph showing stage and rainfall for last 14 days"/>


<h2 id="battery">Battery Voltage</h2>
  <h3>Battery Voltage for last 14 days</h3>
  <img src="/static/landslides-realtime/plots/chalkCliffsBatteryVoltTwoWeek.png" alt="Graph showing battery voltage for the last 14 days"/>


<h2 id="video">Video Camera</h2>
<div class="row">
  <div class="column one-of-one">
    <figure class="right" style="width:250px;">
      <a href="/monitoring/chalk_cliffs/images/VideoCamera.jpg"><img src="/monitoring/chalk_cliffs/images/VideoCamera_sm.jpg" alt=""/></a>
      <figcaption>Rain-triggered video camera overlooking the channel at station 1.</figcaption>
    </figure>

    <p>A solar/battery powered video camera is used provide a visual record of the flow and channel change at Station 1. During rain events, video is recorded at 2 frames per second, and high-resolution photographs are taken every 30 seconds. Still images from the camera are transmitted to the internet everyday at noon and every 30 minutes during rain events. The complete video is downloaded manually from the camera.</p>
  </div>
</div>
  <h3>Past Events</h3>

  <h4>August 1, 2014</h4>
  <video controls="controls" height="518">
  	<source src="video/Chalk20140801.mp4" type="video/mp4"/>
  	<source src="video/Chalk20140801.webm" type="video/webm"/>
  	<a href="Chalk20140801.mp4">Download Chalk20140801.mp4 (11MB)</a>
  </video>

  <h4>July 31, 2014</h4>
  <video controls="controls" height="518">
  	<source src="video/Chalk20140731.mp4" type="video/mp4"/>
  	<source src="video/Chalk20140731.webm" type="video/webm"/>
  	<a href="Chalk20140731.mp4">Download Chalk20140731.mp4 (11MB)</a>
  </video>

  <h4>July 4, 2014, 1:30 pm, Surge 1 of 8</h4>
  <video width="518" controls="controls">
  	<source src="video/Chalksurge1of8.webm" type="video/webm"/>
  	<source src="video/Chalksurge1of8.mp4" type="video/mp4"/>
  	<a href="Chalksurge1of8.mp4">Download Chalksurge1of8.mp4 (16MB)</a>
  </video>

  <h4>July 4, 2014, 1:35 pm, Surge 7 of 8</h4>
  <video width="518" controls="controls">
  	<source src="video/Chalksurge7of8.mp4" type="video/mp4"/>
  	<source src="video/Chalksurge7of8.webm" type="video/webm"/>
  	<a href="Chalksurge7of8.mp4">Download Chalksurge7of8.mp4 (10MB)</a>
  </video>

  <h4>June 28, 2010, 7:22pm</h4>
  <video width="518" controls="controls">
  	<source src="video/20100628.mp4" type="video/mp4"/>
  	<source src="video/20100628.webm" type="video/webm"/>
  	<a href="20100628.mp4">Download 20100628.mp4 (2.0MB)</a>
  </video>

  <h4>June 12, 2010, 5:09pm</h4>
  <video width="518" controls="controls">
  	<source src="video/20100612.mp4" type="video/mp4"/>
  	<source src="video/20100612.webm" type="video/webm"/>
  	<a href="20100612.mp4">Download 20100612.mp4 (2.1MB)</a>
  </video>

  <h4>September 15, 2009, 5:46pm</h4>
  <video width="518" controls="controls">
  	<source src="video/20090915.mp4" type="video/mp4"/>
  	<source src="video/20090915.webm" type="video/webm"/>
  	<a href="20090915.mp4">Download 20090915.mp4 (1.7MB)</a>
  </video>

  <h4>June 2, 2009, 4:22pm</h4>
  <video width="518" controls="controls">
  	<source src="video/20090602.mp4" type="video/mp4"/>
  	<source src="video/20090602.webm" type="video/webm"/>
  	<a href="20090602.mp4">Download 20090602.mp4 (1.8MB)</a>
  </video>
