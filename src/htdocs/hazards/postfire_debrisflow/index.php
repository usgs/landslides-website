<?php
  //	Author:	Lisa Wald
  //	Contact: Dennis Staley
  //	Last	modified: 07/21/2016, Lisa Wald
  if	(!isset($TEMPLATE))	{
  $TITLE	=	'Emergency Assessment of Post-Fire Debris-Flow Hazards';
  $NAVIGATION	= true;
  $HEAD = '
      <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
      <link rel="stylesheet" href="hazdev-accordion.css"/>
      <link rel="stylesheet" href="index.css"/>
  ';
  $FOOT = '
    <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
    <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
    <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
    <script src="hazdev-accordion.js"></script>
    <script src="index.js"></script>
';
  include	'template.inc.php';
  }
?>

<p>
	Wildfire can significantly alter the hydrologic response of a watershed to
	the extent that even modest rainstorms can produce dangerous flash floods and
	debris flows. The USGS conducts post-fire debris-flow hazard assessments for
	select fires in the Western U.S. We use geospatial data related to basin
	morphometry, burn severity, soil properties, and rainfall characteristics to
	estimate the probability and volume of debris flows that may occur in
	response to a design storm.
</p>

<h2>Current and Previous Year Fires</h2>
<h5>Click on map to view information for each site. (All older fires are listed under <i>Hazard Assessments</i> section below)</h5>

<!-- START Interactive Leaflet Map -->
<div id="map"></div>

<div id="year_legend">
  <img alt="legend" src="data/flamelegend2016.png" height="115" width="103" />
</div>
<!-- END Map -->

<div class="row">

	<div class="column one-of-two">
		<h3>Hazard Assessments</h3>
        <div class="accordion-group accordion-year">
	    <section class="accordion accordion" id="2016">
                	<h4 class="accordion-toggle">2016 Fires</h4>
                        <div class="accordion-content">
                            <ul>
				<li><a href="/hazards/postfire_debrisflow/2016/20160628trailhead/">June 2016 Trailhead Fire, CA</a></li>
        			<li><a href="/hazards/postfire_debrisflow/2016/20160623erskine/">June 2016 Erskine Fire, CA</a></li>
        			<li><a href="/hazards/postfire_debrisflow/2016/20160620sangabriel/">June 2016 San Gabriel Fire, CA</a></li>
        			<li><a href="/hazards/postfire_debrisflow/2016/20160615sherpa/">June 2016 Sherpa Fire, CA</a></li>
				<li><a href="/hazards/postfire_debrisflow/2016/20160614doghead/">June 2016 Dog Head Fire, NM</a></li>
			    </ul>
                        </div>
            </section>
            <section class="accordion accordion-closed" id="2015">
                	<h4 class="accordion-toggle">2015 Fires</h4>
                        <div class="accordion-content">
                            <ul>
                            <li><a href="/hazards/postfire_debrisflow/2015/20151226solimar/">December 2015 Solimar Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150912valley/">September 2015 Valley Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150909butte/">September 2015 Butte Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150818municipal/">August 2015 Municipal Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150814tunkblock/">August 2015 Tunk Block Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150814blackcanyon/">August 2015 Black Canyon Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150814limebelt/">August 2015 Lime Belt Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150814twispriver/">August 2015 Twisp River Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150814woodrat/">August 2015 Woodrat Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150813northstar/">August 2015 Northstar Complex Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150813washslide/">August 2015 Wash/Slide Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150812tepeesprings/">August 2015 Tepee Springs Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150812canyoncreek/">August 2015 Canyon Creek Fire, OR</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150811kettle/">August 2015 Kettle Complex Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150810fisher/">August 2015 Fisher Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150810clearwater/">August 2015 Clearwater Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150810noble/">August 2015 Noble Fire, ID</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150801south/">August 2015 South Complex Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150731gasquet/">July 2015 Gasquet Complex Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150731rough/">July 2015 Rough Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150730river/">July 2015 River Complex Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150730route/">July 2015 Route Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150730fork/">July 2015 Fork Complex Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150730madriver/">July 2015 Mad River Complex Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150729rockyjerusalem/">July 2015 Rocky/Jerusalem Fires, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150722wragg/">July 2015 Wragg Fire, CA</a></li>
			    <li><a href="/hazards/postfire_debrisflow/2015/20150720bluecreek/">July 2015 Blue Creek Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150719washington/">July 2015 Washington Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150730stoutscreek/">July 2015 Stouts Creek Fire, OR</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150725willow/">July 2015 Willow Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150617lake/">June 2015 Lake Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2015/20150609saddle/">June 2015 Saddle Fire, CA</a></li>
						  </ul>
                        </div>
				</section>
                <section class="accordion accordion-closed" id="2014">
                	<h4 class="accordion-toggle">2014 Fires</h4>
                        <div class="accordion-content">
                            <ul>
                        	<li><a href="/hazards/postfire_debrisflow/2014/20141007dogrock/">October 2014 Dog Rock Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140920silverado/">September 2014 Silverado Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140913king/">September 2014 King Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140818way/">August 2014 Way Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140805upperfalls/">August 2014 Upper Falls Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140803littlebridge/">August 2014 Little Bridge Creek Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140728french/">July 2014 French Fire, CA</a></li>
        					<li><a href="/hazards/postfire_debrisflow/2014/20140726elportal/">July 2014 El Portal Fire, CA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140716duncan/">July 2014 Duncan Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140715chiwaukum/">July 2014 Chiwaukum Fire, WA</a></li>
                            <li><a href="/hazards/postfire_debrisflow/2014/20140714carlton/">July 2014 Carlton Fire, WA</a></li>
        					<li><a href="/hazards/postfire_debrisflow/2014/20140711watermen/">July 2014 Watermen Complex Fire, OR</a></li>
        					<li><a href="/hazards/postfire_debrisflow/2014/20140708mills/">July 2014 Mills Canyon Complex Fire, WA</a></li>
        					<li><a href="/hazards/postfire_debrisflow/2014/20140520slide/">May 2014 Slide Fire, AZ</a></li>
							<li><a href="/hazards/postfire_debrisflow/2014/20140511signal/">May 2014 Signal Fire, NM</a></li>
            				<li><a href="/hazards/postfire_debrisflow/2014/20140116colby/">January 2014 Colby Fire, CA</a></li>
						  </ul>
                        </div>
				</section>
        		<section class="accordion accordion-closed" id="2013">
                	<h4 class="accordion-toggle">2013 Fires</h4>
                        <div class="accordion-content">
                            <ul>
        				        <li><a href="/hazards/postfire_debrisflow/2013/20130817rim/">August 2013 Rim Fire, CA</a></li>
							<li><a href="/hazards/postfire_debrisflow/2013/20130816government/">August 2013 Government Flats Fire, OR</a></li>
							<li><a href="/hazards/postfire_debrisflow/2013/20130808elkpony/">August 2013 Elk/Pony Complex Fire, ID</a></li>
						  </ul>
                        </div>
                </section>
        </div>
	</div>

  <div class="column one-of-two">
		<h3>Contact Us</h3>
		<ul>
			<li>Dennis Staley (<a href="mailto:dstaley@usgs.gov">dstaley@usgs.gov</a>)</li>
			<li>Jason Kean (<a href="mailto:jwkean@usgs.gov">jwkean@usgs.gov</a>)</li>
		</ul>

		<h3>Related Links</h3>
		<ul>
			<li><a href="http://landslides.usgs.gov/research/wildfire/">Post-Wildfire Landslide Hazards</a></li>
			<li><a href="http://landslides.usgs.gov/hazards/warningsys.php">Early Warning System</a></li>
			<li><a href="http://landslides.usgs.gov/dysi/">Did You See It? Report a Landslide</a></li>
		</ul>

    <h3>GIS Service Information</h3>
    <p><a href="http://earthquake.usgs.gov/arcgis/rest/services/ls">Post-Fire Debris-Flow Hazards GIS Services</a></p>
    <p><a href="https://github.com/usgs/hazdev-gis/blob/master/documentation.md">Landslides GIS Server Documentation</a></p>
	</div>

</div>
