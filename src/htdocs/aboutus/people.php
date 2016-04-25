
<?php
// Author: Virgil Muntean
// Contact: Jonathan Godt,
// Last modified: 12/09/2015
  if (!isset($TEMPLATE)) {
  $TITLE = 'People';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>
<p>
  Scientists and engineers working in the Landslides Hazards Program conduct research into landslide processes and methods of assessing temporal and spatial aspects of landslide hazard, respond to emergencies and disasters, and produce scientific reports and other products for a broad-based user community. The program uses a combination of field and laboratory studies, computer modeling and statistical analyses to conduct its research. The staff has experience working with a wide range of landslide types and processes, from rock fall and debris flow to massive earth and debris slides. Although precipitation-induced landslides (including those in areas recently burned by wildfires) are the main focus for the program, the LHP works collaboratively with scientists from other USGS programs to investigate landslides related to earthquakes, volcanoes and coastal erosion.
</p>

<?php
	include_once "inc/class.person.inc.php";

	$rs = mysql_query("SELECT * FROM people WHERE hidden = 0 ORDER BY last_name ASC",$db);
	$program_coord = array();
	$program_team = array();
	$people = array();

	while($row = mysql_fetch_assoc($rs)) {

		//Create an array to store all the parameters that will be needed by the Person class
		$params = array("id" => $row['id'],
						"first_name" => stripslashes($row['first_name']),
						"last_name" => stripslashes($row['last_name']),
						"slug" => stripslashes(strtolower(stripslashes($row['first_name']) . stripslashes($row['last_name']))),
						"email" => stripslashes($row['email']),
						"position" => stripslashes($row['position']),
						"mailing_address" => stripslashes($row['mailing_address']),
						"expertise" => stripslashes($row['expertise']),
						"professional_page" => stripslashes($row['professional_page']));

		if($row['category'] == 1)
			$program_coord[] = $params;
		else
			$program_team[] = $params;

	}

	krsort($program_coord);  //Reverse sort to place assistant coordinator second

?>

<h2>&raquo; Program Coordinators</h2>
<div class="hr_spacer"><!-- hr --></div>

<?php
	//Print out information for each coordinator
	foreach($program_coord as $params) {

		$person = new Person($params);
		$person -> display();
		$people[] = $person;

		echo('<div class="hr_expand"><!-- hr --></div>');
	}
?>

<br />
<strong>&raquo; Quick Links</strong>
<div class="hr_spacer"><!-- hr --></div>

<?php
	echo('<div id="quicklinks"><ul class="mailingaddress">');

	//Print out anchor links to each person
	foreach($program_team as $params) {

		$first_name = $params["first_name"];
		$last_name = $params["last_name"];
		$slug = strtolower($first_name . $last_name);

		echo('<li><a href="#' . $slug . '" class="quicklink">' . $first_name . ' ' . $last_name . '</a></li>');
	}

	echo('</ul></div>');
?>

<br clear="left" />
<h2>&raquo; Team Members</h2>
<div class="hr_spacer"><!-- hr --></div>

<?php

	//Print out information for each team member
	foreach($program_team as $params) {

		$person = new Person($params);
		$person -> display();
		$people[] = $person;

		echo('<div class="hr_expand"><!-- hr --></div>');

	}

?>

<script type="text/javascript">
	$(document).ready(function() {
		<?php
			foreach($program_coord as $params) {
				echo("$(\"a." . $params["slug"] . "\").css(\"cursor\", \"pointer\");\n");
				echo("$(\"div." . $params["slug"] . "\").css(\"display\", \"none\");\n");
				echo("$(\"a." . $params["slug"] . "\").click(function() {\n");
					echo("if($(\"div." . $params["slug"] . ":hidden\", document.body).length > 0) {\n");
						echo("$(this).html(\"<img src='/images/list_open.gif' width='11' height='15' alt='Hide' />\");\n");
					echo("} else {\n");
						echo("$(this).html(\"<img src='/images/list_closed.gif' width='11' height='15' alt='Expand' />\");\n");
					echo("}\n");
					echo("$(\"div." . $params["slug"] . "\").slideToggle(\"normal\");\n");
				echo("});\n");
			}

			foreach($program_team as $params) {
				echo("$(\"a." . $params["slug"] . "\").css(\"cursor\", \"pointer\");\n");
				echo("$(\"div." . $params["slug"] . "\").css(\"display\", \"none\");\n");
				echo("$(\"a." . $params["slug"] . "\").click(function() {\n");
					echo("if($(\"div." . $params["slug"] . ":hidden\", document.body).length > 0) {\n");
						echo("$(this).html(\"<img src='/images/list_open.gif' width='11' height='15' alt='Hide' />\");\n");
					echo("} else {\n");
						echo("$(this).html(\"<img src='/images/list_closed.gif' width='11' height='15' alt='Expand' />\");\n");
					echo("}\n");
					echo("$(\"div." . $params["slug"] . "\").slideToggle(\"normal\");\n");
				echo("});\n");
			}
		?>
		// expand the person's information when a quicklink is clicked
		$("a.quicklink").click( function(e) {
			var name = $(this).attr('href');
			if( name.indexOf('#') == 0 ) {
				name = name.substring(1);
				$('a.' + name).click();
			}
		});

		// If the page was loaded with #personsname in the address,
		// expand that person's info
		var hashPos = window.location.href.indexOf('#');
		if( hashPos != -1 ) {
			var hash = window.location.href.substring(hashPos + 1);
			$('a.' + hash).click();
		}

	});
</script>
