<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  03/30/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  '2014 Colby Fire, Glendora, California';
      $NAVIGATION  = true;
      $HEAD = '<link rel="stylesheet" href="/monitoring/styles.css"/>';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">

    <p>
      Rainfall on steep burned basins can quickly transform into potentially
      dangerous flash floods and debris flows. The Colby Fire burned many steep
      basins above the city of Glendora in January, 2014. The USGS has installed a telemetered rain gage to monitor the
      rainfall conditions in the Colby Fire burn area
    </p>
    <p>
      Data collection at this site is intended to advance the understanding of
      post-fire runoff, erosion, and debris-flow generation processes and to
      provide information from the burned area to the National Weather Service
      for warning decision-making.
    </p>

    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Dennis Staley</strong><br />
          U.S. Geological Survey<br />
          Geologic Hazards Team<br />
          Box 25046, MS 966<br />
          Denver, CO 80225<br />
          <a href="mailto:dstaley@usgs.gov">dstaley@usgs.gov</a>
        </p>
      </li>
      <li>
        <p>
          <strong>Jason Kean</strong><br />
          <a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
        </p>
      </li>
    </ul>

    <h2>Cooperators</h2>
    <ul>
      <li>National Oceanic and Atmospheric Association</li>
    </ul>

    <h2>For More Information</h2>
    <ul>
      <li>
        <a href="../../hazards/postfire_debrisflow/2014/20140116colby/">Debris-flow hazard asscesment for Colby Fire</a>
      </li>
      <li>
        <a href="../../hazards/warningsys.php">NOAA/USGS Demonstration Flash-flood and debris-flow early warning system</a>
      </li>
      <li>
        <a href="http://forecast.weather.gov/MapClick.php?lon=-117.87279&lat=34.15814#.VHOU3PTF9st">Weather forecast for vicinity</a>
      </li>
    </ul>

  </div>

  <div class="column one-of-three">
  <!-- Map, Status, Data -->
  <!--
    <div id="map" style="width:250px;height:250px">
      <script language="javascript" type="text/javascript">
      var map = null;
      $(document).ready( function() {
      loadStationMap('Colby Fire, Glendora, California');
      addStationMarkers();
      addEvent(window, 'unload', GUnload);
      });
      </script>
    </div>
  -->
    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>

    <h2>Real-time Data</h2>
    <p>
      A rain gage was installed in November 2014 and is used to monitor:
    </p>
    <ul>
      <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
    </ul>
    <p>
      Typically the most recent
      data on the graph lags the current time by 5 to 10 minutes. Updates may be
      interrupted occasionally by instrument, computer, or network malfunctions.
    </p>
  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/ColbyFire1.jpg"><img src="images/ColbyFire1.jpg" alt=""/></a>
  </figure>
  <figure>
  <a href="images/ColbyFire2.jpg"><img src="images/ColbyFire2.jpg" alt=""/></a>
</section>
</figure>