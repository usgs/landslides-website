<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	03/29/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Real-Time Monitoring of an Active Landslide above U.S. Highway 50, California';
      $NAVIGATION	= true;
			$HEAD = '
        <link rel="scripts" href="../monitoring.js"/>
        <link rel="scripts" href="../coordinates.js"/>
      ';
      /*$FOOT = '
				<script language="javascript" type="text/javascript">
				var map = null;
				$(document).ready( function() {
								loadStationMap('Highway 50');
								addStationMarkers();
								addEvent(window, 'unload', GUnload);
				});
				</script>
      ';*/
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "Real-Time Monitoring of an Active Landslide above U.S. Highway 50, California";
$SCRIPTS = ',';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

?>-->

<div class="row">
	<div class="column two-of-three">
    <h2>Real-time Data</h2>
    <p>The U.S. Geological Survey, in cooperation with the Eldorado National Forest, has installed monitoring instruments on the Cleveland Corral landslide that has the potential to affect Highway 50.  Data from these instruments are used to detect changes in local conditions including:</p>
    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#ground">Groundwater data from pressure sensors</a></li>
      <li><a href="rtdmonitoring.php#downslope">Movement data from displacement sensors</a></li>
      <li><a href="rtdmonitoring.php#geophone">Ground vibration from geophones</a></li>
    </ul>

    <h2>Background</h2>
		<p>During January 1997, several large landslides closed Highway 50 between Placerville and South Lake Tahoe, California. The photograph below shows the catastrophic Mill Creek landslide that closed Highway 50 for 4 weeks. A number of other landslides are episodically active in this corridor during wet years.</p>

		<p>The Highway 50 landslide monitoring system uses data acquisition systems and radio telemetry developed by the
    USGS Volcano Hazards Program to operate in remote, hazardous sites with limited power. Data are collected every 15 minutes and displayed on <a href="rtdmonitoring.php">graphs</a>. In many landslides, infiltration of rainfall or rapid snowmelt increases groundwater pressures.  These elevated pressures can, in turn, trigger landslide movement.</p>

		<h2>For More Information</h2>
		<ul class="spaced">
		<li><a href="status.php">Current Highway 50 Landslide status</a></li>
		<li><a href="report.php">Highway 50 Landslide Monitoring Report</a></li>
		</ul>

		<h2>Contact Information</h2>
		<ul class="no-style" style="margin-left:10px">
			<li>
				<p>
          <strong>Mark Reid</strong><br />
					U.S. Geological Survey<br />
					Landslide Hazards<br />
					345 Middlefield Road MS 910<br />
					Menlo Park, CA  94025<br />
					<a href="mailto:mreid@usgs.gov">mreid@usgs.gov</a>
        </p>
				</li>
				<li>
  				<p>
            <strong>Rick LaHusen</strong><br />
  					U.S. Geological Survey<br />
  					Volcano Hazards<br />
  					1300 SE Cardinal Court, Building 10, Suite 100<br />
  					Vancouver, WA 98683<br />
  					<a href="mailto:rlahusen@usgs.gov">rlahusen@usgs.gov</a>
          </p>
				</li>
		</ul>
	</div>
	<div class="column one-of-three">
    <h2>Current Monitoring Status</h2>
      <p align="center">ACTIVE</p>

    <h2>Data Updates - 15 minutes</h2>
    <p>
      Sensors are sampled
      every second and data are transmitted from the landslide to a USGS computer every 15 minutes.
      After transmission, data are graphed and placed on a web server available to the public.  Monitoring sensors
      on the landslide use commercially available components.
    </p>

		<div id="map" style="width:250px;height:250px"></div>
    <figure>
      <img src='/monitoring/hwy50/images/CT_tall.jpg' alt="" style="width:250px;height:315px"/>
      <figcaption>Photograph of the Mill Creek landslide that closed Highway 50 for 4 weeks. CALTRANS Photo by Lynn Harrison, 1997</figcaption>
    </figure>
		<ul>
			<li><strong><a href="rtdmonitoring.php">Click here for Real-Time Data</a></strong></li>
		</ul>
	</div>
</div>
