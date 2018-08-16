<?php
// Author: Lisa Wald
// Contact: Dennis Staley
  if (!isset($TEMPLATE)) {
    $TITLE = 'Assessment Requirements';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>
  Post-fire debris-flow hazard assessments for recently burned areas in the western United States are provided free to any interested Federal, State, or Local Agency, or to any private organization. These assessments rely upon the differenced normalized burn ratio (dNBR) image and field-validated estimates of soil burn severity in geospatial format.
</p>
<p>
Organizations requesting post-fire debris-flow hazard assessments must supply the following geo-spatial data as input to the models:
</p>
<ul>
  <li>
    A differenced normalized burn ratio (dNBR) image in raster format (GeoTIFF or ArcGIS raster).
  </li>
  <li>
    Field validated soil burn severity in raster format (GeoTIFF or ArcGIS raster) where:<br />
    0 = unburned<br />
    1 = unburned or low soil burn severity<br />
    2 = low soil burn severity<br />
    3 = moderate soil burn severity<br />
    4 = high soil burn
  </li>
  <li>
  Most recent fire perimeter as a shapefile or a feature class.
  </li>
</ul>
<p>
  Please direct requests and required input data, or questions about the assessment process to: <a href="mailto:badflow@usgs.gov">badflow@usgs.gov</a>
</p>
<p>
  Response time is dependent upon the number of assessments that have been previously requested, and if the input data are in the required format. Requests received after 12 Noon (Mountain Time) on a Friday will be processed on the next business day, in the order that they were received. Assessment requests received on a holiday will also be processed on the next business day, in the order that they were received.
</p>
