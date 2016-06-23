<?php
	class Person {
		//Constructor that takes in an array (id, first name, last name, email, position, mailing address)
		function Person($params) {
			foreach($params as $key => $value) {
				$this -> $key = $value;
			}
			
			$rs_publications = mysql_query("SELECT publication_id 
											FROM publications_people 
											WHERE people_id = " . $this -> id);
			
			if (mysql_num_rows($rs_publications) > 0) $this -> publications = true;
			else $this -> publications = false;
			
			//Fill projects array with associated projects
			$rs_projects = mysql_query("SELECT pp.project_id, p.name 
										FROM people_projects pp, projects p 
										WHERE people_id=" . $this -> id . " AND pp.project_id = p.id");
				
			while($row_projects = mysql_fetch_assoc($rs_projects)) {
				$this -> projects[$row_projects['project_id']] = stripslashes($row_projects['name']);
			}
			
			//Fill expertise array with areas of expertise			
			$this -> expertise_array = explode(", ", $this -> expertise);
		}
		
		public function display() {
			
			echo('<a class="' . $this -> slug . '"><img src="/images/list_closed.gif" width="11" height="15" alt="+" /></a>');
			echo(' <span id="' . $this -> slug . '" class="expand_title">');
			
			echo($this -> last_name . ', ' . $this -> first_name);
			if ($this -> email != "")
				echo(' (<span class="emailaddress">' . $this -> email . '</span>)');
					
			if ($this -> position != "")
				echo(' - <em>' . $this -> position . '</em>');
										
			echo('</span>');
			echo('<div class="' . $this -> slug . ' expand_wrap">');
	
			if ($this -> professional_page != "")
				echo('<p><a href="' . $this->professional_page . '" target="_blank" class="offsite">Professional Page</a></p>');
	
			if ($this -> mailing_address != "")
				echo('<p class="mailingaddress">' . $this -> mailing_address . '</p>');
			
			if($this -> publications == true) {
				echo('<div class="hr_spacer"><!-- hr --></div>');
				echo('<a href="/research/publications.php?people_id=' . $this -> id . '">Publications</a>');
			}
			
			$projects_count = count($this -> projects);
			
			if($projects_count > 0) {
				echo('<div class="hr_spacer"><!-- hr --></div>');
				echo('<strong>Current Projects</strong>');
				echo('<div class="hr_spacer"><!-- hr --></div>');
				echo('<ul>');
								
				foreach($this -> projects as $project_id => $name) {
					echo('<li>' . $name . '</li>');
				}
				
				echo('</ul>');
			}
			
				
			if($this -> expertise_array[0] != "") {
				echo('<div class="hr_spacer"><!-- hr --></div>');
				echo('<strong>Areas of Expertise</strong>');
				echo('<div class="hr_spacer"><!-- hr --></div>');
				echo('<ul>');
				foreach($this -> expertise_array as $name) {
					echo('<li>' . $name . '</li>');
				}
				echo('</ul>');
					
			}
						
			echo('</div>');
		}
				
		public $slug;
		public $projects = array();
		public $publications;
		
		private $id;
		private $first_name;
		private $last_name;
		private $email;
		private $position;
		private $mailing_address;
		private $professional_page;
		
		private $expertise;
		private $expertise_array = array();
	}
?>
