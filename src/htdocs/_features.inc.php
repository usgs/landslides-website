<?php

include_once '..' . DIRECTORY_SEPARATOR .
    'lib' . DIRECTORY_SEPARATOR .
    'Features.class.php';


date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'http://landslides.usgs.gov/';
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


$LS_FEATURES->items[] = array(
  'id' => '',
  'title' => '',
  'content' => '' .
  'link' => '',
  'modified' => 0,
  'image' => ''
);
