<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/02/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Bent Creek Experimental Forest, North Carolina';
      $NAVIGATION  = true;
      $HEAD = '<link rel="stylesheet" href="/monitoring/styles.css"/>';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">

    <p>
      Landslides in western North Carolina impact people and the environment and
      are commonly induced by intense or prolonged rainfall associated with
      strong storms. For example, in September of 2004 heavy rainfall from two
      hurricanes, Frances and Ivan, induced thousands of landslides over a large
      part of western North Carolina.
    </p>

    <p>
      The USGS and its cooperators have installed instruments
      in a steep hillside about 38.5 km south of Asheville, NC in the Bent Creek
      Experimental Forest. Data collection at this site supports research on
      hydrologic factors that control landslide initiation. In many
      landslide-prone hillsides, infiltration of water from rainfall or snowmelt
      increases ground-water pressures. These elevated pressures can, in turn,
      induce landslide movement.
    </p>

    <h2>Contacts</h2>
      <ul class="no-style">
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

      <h2>Cooperators</h2>

      <ul>
        <li>The North Carolina Department of Environment and Natural Resources</li>
        <li>the United States Forest Service</li>
        <li>Colorado School of Mines (National Science
        Foundation award CMMI 0855783 to N. Lu and J.W. Godt and NASA NNX12AO19G to N.
        Lu, D. Kirschbaum, and Y. Hong).</li>
      </ul>

  </div>

  <div class="column one-of-three">
  <!-- Map, Status, Data -->
<!--
  <div id="map" style="width:250px;height:250px">
    <script language="javascript" type="text/javascript">
    var map = null;
    $(document).ready( function() {
    loadStationMap('Bent Creek');
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
    <li><a href="rtdmonitoring.php#rainfall">Rainfall</a></li>
    <li><a href="rtdmonitoring.php#ground">Ground Water Pressure (tensionmeters)</a></li>
    <li><a href="rtdmonitoring.php#soilwater">Soil Water Content</a></li>
    <li><a href="rtdmonitoring.php#soiltemp">Soil Temperature</a></li>
    <li><a href="rtdmonitoring.php#battery">Battery voltage</a></li>
    </ul>

    <p>
      Data are updated <strong>every 30 minutes</strong> and displayed on graphs. Updates may be interrupted occasionally by instrument, computer, or network malfunctions.
    </p>
  </div>
</div>

<section class="photos">
  <figure>
    <a href="images/BC_2.JPG">
      <img src="images/BC_2.JPG" alt="Image provided by Rick Wooten, NCDENR"/>
    </a>
  </figure>
  <figure>
    <a href=="images/BC_1.JPG">
      <img src="images/BC_1.JPG" alt=""/>
    </a>
  </figure>
</section>
