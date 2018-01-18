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
        <a href="http://usgs.maps.arcgis.com/home/item.html?id=de583ade9e9e4c4e89303ecf90359535">
          <h3>Repository of Earthquake-Triggered Ground-Failure Inventories</h3>
          <img src="images/EQinduced.jpg" alt="thumbnail of map"/>
        </a>
        <p>Openly accessible, centralized earthquake-triggered ground-failure inventory repository.</p>
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

      <a href="featured/">
        <h3>Science for Everyone</h3>
        <img src="/images-featured/debrisflow-sm.jpg" width="384"/>
      </a>
      <p>Science briefs about new landslides research written for non-scientists.</p>
    </div>
  </div>
</div>
