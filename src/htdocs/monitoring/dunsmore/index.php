<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/05/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'2009 Station Fire, Dunsmore Canyon, Glendale, California';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "";
$SCRIPTS = '../monitoring.js,../coordinates.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

$slider = new ImageSlider(array('width' => 250, 'height'=> 315, 'overlayCaption'
=> false));
$slider->addItem('/monitoring/dunsmore/images/Dunsmore1.jpg');
$slider->addItem('/monitoring/dunsmore/images/Dunsmore2.jpg');
$slider->addItem('/monitoring/dunsmore/images/Dunsmore3.jpg');
$slider->addItem('/monitoring/dunsmore/images/Dunsmore4.jpg');
$slider->addItem('/monitoring/dunsmore/images/Dunsmore5.jpg');
<script language="javascript" type="text/javascript">
	var map = null;

	$(document).ready(function(){loadStationMap('2009 Station Fire, Arroyo Seco,
		Pasadena California');
		addStationMarkers();
		addEvent(window, 'unload', GUnload);
	});
	</script>
?>-->
<div class="row">
	<div class="column two-of-three">
		<h2>Real-time Data</h2>
			<p>
				Instruments and are used to monitor and detect changes in local conditions,
				including
			</p>
			<uL>
				<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
				<li><a href="rtdmonitoring.php#ground">Soil water content and ground water pressure</a></li>
				<li><a href="rtdmonitoring.php#channel">Channel stage</a></li>
				<li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
			</ul>
		<h2>Purpose of Monitoring</h2>
		<p>
			Rainfall on steep burned basins can transform into potentially dangerous flash
			floods and debris flows.  In 2009, the Station Fire burned 160,000 acres in
			the San Gabriel Mountains. Vegetation has started to return, but it can take
			many years for a basin to fully recover from the effects of fire.
		</p>
		<p>
			The U. S. Geological Survey has installed instruments in Dunsmore Canyon
			located in Deukmejian Wilderness Park, Glendale, CA.
		</p>

		<p>
			Data collection at this site supports research on the hydrologic factors that
			control debris-flow initiation in burned areas. The USGS conducted debris-flow
			monitoring at this site after the fire from 2009 to 2011. The USGS
			reestablished the monitoring site in the fall of 2015 to understand the
			effects of vegetation recovery on debris-flow susceptibility.
		</p>

		<h2>Contact Information</h2>
		  <ul class="no-style" style="margin-left:10px">
				<li>
					<p>
						<strong>Jason Kean</strong><br />
						U.S. Geological Survey<br />
						Geologic Hazards Team<br />
						Box 25046, MS 966<br />
						Denver, CO 80225 <br />
						<a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
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
			Most of the measurements are taken at 1-minute intervals and data are
			transmitted hourly and displayed on graphs. Updates may be interrupted
			occasionally by instrument, computer, or network malfunctions.
		</p>
		<div id="map" style="width:250px;height:250px"></div>
    <img src='/monitoring/dunsmore/images/Dunsmore1.jpg' alt="" style="width:250px;height:315px"/>
    <img src='/monitoring/dunsmore/images/Dunsmore2.JPG' alt="" style="width:250px;height:315px"/>
    <img src='/monitoring/dunsmore/images/Dunsmore3.jpg' alt="" style="width:250px;height:315px"/>
    <img src='/monitoring/dunsmore/images/Dunsmore4.JPG' alt="" style="width:250px;height:315px"/>
    <img src='/monitoring/dunsmore/images/Dunsmore5.JPG' alt="" style="width:250px;height:315px"/>
		<ul>
			<li>
				<strong>
					<a href="rtdmonitoring.php">Click here for Real-Time Data</a>
				</strong>
			</li>
		</ul>
	</div>
</div>
