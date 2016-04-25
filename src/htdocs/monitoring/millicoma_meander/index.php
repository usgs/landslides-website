<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/04/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Millicoma Meander, Elliott State Forest, Oregon';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "Millicoma Meander, Elliott State Forest, Oregon";
$SCRIPTS = '../coordinates.js,../monitoring.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

<script language="javascript" type="text/javascript">
var map = null;
$(document).ready( function() {
				loadStationMap('Millicoma Meander');
				addStationMarkers();
				addEvent(window, 'unload', GUnload);
});
</script>
?>-->
<div class="row">
	<div class="column two-of-three">
		<h2>Real-time Data</h2>
			<p>
				Instruments were installed in late summer 2012 and are used to monitor and
				detect changes in local conditions, including:
			</p>

			<ul>
				<li>
					<a href="rtdmonitoring.php#rainfall">Rainfall</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#channel">Channel Stage</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#ground">Ground water pressure (tensiometers and pressure
							transducers</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#soiltemp">Soil temperature</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#soilwater">Soil water content</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#geophone">Ground Vibrations</a>
				</li>
				<li>
					<a href="rtdmonitoring.php#battery">Battery voltage and station temperatures</a>
				</li>
			</ul>
		<h2>Purpose of Monitoring</h2>

			<p>
				Landslides in the Oregon Coast Range impact people and the environment and
				are commonly induced by intense or prolonged rainfall associated with strong
				storms in the late fall and winter season. For example, in February and
				November of 1996 heavy rainfall from two unusually large storms induced
				thousands of landslides over a large part of western Oregon.
			</p>

			<p>
				The U. S. Geological Survey and its cooperators have installed instruments in
				a steep, recently clear-cut basin in the Elliott State Forest.
			</p>

			<p>
				Data collection at this site supports research on hydrologic factors that
				control landslide initiation, debris-flow timing, and debris-flow magnitude.
				In many landslide-prone hillsides, infiltration of water from rainfall or
				snowmelt increases ground-water pressures. These elevated pressures can, in
				turn, induce landslide movement which can lead to debris-flows.
			</p>

		<h2>Cooperators</h2>

		<ul>
			<li>The Oregon Department of Forestry</li>
		</ul>

		<h2>Contact Information</h2>

		<ul class="no-style" style="margin-left:10px">
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
			<li>
				<p>
					<strong>Jeff Coe</strong><br />
					<a class="mailto:jcoe@usgs.gov">jcoe@usgs.gov</a>
				</p>
			</li>
			<li>
				<p>
					<strong>Joel Smith</strong><br />
					<a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
				</p>
			</li>
		</ul>
	</div>
	<div class="column one-of-three">
		<h2>Current Monitoring Status</h2>

		<p align="center">ACTIVE</p>

		<h2>Data Updates - 60 minutes</h2>
		<p>
			Displayed measurements are taken at 1-minute intervals and transmitted hourly
			during daylight hours to be displayed on graphs. Updates may be interrupted
			occasionally by instrument, computer, or network malfunctions.
		</p>
    <p>*Any use of trade, product, or firm names is for descriptive purposes only and does not imply endorsement by the U.S. Government.</p>

		<div id="map" style="width:250px;height:250px;"></div>

    <img src='/monitoring/millicoma_meander/images/basinMaps.png' style="width:250px;height:315px"/>
    <figure style="width:304px;">
    	<a href="/monitoring/millicoma_meander/images/LaserDistanceDetail.jpg" rel="ibox"><img
    	src="/monitoring/millicoma_meander/images/LaserDistanceDetail-304.jpg" alt=""
    	style="max-width:100%;" /></a>
    	<figcaption>Laser suspended 8 meters above channel.</figcaption>
    </figure>

		<ul>
			<li><strong><a href="rtdmonitoring.php">Click here for Real-time Data</a></strong></li>
		</ul>
	</div>
</div>
