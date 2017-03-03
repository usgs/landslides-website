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

  <div class="column one-of-two">
    <ul class="linklist no-style">
      <li>
        <a href="projects.php">
          <h3>Research Projects</h3>
          <img src='images/projects.jpg' alt=""/>
        </a>
        <p>The USGS Landslide Hazards Program conducts research in order to make accurate landslide hazard maps and forecasts of landslide occurrences by answering these major questions: Where and when will landslides occur? How big will the landslides be? How fast and how far will they move? What areas will the landslides affect or damage? How frequently do landslides occur in a given locality?</p>
      </li>
      <li>
        <a href="software.php">
          <h3>Software</h3>
          <img src='images/software.gif' alt=""/>
        </a>
        <p>USGS software for landslide assessments and modeling.</p>
      </li>
      <li>
        <a href="maps.php">
          <h3>Maps</h3>
          <img src="" style="width:150px;height:150px"/>
        </a>
        <p>Maps showing recent and historical landslides across the United States</p>
      </li>
    </ul>
  </div>

  <div class="column one-of-two">
    <h2>Featured Research</h2>
    <ul class="no-style linklist">
      <li>
        <a href="featured/2015-westsaltcreek/">
        <h4>Reconstruction of an Avalanche</h4>
        <img src="featured/images/westsaltcreek-sm.jpg"/>
        </a>
        <p>The West Salt Creek Rock Avalanche, Colorado, May 25, 2014</p>
      </li>
    </ul>

    <h2>Rainfall and Landslides in California</h2>
    <img style='float:left; padding-right: 2em;' src="featured/images/bluebirdcyn2005-sm.jpg"/>
    <ul>
      <li><a href="ca-rainfall/ncal.php">Rainfall and Landslides in Northern and Central California</a></li>
      <li><a href="ca-rainfall/scal.php">Rainfall and Landslides in Southern California</a></li>
    </ul>
  </div>
</div>
