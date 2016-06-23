<?php
  //	Author:	Lisa Wald
  //	Contact:	Jonathan Godt
  //	Last	modified:	06/22/2016, Lisa Wald
  if	(!isset($TEMPLATE))	{
    $TITLE	=	'U.S. Highway 50, California - Current Landslide Status';
    $NAVIGATION	= true;
    $CONTACT = 'mreid@usgs.gov';
    include	'template.inc.php';
  }

  echo '<a id="startcontentyear50"></a>';
  echo file_get_contents(
      'http://landslides.usgs.gov/realtime/hwy50/current_status.htm');
?>
