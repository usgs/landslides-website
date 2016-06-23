<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified:  05/09/2016, Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Seattle Area, Washington';
      $NAVIGATION  = true;
      $HEAD = '
        <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
        <link rel="stylesheet" href="/monitoring/index.css"/>
      ';
      $FOOT = '
      <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
      <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
      <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
      <script src="/monitoring/stations.js"></script>
      ';
      include  'template.inc.php';
      }
?>

<div class="row">
  <!-- Description and Contacts -->
  <div class="column two-of-three">

    <h2>Real-time Data</h2>

    <h3>National Weather Service:</h3>
    <ul>
      <li><a href="rtdmonitoring.php#nws-cum">Cumulative Precipitation Threshold</a></li>
      <li><a href="rtdmonitoring.php#nws-int">Rainfall Intensity/Duration Threshold</a></li>
      <li><a href="rtdmonitoring.php#nws-wet">Antecedent Wetness Index (AWI)</a></li>
      <li><a href="rtdmonitoring.php#nws-forecast">Forecast Relative to Threshold</a></li>
    </ul>
    <h3>Bluff location:</h3>
    <ul>
      <li><a href="rtdmonitoring.php#rain">Rainfall</a></li>
      <li><a href="rtdmonitoring.php#thresh">Rainfall Relative to Threshold</a></li>
      <li><a href="rtdmonitoring.php#soil">Soil Water Content</a></li>
      <li><a href="rtdmonitoring.php#suc"> Soil Suction</a></li>
      <li><a href="rtdmonitoring.php#water">Water Levels</a></li>
      <li><a href="rtdmonitoring.php#battery">Battery</a></li>
    </ul>

    <p>
      Data is <strong>updated every 60 minutes</strong>. Updates may be interrupted occasionally by instrument, computer, or network malfunctions.
    </p>
    <hr/>

    <p>
      Monitoring at this site is for researching rainfall thresholds for forecasting landslide potential. Shallow landslides are common on coastal bluffs overlooking Puget Sound.  Hundreds of landslides occurred on the bluffs in late December 1996 and early January 1997 as heavy rainfall accompanied by abrupt warming caused rapid melting of recent heavy snow.  Smaller numbers of landslides occur every few years during extended rainy periods and intense storms.
    </p>

    <h2>Cumulative Precipitation Threshold</h2>

    <figure class="left">
      <a href="images/cum_thresh.jpg"><img src="images/cum_thresh_sm.jpg" alt="Cumulative Precipitation Threshold Graph" /></a>
      <figcaption>
        The Cumulative Precipitation Threshold is (3-day Precipitation)=3.5 - 0.67*(15-day Precipitation).
      </ficaption>
    </figure>

    <p>
      The cumulative precipitation threshold for the occurrence of landslides in the Seattle area is based on an analysis of historical landslide and precipitation data from the period 1933 - 1997. The threshold was visually identified after plotting antecedent 3-day and prior 15-day cumulative precipitation amounts associated with landslides that were part of events with 3 or more landslides in a 3-day period. Between 3.5 and 5.2 inches total precipitation during any 18-day period (last 3 days plus the previous 15 days) are required to exceed the cumulative threshold. It is interpreted as a lower-bound threshold below which the specified level of landslide activity does not occur or occurs only rarely. Recent analysis has shown that the probability of landslides occurring on a day when the cumulative threshold has been exceeded is roughly 10%. See <a href="http://pubs.usgs.gov/of/2000/ofr-00-0469/" >USGS Open-File Report 00-469</a>, <a href="http://pubs.usgs.gov/of/2003/ofr-03-463/" >USGS Open-File Report 03-463</a>, and <a href="http://pubs.usgs.gov/of/2006/1064/" >USGS Open-File Report 06-1064</a> for details concerning the identification of the threshold and its performance.
    </p>

    <h2>Rainfall Intensity-Duration Threshold</h2>

    <figure class="right">
      <a href="images/idthresh.jpg"><img src="images/idthresh_sm.jpg" alt="Graph of Intensity-Duration Threshold" /></a>
      <figcaption>
        The Intensity-Duration Threshold is Intensity=3.257(Duration)**-1.13.
      </ficaption>
    </figure>

    <p>
      The rainfall intensity-duration threshold for the occurrence of landslides in the Seattle area is also based on an analysis of historical landslide and precipitation data from the period 1933 - 1997. This threshold was developed to identify conditions when abundant landslides are likely. Recent analysis has shown that the probability of landslides occurring on a day when the intensity-duration threshold has been exceeded is between 30% and 70%, depending on antecedent soil wetness and size of the area affected by threshold exceeding rainfall. See <a href="http://pubs.usgs.gov/of/2006/1064/" >USGS Open-File Report 06-1064</a> for details concerning the identification of the threshold and its performance. <a href="http://pubs.usgs.gov/fs/2007/3005/" >USGS Fact Sheet 2007-3005</a> also has more information about the rainfall thresholds and their application to forecasting landslides.
    </p>
  </div>

  <div class="column one-of-three">

    <h2>Monitoring Status</h2>
    <p class="status-active" align="center">ACTIVE</p>

    <h2>Location Map</h2>
    <div id="map">
    </div>
    <h2>Contacts</h2>
    <ul class="no-style">
      <li>
        <p>
          <strong>Rex Baum</strong><br />
          U.S. Geological Survey <br />
          Central Region Geologic Hazards Team <br />
          Box 25046, DFC <br />
          Mail Stop 966 <br />
          Denver CO 80225<br />
          <a href="mailto:baum@usgs.gov">baum@usgs.gov</a>
        </p>
      </li>
    </ul>
    <h2>Cooperators</h2>
    <ul>
      <li>The National Weather Service and the City of Seattle, Washington</li>
    </ul>

    <h2>For More Information</h2>
    <li>
      <a href="/state_local/seattle.php">Seattle's Project Impact</a>
    </li>
  </div>
</div>

<hr/>
<section class="photos">
  <figure>
    <a href="images/perkins97_wo-lg.jpg"><img src="images/perkins97_wo-sm.jpg"/></a>
  </figure>
  <figure>
    <a href="images/Everettslide5.jpg"><img src="images/Everettslide5_sm.jpg"/></a>
  </figure>
  <figure>
    <a href="images/fig1.jpg"><img src="images/fig1_sm.jpg"/></a>
  </figure>
</section>
