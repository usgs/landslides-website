<?php

// Return the raw resultset containing the projects for the given person
function get_projects( $people_id = '' ) {
	global $db;

	$where_clause = '
			j.project_id = r.id 
			AND r.id = p.project_id 
			AND p.publication_id = b.publication_id 
			AND j.people_id = b.people_id 
			AND r.id NOT IN(11, 12) ';


	if( $people_id != '' ) {
		$where_clause .= 'AND j.people_id = ' . $people_id .' ';
	}

	$query_project = "
		SELECT 
			r.id, 
			r.name, 
			j.people_id, 
			p.project_id, 
			p.publication_id, 
			b.publication_id, 
			b.people_id 
		FROM 
			projects r, 
			people_projects j, 
			projects_publications p, 
			publications_people b 
		WHERE 
			$where_clause
		GROUP BY r.id 
		ORDER BY name ASC
		";

	$rs_project = mysql_query($query_project, $db);

	return $rs_project;
}

// Print the formatted html for the publications for the
// given person and project
function print_publications( $people_id = '', $project_id = '' ) {
	global $db;

	$publications_types = array();
	$publications = array();

	$rs = mysql_query('SELECT id, title FROM publications_types',$db);

	//Put the different publication types into an array
	while($row = mysql_fetch_assoc($rs)) {
		$publications_types[] = array("id" => $row["id"],
			"title" => stripslashes($row["title"]),
			"slug" => strtolower( str_replace(" ","", str_replace("-","",stripslashes($row["title"])))));
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
} // end function 
