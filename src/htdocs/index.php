<?php
// Author: Lisa Wald
// Contact: Jonathan Godt,

  if (!isset($TEMPLATE)) {
  $TITLE = 'Landslide Hazards Program';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<?php
  //include_once '_features.inc.php';
  //echo $LS_FEATURES->toHtml();
?>

<div class="row">
  <div class="column one-of-two">
    <ul class="linklist no-style">
      <li>
        <a href="hazards/">
            <h3>Post-Fire Debris-Flow Hazards</h3>
            <img src="/images/icon-hazards.gif" alt="hazards"/>
        </a>
        <p>Assessments and early warning for select fires in the Western U.S. using geospatial data to estimate the probability and volume of debris flows that may occur in response to a design storm.</p>
      </li>

      <li>
        <a href="monitoring/">
            <h3>Monitoring</h3>
            <img src="/images/icon-monitoring.jpg" alt="monitoring"/>
        </a>
        <p>Landslide sites and data for learning more about the physical processes that trigger landslides or control their movement</p>
      </li>

      <li>
        <a href="learn/">
          <h3>Learn</h3>
          <img src="/images/icon-learn.jpg" alt="learn"/>
        </a>
        <p>Landslides 101, FAQs, glossary, preparedness, photos, movies, and landslide lists.</p>
      </li>

      <li>
        <a href="research/">
          <h3>Research</h3>
          <img src="/images/icon-research.jpg" alt="research"/>
        </a>
        <p>Program research activities to make accurate landslide hazard maps and forecasts of landslide occurrences.</p>
      </li>

    </ul>
  </div>

  <!--FEATURED RESEARCH-->
  <div class="column one-of-two">
    <div class='alert'>
      <h2>Highlights</h2>
      <hr/>

      <a href="/research/featured/2015-westsaltcreek/">
        <h4>Reconstruction of an Avalanche</h4>
        <img style='float:left; padding-right: 1em;' src="/research/featured/images/westsaltcreek-sm.jpg"/>
      </a>
      <p>The West Salt Creek Rock Avalanche, Colorado, May 25, 2014.</p>

      <br style="clear:left;"/>
      <hr/>

      <h4>Rainfall and Landslides in California</h4>
      <img style='float:left; padding-right: 2em;' src="/research/featured/images/bluebirdcyn2005-sm.jpg"/>
      <ul>
        <li><a href="research/ca-rainfall/ncal.php">Northern and Central California</a></li>
        <li><a href="research/ca-rainfall/scal.php">Southern California</a></li>
      </ul>


    </div>

    <div class='alert'>
      <h2>Quick Links</h2>
      <ul>
        <li><a href="hazards/postfire_debrisflow/">Emergency Assessment of Post-Fire Debris-Flow Hazards</a></li>
        <li><a href="https://www2.usgs.gov/faq/?q=taxonomy/term/9752" target="_"><acronym title="Frequently Asked Questions">FAQ</acronym></a></li>
        <li><a href="/research/factsheets.php">Fact Sheets</a></li>
        <li><a href="/research/maps.php">Maps</a></li>
        <li><a href="/learn/prepare.php">Preparedness</a></li>
      </ul>
    </div>
  </div>
</div>
