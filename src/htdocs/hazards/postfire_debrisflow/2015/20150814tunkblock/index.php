<?php
  // Author: Lisa Wald
  // Contact: Dennis Staley,
  // Last modified: 07/27/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = '2015 Tunk Block Fire - Okanogan County, Washington';
      $NAVIGATION = true;
      $HEAD = '
          <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
          <link rel="stylesheet" href="index.css"/>
      ';
      $FOOT = '
        <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
        <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
        <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
        <script src="index.js"></script>
    ';
      include 'template.inc.php';
    }
?>

<div class="row">
  <div class="column one-of-two">
    <div class="alert">
  		<dl>
  			<dt>Date of origin:</dt>
  			<dd>August 14, 2015</dd>

  			<dt>Location:</dt>
  			<dd>48.526, -119.463</dd>

  			<dt>Total Area Burned:</dt>
  			<dd>671.4 km&#178;</dd>
  		</dl>
    </div>
	</div>
  <div class="column one-of-two">
  	<h2>Downloads</h2>
  	<p>
      Below are the shapefiles and geodatabase information that was used in the creation of the maps on this page.
    </p>
  	<ul>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2015/20150814tunkblock/PostFireDebrisFlowEstimates.gdb.zip">Geodatabase (.gdb)</a> (20.6MB Zip)</li>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2015/20150814tunkblock/Shapefiles.zip">Shapefile (.shp)</a> (16.2MB Zip)</li>
      <li><a href="ftp://ftpext.cr.usgs.gov/pub/cr/co/golden/hazards/web/postfire/PostFireDFEstimates_READMEmod2010.pdf">README (PDF)</a></li>
  	</ul>
  </div>
</div>

	<h3>Preliminary Hazard Assessment</h3>
	<div id="map"></div>
	<img alt="legend" id="layer_legend"
		src="/hazards/postfire_debrisflow/data/Probability_Legend_Basins.png"/>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/hazards/postfire_debrisflow/belowmaptext25.include";
?>
