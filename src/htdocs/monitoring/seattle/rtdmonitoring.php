<?php
  //  Author:  Tiffany Kalin
  //  Contact:  Jonathan Godt
  //  Last  modified: 06/22/2016, Lisa Wald
  if  (!isset($TEMPLATE))  {
  $TITLE  =  'Real-time Data Sensors';
  $NAVIGATION  = true;
  include  'template.inc.php';
  }
?>

<p><strong>National Weather Service:</strong></p>
<nav class="jumplist">
  <a href="#nws-cum">Cumulative Precipitation Threshold</a>
  <a href="#nws-int">Rainfall Intensity/Duration Threshold</a>
  <a href="#nws-wet">Antecedent Wetness Index (AWI)</a>
  <a href="#nws-forecast">Forecast Relative to Threshold</a>
</nav>

<p><strong>Bluff location:</strong></p>
<nav class="jumplist">
  <a href="#rain">Rainfall</a>
  <a href="#thresh">Rainfall Relative to Threshold</a>
  <a href="#soil">Soil Water Content</a>
  <a href="#suc"> Soil Suction</a>
  <a href="#water">Water Levels</a>
  <a href="#battery">Battery</a>
</nav>

<h2>National Weather Service Rain Gauge Locations Near Seattle</h2>

<img src="/monitoring/seattle/images/NWSRainGaugeNetwk.jpg" alt="" />
<?php
$contents = file( '/static/landslides-realtime/plots/ThCurrTabl.htm');
print join('', $contents);
?>
<ul>
  <li><a href="http://www.wrh.noaa.gov/sew/observations.php">National Weather Service Observations</a></li>
</ul>

<h3 id="nws-cum">Cumulative Precipitation Threshold</h3>
<p>Graph shows cumulative precipitation threshold for landslides (red line) and most recent update of 3-day and prior 15-day cumulative precipitation at selected National Weather Service Gages (symbols).  Landslides are likely to occur on days when precipitation totals exceed the threshold (plot above or to the right of the red line). Landslides are unlikely to occur when precipitation totals plot below the red line, in the lower left corner of graph.  Please direct questions or comments regarding this information to <a
href="mailto:baum@usgs.gov">Rex Baum</a>.
</p>
<img src="/static/landslides-realtime/plots/cmtrsea.png" alt="Cumulative Precipitation Thresholds for Landslides" />

<h3 id="nws-int">Rainfall Intensity/Duration Threshold</h3>
<p>Graph shows rainfall intensity-duration threshold for landslides in the Seattle area (red line) and most recent update of rainfall intensity and duration at selected National Weather Service Rain Gages (Symbols).  Landslides are very likely to occur when rainfall intensity plots above the red line.  Please direct questions or comments regarding this information to <a
href="mailto:baum@usgs.gov">Rex Baum</a>.
</p>
<img src="/static/landslides-realtime/plots/idtrsea.png" alt="Rainfall Intensity/Duration Threshold" />

<h3 id="nws-wet">Antecedent Wetness Index (AWI)</h3>
<p>Graph shows the Antecedent Wetness Index (AWI) for landslides in the Seattle area for the last fourteen days at selected National Weather Service Rain Gages (colored lines). The AWI uses a water-balance approach to estimate whether soil is likely to be wet enough for landslides to occur as a result of additional, intense rainfall.  Landslides are very likely to occur when the index plots above the black line and intense rainfall occurs (see graph for the rainfall intensity-duration threshold, above). Please direct questions or comments regarding this information to <a
href="mailto:baum@usgs.gov">Rex Baum</a> or <a href="mailto:jgodt@usgs.gov">Jonathan Godt</a>.
</p>
<img src="/static/landslides-realtime/plots/awi.png" alt="Rainfall Intensity/Duration Threshold" />

<h3 id="nws-forecast">Forecast Relative to Threshold</h3>
<p>
Graph shows cumulative precipitation threshold for landslides (red line) and the
most recent and expected values of 3-day and prior 15-day cumulative
precipitation at selected National Weather Service Gages (symbols).  The
expected values are calculated from recent rainfall combined with the National
Weather Service precipitation forecast.  Landslides are likely to occur on days
when precipitation totals exceed the threshold (plot above or to the right of
the red line). Landslides are unlikely to occur when precipitation totals plot
below the red line, in the lower left corner of graph. Please direct questions
or comments regarding this information to Rex Baum (<a
href="mailto:baum@usgs.gov">baum@usgs.gov</a>).
</p>
<img src="/static/landslides-realtime/plots/forecast.png" alt="Forcast graph"/>



<h2>Bluff Hydrology</h2>

  <p>
  	The charts below show hillslope hydrologic data from a study on coastal
  	bluffs in Mukilteo, Washington, North of Seattle. The study is being
  	conducted in cooperation with <a href="http://www.soundtransit.org/">Sound Transit
  	</a>.  The purpose of the study is to
  	improve understanding of conditions that lead to landslide occurrence in
  	connection with rainfall.  Instruments were installed in an active landslide
  	area (ALS) and in a presently stable coastal bluff (SCB) that has potential
  	for future landsliding. These stations are near Everett/Paine Field in the Field Layout map. The study is part of a larger effort to mitigate the
  	effects of landslides on the coastal bluffs and thereby improve safety for
  	rail passengers.  For further information contact Rex Baum (<a
  	href="mailto:baum@usgs.gov">baum@usgs.gov</a>) or
  	Ben Mirus (<a href="mailto:bbmirus@usgs.gov">bbmirus@usgs.gov</a>).
  </p>

  <h3 id="rain">Rainfall</h3>
  <p>
  Rainfall is measured using tipping-bucket rain gauges at four locations along
  the west edge of Mukilteo.
  </p>
  <img src="/static/landslides-realtime/plots/Muk_rain_in.png" alt="Rainfall at Mukilteo Stations"/>

  <h3 id="thresh">Rainfall Relative to Threshold</h3>
    <p>
    Conditions relative to cumulative 3-day and previous 15-day threshold
    </p>
    <img src="/static/landslides-realtime/plots/Muk_cmtr.png" alt="Rainfall relative to threshold"/>

  <h3 id="soil">Soil Water Content</h3>
  <p>
  Volumetric water content of soil is measured using soil moisture sensors on
  profiles along the bluff in the active landslide area and stable bluff.  Points
  are numbered from highest (1) to lowest (5).
  </p>
  <img src="/static/landslides-realtime/plots/Muk_VWC.png" alt="Soil Water Content" />

  <h3 id="suc">Soil Suction</h3>
  <p>
  Soil suction (negative) is measured using tensiometers on profiles along the
  bluff in the active landslide area and stable bluff.  The tensiometers are
  located near the three mid-bluff water content sensors (2, 3, 4).
  </p>
  <img src="/static/landslides-realtime/plots/Muk_Tensiometer_Press.png" alt="Soil Suction"/>

  <h3 id="water">Water Levels</h3>
  <p>
  Water levels are measured using piezometers at the top and bottom of the
  profiles.  The piezometers are located near the highest (1) and lowest (5) water
  content sensors.
  </p>
  <img src="/static/landslides-realtime/plots/Muk_lvl.png" alt="Water Levels" />

<h3 id="battery">Battery</h3>
  <p>
  Battery voltages at each station
  </p>
  <img src="/static/landslides-realtime/plots/Muk_battery.png" alt="Batterie Voltages"/>
