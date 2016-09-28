<?php
      //	Author:	Tiffany Kalin
      //	Contact:	Jonathan Godt,
      //	Last	modified:	03/22/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Recent Publications';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<!--
	$TITLE = "";
	$SCRIPTS = "/template/js/jquery-1.4.2.min.js";
	$WIDGETS = 'jquery';
	include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
	include_once getTemplateFile('static/dbconnect.inc.php');
	include_once "publications/functions.inc.php";
?>-->

<p>This list features recent Landslide Program publications, searchable by Landslide Program authors.  Open File Reports and Non-USGS
publications are listed for recent years only, but the list includes all Landslide USGS Fact Sheets.<br />
For a more comprehensive, searchable list of publications, please see the USGS Main Publication search page: <a href="http://pubs.er.usgs.gov">http://pubs.er.usgs.gov</a></p>

<div class="hr_noclear"><!-- hr --></div>
<form method="get" action="<?php echo(htmlentities($_SERVER['PHP_SELF'])); ?>" name="list_form">
<div class="push_right">

<?php
	$people_id = intval(param('people_id'));
	$project_id = intval(param('project_id'));

	//People select box
	$query_people = 'SELECT p.id, p.first_name, p.last_name, r.people_id
					 FROM people p, publications_people r
					 WHERE p.id = r.people_id
					 GROUP BY p.id
					 ORDER BY last_name ASC';
	$rs_people = mysql_query($query_people, $db);

	//Project select box
	if ($people_id > 0) {

		$query_project = 'SELECT r.id, r.name, j.people_id, p.project_id, p.publication_id, b.publication_id, b.people_id
						  FROM projects r, people_projects j, projects_publications p, publications_people b
						  WHERE j.people_id = ' . $people_id .'
						  AND j.project_id = r.id
						  AND r.id = p.project_id
						  AND p.publication_id = b.publication_id
						  AND j.people_id = b.people_id
						  AND r.id NOT IN(11, 12)
						  GROUP BY r.id
						  ORDER BY name ASC';

	} else
		$query_project = 'SELECT id, name FROM projects WHERE id NOT IN (11, 12) ORDER BY name ASC';

	$rs_project = mysql_query($query_project, $db);

	// Progressive enhancement: users without javascript will get a list of
	// links to each person's projects. Users with javascript will get a
	// jump menu that contains each person, along with a jump menu for each
	// person's projects

	print '<div id="author_list">';
	print '<h4>Publications by author</h4>';
	print '<ul>';
	while ($row_people = mysql_fetch_array($rs_people)) {
		print '<li>
			<a href="?people_id='.$row_people['id'].'">'.
			$row_people['last_name'].', '.$row_people['first_name'].'
			</a></li>';
	}
	print '</ul>';
	print '</div>';
	/*
	$people_select = '<label for="people_id">List by Person: </label><select name="people_id" id="people_id" onchange="list_by_person();"><option value="">All People</option>';
	while ($row_people = mysql_fetch_array($rs_people)) {
		$people_select .= '<option value="' . $row_people['id'] . '">' . $row_people['last_name'] . ', ' . $row_people['first_name'] . '</option>';
	}
	$people_select .= '</select>';
	$people_select = str_replace('value="' . $people_id . '"', 'value="' . $people_id . '" selected="selected"', $people_select);


	$project_select = '<label for="project_id">List by Project:</label> <select name="project_id" id="project_id" onchange="list_by_project(' . $people_id . ');"';
	if ($people_id == 0) $project_select .= ' disabled="true"';
	$project_select .= '><option value="">All Projects</option>';
	while ($row_project = mysql_fetch_array($rs_project)) {
		$project_select .= '<option value="' . $row_project['id'] . '">' . $row_project['name'] . '</option>';
	}
	$project_select .= '</select>';
	$project_select = str_replace('value="' . $project_id . '"', 'value="' . $project_id . '" selected="selected"', $project_select);

	echo($people_select);
	echo('<input type="submit" value="&raquo;" />');
	echo('<div class="hr_form"><!-- hr --></div>');
	echo($project_select);
	echo('<input type="submit" value="&raquo;" />');

	*/
?>

</div>
</form>
<div class="hr_noclear"><!-- hr --></div>

<div id="publications">
<?php
	print_publications( $people_id, $project_id );
	/*
	$publications_types = array();
	$publications = array();

	$rs = mysql_query('SELECT id, title FROM publications_types',$db);

	//Put the different publication types into an array
	while($row = mysql_fetch_assoc($rs)) {

		$publications_types[] = array("id" => $row["id"],
									  "title" => stripslashes($row["title"]),
									  "slug" => strtolower(str_replace(" ","",str_replace("-","",stripslashes($row["title"])))));
	}

	$query_links = 'SELECT p.id,
						   p.type,
						   p.year,
						   p.link,
						   p.link_title,
						   p.alt_link,
						   p.alt_link_title,
						   p.description';

	if ($people_id > 0) $query_links .= ', r.publication_id, r.people_id';
	if ($project_id > 0) $query_links .= ', j.publication_id, j.project_id';

	$query_links .= ' FROM publications p';

	if ($people_id > 0) $query_links .= ', publications_people r';
	if ($project_id > 0) $query_links .= ', projects_publications j';

	if ($people_id > 0 || $project_id > 0) {
		$query_links .= ' WHERE';

		if ($people_id > 0) $query_links .= ' r.people_id = '.$people_id.' AND p.id = r.publication_id';
		if ($people_id > 0 && $project_id > 0) $query_links .= ' AND';
		if ($project_id > 0) $query_links .= ' j.project_id = '.$project_id.' AND p.id = j.publication_id';
	}

	$query_links .= ' ORDER BY year DESC, link_title DESC';

	//Put all the publications into an array
	$rs_links = mysql_query($query_links ,$db);

	while($row_links = mysql_fetch_assoc($rs_links)) {

		$publications[] = array("type" => $row_links["type"],
								"year" => $row_links["year"],
								"link" => stripslashes($row_links["link"]),
								"link_title" => stripslashes($row_links["link_title"]),
								"alt_link" => stripslashes($row_links["alt_link"]),
								"alt_link_title" => stripslashes($row_links["alt_link_title"]),
								"description" => stripslashes($row_links["description"]));
	}

	if (count($publications_types) == 0) {
		echo("<br />No publications were found.");
	}

	$total_count = 0;

	//Print out the anchor links
	foreach ($publications_types as $anchor) {
		$count = 0;

		foreach($publications as $anchor_count) {
			if($anchor_count["type"] == $anchor["id"]) {
				$count++;
				$total_count++;
				if ($total_count == 1) echo('<ul>');
			}
		}

		if ($count > 0) echo('<li><a href="#' . $anchor["slug"] . '">' . $anchor["title"] . '</a></li>');
	}

	if ($total_count == 0) echo('<ul class="nobullet"><li><br />No publications were found.</li>');
?>
</ul>

<div class="hr_noclear"><!-- hr --></div>

<?php
	//Loop through publication types
	foreach($publications_types as $type_info) {

		$publications_list = '<span id="' . $type_info["slug"] . '" class="cat_title">' . $type_info["title"] . '</span>';

		$publications_list .= '<ul class="spaced nobullet">';

		$count = 0;

		//Loop through publications
		foreach($publications as $info) {

			if($info["type"] == $type_info["id"]) {

				$count++;

				if ($info["year"] > 0) {
					$publications_list .= "<li>(" . $info["year"] . ") ";
				} else {
					$publications_list .= "<li>";
				}

				if ($info["link"] != "" && $info["link_title"] != "") {
					$publications_list .= '<a href="' . $info["link"] . '" ';
					if (stristr($info["link"], "http://"))
						$publications_list .= 'class="offsite" target="_blank"';
					$publications_list .= '>' . $info["link_title"] . '</a>';

					if($info["alt_link"] != "") {
						$publications_list .= ', <a href="' . $info["alt_link"] . '" ';
						if (stristr($info["alt_link"], "http://"))
							$publications_list .= 'class="offsite" target="_blank"';
						$publications_list .= '>' . $info["alt_link_title"] . '</a>';
					}

					if($info["description"] != '')
						$publications_list .= ', ' . $info["description"];
				} else {
					$publications_list .= $info["description"];
				}

				$publications_list .= '</li>';
			}
		}

		$publications_list .= '</ul>';
		if ($count > 5) $publications_list .= '<p><a href="#startcontent">Back to top</a></p>';
		$publications_list .= '<div class="hr_noclear"><!-- hr --></div>';

		if ($count > 0) echo $publications_list;
	}
	*/
?>
</div>

<script type="text/javascript">

	function list_by_person() {
		var id = document.list_form.people_id.options[document.list_form.people_id.selectedIndex].value;

		if (id > 0)
			window.location = "?people_id="+id;
		else
			window.location = unescape(window.location.pathname);
	}

	function list_by_project(people_id) {
		var id = document.list_form.project_id.options[document.list_form.project_id.selectedIndex].value;

		if (people_id > 0 && id > 0)
			window.location = "?people_id="+people_id+"&project_id="+id;
		else if (people_id > 0)
			window.location = "?people_id="+people_id;
		else
			window.location = unescape(window.location.pathname);
	}

	$(document).ready( function() {

		// replace the author list with a jump menu
		var author_select = '<label for="people_id">List by Person </label>';
		author_select += '<select id="people_id" name="people_id">';
		author_select += '<option value="">All People</option>';
		$("#author_list ul li a").each( function() {
			var url = $(this).attr("href");
			var id = url.substr( url.lastIndexOf('=')+1 );
			var name = jQuery.trim($(this).text());
			author_select += '<option value="'+id+'">'+name+'</option>';
		});
		author_select += '</select>';
		author_select += '<button type="submit">&raquo;</button><br />';

		var project_select = '<label for="project_id">List by Project </label>';
		project_select += '<select id="project_id" name="project_id">';
		project_select += '<option value="">All Projects</option>';
		project_select += '</select>';
		project_select += '<button type="submit">&raquo;</button><br />';

		$("#author_list").after(project_select);
		$("#author_list").after(author_select);
		$("#author_list").hide();

		$("#people_id").change( function(e) {
			var id = $(this).val();
			update_pubs(id);
			// If they chose all people, we don't need to do the ajax request
			if( id == '' ) {
				$("#project_id").html('<option value="">All Projects</option>');
			}
			else {
				$.post('publications.ajax.php', {people_id: id, mode: 'projects'}, function(result) {
					$("#project_id").html(result);
				});
			}
		});

		$("#project_id").change( function(e) {
			var people_id = $("#people_id").val();
			var project_id = $(this).val();
			update_pubs( people_id, project_id );
		});

		function update_pubs( people_id, project_id) {
			if(!project_id) {
				var options = {
						people_id: people_id,
						mode: 'get_publications'
						};
			}
			else {
				var options = {
						people_id: people_id,
						project_id: project_id,
						mode: 'get_publications'
						};
			}

			$.post('publications.ajax.php', options, function(result) {
				if(result != '') {
					$("#publications").html(result);
				}
			});
		}
	});

</script>
