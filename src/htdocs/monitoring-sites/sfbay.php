<?php
//  Author: Lisa Wald
//  Contact:  Jonathan Godt,
if  (!isset($TEMPLATE))  {
  $TITLE  =  'San Francisco Bay Area - Recent Conditions';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>
<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#pore">Pore Pressure</a>
  <a href="#water">Water Content</a>
  <a href="#battery">Battery Voltage</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/balt1_precip_twoWeek.png">
</div>

<h2 id="rainfall">Pore Pressure</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/balt1_ppVWCus_twoWeek.png">
</div>

<h2 id="pore">Volumetric Water Content</h2>
<p>
</p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center"></a>
    <img alt="2 weeks" src="/static/landslides-realtime/plots/balt1_ppVWCds_twoWeek.png">
</div>

<h2 id="battery">Battery Voltage</h2>
  <p>
  </p>

<h3>2 Weeks</h3>
<a name="2weeks">
  <div align="center">
      <img alt="2 week" src="/static/landslides-realtime/plots/balt1_batteryTempHum_twoWeek.png">
</div>
