<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 03/30/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Real-time Data Sensors';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<nav class="jumplist">
  <a href="#rainfall">Rainfall</a>
  <a href="#battery">Battery</a>
</nav>

<h2 id="rainfall">Rainfall</h2>
  <p>
    Rainfall on steep burned basins can quickly transform into potentially
    dangerous flash floods and debris flows. The Colby Fire burned many steep
    basins above the city of Glendora in January, 2014. The U.S. Geological
    Survey (USGS) has installed a telemetered rain gage to monitor the rainfall
    conditions in the Colby Fire burn area
  </p>

  <p>
  	Precipitation is measured using a tipping-bucket rain gage near the outlet of
  	the basin and near the ridge top. Each tip of the bucket records 0.2 mm of
  	precipitation. Graphs of rain gage data show the cumulative rainfall since the
  	last gage reset and the 10-minute rainfall intensity.
  </p>

  			<h3>Rainfall for last three hours<a name="3hours"></a></h3>
  			<div align="center">
  				<img alt="3 hours" src="http://landslides.usgs.gov/realtime/plots/colbyFire_precip_threeHours.png">
  			</div>

  			<h3>Rainfall for last week<a name="1week"></a></h3>
  			<div align="center">
  				<img alt="One week" src="http://landslides.usgs.gov/realtime/plots/colbyFire_precip_oneWeek.png">
  			</div>

<h2 id="battery">Battery</h2>
  <p>Graphs of battery data show power supply voltage at the data acquisition system.  The system is nominally 12 volts and the battery is recharged by regulated input from a solar panel.  Graphs typically show diurnal charging during the day and discharging during the night.</p>

  <h3>Battery voltage for last two weeks<a name="2weeks"></a></h3>
  <div align="center">
    <img alt="2 weeks" src="http://landslides.usgs.gov/realtime/plots/colbyFire_battery_twoWeek.png">
  </div>
