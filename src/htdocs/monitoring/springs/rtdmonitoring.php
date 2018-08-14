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
  <a href="#ground">Soil Water Content and Ground Water Pressure</a>
  <a href="#channel">Channel Stage</a>
  <a href="#battery">Battery Voltage</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>
    Rainfall is measured at the monitoring site using tipping-bucket rain gauges near the outlet of
  	the basin and near the ridge top.
    One rain gage is installed on a bare open slope.
    A second rain gage is installed beneath the canopy of recovering vegetation.
    Each tip of the bucket records 0.2 mm of
  	precipitation.
  Graphs of rain gage data show the cumulative rainfall since the
  	last gage reset and the 10-minute rainfall intensity.
  </p>

  <h3>Rainfall for last three hours<a name="3hours"></a></h3>
  <div align="center">
  	<img alt="3 hours"
				src="/static/landslides-realtime/plots/camarilloSprings_precip_threeHours.png">
  </div>

  <h3>Rainfall for last week<a name="1week"></a></h3>
  <div align="center">
  	<img alt="One week"
				src="/static/landslides-realtime/plots/camarilloSprings_precip_oneWeek.png">
  </div>

<h2 id="ground">Soil Water Content and Ground Water Pressure</h2>
  <p>
  	The monitoring site has two soil pits with sensors to measure the volumetric
  	water content of the soil.  One pit is on a bare open slope, the other is
  	beneath the canopy of the recovering vegetation.  A tensiometer to measure
  	soil pore-water pressure in the range of +85 kPa to -100 kPa is located at the
  	base of one of the pits. The location and depth of the instruments are
  	indicated on the graphs.
  </p>

<h2 id="channel">Channel Stage</h2>
  <p>
  	A laser-distance meter is mounted over the channel to measure the height of
  	flow if present.
  </p>

<h2 id="battery">Battery Voltage</h2>
  <p>Battery voltage is monitored for identifying any problems with battery charging due to solar panel or battery failures.</p>
  <h3>Battery voltage for last two weeks<a name="2weeks"></a></h3>
  <div align="center">
  	<img alt="2 weeks"
			src="/static/landslides-realtime/plots/camarilloSprings_battery_twoWeek.png">
  </div>
