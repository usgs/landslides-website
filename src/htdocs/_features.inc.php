<?php
include_once '..' . DIRECTORY_SEPARATOR .
    'lib' . DIRECTORY_SEPARATOR .
    'Features.class.php';


date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'https://landslides.usgs.gov/';
$LS_FEATURES->baseUrl = '';

/**
 * Items at top of list are featured
 *
 * Each Item is an array with the following keys:
 *   id {String}
 *      unique identifier without spaces.
 *      for example:
 *         'induced'
 *
 *   title {String|HTML}
 *         item title.
 *
 *   content {String|HTML}
 *           item summary.
 *
 *   link {String}
 *        relative item link.
 *
 *   modified {Integer}
 *            unix epoch timestamp.
 *            for example:
 *                filemtime('induced/index.php')
 *                strtotime('2014-10-01')
 *
 *   thumbnail {String}
 *             relative path to thumbnail image.
 *             Used by items in atom format.
 *
 *   image {String}
 *         relative path to full size image.
 *         Only used by "featured" items in html format.
 *
 *   tags {Array<String>} optional.
 *        Array of categories for item.
 *        Only used by atom format.
 *
 *   publish {Integer} optional.
 *           a time when item should be "published".
 *           if no publish time is specified, or the time is in the past, the item will be shown.
 *           for example:
 *               strtotime('2014-10-31')
 *
 */


 /*<h4></h4>
 <img style='float:left; padding-right: 2em;' src=""/>
*/

$LS_FEATURES->items[] = array(
   'id' => '2017-01-05',
   'title' => 'Predicting Postfire Debris Flows Saves Lives',
   'content' => 'How predicting postfire debris flows saves lives.' ,
   'link' => 'https://www.usgs.gov/center-news/predicting-postfire-debris-flows-saves-lives',
   'modified' => strtotime('2017-01-05'),
   'thumbnail' => '/research/featured/images/debrisflow-sm.jpg',
   'image' => '/research/featured/images/debrisflow-sm.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2017-01-01',
   'title' => 'Rainfall and Landslides in California',
   'content' => '
                    <a href="research/ca-rainfall/ncal.php">Northern and Central California</a>
                    <br/>
                    <a href="research/ca-rainfall/scal.php">Southern California</a>
                  ' ,
   'link' => '',
   'modified' => strtotime('2017-01-01'),
   'thumbnail' => '/research/featured/images/bluebirdcyn2005-sm.jpg',
   'image' => '/research/featured/images/bluebirdcyn2005-sm.jpg'
 );

 $LS_FEATURES->items[] = array(
    'id' => '2015-03-21',
    'title' => 'Down to Earth With: The USGS Landslide Response Team',
    'content' => 'Interview by EARTH magazine of members of the USGS Landslide Reponse Team' ,
    'link' => 'https://www.earthmagazine.org/article/down-earth-usgs-landslide-response-team',
    'modified' => strtotime('2015-03-21'),
    'thumbnail' => '/research/featured/images/responseteam-sm.jpg',
    'image' => '/research/featured/images/responseteam-sm.jpg'
  );

$LS_FEATURES->items[] = array(
  'id' => '2014-05-25',
  'title' => 'Reconstruction of an Avalanche',
  'content' => 'The West Salt Creek Rock Avalanche, Colorado, May 25, 2014.' ,
  'link' => 'https://earthquake.usgs.gov/research/featured/2015-westsaltcreek/',
  'modified' => strtotime('2014-05-25'),
  'thumbnail' => '/research/featured/images/westsaltcreek-sm.jpg',
  'image' => '/research/featured/images/westsaltcreek-sm.jpg'
);


?>
