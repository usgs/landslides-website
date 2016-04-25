<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	04/04/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Knife Ridge, Elliott State Forest, Oregon';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "";
$SCRIPTS = '../coordinates.js,../monitoring.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

<script language="javascript" type="text/javascript">
var map = null;
$(document).ready( function() {
				loadStationMap('Knife Ridge');
				addStationMarkers();
				addEvent(window, 'unload', GUnload);
});
</script>
?>-->
<div class="row">
	<div class="column two-of-three">
		<h2>Real-time Data</h2>
			<p>The instruments were installed in the summer and fall of 2009 and are used to monitor and detect changes in local conditions, including: </p>

			<ul>
			<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
			<li><a href="rtdmonitoring.php#ten">Ground-water Pressure - Tensiometers</a></li>
			<li><a href="rtdmonitoring.php#pres">Ground-water and Atmospheric Pressure - Piezometers</a></li>
			<li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
			<li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
			<li><a href="rtdmonitoring.php#battery">Battery</a></li>
			</ul>
		<h2>Purpose of Monitoring</h2>

		<p>Landslides in the Oregon Coast Range impact people and the environment and are commonly induced by intense or prolonged rainfall associated with strong storms in the late fall and winter seasons. For example, in February and November of 1996 heavy rainfall from two unusually large storms induced thousands of landslides over a large part of western Oregon.</p>

		<p>The U. S. Geological Survey and its cooperators have installed instruments in a steep hillside about 20 km southeast of Reedsport in the Elliott State Forest.</p>

		<p>
			A report of this monitoring installation and archived data can be found at
			<a href="http://pubs.usgs.gov/of/2013/1283/">http://pubs.usgs.gov/of/2013/1283/</a>.
		</p>

		<p>Data collection at this site supports research on hydrologic factors that control landslide initiation.  In many landslide-prone hillsides, infiltration of water from rainfall or snowmelt increases ground-water pressures. These elevated pressures can, in turn, induce landslide movement.</p>

		<h2>Cooperators</h2>
			<ul>
				<li>The Oregon Department of Forestry</li>
				<li>the Elliott State Forest</li>
				<li>the Colorado School of Mines</li>
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

		<h2>Data Updates - 60 minutes</h2>

		<p>Measurements are taken at 15-minute intervals and data are transmitted hourly and displayed on graphs that are updated hourly.  Updates may be interrupted occasionally by instrument, computer, or network malfunctions.</p>
    <p>*Any use of trade, product, or firm names is for descriptive purposes only and does not imply endorsement by the U.S. Government.</p>

		<div id="map" style="width:250px;height:250px;"></div>
    <img src='/monitoring/knife_ridge/images/photo2.jpg' style="width:250px"/>
    <img src='/monitoring/knife_ridge/images/photo1.jpg' style="width:250px"/>
    <figure style="width:250px;">
    	<img src="images/ContourMap_sm.jpg" alt="" />
    	<figcaption>Laser suspended 8 meters above channel.</figcaption>
    </figure>
		<ul>
			<li><strong><a href="rtdmonitoring.php">Click here for Real-time Data</a></strong></li>
		</ul>
	</div>
</div>
