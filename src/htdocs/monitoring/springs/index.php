<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/05/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'2013 Springs Fire, Ventura County, California';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "";
$SCRIPTS = '../monitoring.js,../coordinates.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";



<script language="javascript" type="text/javascript">
	var map = null;

	$(document).ready( function() {
		loadStationMap('Springs, Ventura County, California');
		addStationMarkers();
		addEvent(window, 'unload', GUnload);
	});
</script>
?>-->
<div class="row">
	<div class="column two-of-three">
		<h2>Real-time Data</h2>
			<p>
				A rain gage was installed in November 2015 and is used to monitor:
			</p>

			<ul>
				<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
				<li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
			</ul>

		<h2>Purpose of Monitoring</h2>
		<p>
			Rainfall on steep burned basins can quickly transform into potentially
			dangerous flash floods and debris flows. The Springs Fire burned many steep
			basins in the Santa Monica Mountains east of Oxnard, CA in May, 2013. The U.S.
			Geological Survey (USGS) has installed a telemetered rain gage to monitor the
			rainfall conditions in the Springs Fire burn area.
		</p>

		<p>
			Data collection at this site is intended to advance the understanding of
			post-fire runoff, erosion, and debris-flow generation processes and to provide
			information from the burned area to the National Weather Service for warning
			decision-making.
		</p>

		<h2>Cooperators</h2>
		<ul>
			<li>National Oceanic and Atmospheric Association</li>
		</ul>

		<h2>For More Information</h2>
		<ul class="no-style separator">
			<li>
				<a href="https://pubs.er.usgs.gov/publication/ofr20141001">
					Debris-flow hazard assessment for Springs Fire
				</a>
			</li>
			<li>
				<a href="http://landslides.usgs.gov/hazards/warningsys.php">
					NOAA/USGS Demonstration Flash-flood and debris-flow early warning system
				</a>
			</li>
		</ul>

		<h2>Contact Information</h2>
		<ul class="no-style" style="margin-left:10px">
			<li>
				<p>
					<strong>Dennis Staley</strong><br />
					U.S. Geological Survey<br />
					Geologic Hazards Team<br />
					Box 25046, MS 966<br />
					Denver, CO 80225<br />
					<a href="mailto:dstaley@usgs.gov">dstaley@usgs.gov</a>
				</p>
			</li>
			<li>
				<p>
					<strong>Jason Kean</strong><br />
					<a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
				</p>
			</li>
		</ul>
	</div>
	<div class="column one-of-three">
		<h2>Current Monitoring Status</h2>
		<p align="center">
			ACTIVE
		</p>

		<h2>Dates Updates - 60 minutes</h2>
		<p>
			Updates may be interrupted
			occasionally by instrument, computer, or network malfunctions.
		</p>
		<div id="map" style="width:250px;height:250px"></div>
    <img src='/monitoring/springs/images/Springs1.jpeg' alt="" style="width:250px;height:315px"/>
    <img src='/monitoring/springs/images/Springs2.jpeg' alt="" style="width:250px;height:315px"/>
		<ul>
			<li><strong><a href="rtdmonitoring.php">Click here for Real-Time Data</a></strong></li>
		</ul>
	</div>
</div>
