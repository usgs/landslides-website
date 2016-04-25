<?php
      //	Author:	Tiffany Kalin
      //	Contact: Jonathan Godt	,
      //	Last	modified: 03/07/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Landslide Overview Map of the Conterminous United States Legend';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<div>
<a href="index.php">&laquo; Back to Landslide Overview Map of the Conterminous United States</a>
</div>

<table>
	<thead>
		<tr>
			<th colspan="2">Landslide Incidence</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="3"><img src="images/legendtop.gif" height="110" alt="National Map - Landslide Incidence legend"/></td>
			<td height="40" align="left">Low (less than 1.5% of area involved)</td>
		</tr>
		<tr>
			<td height="34" align="left">Moderate (1.5%-15% of area involved)</td>
		</tr>
		<tr>
			<td align="left">High (greater than 15% of area involved)</td>
		</tr>
	</tbody>
</table>

<table>
	<thead>
		<tr>
			<th colspan="2">Landslide Susceptibility/Incidence</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="3"><img src="images/legendbot.gif" alt="National Map - Landslide Susceptibility/Incidence legend"/></td>
			<td height="40" align="left">Moderate susceptibility/low incidence</td>
		</tr>
		<tr>
			<td height="34" align="left">High susceptibility/low incidence</td>
		</tr>
		<tr>
			<td align="left">High susceptibility/moderate incidence</td>
		</tr>
	</tbody>
</table>

<p>Susceptibility not indicated where same or lower than incidence. Susceptibility to landsliding was defined as the probable degree of response of [the areal] rocks and soils to natural or artificial cutting or loading of slopes, or to anomalously high precipitation. High, moderate, and low susceptibility are delimited by the same percentages used in classifying the incidence of landsliding. Some generalization was necessary at this scale, and several small areas of high incidence and susceptibility were slightly exaggerated.</p>
