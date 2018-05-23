<?php
// Author: Lisa Wald
// Contact: Kate Allstadt
  if (!isset($TEMPLATE)) {
    $TITLE = 'Near Realtime Maps of Possible Earthquake-Triggered Landslides';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    include 'template.inc.php';
  }
?>

<p>
  <a href="realtime-landslides.pdf">
    <i class="material-icons">save_alt</i> Download PDF
  </a>
</p>

<div class='row'>
  <div class='column three-of-five'>
    <p>
      When we think of earthquake damage, the first images that come to mind are collapsed buildings and bridges, or cracked roads and chimneys.  But landslides triggered by the shaking have caused the majority of damage or loss of life in some earthquakes. In 1964, the Great Alaska earthquake caused most of the neighborhood of Turnagain Heights to slide down the bluff toward the ocean.  More recently, the magnitude 7.8 Nepal earthquake in April 2015 triggered thousands of landslides, blocking critical roads and trails to villages, and causing hundreds of fatalities. Some slides blocked rivers, causing local flooding and a threat to downstream villages should the landslide dam suddenly break.  Much of the area shaken by the earthquake was remote and mountainous and weather was poor after the earthquake, so it took weeks to fully assess where landslides had occurred, how remote villages were affected, and where resources needed to be deployed.
    </p>
    <p>
      The magnitude 7.8 earthquake on the South Island of New Zealand (NZ) in November of 2016 triggered a staggering 10,000+ landslides in a 10,000 square kilometer area. The landslides blocked the main transportation route to the north part of the South Island, completely cut off the town of Kaikoura, and partially or fully blocked many other secondary roads in the region. New Zealand government agencies were able to quickly conduct aerial surveys that roughly identified the most affected areas within 5 days, but these were ideal conditions. In poor weather or in many more remote parts of the world, like Nepal, determining where landslides occurred and thus where a response effort is needed, can take much longer.
    </p>
    <p>
      The effects of landslides can result in long-lasting hazards and problems that pose a risk to people and structures. Having a map showing where landslides are most likely to have occurred as quickly as possible after an earthquake is important for the coordinating response efforts and for mitigating the risks. The Earthquake Hazards Program currently reports basic earthquake information in near-realtime, as well as estimates of probable damage and fatalities from earthquake shaking for significant events usually within an hour. The goal now is to add information about potential landslides that may have been triggered by an earthquake within the first few hours.
    </p>
  </div>

  <div class='column two-of-five'>
    <figure class='alaska'>
    <img src="images/1964_03_28_022_small.gif" alt=""/>
    <figcaption>
      The Turnagain Heights landslide in Anchorage, occurred along a steep bluff fronting Knik Arm of Cook Inlet. Its length, which is parallel to the bluff, was about 1.5 miles; its width was about .25 to .50 miles. This landslide reduced to rubble many of the finer homes of the city.
    </figcaption>
    </figure>

    <figure class='nepal'>
    <img src="images/Nepal-Baisari.jpg" alt=""/>
    <figcaption>
      The rock slide along the Kali Gandaki River in Nepal on May 24, 2015 that buried the village of Baisari and blocked the flow of the river for 16 hours nearly one month following the main earthquake shock.
    </figcaption>
    </figure>
  </div>

</div>

<figure class='left boulder'>
<img src="images/Kate-Francis-boulder.jpg" alt=""/>
<figcaption>
  Kate Allstadt and Francis Rengers in front of the lake dammed by the Hapuku landslide, which was triggered by the Kaikoura earthquake. USGS photo by Randy Jibson.
</figcaption>
</figure>

<p>
  USGS scientists have been developing a system to quickly identify areas where landslides may have been triggered by a significant earthquake, but the system needs to be tested and refined so that the estimates of affected areas are as close to reality as possible.  They chose the New Zealand earthquake as a test case for their system to evaluate how well it is working and to figure out what is still needed to make it better.  They worked with New Zealand scientists to compare the estimated impact levels and the map of potential landslides with the actual data collected after the New Zealand earthquake.
</p>
<p>
  They tried 3 different models that produce maps of landslide likelihood based on shaking estimates provided by the USGS ShakeMap as the input.  The ShakeMap is a map of the distribution of shaking as measured by the seismic instruments and felt reports in the area of the earthquake, and it is currently one of the products USGS reports for significant earthquakes. The ShakeMap is posted as soon as possible after an earthquake, but as additional data are collected the map is updated, and sometimes it can change quite a bit. The earliest version of the ShakeMap uses a point where the earthquake is located and evolves to use the geometry of the actual fault that slipped as soon as that information is available. The scientists wanted to know how good the landslide estimates were using the first ShakeMap, and how it changed as the ShakeMap was updated. Was the landslide map that used the early ShakeMap data good enough to be helpful for identifying the most impacted areas?
</p>

<figure class='right'>
<img src="images/map-evolution.jpg" alt=""/>
<figcaption>
  (a–d) Evolution of landslide map with (e–h) four major updates to the USGS ShakeMap, in which the ShakeMap version and release time relative to the earthquake time are labeled below each map; the star indicates the epicenter; triangles and circles show seismic and “Did You Feel It?” data; and polygons show fault segments used in each version of the ShakeMap.
</figcaption>
</figure>

<p>
  They found that the system was very sensitive to the details of the ShakeMap, meaning that a more accurate ShakeMap produces a more accurate map of the likely landslides.  And all models examined predicted that the hazard level, or the landslide impact overall was higher than what was actually observed in the NZ earthquake.  However, all the models were successful at roughly identifying the areas of highest landslide hazard when the extent of the earthquake rupture was added to the initial point-based ShakeMap, usually within a few hours after the earthquake.  Since the purpose of the system is to provide information to help guide the response to an earthquake in the hours and days before what actually occurred is known, this is a positive result.
</p>
<p>
  They will continue to test and improve the system in hopes that it will provide useful information for future earthquake-triggered landslide response and mitigation efforts.
</p>
<p>- written by Lisa Wald, U.S. Geological Survey</p>

<h2>For More Information</h2>
<ul>
  <li>
    Kate E. Allstadt, Randall W. Jibson, Eric M. Thompson, Chris I. Massey, David J. Wald, Jonathan W. Godt, Francis K. Rengers;
    <a href="https://pubs.geoscienceworld.org/ssa/bssa/article/529880/improving-near-real-time-coseismic-landslide">Improving Near‐Real‐Time Coseismic Landslide Models: Lessons Learned from the 2016 Kaikoura, New Zealand, Earthquake.</a> Bulletin of the Seismological Society of America doi: https://doi.org/10.1785/0120170297
  </li>
  <li>
    <a href="https://blogs.agu.org/landslideblog/2017/09/14/seafront-landslide/">Landslides from the Kaikoura earthquake part 1: the Seafront landslide</a> - AGU Landslide Blog
  </li>
  <li>
    <a href="https://blogs.agu.org/landslideblog/2017/09/16/hapuku-landslide/">Landslides from the Kaikoura Earthquake part 2: the Hapuku landslide</a> - AGU Landslide Blog
  </li>
</ul>

<h2>The Scientist Behind the Science</h2>

<figure class='left' style="width: 300px;">
<img src="images/Kate-Allstadt.jpg" alt=""/>
<figcaption>
  Kate Allstadt.
</figcaption>
</figure>

<p>
  <a href="https://www.usgs.gov/staff-profiles/kate-allstadt">Kate Allstadt</a> has worked for the USGS in Golden, CO since 2015, where she focuses on multidisciplinary applications of geophysical techniques to landslide and earthquake hazards. In her free time, Kate balances the mental demands of her work with hobbies involving manual labor such as woodworking, DIY home improvement projects, and digging drainage ditches.
</p>
