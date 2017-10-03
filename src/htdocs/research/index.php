<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Research';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<div class="row">

  <div class="column two-of-three">
    <ul class="linklist no-style">
      <li>
        <a href="projects.php">
          <h3>Research Projects</h3>
          <img src='images/projects.jpg' alt="two scientists on a slope with monitoring instruments"/>
        </a>
        <p>The USGS Landslide Hazards Program conducts research in order to make accurate landslide hazard maps and forecasts of landslide occurrences by answering these major questions: Where and when will landslides occur? How big will the landslides be? How fast and how far will they move? What areas will the landslides affect or damage? How frequently do landslides occur in a given locality?</p>
      </li>
      <li>
        <a href="software.php">
          <h3>Software</h3>
          <img src='images/software.gif' alt="a graph"/>
        </a>
        <p>USGS software for landslide assessments and modeling.</p>
      </li>
      <li>
        <a href="maps.php">
          <h3>Maps</h3>
          <img src="images/maps.jpg" alt="thumbnail of map"/>
        </a>
        <p>Maps showing recent and historical landslides across the United States</p>
      </li>
      <li>
        <a href="prelim.php">
          <h3>Preliminary Landslide Assessments</h3>
          <img src="images/prelim.jpg" alt="thumbnail of landslide"/>
        </a>
        <p>Provisional information provided quickly after some landslides to meet the need for timely science to assess ongoing hazards.</p>
      </li>

    </ul>
  </div>

  <div class="column one-of-three">
    <div class="alert" style="margin-bottom:16px">
      <h3>Science for the General Public</h3>
        <a href="https://www.usgs.gov/center-news/predicting-postfire-debris-flows-saves-lives">
          <h3>Predicting Postfire Debris Flows Saves Lives</h3>
          <img src="/images-featured/debrisflow-sm.jpg" width="384"/>
        </a>

        <ul class='no-style separator articles'>
          <li><a href="https://www.earthmagazine.org/article/down-earth-usgs-landslide-response-team">Down to Earth with the USGS Landslide Response Team</a></li>
          <li><a href="featured/2015-westsaltcreek/">Reconstruction of an Avalanche</a></li>
        </ul>

    </div>
  </div>
</div>
