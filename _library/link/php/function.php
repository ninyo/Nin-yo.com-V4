<? /* ————————————————————————————————————————————————————————————

[function.php]

global functions to help control output

Ugly Apostraphe = ’; //find all and replace with '

———————————————————————————————————————————————————————————— */

/* ————————————————————————————————————————————————————————— */
//////////////////////////// TEXT /////////////////////////////
/* ————————————————————————————————————————————————————————— */

$loremipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$text_header = "Ninyo has worked as a designer for multiple nonprofits in Seattle’s International District, and for recognizable names such as T-Mobile, UW, Starbucks, and Amazon to name a few. — Mentor Creative";
$text_passcode = "Only the most recent or representative style of projects are shown above. To see all projects, type in the code to the right.";

/* ————————————————————————————————————————————————————————— */
////////////// HAND CRAFTED FUNCTIONS FOR REUSE ///////////////
/* ————————————————————————————————————————————————————————— */

function titlecase($string, $delimiters = array(" ", "-", "O'"), $exceptions = array("to", "a", "the", "of", "by", "for", "and", "with", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X")) { 
	/* 
	Exceptions in lower case are words you don't want converted 
	Exceptions all in upper case are any words you don't want converted to title case 
	but should be converted to upper case, e.g.: 
	king henry viii or king henry Viii should be King Henry VIII 
	*/ 
	foreach ($delimiters as $delimiter){ 
		$words = explode($delimiter, $string); 
		$newwords = array(); 
		foreach ($words as $word){ 
			if (in_array(strtoupper($word), $exceptions)){ 
							// check exceptions list for any words that should be in upper case 
							$word = strtoupper($word); 
				} elseif (!in_array($word, $exceptions)){ 
							// convert to uppercase 
					$word = ucfirst($word); 
					} 
			array_push($newwords, $word); 
			} 
		$string = join($delimiter, $newwords); 
		} 
		return $string; 
	// titlecase(); can be used to intermingle.
	} 

/* ————————————————————————————————————————————————————————— */
////////////// HAND CRAFTED FUNCTIONS FOR REUSE ///////////////
/* ————————————————————————————————————————————————————————— */


function clipboard_title_interior($title, $below){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="title_primary">';
		$output = $output . '<div class="container">';
			$output = $output . '<h1 class="title">'.$title.'</h1>';
			$output = $output . '<div class="style_label_line">';
				$output = $output . '<div class="line"></div>';
				$output = $output . '<p class="below">'.$below.'</p>';
				$output = $output . '<div class="line"></div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_clipboard_title_interior = clipboard_title_interior();

/* ————————————————————————————————————————————————————————— */

function clipboard_separator(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	
	$output = $output . '<div class="separator"></div>';
	
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_clipboard_separator = clipboard_separator();

/* ————————————————————————————————————————————————————————— */

function clipboard_container_grid(){
	global $array_projects;
	global $_clipboard_list_item;
	$match = $_GET['id'];
	$next = $match + 1;
	$previous = $match - 1;
	$total = count($array_projects) -1;
	/* ——————————————————————————————————
	DESCRIPTION: 
	The purpose with this is to switch out the grid class dependant on how many photos are stashed inside of
	the url_after container. if it contains a certain amount, the grid will change to fit the section width without
	leaving a hanging photo on its own, except if there are 5 in the container.
	——————————————————————————————————— */
	// $output = $output . '<ul class="grid_1_1_1"><li></li></ul>';
	foreach($array_projects as $id => $project){
		if($id == $match){
			if($_GET['display'] !== 'before'){
				if(count($project[url_after]) == 1){
					$output = $output . '<ul class="grid_1_1_1">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 2){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 3){
					$output = $output . '<ul class="grid_1_3_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 4){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 5){
					$output = $output . '<ul class="grid_1_2_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 6){
					$output = $output . '<ul class="grid_2_3_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					} // closing if conditional
				}else{
				if(count($project[url_before]) == 1){
					$output = $output . '<ul class="grid_1_1_1">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 2){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 3){
					$output = $output . '<ul class="grid_1_3_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 4){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 5){
					$output = $output . '<ul class="grid_1_2_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 6){
					$output = $output . '<ul class="grid_2_3_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					} // closing if conditional
				} // Close checking if display doesn't match with the string 'before'
			$output = $output . '<div>';
			if($match > 0){
				$output = $output . '<a class="style_button between" href="project.php?id='.$previous.'">Previous</a>';
				}
			if($match < $total){
				$output = $output . '<a class="style_button between" href="project.php?id='.$next.'">Next</a>';
				}
			$output = $output . '</div>';
			} // Close conditional matching the current page with id
		} // Close foreach loop
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_clipboard_container_grid = clipboard_container_grid();

/* ————————————————————————————————————————————————————————— */
//////////////////// COMPONENT STRUCTURE //////////////////////
/* ————————————————————————————————————————————————————————— */

//function name(){/* ———————————————————————————————— */return $output;}//close function/* ———————————————————————————————— */$_name = name();

/* ————————————————————————————————————————————————————————— */

function component_li_portfolio_piece(){
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_component_li_portfolio_piece = component_li_portfolio_piece();

/* ————————————————————————————————————————————————————————— */

function component_unlock(){
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_component_unlock = component_unlock();

/* ————————————————————————————————————————————————————————— */

function component_scorecard(){
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_component_scorecard = component_scorecard();

/* ————————————————————————————————————————————————————————— */

function component_social_bar(){
	$array_social = array();

	$array_social[instagram] = array(
		"url" => "http://instagram.com/",
		"username" => "ninyoaganon",
		"intent" => "my photographic grid",
		);
	$array_social[vimeo] = array(
		"url" => "http://vimeo.com/",
		"username" => "ninyo/videos",
		"intent" => "personal experiments",
		);
	$array_social[twitter] = array(
		"url" => "http://twitter.com/",
		"username" => "ninyoaganon",
		"intent" => "announcements of projects",
		);
	$array_social[linkedin] = array(
		"url" => "http://linkedin.com/in/",
		"username" => "ninyo",
		"intent" => "connect with me here",
		);
	$array_social[fyuse] = array(
		"url" => "http://fyu.se/u/",
		"username" => "ninyo",
		"intent" => "used for behind the scenes",
		);
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<ul style="position:relative;">';
		foreach($array_social as $network => $details){
			$output = $output . '<li class="'.$network.'">';
				$output = $output . '<a href="'.$details[url].$details[username].'" target="none" alt="'.$details[intent].'"></a>';
				$output = $output . '<p>'.ucwords($details[intent]).'</p>';
			$output = $output . '</li>';
			}
	$output = $output . '</ul>';

	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_component_social_bar = component_social_bar();


/* ————————————————————————————————————————————————————————— */
////////////////////// SECTION STRUCTURE //////////////////////
/* ————————————————————————————————————————————————————————— */

//function name(){/* ———————————————————————————————— */return $output;}//close function/* ———————————————————————————————— */$_name = name();

/* ————————————————————————————————————————————————————————— */

function header_main(){
	global $_component_social_bar;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	
	$output = $output . '<div class="header_main section">';
		$output = $output . '<div class="inner" style="display:inline-block;">';
		$output = $output . '<div class="container">';
			$output = $output . '<div class="logo_primary"></div>';
			$output = $output . '<p class="header_description">Ninyo has worked as a designer for multiple nonprofit projects in Seattle’s International District, and for recognizable names such as: T-Mobile, UW, Starbucks, and Amazon (amongst many other companies).</p>';
			$output = $output . $_component_social_bar;
		$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_header_main = header_main();

/* ————————————————————————————————————————————————————————— */

function header_short(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */


	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_header_short = header_short();

/* ————————————————————————————————————————————————————————— */

function section_divide(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="section section_divide"><div class="inner">';
		$output = $output . '<div class="container_line_recent">';
			$output = $output . '<div class="line_above"></div>';
			$output = $output . '<div class="gfx_recent"></div>';
			$output = $output . '<div class="line_below"></div>';
		$output = $output . '</div>';
	$output = $output . '</div></div>';

	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_divide = section_divide();

/* ————————————————————————————————————————————————————————— */

function section_portfolio_grid(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_portfolio_grid = section_portfolio_grid();

/* ————————————————————————————————————————————————————————— */

function section_about(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_about = section_about();

/* ————————————————————————————————————————————————————————— */

function section_footer(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_footer = section_footer();

?>