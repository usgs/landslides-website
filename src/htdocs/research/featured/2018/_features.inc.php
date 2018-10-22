<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'https://landslides.usgs.gov/';
$LS_FEATURES->baseUrl = '';


$LS_FEATURES->items[] = array(
   'id' => '2018-10-22',
   'title' => 'Debris-Flow Forecasts Before Wildfires',
   'content' => 'USGS scientists have been pursuing a way to assess debris flow hazards before a fire occurs.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/before-fire-forecasts/',
   'modified' => strtotime('2018-10-22'),
   'thumbnail' => 'https://landslides.usgs.gov/research/featured/2018/before-fire-forecasts/images/car-in-house.jpg',
   'image' => 'https://landslides.usgs.gov/research/featured/2018/before-fire-forecasts/images/car-in-house.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-06-25',
   'title' => 'Near Realtime Maps of Possible Earthquake-Triggered Landslides',
   'content' => 'USGS scientists have been developing a system to quickly identify areas where landslides may have been triggered by a significant earthquake.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/realtime-ls/',
   'modified' => strtotime('2018-06-25'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/Nepal-Baisari.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/Nepal-Baisari.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-06-18',
   'title' => 'Mountain Permafrost, Climate Change, and Rock Avalanches in Glacier Bay National Park, Alaska',
   'content' => 'We usually hear about landslides and avalanches that are caused by large amounts of rainfall, the shaking from earthquakes, or a volcanic eruption, but we may be hearing more about avalanches caused by the (seemingly innocuous) melting of ice in the coming years.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/glacier-bay/',
   'modified' => strtotime('2018-06-18'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/glacierbay.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/glacierbay.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-06-11',
   'title' => 'Slow-Motion Landslides',
   'content' => 'Sluggishly-moving earthflows can help us learn what controls the starting and stopping of landslides.' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/clayey-ls/',
   'modified' => strtotime('2018-06-11'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/TwoTowers-sm.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/TwoTowers-sm.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2018-05-14',
   'title' => 'Landslides Can Cause More Landslides',
   'content' => 'The deadliest individual landslides in the U.S. recently were in places where there had previously been a landslide. Why do landslides happen in the same place instead of on nearby slopes that appear to be just as likely, if not more likely, to slide?' ,
   'link' => 'https://landslides.usgs.gov/research/featured/2018/landslide-disruption/',
   'modified' => strtotime('2018-05-14'),
   'thumbnail' => 'https://landslides.usgs.gov/images-featured/more-landslides.jpg',
   'image' => 'https://landslides.usgs.gov/images-featured/more-landslides.jpg'
 );

 $LS_FEATURES->items[] = array(
    'id' => '2018-01-29',
    'title' => 'USGS Geologists Study Debris-Flow Aftermath in Montecito',
    'content' => 'Days after fatal debris flows devastated Southern California’s Montecito community,  a team of U.S. Geological Survey geologists joined county, state, and federal partners to survey and  evaluate the aftermath.' ,
    'link' => 'https://www.usgs.gov/news/usgs-geologists-join-efforts-montecito-assess-debris-flow-aftermath',
    'modified' => strtotime('2018-01-29'),
    'thumbnail' => 'https://landslides.usgs.gov/images-featured/ScientistsUnite_Montecito.jpg',
    'image' => 'https://landslides.usgs.gov/images-featured/ScientistsUnite_Montecito.jpg'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2018-01-18',
    'title' => 'Rattlesnake Hills Landslide Information',
    'content' => 'What is known and what is being done, from the Washington Department of Natural Resources.' ,
    'link' => 'https://www.dnr.wa.gov/rattlesnake-hills-landslide',
    'modified' => strtotime('2018-01-18'),
    'thumbnail' => 'https://landslides.usgs.gov/images-featured/RattlesnakeHills.png',
    'image' => 'https://landslides.usgs.gov/images-featured/RattlesnakeHills.png'
  );
