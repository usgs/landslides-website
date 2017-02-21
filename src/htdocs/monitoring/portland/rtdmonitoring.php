<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 04/04/206
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Real-time Data Sensors';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#ten">Ground-water Pressure - Tensiometers</a>
  <a href="#waterpot">Ground-water Pressure - Water Potential Sensors</a>
  <a href="#pie">Ground-water Pressure - Piezometers</a>
  <a href="#soiltemp">Soil Temperature</a>
  <a href="#soilwater">Soil Water Content</a>
  <a href="#battery">Battery</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>The site is equipped with two 8-inch-diameter tipping-bucket rain gauges that are calibrated to 0.01 inch of rainfall per tip.  The field data loggers record and transmit 15-minute precipitation.</p>

  <h3>Rainfall over the last two weeks at gages 1 and 2</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_precip_twoWeek.png" alt="" />

<h2 id="ten">Ground-water Pressure - Tensiometers</h2>
  <figure class="right" style="width:188px;">
    <a href="images/tens_install.jpg" rel="ibox"><img src="images/tens_install_sm.jpg" alt="" /></a>
    <figcaption>
    Photograph showing installation of a tensiometer at the Portland monitoring site.
    </figcaption>
  </figure>
  <p>Since late October 2006, the Portland Hills site has been equipped with seven tensiometers arranged in two arrays or nests.  The tensiometers (UMS Corp. Model T-8)* are equipped with current transducers that can measure  pressures in the range from +850 hPa to -1000 hPa (suction) and accuracy of &plusmn;5 hPa are installed in boreholes that are inclined from 20&deg; to 35&deg; from the vertical, to facilitate refilling.  The porous tips are at depths ranging from 73 to 220 cm below the ground surface.  Pore pressures are reported in hectoPacsals (hPa).  One hectoPascal is roughly equivalent to the pressure exerted by a 1-cm-high column of water.  Porous tips of the tensiometers are in direct contact with native soil.</p>

  <table border="0" cellpadding="2" cellspacing="1" >
  <tr><th>Tensiometer Number&nbsp;&nbsp;</th><th>Depth below surface, cm&nbsp;&nbsp;</th><th>Inclined distance from tensiometer tip to ground surface, cm&nbsp;&nbsp;</th></tr>
  <tr bgcolor="#eeeeee"><td align="center">I-1</td><td align="center">206</td><td align="center">178</td></tr>
  <tr><td align="center">I-2</td><td align="center">155</td><td align="center">134</td></tr>
  <tr bgcolor="#eeeeee"><td align="center">I-3</td><td align="center">91</td><td align="center">79</td></tr>
  <tr><td align="center">I-4</td><td align="center">164</td><td align="center">143</td></tr>
  <tr bgcolor="#eeeeee"><td align="center">I-5</td><td align="center">92</td><td align="center">80</td></tr>
  <tr><td align="center">I-6</td><td align="center">220</td><td align="center">194</td></tr>
  <tr bgcolor="#eeeeee"><td align="center">I-7</td><td align="center">73</td><td align="center">63</td></tr>
  </table>

  <h3>Soil suction/pore pressure, last two weeks</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_pressure_twoWeek.png" alt="" />

<h2 id="waterpot">Ground-water Pressure - Water Potential Sensors</h2>
  <p>The water potential sensor (Decagon Devices Model MPS-1) uses the dielectric properties of water combined with a ceramic stone with a known soil-water characteristic to estimate pressures over the range of -100 to -500 hPa. Pore pressures are reported in hecoPascals (hPa). One hectoPascal is roughly equivalent to the pressure exerted by a 1-cm high column of water.</p>



  <table border="0" cellpadding="2" cellspacing="1">
  <tr><th>Sensor Number</th><th>Depth, cm</th></tr>
  <tr><td>1</td><td>120</td></tr>
  <tr><td>2</td><td>100</td></tr>
  <tr><td>3</td><td>80</td></tr>
  <tr><td>4</td><td>60</td></tr>
  <tr><td>5</td><td>40</td></tr>
  <tr><td>6</td><td>20</td></tr>
  </table>


  <h3>Water Potential, last two weeks</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_mP_twoWeek.png" alt="" />

<h2 id="pie">Ground-water Pressure - Piezometers</h2>
  <p>The site has seven piezometers. Four of the piezometers in hole B-1 are embedded in a grout consisting of bentonite and Portland cement and are capable of measuring negative pressures when the surrounding soil is partially saturated or unsaturated. The three piezometers at sites B-3, 4 and 5 are each embedded in a sand pack at the bottom of the borehole which was then filled with grout.  Pore pressures are reported in hectoPacsals (hPa).  One hectoPascal is roughly equivalent to the pressure exerted by a 1-cm-deep column of water.  Six of the piezometers are temperature-compensated vibrating-wire transducers (Slope Indicator, model 52611024)* that have a range of -345 to +3448 hPa (or -352 to +3515 cm of water), resolution of &plusmn;0.025%FS about (&plusmn;0.95 hPa or &plusmn;0.96 cm of water) and accuracy of &plusmn;0.1% (&plusmn;3.8 hPa or &plusmn;3.9 cm of water).  One of the piezometers is a temperature compensated vibrating strip transducer (Slope Indicator)* with similar range and resolution.</p>

  <h3>Instruments are offline</h3>
<h2 id="soiltemp">Soil Temperature</h2>
  <p>Each tensiometer and piezometer has a built in temperature sensor, either a thermistor or RTD (resistive temperature device). Soil temperature measurements are used in correcting measurements by the tensiometers and piezometers and in detecting when the ground is frozen.</p>

  <h3>Soil temperatures at tensiometers over the last two weeks</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_soilTemp_twoWeek.png" alt="" />
<h2 id="soilwater">Soil Water Content</h2>
  <h3>Soil Water Content over the last two weeks</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_vWC_twoWeek.png" alt="" />

<h2 id="battery">Battery</h2>
  <h3>Battery voltage over the last two weeks</h3>
  <img src="/static/landslides-realtime/plots/westHillsPort_battery_twoWeek.png" alt="" />
