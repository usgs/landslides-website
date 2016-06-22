<?php
  //	Author:	Lisa Wald
  //	Contact:	Jonathan Godt,
  //	Last	modified:	06/20/2016, Lisa Wald
  if	(!isset($TEMPLATE))	{
  $TITLE	=	'U.S. Highway 50, California - Current Landslide Status';
  $NAVIGATION	= true;
	$HEAD = '
		<a id="startcontentyear50"></a>
	';
  include	'template.inc.php';

  //include "current_status.htm";
  // - old include statement: include '../../realtime/hwy50/current_status.htm';
  include 'current_status.htm';

?>

<h2>Contact Information</h2>
<p>
  If you have questions or comments please send email to:
  <a href="mailto:mreid@usgs.gov">mreid@usgs.gov</a>
</p>
