<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	03/31/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Bent Creek, Bent Creek Experimental Forest, North Carolina';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
$TITLE = "Bent Creek, Bent Creek Experimental Forest, North Carolina";
$SCRIPTS = '../coordinates.js,../monitoring.js';
$WIDGETS = 'gmaps,jquery,imageslider';

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";

include 'status.php';

$slider = new ImageSlider();


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
			<p>
				The instruments were installed in the summer of 2014 and are used to monitor
				and detect changes in local conditions, including:
			</p>

			<ul>
				<li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
				<li><a href="rtdmonitoring.php#ground">Ground Water Pressure (tensionmeters)</a></li>
				<li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
				<li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
				<li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
			</ul>
		<h2>Purpose of Monitoring</h2>

		<p>
			Landslides in western North Carolina impact people and the environment and
			are commonly induced by intense or prolonged rainfall associated with strong
			storms. For example, in September of 2004 heavy rainfall from two hurricanes,
			Frances and Ivan, induced thousands of landslides over a large part of western
			North Carolina.
		</p>

		<p>
			The U. S. Geological Survey and its cooperators have installed instruments in
			a steep hillside about 38.5 km south of Asheville, NC in the Bent Creek
			Experimental Forest.
		</p>

		<p>
			Data collection at this site supports research on hydrologic factors that
			control landslide initiation. In many landslide-prone hillsides, infiltration
			of water from rainfall or snowmelt increases ground-water pressures. These
			elevated pressures can, in turn, induce landslide movement.
		</p>

		<h2>Cooperators</h2>

		<ul>
			<li>The North Carolina Department of Environment and Natural Resources</li>
			<li>the United States Forest Service</li>
			<li>Colorado School of Mines (National Science
			Foundation award CMMI 0855783 to N. Lu and J.W. Godt and NASA NNX12AO19G to N.
			Lu, D. Kirschbaum, and Y. Hong).</li>
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

		<h2>Data Updates - 30 minutes</h2>

		<p>
			Data are transmitted daily
			and displayed on graphs. Updates may be interrupted occasionally by
			instrument, computer, or network malfunctions.
		</p>
    <p>*Any use of trade, product, or firm names is for descriptive purposes only and does not imply endorsement by the U.S. Government.</p>

		<div id="map" style="width:250px;height:250px"></div>
      <a href="/monitoring/bent_creek/images/bent_creek.png" rel="Bent Creek
      Experimental Forest"><img
      src="/monitoring/bent_creek/images/bent_creek.png" alt="Image provided by
      Rick Wooten, NCDENR" style="width:300px; height: 350px;" /></a>

      <a href="/monitoring/bent_creek/images/BC_2.JPG" rel="Image"><img
      src="/monitoring/bent_creek/images/BC_2.JPG" style="width: 300px;height: 350px;"
      alt="Image provided by Rick Wooten, NCDENR" /></a>
      <img src='/monitoring/bent_creek/images/BC_1.JPG' style="width:300px; height: 350px;"/>
		<ul>
		<li><strong><a href="rtdmonitoring.php">Click here for Real-time Data</a></strong></li>
		</ul>
	</div>
</div>
