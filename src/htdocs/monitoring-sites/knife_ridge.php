<?php
//  Author:  Tiffany Kalin
//  Contact:  Jonathan Godt,
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Knife Ridge, Elliott State Forest, Oregon - Recent Conditions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#ground">Ground Water Pressure</a>
  <a href="#ten">Ground Water Pressure - Tensiometers</a>
  <a href="#pres">Ground-water and Atmospheric Pressure - Piezometers</a>
  <a href="#soiltemp">Soil Temperature</a>
  <a href="#soilwater">Soil Water Content</a>
  <a href="#battery">Battery Voltage</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>
    Rainfall is measured at the monitoring site using two 8-inch-diameter
    tipping-bucket rain gauges that measure 0.01 inch of rainfall per tip.
    Rainfall data are collected and transmitted every 15 minutes. The graph also
    shows 15-minute rainfall in millimeters and cumulative rainfall, also in
    millimeters.
  </p>

  <h3>Rainfall over the last 14 days at gages 1 and 2</h3>

  <img src="/static/landslides-realtime/plots/Elliott_Rainfall.elliott_rainfall.png"
      alt="Graph of rainfall for last 14 days" />

<h2 id="ground">Ground Water Pressure (Tensiometers and Pressure Tranducers)</h2>
  <p>
    There are three soil pits located at the site: SP4, SP5, and SP6. Each soil
    pit area has either a tensiometer or a pressure transducer. The tensiometers
    can measure pore-water pressures in the range of -85 kPa to 100 kPa, whereas
    the pressure sensor can measure positve pore-water pressures in the range of 0
    to 21 kPa. The location and depth of the instruments are indicated on the
    graph.
  </p>
  <nav class="jumplist">
    <a href="#ten">Ground Water Pressure - Tensionmeters</a>
    <a href="#pres">Ground-water and Atmospheric Pressure - Piezometers</a>
  </nav>
  <h2 id="ten">Ground Water Pressure - Tensionmeters</h2>
    <p>
      Each instrument array (SP1-SP8) at the monitoring site is equipped with three
      tensiometers located at various depths. The tensiometers are connected with
      current transducers that can measure pore-water pressures in the range of +850
      hPa to -1000 hPa. The location and depth of the porous tips of each of the
      tensiometers are indicated on the graphs. Pore-water pressures are reported in
      hectoPascals (hPa). One hectoPascal is roughly equivalent to the pressure
      exerted by a 1-cm-deep column of water.
    </p>

    <h3>Soil suction/pore pressure, last 14 days</h3>
    <img src="/static/landslides-realtime/plots/Elliott_Pore_Pressure_1.elliott_pore_pressure_1.png"
        alt="Graph of last 14 days" /><br/>
    <img
    src="/static/landslides-realtime/plots/Elliott_Pore_Pressure_2.elliott_pore_pressure_2.png"
    alt="Graph of last 14 days" />
  <h2 id="pres">Ground-water and Atmospheric Pressure - Piezometers</h2>
    <p>The monitoring site is equipped with four piezometers. Three were installed in boreholes at various depths below the ground surface, one at each of the monitoring arrays along the axis of the catchment (SP2, SP1, SP5). The fourth was placed in an enclosure near array SP1 to measure changes in atmospheric pressure. Pore-water pressures are reported in hectoPascals (hPa). One hectoPascal is roughly equivalent to the pressure exerted by a 1-cm-deep column of water.</p>

    <h3>Pore pressure, last 14 days</h3>
    <img src="/static/landslides-realtime/plots/Elliott_Pore_Pressure_PZ.elliott_pore_pressure_pz.png" alt="Graph of pore pressure for past week" />

<h2 id="soiltemp">Soil Temperature</h2>
  <p>Each tensiometer and piezometer has a built-in temperature sensor, either a thermistor or Resistive Temperature Device (RTD). Soil temperature measurements are used to correct measurements by the other instruments and to provide an indication of when the ground is frozen. The location and depth of the instruments are indicated on the graph.</p>

  <h3>Soil temperatures over the last 14 days</h3>
  <img
  src="/static/landslides-realtime/plots/Elliott_Temperature_1.elliott_temperature_1.png" alt="Graph of soil temperature for past 7 days" />
  <img
  src="/static/landslides-realtime/plots/Elliott_Temperature_2.elliott_temperature_2.png" alt="Graph of soil temperature for past 7 days" />

<h2 id="soilwater">Soil Water Content</h2>
  <p>Each instrument array (SP1-SP8) at the monitoring site is equipped with three capacitance-based instruments to measure the volumetric water content of the soil. The location and depth of the instruments are indicated on the graphs.</p>

  <h3>Soil Water Content over the last 14 days</h3>
  <img
  src="/static/landslides-realtime/plots/Elliott_Watercontent1.elliott_watercontent1.png" alt="Graph of water content for past 7 days" /><br/>
  <img
  src="/static/landslides-realtime/plots/Elliott_Watercontent2.elliott_watercontent2.png" alt="Graph of water content for past 7 days" />

<h2 id="battery">Battery Voltage</h2>
<p>Battery voltage is monitored for identifying problems with the power system due to solar panel or battery failures.</p>
  <h3>Battery voltage over the last 14 days</h3>
  <img src="/static/landslides-realtime/plots/Elliott_Battery.elliott_battery.png" alt="Graph of battery voltage for past 7 days" />
