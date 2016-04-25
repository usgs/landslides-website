<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/04/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Portland, Oregon';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "Portland, Oregon";
$SCRIPTS = '../coordinates.js,../monitoring.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

include 'status.php';

<script language="javascript" type="text/javascript">
var map = null;
$(document).ready( function() {
				loadStationMap('Portland');
				addStationMarkers();
				addEvent(window, 'unload', GUnload);
});
</script>
?>-->
<div class="row">
	<div class="column two-of-three">
    <h2>Real-time Data Sensors</h2>
      <p>Instrument installation at this site took place during the summer and fall of 2006. These instruments are used to monitor and detect changes in local conditions, including</p>

  		<ul>
  		<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
  		<li><a href="rtdmonitoring.php#ten">Ground-water Pressure - Tensiometers</a></li>
  		<li><a href="rtdmonitoring.php#waterpot">Ground-water Pressure - Water Potential Sensors</a></li>
  		<li><a href="rtdmonitoring.php#pie">Ground-water Pressure - Piezometers</a></li>
  		<li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
  		<li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
  		<li><a href="rtdmonitoring.php#battery">Battery</a></li>
  		</ul>
		<h2>Purpose of Monitoring</h2>

		<p>Landslides in the West Hills of Portland pose a hazard to people and property. In February 1996, a major storm induced hundreds of landslides in the West Hills. Smaller numbers of landslides occur every few years during extended rainy periods and intense storms.</p>

		<p>Data collection at this site supports research on hydrologic factors that control landslide initiation.  In many landslide-prone hillsides, infiltration of water from rainfall or snowmelt increases ground-water pressures. These elevated pressures can, in turn, induce landslide movement.</p>

		<h2>Cooperators</h2>

		<ul>
      <li>Portland State University</li>
      <li>the Oregon Department of Geology and Mineral Industries</li>
    </ul>

		<h2>Contact Information</h2>
		<ul class="no-style" style="margin-left:10px">
		<li>
			<p>
        <strong>Jonathan Godt</strong><br />
				U.S. Geological Survey <br />
				Central Region Geologic Hazards Team <br />
				Box 25046, DFC <br />
				Mail Stop 966 <br />
				Denver CO 80225 <br />
        <a href="mailto:jgodt@usgs.gov">jgodt@usgs.gov</a>
			</p>
		</li>

		<li>
			<p>
        <strong>Rex Baum</strong><br />
				U.S. Geological Survey <br />
				Central Region Geologic Hazards Team <br />
				Box 25046, DFC <br />
				Mail Stop 966 <br />
				Denver CO 80225 <br />
        <a href="mailto:baum@usgs.gov">baum@usgs.gov</a>
			</p>
		</li>
		</ul>
	</div>
	<div class="column one-of-three">
    <h2>Current Monitoring Status</h2>

		<p align="center">ACTIVE</p>

		<h2>Data Updates - 15 minutes</h2>

		<p>Measurements are taken at 15-minute intervals and data are transmitted daily and displayed on graphs that are updated daily.  Updates may be interrupted occasionally by instrument, computer, or network malfunctions.</p>
    <p>*Any use of trade, product, or firm names is for descriptive purposes only and does not imply endorsement by the U.S. Government.</p>

		<div id="map" style="width:250px;height:250px"></div>
    <img src='/monitoring/portland/images/rex_logbox.jpg' style="width:250px;"/>
    <img src='/monitoring/portland/images/tens_install.jpg' style="width:250px;"/>
		<ul>
		<li><strong><a href="rtdmonitoring.php">Click here for Real-time Data</a></strong></li>
		</ul>
	</div>
</div>
