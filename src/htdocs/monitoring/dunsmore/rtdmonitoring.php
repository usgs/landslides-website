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
  	Rainfall is measured at the monitoring site using tipping-bucket rain gauges
  	that measure 0.2 mm of rainfall per tip.  One rain gage is installed on a bare
  	open slope. A second rain gage is installed beneath the canopy of recovering
  	vegetation.
  </p>
  <h3>Rainfall</h3>
  <div align="center">
    <img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmoreChannel_precip1_oneWeek.png">
  </div>
  <div align="center">
  	<img alt="1 week"
		src="/static/landslides-realtime/plots/DunsmoreChannel_precip2_oneWeek.png">
  </div>
<h2 id="ground">Soil Water Content and Ground Water Pressure</h2>
  <p>
  	The monitoring site has three soil pits with sensors to measure the volumetric
  	water content of the soil.  A tensiometer to measure soil pore-water pressure
  	in the range of +85 kPa to -100 kPa is located at the base of one of the pits.
  	The depth of the instruments in the pit is indicated on the graphs.
  </p>
  <h3>Soil Pit 1</h3>
  <div align="center">
  	<img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmoreHillside_VWCSP1_oneWeek.png">
  </div>

  <h3>Soil Pit 2</h3>
  <div align="center">
		<img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmoreHillside_VWCPresSP2_oneWeek.png">
  </div>

  <h3>Soil Pit 3</h3>
  <div align="center">
		<img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmoreChannel_VWC_oneWeek.png">
  </div>
<h2 id="channel">Channel Stage</h2>
  <p>
  	A laser-distance meter is mounted over the channel to measure the height of
  	flow if present.
  </p>
  <div align="center">
		<img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmoreChannel_stg_oneWeek.png">
  </div>
<h2 id="battery">Battery Voltage</h2>
  <p>
  	Battery voltage is monitored for identifying any problems with battery
  	charging due to solar panel or battery failures.
  </p>
  <div align="center">
		<img alt="1 week"
		src="/static/landslides-realtime/plots/caDunsmore_batteryVoltageTemp_oneWeek.png">
  </div>
