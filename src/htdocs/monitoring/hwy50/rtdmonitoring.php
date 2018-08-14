<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 03/29/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'U.S. Highway 50, California - Real-time Data Sensors';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#ground">Groundwater Pressure</a>
  <a href="#shallow">Shallow Pore-Water Pressure</a>
  <a href="#deep">Deeper Pore-Water Pressure</a>
  <a href="#downslope">Slope Movement</a>
  <a href="#geophone">Geophone</a>
  <a href="#battery">Battery</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
<p>Graphs of raingage data show the cumulative precipitation, in inches, since the last gage reset.  Typically, the raingage is reset to zero in October of each year, before the winter rains.  The raingage is a "tipping spoon" model; each tip of the spoon records 0.01 inch of precipitation.  The site does receive modest snow amounts during cold winter storms.  Accumulated snow in the gage slowly melts and is recorded as precipitation.</p>

			<strong>NOTE - data available since March 22, 1997</strong>

			<h3>4-Day Rain Gage Graph<a name="4dayrain"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c157_4dy.png">
			</div>


			<h3>4-Week Rain Gage Graph<a name="4weekrain"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c157_4wk.png">
			</div>

<h2 id="ground">Groundwater Pressure</h2>
<p>Graphs of pore-water pressure portray groundwater conditions at various depths, as noted on the graphs. Pressure at a particular depth is shown as an equivalent water depth, in centimeters. Groundwater in an open tube would rise to this height above the sensor. Sensors are bi-directional, temperature-compensated, amplified, strain-gauge type pressure transducers vented to the atmosphere and installed in a small diameter PVC casing. During dry periods (such as late summer or early fall), these sensors often record pore-water pressures near zero.</p>
<a href="#shallow">Shallow Pore-Water Pressure</a>&nbsp;
<a href="#deep">Deeper Pore-Water Pressure</a>&nbsp;<br />

			<strong>NOTE - data available since March 22, 1997</strong>

<h2 id="shallow">Shallow Pore-Water Pressure (1.77 meters)</h2>

			<h3>4-Day Shallow Pore-Water Pressure Graph<a name="4dayshallow"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c154_4dy.png">
			</div>

			<h3>4-Week Shallow Pore-Water Pressure Graph<a name="4weekshallow"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c154_4wk.png">
			</div>

<h2 id="deep">Deeper Pore-Water Pressure (3.67 meters)</h2>
			<h3>4-Day Deeper Pore-Water Pressure Graph<a name="4daydeep"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c156_4dy.png">
			</div>

			<h3>4-Week Deeper Pore-Water Pressure Graph<a name="4weekdeep"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c156_4wk.png">
			</div>

<h2 id="downslope">Slope Movement</h2>
<p>Graphs of slope movement show the cumulative downslope displacement, in centimeters, of the landslide relative to adjacent stable ground.  Measured motion is downslope parallel to the ground surface; positive values indicate downslope movement.  Sensor uses a linear position transducer with an extendable steel cable (extensometer).  The instrument is anchored on stable ground and the end of the extendable cable is anchored on the slide.  Sharp spikes in the graph are typically caused by snow loading; the cable extends when covered by snow and reverts to its original position when the snow melts or falls from the cable.  Landslide movement is usually indicated by slow increasing displacement over many days.</p>

			<strong>NOTE - data available since March 22, 1997</strong>

			<h3>4-Day Slope Movement Graph<a name="4dayslope"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c153_4dy.png">
			</div>

			<h3>4-Week Slope Movement Graph<a name="4weekslope"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c153_4wk.png">
			</div>

<h2 id="geophone">Geophone</h2>
<p>Graphs of geophone data show peak ground vibration near the sensor.  Sensor uses a geophone having a frequency response of 10 to 250 Hz at -3 dB, with a 300 Hz low pass filter, and a peak detector.  Sources of ground vibration that may be recorded by the geophone include nearby earthquakes, thunder, wind in trees, and human or vehicle traffic.  Rapid, catastrophic landslide movement would likely result in prolonged, strong ground shaking with high amplitude peaks in the data.</p>

			<strong>NOTE - data available since March 22, 1997</strong>

			<h3>4-Day Geophone Graph<a name="4daygeo"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c150_4dy.png">
			</div>

			<h3>4-Week Geophone Graph<a name="4weekgeo"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c150_4wk.png">
			</div>

<h2 id="battery">Battery</h2>
<p>Graphs of battery data show power supply voltage at the data acquisition system.  The system is nominally 12 volts and the battery is recharged by regulated input from a solar panel.  Graphs typically show diurnal charging during the day and discharging during the night.</p>

			<strong>NOTE - data available since March 22, 1997</strong>

			<h3>4-Day Battery Graph<a name="4daybat"></a></h3>
			<div align="center">
				<img alt="4-day graph" src="/static/landslides-realtime/hwy50/plots/c151_4dy.png">
			</div>

			<h3>4-Week Battery Graph<a name="4weekbat"></a></h3>
			<div align="center">
				<img alt="4-week graph" src="/static/landslides-realtime/hwy50/plots/c151_4wk.png">
			</div>
