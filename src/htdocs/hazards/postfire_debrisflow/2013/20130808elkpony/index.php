<?php
  // Author: Lisa Wald
  // Contact: Dennis Staley,
  // Last modified: 07/25/2016, Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = '2013 Elk/Pony Complex Fire - Elmore County, Idaho';
    $NAVIGATION = true;
    $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>
        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
        <link rel="stylesheet" href="../../debrisflow.css"/>
    ';
    $FOOT = '
      <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
      <script>
        var DEBRIS_FLOW = {
          center: [32.924, -108.145],
          layerPrefix: "//earthquake.usgs.gov/arcgis/rest/services/ls/pwfdf_2013_2014",
          legendYear: 2010,
          zoom: 13
        };
      </script>
      <script src="../../debrisflow.js"></script>
    ';
    include 'template.inc.php';
  }
?>


<div class="alert">
	<dl>
		<dt>Date of origin:</dt>
		<dd>August 8, 2013</dd>

		<dt>Location:</dt>
		<dd>43.358, -115.448</dd>

		<dt>Total Area Burned:</dt>
		<dd>531 km&#178;</dd>
	</dl>
</div>


<h3>Preliminary Hazard Assessment</h3>
<div class="debrisflow"><noscript>
  Map requires javascript.
</noscript></div>

<h4>Downloads</h4>
<p>
  Below are the shapefiles and geodatabase information that was used in the creation of the maps on this page.
</p>
<ul>
  <li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2013/20130808elkpony/ep_dfestimates.gdb.zip">Geodatabase (.gdb) (41.4MB Zip)</a></li>
  <li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2013/20130808elkpony/Shapefiles.zip">Shapefile (.shp) (31.6MB Zip)</a></li>
  <li><a href="ftp://ftpext.cr.usgs.gov/pub/cr/co/golden/hazards/web/postfire/PostFireDFEstimates_READMEmod2010.pdf">README (PDF)</a></li>
</ul>
</div>
