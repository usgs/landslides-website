<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/07/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Bluff Hydrology';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>
	The charts on this page show hillslope hydrologic data from a study on coastal
	bluffs in Mukilteo, Washington, North of Seattle. The study is being
	conducted in cooperation with <a href="http://www.soundtransit.org/">Sound Transit
	</a>.  The purpose of the study is to
	improve understanding of conditions that lead to landslide occurrence in
	connection with rainfall.  Instruments were installed in an active landslide
	area (ALS) and in a presently stable coastal bluff (SCB) that has potential
	for future landsliding.  The study is part of a larger effort to mitigate the
	effects of landslides on the coastal bluffs and thereby improve safety for
	rail passengers.  For further information contact Rex Baum (<a
	href="mailto:baum@usgs.gov">baum@usgs.gov</a>) or
	Ben Mirus (<a href="mailto:bmirus@usgs.gov">bbmirus@usgs.gov</a>).
</p>

<h2>Rainfall</h2>
<img src="/static/landslides-realtime/plots/Muk_rain_in.png" alt="Rainfall at Mukilteo Stations"
width="100%">
<p>
Rainfall is measured using tipping-bucket rain gauges at four locations along
the west edge of Mukilteo.
</p>
<!--<php
  include_once 'TheCurrTabl.htm';
?>-->
<ul>
	<li><a href="http://www.wrh.noaa.gov/sew/observations.php">National Weather Service Observations</a></li>
</ul>

<h2>Rainfall Relative to Threshold</h2>
<img src="/static/landslides-realtime/plots/Muk_cmtr.png" alt="Rainfall relative to threshold"
width="100%">
<p>
Conditions relative to cumulative 3-day and previous 15-day threshold
</p>

<h2>Soil Water Content</h2>
<img src="/static/landslides-realtime/plots/Muk_VWC.png" alt="Soil Water Content" width="100%">
<p>
Volumetric water content of soil is measured using soil moisture sensors on
profiles along the bluff in the active landslide area and stable bluff.  Points
are numbered from highest (1) to lowest (5).
</p>"

<h2>Soil Suction</h2>
<img src="/static/landslides-realtime/plots/Muk_Tensiometer_Press.png" alt="Soil Suction"
width="100%">
<p>
Soil suction (negative) is measured using tensiometers on profiles along the
bluff in the active landslide area and stable bluff.  The tensiometers are
located near the three mid-bluff water content sensors (2, 3, 4).
</p>

<h2>Water Levels</h2>
<img src="/static/landslides-realtime/plots/Muk_lvl.png" alt="Water Levels" width="100%">
<p>
Water levels are measured using piezometers at the top and bottom of the
profiles.  The piezometers are located near the highest (1) and lowest (5) water
content sensors.
</p>
