<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 04/05/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Real-time Data Sensors';
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
  	that measure 0.2 mm of rainfall per tip.  One rain gage is installed on a
  	bare open slope. A second rain gage is installed beneath the canopy of
  	recovering vegetation.
  </p>

  <h3>2 Weeks</h3>
  <a name="2weeks"><div align="center"></a>
		<img alt="2 weeks" src="/static/landslides-realtime/plots/caArroyoSecoChannel_precip1_oneWeek.png">
  </div>
  <h3>1 Week</h3>
  <a name="1week"><div align="center"></a>
		<img alt="1 week" src="/static/landslides-realtime/plots/caArroyoSecoChannel_precip2_oneWeek.png">
  </div>
<h2 id="ground">Soil Water Content and Ground Water Pressure</h2>
  <p>
    The monitoring site has three soil pits with sensors to measure the volumetric
  	water content of the soil.  A tensiometer to measure soil pore-water
  	pressure in the range of +85 kPa to -100 kPa is located at the base of one of the
  	pits. The depth of the instruments in the pit is indicated on the graphs.
  </p>

  <h3>Soil Pit 1<a name="soilpit1"></a></h3>
  <div align="center">
		<img alt="Soil Pit 1" src="/static/landslides-realtime/plots/caArroyoSecoHillside_VWCPresSP1_oneWeek.png">
  </div>

  <h3>Soil Pit 2<a name="soilpit2"></a></h3>
  <div align="center">
		<img alt="Soil Pit 2" src="/static/landslides-realtime/plots/caArroyoSecoHillside_VWCSP2_oneWeek.png">
  </div>

  <h3>Soil Pit 3<a name="soilpit3"></a></h3>
  <div align="center">
		<img alt="Soil Pit 3" src="/static/landslides-realtime/plots/caArroyoSecoChannel_VWC_oneWeek.png">
  </div>

<h2 id="channel">Channel Stage</h2>
  <p>
    A laser-distance meter is mounted over the channel to measure the height of
  	flow if present.
  </p>

  <div align="center">
		<img alt="1 week" src="/static/landslides-realtime/plots/ArroyoSecoChannel_stgPres_oneWeek.png">
  </div>
<h2 id="battery">Battery Voltage</h2>
  <p>
  	Battery voltage is monitored for identifying any problems with battery
  	charging due to solar panel or battery failures.
  </p>

  <div align="center">
		<img alt="1 week" src="/static/landslides-realtime/plots/caArroyoSeco_batteryVoltageTemp_oneWeek.png">
  </div>
