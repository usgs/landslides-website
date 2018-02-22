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
    <div class='alert'>
    <h2>Quick Links</h2>
    <ul>
      <li><a href="hazards/postfire_debrisflow/">Emergency Assessment of Post-Fire Debris-Flow Hazards</a></li>
      <li><a href="https://www.usgs.gov/faq/natural-hazards"><acronym title="Frequently Asked Questions">FAQ</acronym> - Select Topic in drop-down menu</a></li>
      <li><a href="/learn/factsheets.php">Fact Sheets</a></li>
      <li><a href="/research/maps.php">Maps</a></li>
      <li><a href="/learn/prepare.php">Preparedness</a></li>
    </ul>
    </div>
  </div>

  <!--FEATURED RESEARCH-->
  <div class="column one-of-two">

    <div class='alert'>
      <h2>Highlights</h2>
      <hr/>
      <?php
      include_once '_features.inc.php';
      echo $LS_FEATURES->toHtml();
       ?>
    </div>

    <div class='alert'>
      <h2>Meeting Announcement</h2>
      <img src="images/DFHMlogo.png" alt="DFHM logo">
      <br style="clear:left;"/>
      <h3>7th International Conference on Debris Flow Hazards Mitigation</h3>
      <p>June 10-13, 2019 in Golden, Colorado<br/>
        Abstracts submittal deadline: May 31, 2018
      </p>
      <p>
        <a href="http://dfhm7.csmspace.com/about_dfhm7.html">Information and Registration</a>
      </p>
    </div>
  </div>
</div>
