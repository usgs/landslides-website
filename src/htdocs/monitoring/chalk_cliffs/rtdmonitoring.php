<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 03/31/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Real-time Data Sensors';
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

  <h3>Rainfall for Last 24 Hours</h3>
  <img src="/realtime/chalk_cliffs/Rainfall1hour.png" alt="Graph showing rainfall for last hour"/>

  <h3>Rainfall for Last Week</h3>
  <img src="/realtime/chalk_cliffs/Rainfall3day.png" alt="Graph showing rainfall for last 3 days"/>
<h2 id="stage">Flow Stage and Bed Pore Pressure</h2>
  <figure class="right" style="width: 250px;">
  	<a href="/monitoring/chalk_cliffs/images/StagePorePressure.jpg" ><img src="/monitoring/chalk_cliffs/images/StagePorePressure_sm.jpg" alt="" /></a>
  	<figcaption>A non-contact stage sensor (on bridge at left) is suspended approximately 2 meters above two pressure transducers (not visible) and a force plate (silver square) mounted in the channel bed.</figcaption>
  </figure>

  <p>Stage is measured by a non-contact distance meter suspended over the channel. The device measures the distance from the sensor to the surface below. When no runoff is present, the measurement surface is the surface of the channel bed. Distance measurements are converted into a stage above a datum, which is 0.5 m beneath the bedrock channel. Changes in stage detected by the sensor when no runoff is present are usually caused by infilling of the channel by dry ravel processes.</p>

  <p>Pressure transducers are used to measure fluid pressures in the pores of the bed directly beneath the stage gage. The pressure transducers are installed next to the force place in the bed of the channel. Pressure is displayed as an equivalent depth of water in meters. The measurement includes pore water pressure and barometric pressure. Barometric pressure is measured by a separate instrument above the channel and has not been removed from the data displayed.</p>

  <h3>Stage, pore pressure, and rainfall for last hour</h3>
  <img src="/realtime/chalk_cliffs/Stage1hour.png" alt="Graph showing stage, pore pressure, and rainfall for last hour"/>

  <h3>Stage, pore pressure, and rainfall for last 3 days</h3>
  <img src="/realtime/chalk_cliffs/Stage3day.png" alt="Graph showing stage, pore pressure and rainfall for last 3 days"/>

  <h3>Stage and signal quality for last day</h3>
  <img src="/realtime/chalk_cliffs/SignalQuality1day.png" alt="Graph showing stage stage and signal quality for last day"/>

<h2 id="battery">Battery Voltage</h2>
  <h3>Battery Voltage Last Day</h3>
  <img src="/realtime/chalk_cliffs/Battery.png" alt="Graph showing battery voltage for the last day"/>

<h2 id="force">Force Plate</h2>
  <p>A 15 cm by 15 cm metal plate attached to a single axis load cell is used to measure the total bed-normal stress (due to both fluid and solid phases) at the flow-bedrock interface. The force plate is mounted flush with the bedrock channel directly beneath the stage gage at Station 1. The plate samples the total bed-normal stress of the debris flow at 100 Hertz during flow events and has a measurement range of 5 to 4500 kg at a resolution of 1.0 kg.</p>

  <p>
    <a href="/monitoring/chalk_cliffs/images/ForcePlate_Installation.jpg"><img src="/monitoring/chalk_cliffs/images/ForcePlate_Installation_sm.jpg" alt="Picture of team member installing the metal force plate" /></a>
    <a href="/monitoring/chalk_cliffs/images/ForcePlate_SideView.jpg"><img src="/monitoring/chalk_cliffs/images/ForcePlate_SideView_sm.jpg" alt="Picture of the side of the force plate" /></a>
  </p>

  <h3>Force, stage, and pore pressure for last hour</h3>
  <img src="/realtime/chalk_cliffs/Force1hour.png" alt="Graph showing force plate data for last hour" />

  <h3>Force, stage, and pore pressure for last 3 days</h3>
  <img src="/realtime/chalk_cliffs/Force3day.png" alt="Graph showing force plate data for last 3 days" />

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
  	<source src="Chalk20140801.mp4" type="video/mp4"/>
  	<source src="Chalk20140801.webm" type="video/webm"/>
  	<a href="Chalk20140801.mp4">Download Chalk20140801.mp4 (11MB)</a>
  </video>

  <h4>July 31, 2014</h4>
  <video controls="controls" height="518">
  	<source src="Chalk20140731.mp4" type="video/mp4"/>
  	<source src="Chalk20140731.webm" type="video/webm"/>
  	<a href="Chalk20140731.mp4">Download Chalk20140731.mp4 (11MB)</a>
  </video>

  <h4>July 4, 2014, 1:30 pm, Surge 1 of 8</h4>
  <video width="518" controls="controls">
  	<source src="Chalksurge1of8.webm" type="video/webm"/>
  	<source src="Chalksurge1of8.mp4" type="video/mp4"/>
  	<a href="Chalksurge1of8.mp4">Download Chalksurge1of8.mp4 (16MB)</a>
  </video>

  <h4>July 4, 2014, 1:35 pm, Surge 7 of 8</h4>
  <video width="518" controls="controls">
  	<source src="Chalksurge7of8.mp4" type="video/mp4"/>
  	<source src="Chalksurge7of8.webm" type="video/webm"/>
  	<a href="Chalksurge7of8.mp4">Download Chalksurge7of8.mp4 (10MB)</a>
  </video>

  <h4>June 28, 2010, 7:22pm</h4>
  <video width="518" controls="controls">
  	<source src="20100628.mp4" type="video/mp4"/>
  	<source src="20100628.webm" type="video/webm"/>
  	<a href="20100628.mp4">Download 20100628.mp4 (2.0MB)</a>
  </video>

  <h4>June 12, 2010, 5:09pm</h4>
  <video width="518" controls="controls">
  	<source src="20100612.mp4" type="video/mp4"/>
  	<source src="20100612.webm" type="video/webm"/>
  	<a href="20100612.mp4">Download 20100612.mp4 (2.1MB)</a>
  </video>

  <h4>September 15, 2009, 5:46pm</h4>
  <video width="518" controls="controls">
  	<source src="20090915.mp4" type="video/mp4"/>
  	<source src="20090915.webm" type="video/webm"/>
  	<a href="20090915.mp4">Download 20090915.mp4 (1.7MB)</a>
  </video>

  <h4>June 2, 2009, 4:22pm</h4>
  <video width="518" controls="controls">
  	<source src="20090602.mp4" type="video/mp4"/>
  	<source src="20090602.webm" type="video/webm"/>
  	<a href="20090602.mp4">Download 20090602.mp4 (1.8MB)</a>
  </video>
