<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	03/30/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Mooney Gap, Coweeta Experimental Forest, North Carolina';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "Mooney Gap, Coweeta Experimental Forest, North Carolina";
$SCRIPTS = '../coordinates.js,../monitoring.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

include 'status.php';


<script language="javascript" type="text/javascript">
var map = null;
$(document).ready( function() {
				loadStationMap('Mooney Gap');
				addStationMarkers();
				addEvent(window, 'unload', GUnload);
});
</script>
?>-->

<div class="row">
	<div class="column two-of-three">
		<h2>Real-time Data</h2>
			<p>Instruments were installed in the fall of 2013 and are used to monitor and
			detect changes in local conditions, including</p>

			<ul>
				<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
				<li><a href="rtdmonitoring.php#ground">Ground Water Pressure</a></li>
				<li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
				<li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
				<li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
			</ul>
		<h2>Purpose of Monitoring</h2>

		<p>Landslides in western North Carolina impact people and the environment and
		are commonly induced by intense or prolonged rainfall associated with strong
		storms. For example, in September of 2004 heavy rainfall from two hurricanes,
		Frances and Ivan, induced thousands of landslides over a large part of western
		North Carolina.</p>

		<p>The U. S. Geological Survey and its cooperators have installed instruments in
		a steep hillside about 16 km southeast of Otto, NC in the Coweeta Experimental
		Forest.</p>

		<p>Data collection at this site supports research on hydrologic factors that
		control landslide initiation. In many landslide-prone hillsides, infiltration of
		water from rainfall or snowmelt increases ground-water pressures. These elevated
		pressures can, in turn, induce landslide movement.</p>

		<h2>Cooperators</h2>
    <ul>
      <li>The North Carolina Department of Environment and Natural Resources</li>
      <li>the Coweeta Experimental Forest</li>
      <li>Colorado School of Mines (National Science Foundation award CMMI 0855783 to N. Lu and J.W. Godt and NASA NNX12AO19G to N. Lu, D. Kirschbaum, and Y. Hong).</li>
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
		</ul>
	</div>
	<div class="column one-of-three">
		<h2>Current Monitoring Status</h2>

		<p align="center">ACTIVE</p>

		<h2>Data Update - 30 minutes</h2>

		<p>Measurements are taken at 30-minute intervals and data are transmitted daily
		and displayed on graphs. Updates may be interrupted occasionally by instrument,
		computer, or network malfunctions.</p>
    <p>*Any use of trade, product, or firm names is for descriptive purposes only and does not imply endorsement by the U.S. Government.</p>

		<div id="map" style="width:250px;height:250px"></div>
      <a href="/monitoring/mooneygap/images/mooneyGapContour.png" rel="Mooney Gap Contour"><img
      src="/monitoring/mooneygap/images/mooneyGapContour.png" alt="Image provided by
      Rick Wooten, NCDENR" style="width:300px; height: 350px;" /></a>

      <a href="/monitoring/mooneygap/images/IMG_3.JPG" rel="Image"><img
      src="/monitoring/mooneygap/images/IMG_3.JPG" style="width: 300px;height: 350px;"
       alt="Image provided by Rick Wooten, NCDENR" /></a>
       <img src='/monitoring/mooneygap/images/IMG_1.JPG' style="width: 300px;height: 350px;"/>
		<ul>
		<li><strong><a href="rtdmonitoring.php">Click here for Real-time Data</a></strong></li>
		</ul>
	</div>
</div>
