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
  <a href="#ground">Groundwater Pressure</a>
  <a href="#soilwater">Soil Water Content</a>
  <a href="#soiltemp">Soil Temperature</a>
  <a href="#battery">Battery Voltage</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>Rainfall is measured at the monitoring site using one 8-inch-diameter tipping-bucket rain gauges that measure 0.01 inch of rainfall per tip.</p>
  <div align="center">
  <h3>Rainfall over the last 14 days at Mooney Gap Rain
  Gauge</h3>
  <img
  src="/static/landslides-realtime/plots/ncMooneyGap_precip_twoWeek.png">
  </div>

<h2 id="ground">Groundwater Pressure</h2>
  <p>
  The monitoring site is equipped with three tensiometers located at various
  depths. The tensiometers are connected with current transducers that can measure
  pore-water pressures in the range of +850 hPa to -1000 hPa. The location and
  depth of the porous tips of each of the tensiometers are indicated on the
  graphs. Pore-water pressures are reported in kiloPascals (kPa). One kiloPascal
  is roughly equivalent to the pressure exerted by a 10-cm-deep column of water.
  </p>
  <div align="center">
  	<h3>Soil Suction/pore pressure, last 14 days</h3>
		<img src="/static/landslides-realtime/plots/ncMooneyGap_porePressure_twoWeek.png">
  </div>

<h2 id="soilwater">Soil Water Content</h2>
  <p>Each instrument array (M1-M3) at the monitoring site is equipped with three capacitance-based instruments to measure the volumetric water content of the soil. The location and depth of the instruments are indicated on the graphs.</p>
  <div align="center">
  <h3>Soil Water Content, last 14 days</h3>
  <img
  src="/static/landslides-realtime/plots/ncMooneyGap_vWC_twoWeek.png">
  </div>

<h2 id="soiltemp">Soil Temperature</h2>
  <p>Each tensiometer has a built-in temperature sensor. Soil temperature measurements are used to correct measurements by the other instruments and to provide an indication of when the ground is frozen.</p>
  <div align="center">
  <h3>Soil Temperature, last 14 days</h3>
  <img
  src="/static/landslides-realtime/plots/ncMooneyGap_soilTemp_twoWeek.png">
  </div>

<h2 id="battery">Battery Voltage</h2>
  <p>Battery voltage is monitored for identifying any problems with battery charging due to solar panel or battery failures.</p>
  <div align="center">
  <h3>Battery voltage and temperature, last 14 days</h3>
  <img
  src="/static/landslides-realtime/plots/ncMooneyGap_batteryTemp_twoWeek.png">
  </div>
