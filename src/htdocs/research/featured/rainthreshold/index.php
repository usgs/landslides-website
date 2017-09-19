<?php
  //  Author:  Lisa Wald
  //  Contact:  Jonathan Godt
  if  (!isset($TEMPLATE))  {
    $TITLE  =  'When Rainstorms Trigger Shallow Landslides';
    $NAVIGATION  = true;
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    include  'template.inc.php';
  }
?>

<figure class="right">
  <img src="images/whatcomcojan2009.jpg">
  <figcaption>
    Trees and debris from a landslide in Whatcom County, Washington in 2009.
  </figcaption>
</figure>
<p>
  An increasing population, along with the roads, buildings, homes, and other infrastructure that accompany it, have expanded into many areas where landslides are possible.  As a result, monetary losses and fatalities from landslides are becoming more common, and the need for landslide early warning systems has become more urgent.  <a href="https://pubs.usgs.gov/fs/2004/3072/pdf/fs2004-3072.pdf">Landslides in their various forms</a> are caused by a variety of different factors, and most landslides are not predictable.  However, scientists have a chance at predicting landslides induced by rainfall. When a prediction and a warning system are in place, and the potentially affected public has been educated about what actions to take, lives can be saved.
</p>
<h2>What does it take to establish an effective landslide warning system?</h2>

<p>You need:</p>
<ol>
  <li>
    information about rainfall and soil moisture conditions likely to trigger a landslide,
  </li>
  <li>information about where landslides are likely to occur,</li>
  <li>
    a real-time monitoring system collecting information on rainfall, soil moisture, and groundwater conditions,
  </li>
  <li>
    a way to quickly communicate to the potentially-affected people if a warning needs to be issued, and
  </li>
  <li>information about what to do if a warning is issued.</li>
</ol>

<figure class="left threshold">
  <img src="images/threshold.gif">
  <figcaption>
    A rainfall threshold graph showing different levels of potential hazards.
  </figcaption>
</figure>

<p>
  Each of these components presents challenges, but perhaps the most difficult piece is #1. What is known about the behavior of particular landslide-prone areas across the U.S. during a rainstorm varies, and a huge amount of effort is required to gather data sufficient to support landslide alerting.  Records of historical landslides and the associated rainfall data need to be compiled, or a multi-year study of an area must be done to gather data.  In many cases historical information doesn’t exist; it’s simply not possible to observe and collect data on every region that may have a landslide. But landslide scientists have figured out a way to estimate the behavior of a landside-prone area during a rainstorm without slogging around on the steep slippery slopes year after year.  This method requires using instruments to collect observations of rainfall, soil moisture, and groundwater conditions in landslide-prone hillsides.
</p>

<h2>Rain on Wet Soils</h2>

<p class="sidebar">
  "Statistically" means that they were able to plug all the data into an equation that successfully and consistently distinguished conditons of high probability of shallow landslides compared to conditions of low probability.
</p>
<p>
  In the early 1970’s a USGS researcher noticed that landslides in southern California occurred in moist soil during times of heavy rainfall.  Later studies by others refined the idea that it had to rain hard enough (intensity) and long enough (duration) to cause landslides.  This led to the development of <strong>rainfall intensity-duration thresholds</strong>, where intensity describes how much rain falls in a unit of time.  However, the intensity and duration of rainfall isn’t always sufficient to identify storms that trigger landslides.
</p>
<p>
  An in-depth study of Seattle area landslides enabled landslide scientists to <strong>statistically (see sidebar)</strong> determine the possibility of widespread shallow landslides during a rainstorm from knowing:
</p>
<ol>
  <li>the amount of rainfall in the weeks before the storm,</li>
  <li>
    an estimate of the amount of moisture that had evaporated from the ground and transpired (absorbed by plants and then evaporated) in those weeks,
  </li>
  <li>
    an estimate of the amount of moisture that had drained deeper underground,
  </li>
  <li>
    and the observation of rainfall amount with time as the storm was occurring.
  </li>
</ol>

<figure>
  <img src="images/1-2-3.gif">
  <figcaption>
    The three components needed to determine an Antecedent Wetness Index: previous rainfall, amount of evapotranspiration, and amount of subsurface drainage.
  </figcaption>
</figure>

<figure class="left intensity">
  <img src="images/intensity.gif">
  <figcaption>
    The storm rainfall data is used to determine where the measurement falls on the precipitation threshold graph (safety, watch, or danger).
  </figcaption>
</figure>

<p>
  In this approach, data about the rainfall, evaporation, and drainage in the weeks before the storm (above) are fed into a simple model to estimate the moisture in the ground. This model, called the <a href="/monitoring/seattle/rtdmonitoring.php#nws-wet">Antecedent Wetness Index</a>, helps identify times when the ground is wet enough to expect landslides, with additional rainfall. A <a href="https://landslides.usgs.gov/monitoring/seattle/images/idthresh.jpg">precipitation threshold</a> (red, orange, and green graph above) is determined from the storm rainfall data (left), and is defined as the intensity level for a given duration at which a landslide in the area may be triggered. This method can be used relatively inexpensively in other areas where landslides pose a risk. Even so, historical rainfall and landslide data are needed to calibrate the threshold for each new area. In recent years scientists have calibrated landslide thresholds for various areas across the country and around the world.
</p>
<p>
  One factor that influences the triggering of landslides, but isn’t actually measured in this method, is the amount of moisture in the ground at differing depths. Having actual measurements of soil-moisture saturation and pore pressures would help scientists pin down the timing of potential landslides better, and it’s the focus of <a href="/research/rtmonitoring/">current research </a> in several landslide-prone parts of the country.
</p>

<h2>Rain on Dry Soils</h2>
<p>
  Monitoring rainfall and soil moisture conditions has also shown that some types of landslides can occur even if rain falls on dry soils. For example in areas where wildfire has destroyed vegetation and heated the ground, soil moisture and the amount of rainfall before the storm doesn’t matter a great deal, and the most important factor is the intensity or the rate at which the rain falls.
</p>

<iframe width="320" height="180" style="float:left; margin-right:10px;" src="https://www.youtube.com/embed/FOguklpns7c?list=PLIxlFowAfHBC8QbmJLBU7alxvy5z1ZZ1B" frameborder="0" allowfullscreen></iframe>

<p>
  Debris flows are fast-moving landslides with the consistency of wet concrete and are particularly dangerous because they travel rapidly. Because wildfire removes vegetation and reduces the ability of soils to absorb water, increasing runoff and erosion, flash floods and debris flows can occur as a result of even modest rainstorms. Since 2005 the <a href="https://www.wrh.noaa.gov/lox/main.php?suite=hydrology&page=debris-flow_project">USGS has cooperated with the National Weather Service to issue debris-flow warnings for recently burned areas in Southern California</a>.
</p>

<figure>
  <img src="images/postfire-debrisflow-haz.jpg">
  <figcaption>
    A <a href="/hazards/postfire_debrisflow/">post-fire debris-flow hazard map</a> that was created following a wildfire on September 1, 2017 in the La Tuna area in the Verdugo Mountains of southern California.
  </figcaption>
</figure>

<h2>For More Information</h2>
<ul>
  <li>
    <a href="https://landslides.usgs.gov/research/rtmonitoring/">Real-time Monitoring for Potential Landslides</a>
  </li>
  <li>
    <a href="https://www.wrh.noaa.gov/lox/hydrology/files/DebrisFlowSurvivalGuide.pdf">Post Wildfire Flash Flood and Debris Flow Guide</a> - National Weather Service
  </li>
  <li><a href="/learn/prepare.php">Landslide Preparedness</a></li>
</ul>
