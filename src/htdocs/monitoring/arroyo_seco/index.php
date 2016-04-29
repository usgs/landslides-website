<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	03/28/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'2009 Station Fire, Arroyo Seco, Pasadena California';
      $NAVIGATION	= true;
      $HEAD = '<link rel="stylesheet" href="/monitoring/styles.css"/>';
      include	'template.inc.php';
      }
?>

<div class="row">
  <!-- Description anc Contacts -->
  <div class="column two-of-three">

    <p>
    	Rainfall on steep burned basins can transform into potentially dangerous
    	flash floods and debris flows.  In 2009, the Station Fire burned 160,000
    	acres in the San Gabriel Mountains. Vegetation has started to return, but
    	it can take many years for a basin to fully recover from the effects of
    	fire.
    </p>
    <p>
    	The U. S. Geological Survey has installed instruments in a small basin of
    	Arroyo Seco above Pasadena, CA. Data collection at this site supports
    	research on the hydrologic factors that control debris-flow initiation in
    	burned areas. The USGS conducted debris-flow monitoring at this site after
    	the fire from 2009 to 2011. The USGS reestablished the monitoring site in
    	the fall of 2015 to understand the effects of vegetation recovery on
    	debris-flow susceptibility.
    </p>

    <h2>Contacts</h2>
      <ul class="no-style" style="margin-left:10px">
    		<li>
          <p>
            <strong>Jason Kean</strong><br />
    				U.S. Geological Survey<br />
    				Geologic Hazards Team<br />
    				Box 25046, MS 966<br />
    				Denver, CO 80225 <br />
            <a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>
          </p>
    		</li>
    		<li>
    			<p>
            <strong>Joel Smith</strong><br />
    			  <a href="mailto:jbsmith@usgs.gov">jbsmith@usgs.gov</a>
          </p>
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
    				loadStationMap('Station Fire, California');
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
      Instruments and are used to monitor and detect changes in local conditions, including
    </p>
    <ul>
      <li>
        <a href="rtdmonitoring.php#rainfall">Rainfall</a>
      </li>
      <li>
        <a href="rtdmonitoring.php#ground">Soil water content and ground water pressure</a>
      </li>
      <li>
        <a href="rtdmonitoring.php#channel">Channel stage</a>
      </li>
      <li>
        <a href="rtdmonitoring.php#battery">Battery voltage</a>
      </li>
    </ul>

    <p>
    	Most of the measurements are taken at <strong>1-minute intervals</strong> and <strong>data are transmitted hourly</strong> and displayed on graphs. Updates may be interrupted occasionally by instrument, computer, or network malfunctions.
    </p>

</div>

<section class="photos">
  <a href="images/ArroyoSeco1.jpg">
    <img src="images/ArroyoSeco1.jpg" alt="pole with solar panel and antenna"/>
  </a>
  <a href="images/ArroyoSeco2.jpg">
    <img src="images/ArroyoSeco2.jpg" alt=""/>
  </a>
  <a href=="images/ArroyoSeco3.JPG">
    <img src="images/ArroyoSeco3.JPG" alt=""/>
  </a>
  <a href="images/ArroyoSeco4.jpg">
    <img src="images/ArroyoSeco4.jpg" alt=""/>
  </a>
  <a href="images/ArroyoSeco5.jpg">
    <img src="images/ArroyoSeco5.jpg" alt=""/>
  </a>
</section>
