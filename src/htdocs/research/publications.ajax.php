<?php
// Get the database connection
include_once $_SERVER['DOCUMENT_ROOT'] . "/template/static/functions.inc.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/template_override/static/dbconnect.inc.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/research/publications/functions.inc.php";

// The caller requested the list of projects for a particular people
if(isset($_POST['people_id']) && $_POST['people_id'] != '' && isset($_POST['mode']) && $_POST['mode'] == 'projects') {
	print '<option value="">All Projects</option>';
	
	$people_id = intval($_POST['people_id']);
	$rs_project = get_projects( $people_id) ;
	
	while($project = mysql_fetch_assoc($rs_project)) {
		printf('<option value="%d">%s</option>',
			$project['id'],
			$project['name']);
	}

}


// The caller requested all the publications for a particular people (and possibly project)
if( isset($_POST['people_id']) && $_POST['people_id'] != '' && isset($_POST['mode']) && $_POST['mode'] == 'get_publications') {
	$people_id = intval($_POST['people_id']);
	if(isset($_POST['project_id']) && $_POST['project_id'] != '') {
		$project_id = intval($_POST['project_id']);
	}
	else {
		$project_id = '';
	}

	print_publications( $people_id, $project_id );	
}

