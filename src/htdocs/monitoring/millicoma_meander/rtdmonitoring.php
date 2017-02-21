<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 04/04/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Real-time Data Sensors';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#channel">Channel Stage</a>
  <a href="#ground">Ground Water Pressure</a>
  <a href="#ten">Ground Water Pressure - Tensiometers</a>
  <a href="#pres">Ground-water and Atmospheric Pressure - Piezometers</a>
  <a href="#soiltemp">Soil Temperature</a>
  <a href="#soilwater">Soil Water Content</a>
  <a href="#geophone">Ground Vibrations</a>
  <a href="#battery">Battery Voltage and Station Temperatures</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p> Rainfall is measured at the monitoring site using two 8-inch-diameter tipping-bucket rain gauges that measure 0.254 millimeters of rainfall per tip.</p>
  <h3>Rainfall over the last 14 days at Channel Station</h3>

  <img src="/static/landslides-realtime/plots/millicomaChannel_precip_twoWeek.png"
  		alt="Graph of rainfall for last 14 days" />

  <h3>Rainfall over the last 14 days at the Central Datalogger</h3>

  <img src="/static/landslides-realtime/plots/millicomaRidge_precip_twoWeek.png"
  		alt="Graph of rainfall for last 14 days" />

<h2 id="channel">Channel Stage</h2>
  <p>
  	A laser (distance sensing instrument) is cable-mounted over the channel to
  	measure flow height. A pressure transducer is flush mounted in the channel
  	beneath the laser.
  </p>

  <h3>Channel stage, last 14 days</h3>

  <img src="/static/landslides-realtime/plots/millicomaMeanderChannel_stgPres_twoweek.png"
  		alt="Graph of rainfall for last 14 days" />
<h2 id="ground">Ground Water Pressure</h2>
  <p>
  	There are three soil pits located at the site: SP4, SP5, and SP6. Each soil
  	pit area has either a tensiometer or a pressure transducer. The tensiometers
  	can measure pore-water pressures in the range of -85 kPa to 100 kPa, whereas
  	the pressure sensor can measure positive pore-water pressures in the range of
  	0 to 21 kPa. The location and depth of the instruments are indicated on the
  	graph.
  </p>
  <nav class="jumplist">
    <a href="#ten">Ground Water Pressure - Tensiometers</a>
    <a href="#pres">Ground-water and Atmospheric Pressure - Piezometers</a>
  </nav>
<h2 id="ten">Ground Water Pressure - Tensiometers</h2>
  <h3>Soil suction/pore pressure, last 14 days</h3>
  <img src="/static/landslides-realtime/plots/millicomaMeanderHillslope_porePressure_twoWeek.png"
  		alt="Graph of last 14 days" /><br/>
<h2 id="pres">Ground-water and Atmospheric Pressure - Piezometers</h2>
  <p>The monitoring site is equipped with four piezometers. Three were installed in boreholes at various depths below the ground surface, one at each of the monitoring arrays along the axis of the catchment (SP2, SP1, SP5). The fourth was placed in an enclosure near array SP1 to measure changes in atmospheric pressure. Pore-water pressures are reported in hectoPascals (hPa). One hectoPascal is roughly equivalent to the pressure exerted by a 1-cm-deep column of water.</p>

  <h3>Pore pressure, last 14 days</h3>
  <img src="/static/landslides-realtime/plots/Elliott_Pore_Pressure_PZ.elliott_pore_pressure_pz.png" alt="Graph of pore pressure for past week" />

<h2 id="soiltemp">Soil Temperature</h2>
  <p>
  	Each tensiometer/pressure transducer has a built-in temperature sensor. The
  	locations and depths of the instruments are indicated on the graph.
  </p>

  <h3>Soil temperatures over the last 14 days</h3>
  <img src="/static/landslides-realtime/plots/millicomaHillslope_soilTemp_twoWeek.png" alt="Graph of
  		soil temperature for past 14 days" />
<h2 id="soilwater">Soil Water Content</h2>
  <p>
  	Each instrument array (SP4-SP6) is equipped with three dielectric instruments
  	to indirectly measure the volumetric water content of the soil. The location
  	and depth of the instruments are indicated on the graphs.
  </p>

  <h3>Soil Water Content, last 14 days</h3>

  <img src="/static/landslides-realtime/plots/millicomaHillslope_vwc_twoWeek.png" alt="Graph of
  		water content for past 14 days" /><br/>
<h2 id="geophone">Ground Vibrations</h2>
  <p>
  	A geophone is installed on the ridgeline near the central datalogger. This
  	installation is experimental in nature, to determine if vibrations from
  	debris-flows can be detected at distance.  Although the geophone is sampled
    at a high frequency, a decimated version of the signal will be posted on the website.
  	A reduced version of the signal is posted below.
  </p>

  <h3>Ground velocity, last 14 days</h3>

  <img src="/static/landslides-realtime/plots/millicomaRidge_velocity_twoweek.png"
  	    alt="Graph of rainfall for last 14 days" />
<h2 id="battery">Battery Voltage and Station Temperatures</h2>
  <p>Battery voltage is monitored for identifying problems with the power system due to solar panel or battery failures.</p>
  <h3>Battery voltage and temperature, last 14 days</h3>
  <img src="/static/landslides-realtime/plots/millicomaAll_batteryTemp_twoWeek.png" alt="Graph of battery voltage for past 14 days" />
