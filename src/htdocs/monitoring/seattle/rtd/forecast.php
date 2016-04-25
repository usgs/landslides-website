<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 04/07/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Forecast Relative to Threshold';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<img src="/realtime/plots/forecast.png" alt="Forcast graph" width="100%">
<p>
Graph shows cumulative precipitation threshold for landslides (red line) and the
most recent and expected values of 3-day and prior 15-day cumulative
precipitation at selected National Weather Service Gages (symbols).  The
expected values are calculated from recent rainfall combined with the National
Weather Service precipitation forecast.  Landslides are likely to occur on days
when precipitation totals exceed the threshold (plot above or to the right of
the red line). Landslides are unlikely to occur when precipitation totals plot
below the red line, in the lower left corner of graph. Please direct questions
or comments regarding this information to Rex Baum (<a
href="mailto:baum@usgs.gov">baum@usgs.gov</a>).
</p>
