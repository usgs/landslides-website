<?php
  //	Author:	Tiffany Kalin
  //	Contact: Jonathan Godt,
  //	Last	modified: 02/29/2016
  if	(!isset($TEMPLATE))	{
  $TITLE	=	'Hazards';
  $NAVIGATION	= true;
  include	'template.inc.php';
  }
?>
<div class="row">
  <div class="column one-of-two">
    <ul class = "linklist">
        <li>
            <a	href="/dysi/">
              <h4>Did You See It? Report a Landslide</h4>
              <img	src="images/dysi.jpg"/>
            </a>
            <p>Help us collect information on landslides that we may not know about.</p>
        </li>
        <li>
            <a	href="postfire_debrisflow/">
                    <h4>Post-Fire Debris-Flow Hazards Emergency Assessments</h4>
                    <img	src="images/postfire_debrisflow.gif"/>
            </a>
            <p>Estimates of the probability and volume of debris flows that may be produced by a storm in a recently burned area, using a model with characteristics related to basin shape, burn severity, soil properties, and rainfall.</p>
        </li>
    </ul>
  </div>
  <div class="column one-of-two">
    <ul class="linklist">
      <li>
          <a	href="warningsys.php">
            <h4>Early Warning System</h4>
            <img	src="images/warning.gif"/>
          </a>
          <p>NOAA/USGS Demonstration Flash-Flood and Debris-Flow Early-Warning System</p>
      </li>
      <li>
          <a	href="nationalmap/">
                  <h4>Landslide Overview Map</h4>
                  <img	src="images/nationalmap.gif"/>
          </a>
          <p>This map and the original delineate areas where large numbers of landslides have occurred and areas which are susceptible to landslides in the conterminous United States.</p>
      </li>
    </ul>
  </div>
</div>
