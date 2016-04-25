<?php
// Author: Lisa Wald
// Contact: Jonathan Godt,
// Last modified:03/26/2016

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
    <ul class="linklist">
      <!--''
    ''

    images/icon-learn.jpg')
      '-->
    	<li>
    		<a href="hazards/">
    		    <h3>Hazards</h3>
            <img src="/images/icon-hazards.gif" alt="hazards"/>
        </a>
    		<p>Landslides happening now, report a landslide, research and other news, notifications, alerts and warnings.</p>

    	</li>

    	<li>
    		<a href="monitoring/">
    		    <h3>Monitoring</h3>
            <img src="/images/icon-monitoring.jpg" alt="monitoring"/>
        </a>
    		<p>Landslide sites and data for learning more about the physical processes that trigger landslides or control their movement</p>
    	</li>

    	<li>
    		<a href="state_local/">
    		    <h3>State &amp; Local</h3>
            <img src="/images/icon-statelocal.gif" alt="state_local"/>
        </a>
    		<p>Landslide information for specific locations in the US.</p>
    	</li>

    	<li>
    		<a href="learn/">
    		  <h3>Learn</h3>
          <img src="/images/icon-learn.jpg" alt="learn"/>
        </a>
    		<p>Landslides 101, FAQs, glossary, National Landslide Information Center, preparedness, photos, movies, and landslide lists.</p>
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
  <div class="column one-of-two">
    <!--FEATURED RESEARCH-->


    		<h2>Featured Research</h2>
        <ul class="linklist">
          <li>
            <a	href="/research/featured/2015-westsaltcreek/">
                    <h4>Reconstruction of an Avalanche</h4>
                    <img	src="/research/featured/images/westsaltcreek-sm.jpg"/>
            </a>
            <p>The West Salt Creek Rock Avalanche, Colorado, May 25, 2014</p>
          </li>
          <li>
            <a	href="/monitoring/2015elnino/ncal.php">
                    <h4>El Ni&ntilde;o and Landslides in Northern and Central California</h4>
                    <img	src="research/featured/images/bluebirdcyn2005-sm.jpg"/>
            </a>
            <p>See also <a href="/monitoring/2015elnino/scal.php">El Ni&ntilde;o and Landslides in Southern California</a></p>
          </li>
        </ul>
    		<!--php

    			$list = new ImageList();

    			$list->addItem(
    					'research/featured/2015-westsaltcreek/',
    					'research/featured/images/westsaltcreek-sm.jpg',
    					'Reconstruction of an Avalanche',
    					'<p>The West Salt Creek Rock Avalanche, Colorado, May 25, 2014</p>');

    			$list->addItem(
    							'monitoring/2015elnino/ncal.php',
    							'research/featured/images/bluebirdcyn2005-sm.jpg',
    							'El Ni&ntilde;o and Landslides in Northern and Central California',
    							'<p>See also <a href="/monitoring/2015elnino/scal.php">El Ni&ntilde;o and Landslides in Southern California</p>');

    		$list->display();
    		?>-->

    <!--QUICK LINKS-->

    	<h2>Quick Links</h2>
    	<ul>
        <li><a href="hazards/postfire_debrisflow/">Emergency Assessment of Post-Fire Debris-Flow Hazards</a></li>
    		<li><a href="/dysi/">Did You See It? - Report a Landslide</a></li>
    		<li><a href="http://www.usgs.gov/faq/?q=taxonomy/term/9752" target="_"><acronym title="Frequently Asked Questions">FAQ</acronym></a></li>
    		<li><a href="/research/publications.php#factsheets">Fact Sheets</a></li>
    		<li><a href="/learn/photos/">Landslide Images</a></li>
    		<li><a href="/learn/prepare.php">Preparedness</a></li>
    		<li><a href="http://www.youtube.com/watch?v=MVwSpGVfWVo">Video - Landslide Hazards</a></li>
    		<li><a href="/aboutus/people.php">Landslides Staff</a></li>
    	</ul>

  </div>
</div>
