<?php
	if (!isset($TEMPLATE)) {
		$TITLE = "2015 Gasquet Complex Fire - Del Norte County, California";
		$STYLESHEETS = "/hazards/postfire_debrisflow/index.css,/hazards/postfire_debrisflow/leaflet.css";
		include $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
	}
?>

<div class="column container contains-ten summary">
	<div class="five column">
		<dl>
			<dt>Date of origin:</dt>
			<dd>July 31, 2015</dd>

			<dt>Location:</dt>
			<dd>41.846, -123.969</dd>

			<dt>Total Area Burned:</dt>
			<dd>122.9 km&#178;</dd>
		</dl>
	</div>
</div>

<div class="column container contains-ten maps">
	<h3>Preliminary Hazard Assessment</h3>
	<div id="map"></div>
	<img alt="legend" id="layer_legend"
		src="/hazards/postfire_debrisflow/data/Probability_Legend_Basins.png"/>
 </div>

<div class="column container contains-ten pa">
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/hazards/postfire_debrisflow/belowmaptext25.include";
?>
</div>

<div class="ten column downloads">
	<h3>Downloads</h3>
	<p>Below are the shapefiles and geodatabase information that was used in the creation of the maps on this page. </p>
	<ul>
		<li><a href="PostFireDebrisFlowEstimates.gdb.zip">Geodatabase (.gdb)</a></li>
		<li><a href="Shapefiles.zip">Shapefile (.shp)</a></li>
		<li><a href="PostFireDFEstimates_README.docx">README (.docx)</a></li>
	</ul>
</div>

<script src="/hazards/postfire_debrisflow/require.js" data-main="index.js"></script>