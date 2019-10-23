<?php
//  Author: Lisa Wald
//  Contact:  Jonathan Godt,
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Sitka, AK - Recent Conditions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#soil">Soil Moisture</a>
  <a href="#ground">Groundwater Level and Soil Water Potential </a>
  <a href="#battery">Air, Soil Temperature, and Battery Voltage </a>
</nav>

<h2 id="rainfall">Rainfall</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/akSitka_precip_twoWeek.png">
</div>

<h2 id="soil">Upper Nest Soil Water Content and Groundwater Pressure (Piezometer)</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/akSitka_PP_twoWeek.png">
</div>

<h2 id="ground">Lower Nest Soil Water Content and Groundwater Pressure (Piezometer)</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/akSitka_VWC_twoWeek.png">
</div>

<h2 id="battery">Air Temperature, Relative Humidity, and Battery Voltage</h2>
  <p>
  </p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center">
      <img alt="2 week" src="/static/landslides-realtime/plots/akSitka_batteryTemp_twoWeek.png">
</div>
