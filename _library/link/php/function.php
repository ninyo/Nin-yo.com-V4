<? /* —————————————————————————————————————————————————————————

[function.php]

global functions to help control output

//////////////////////////// NOTES ////////////////////////////

Nonbreaking Hyphen = &#8209;

———————————————————————————————————————————————————————————— */

/* ————————————————————————————————————————————————————————— */
//////////////////////////// TEXT /////////////////////////////
/* ————————————————————————————————————————————————————————— */

$loremipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$introduce = "Ninyo Aganon";
$position = "Interaction + Visual Designer";

/* ————————————————————————————————————————————————————————— */
//////////////////// FUNCTIONS FOR REUSE //////////////////////
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

function clipboard_container_grid(){
	global $array_projects;
	global $_clipboard_list_item;
	$match = $_GET['id'];
	$next = $match + 1;
	$previous = $match - 1;
	$total = count($array_projects) -1;
	/* ——————————————————————————————————
	DESCRIPTION: 
	this switches out the grid class dependant on how many photos are stashed inside of the array.
	if the container counts a certain amount, the grid will change to fit the section width without
	leaving a hanging photo on its own, except if there is a certain odd number 5 within the container.
	——————————————————————————————————— */
	// $output = $output . '<ul class="grid__1_1"><li></li></ul>';
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

function component_social_bar(){
	$array_social = array();
	$array_social[instagram] = array(
		"url" => "http://instagram.com/",
		"username" => "ninyoaganon",
		"intent" => "personal",
		);
	$array_social[vimeo] = array(
		"url" => "http://vimeo.com/",
		"username" => "ninyo/videos/sort:date/format:thumbnail",
		"intent" => "experiments",
		);
	$array_social[twitter] = array(
		"url" => "http://twitter.com/",
		"username" => "ninyoaganon",
		"intent" => "thoughts",
		);
	$array_social[linkedin] = array(
		"url" => "http://linkedin.com/in/",
		"username" => "ninyo",
		"intent" => "work history",
		);
	// $array_social[fyuse] = array(
	// 	"url" => "http://fyu.se/u/",
	// 	"username" => "ninyo",
	// 	"intent" => "used for behind the scenes",
	// 	);
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
	global $introduce;
	global $position;
	global $description;

	// $array_toptext[] = array(
		// "Being able to help clients visualize their ideas into an actual product through research, conceptual sketches, lo/hi fidelity prototypes, and testing are one of the reasons why I love this kind of work. I still wake up everyday consistently learning new things in this field.",
		// "Visuals and ideas are powerful and leave long lasting impressions from the things we as consumers look at, to the interfaces we use daily. Being able to help clients visualize their concepts as an actual product, with the intent to help users' experiences become more enjoyable, are one of the reasons why I love this unique kind of work.",
		// );
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="section header_main">'; // style="background:url(_library/asset/img_header.png);"
		$output = $output . '<div class="inner" style="display:inline-block;">';
		$output = $output . '<div class="container">';
			// $output = $output . '<div class="logo_primary"></div>';
			$output = $output . '<p class="header_introduce">'.$introduce.'</p>';
			$output = $output . '<p class="header_position">'.$position.'</p>';
			$output = $output . "<p class='header_description'>Helping clients build on their ideas and designing digital prototypes is something I have a lot of fun doing. The cool part about this type of work is that I get to work alongside creative folks that are commited to help businesses prosper.</p>";
			// $output = $output . "<p class='header_description'>The process of helping clients build on their ideas by designing digital prototypes is something I have a lot of fun doing. The cool part about this all is being able to work alongside a team of unique and talented creatives, where I get to see my work come to life for the online community to see.</p>";
			// $output = $output . "<p class='header_description'>I help clients develop on their ideas by designing visual and interactive prototypes/mockups with varying fidelity. The fun part about this all is working with a creative team where I get to see the results come to life.</p>";
			// $output = $output . "<p class='header_description'>Being able to help clients visualize ideas from research, conceptual sketches, lo/hi prototypes, and testing into an actual product are one of the reasons why I love this type of work. I wake up every single day wondering what else can I learn today?</p>";
			// $count = 0;
			// foreach($array_toptext as $toptext){
			// 	shuffle($toptext);
			// 	foreach($toptext as $text){
			// 		$count = $count +1;
			// 		if($count == 1){
			// 			$output = $output . "<p class='header_description'>".$text."</p>";
			// 			}
			// 		}
			// 	}
			$output = $output . $_component_social_bar;
		$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_header_main = header_main();

/* ————————————————————————————————————————————————————————— */

function section_divide(){
	global $description;
	/* ——————————————————————————————————
	DESCRIPTION: this shit was cool. i got to add a 5 second loop of a gif background.
	——————————————————————————————————— */
	$output = $output . '<div class="section section_divide" data-parallax="scroll" data-image-src="_library/asset/img_header.png"><div class="inner">';
		$output = $output . '<p style="color:white">Below are 24 projects that I\'ve decided to share.</p>';
	$output = $output . '</div></div>';
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_divide = section_divide();

/* ————————————————————————————————————————————————————————— */

function section_portfolio_grid(){
	global $array_projects;
	$show = $_GET[show];
	/* ——————————————————————————————————
	DESCRIPTION: this will be featuring a grid of 4x3 on desktop and 3x4 on mobile and tablet. usually people use a 2 column grid on mobile, but i will do a 3 column grid like instagram.
	——————————————————————————————————— */
	$output = $output . '<div class="section section_portfolio">';
		$output = $output . '<ul class="grid_3_3_4">';
		$count = 0;
		foreach($array_projects as $id => $project){
			$count = $count +1;
			if($show == "more"){
				if($count < 25){
					if($project[category]=='work'){
						$output = $output . '<li>';
							if($count==1){
								$output = $output . '<a id="nextLink" href="project.php?id='.$id.'" class="layer_text">';
								}else{$output = $output . '<a href="project.php?id='.$id.'" class="layer_text">';}
								$output = $output . '<div href="project.php" class="container_layer_text">';
									$output = $output . '<p class="title_project">'.strtoupper($project[title]).'</p>';
									$output = $output . '<div class="layer_text_line" style="background-color:#'.$project[hex].'"></div>';
									$output = $output . '<p class="location">'.ucwords($project[subtitle]).'</p>';
									$output = $output . '<ul>';
										foreach($project[badge] as $badge){
											$output = $output . '<li class="'.$badge.'"></li>';
											}
									$output = $output . '</ul>';
								$output = $output . '</div>';
							$output = $output . '</a>';
							$output = $output . '<div class="layer_dark"></div>';
							if($project[cover]!==""){
								$output = $output . '<div class="layer_img_portfolio" style="background:url(_library/asset/_projects/'.$project[foldername].'/'.$project[cover].')center no-repeat;background-size:cover;"></div>';
								}else{
								$output = $output . '<div class="layer_img_portfolio" style="background:url(_library/asset/img_project_null.png)center no-repeat;background-size:cover;"></div>';
								}
						$output = $output . '</li>';
						}
					}
				}else{
				if($count < 13){
					if($project[category]=='work'){
						$output = $output . '<li>';
							if($count==1){
								$output = $output . '<a id="nextLink" href="project.php?id='.$id.'" class="layer_text">';
								}else{$output = $output . '<a href="project.php?id='.$id.'" class="layer_text">';}
								$output = $output . '<div href="project.php" class="container_layer_text">';
									$output = $output . '<p class="title_project">'.strtoupper($project[title]).'</p>';
									$output = $output . '<div class="layer_text_line" style="background-color:#'.$project[hex].'"></div>';
									$output = $output . '<p class="location">'.ucwords($project[subtitle]).'</p>';
									$output = $output . '<ul>';
										foreach($project[badge] as $badge){
											$output = $output . '<li class="'.$badge.'"></li>';
											}
									$output = $output . '</ul>';
								$output = $output . '</div>';
							$output = $output . '</a>';
							$output = $output . '<div class="layer_dark"></div>';
							if($project[cover]!==""){
								$output = $output . '<div class="layer_img_portfolio" style="background:url(_library/asset/_projects/'.$project[foldername].'/'.$project[cover].')center no-repeat;background-size:cover;"></div>';
								}else{
								$output = $output . '<div class="layer_img_portfolio" style="background:url(_library/asset/img_project_null.png)center no-repeat;background-size:cover;"></div>';
								}
						$output = $output . '</li>';
						}
					}
				}
			} // end of foreach loop
		$output = $output . '</ul>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_portfolio_grid = section_portfolio_grid();

/* ————————————————————————————————————————————————————————— */

function section_about(){
	global $position;
	global $introduce;
	global $array_projects;
	$array_scorecard = array('xd','id','ur','fed','vd','cs');
	$count_xd = 0;
	$count_id = 0;
	$count_fed = 0;
	$count_ur = 0;
	$count_vd = 0;
	$count_cs = 0;

	foreach($array_projects as $id => $project){
		if(in_array("xd",$project[badge])){
			$count_xd = $count_xd +1;
			}
		if(in_array("id",$project[badge])){
			$count_id = $count_id +1;
			}
		if(in_array("ur",$project[badge])){
			$count_ur = $count_ur +1;
			}
		if(in_array("fed",$project[badge])){
			$count_fed = $count_fed +1;
			}
		if(in_array("vd",$project[badge])){
			$count_vd = $count_vd +1;
			}
		if(in_array("cs",$project[badge])){
			$count_cs = $count_cs +1;
			}
		}
	$array_bg[] = array(
		"img_bg_goldenminute.png",
		"img_bg_goldenminute.png",
		);

	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="section about">';
		$count = 0;
		foreach($array_bg as $bg){
			shuffle($bg);
			foreach($bg as $pic){
				$count = $count +1;
				if($count == 1){
					$output = $output . '<div class="about_upper" style="background-image:url(_library/asset/'.$pic.');">';
					}
				}
			}
			$output = $output . '<div class="inner">';
				$output = $output . '<div class="email"><a style="color:white;display:block;width:100%;height:100%;" href="mailto:mail@nin-yo.com">EMAIL</a></div>';
				$output = $output . '<div class="resume"><a style="color:white;display:block;width:100%;height:100%;" href="_library/download/resume_ninyo.pdf">RESUME</a></div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
		$output = $output . '<div class="section_bar" style="height:5px;width:100%;background-color:black;"></div>';
		$output = $output . '<div class="about_below">';
			$output = $output . '<div class="inner">';
				/*—————Left Side Bio—————*/
				$output = $output . '<div class="content_bio">';
					$output = $output . '<div class="profile_pic"></div>';
					$output = $output . '<p class="name">'.$introduce.'</p>';
					$output = $output . '<p class="title">'.$position.'</p>';
					$output = $output . '<div class="line_divider"></div>';
					$output = $output . '<div class="paragraph">';
						if($_GET[show] == "more"){
							$output = $output . "<p style='margin-bottom:15px;'>I'm interested in creating the things people take time to look at, digest, interact, read, experience, etc. It's almost an art in its own unique design process tailored to its demographic.</p>";
							// $output = $output . "<p style='margin-bottom:15px;'>I feel honored to be able to have the oppurtunity to leverage design and create unique offers and opportunities for people by: designing financial applications, creating content, designing old-school printed documents, and even crafting social platforms that cultivate a creative community. Doing something different has been an energy very familiar to me since I was a kid. My core goal is to give opportunities to people's lives.";
						
							// $output = $output . "<p style='margin-bottom:15px;'>I'm immersed in designing the things people take time to look at, digest, interact, read, experience, etc. It's an art its unique process.</p>"; 
							//I'm interested in creating the things people take time to look at, digest, interact, read, experience, etc. It's almost an art piece by its own unique design process. If you think about it, it's nice to pick up a well designed <i>anything</i> once in a while: to appreciate what's trending visually, or even purchasing (like a magazine or book) as a tool to spark some subconscious influence.
							$lot = date('Y') - 2007;
							$output = $output . "<p style='margin-bottom:15px;'>With about ".$lot."+ years of experience, I've been involved in designing some awesome projects from: financial applications, competition events, branding, social media platforms for videographers, and a lot more to come. My experience involves visual design, interaction design, digital prototyping. To an extent, I also merge my knowledge in motion design, human&#8209;centered design, and programming (html, sass, php) to help influence my decisions in design.</p>";
							$output = $output . "<p style='margin-bottom:15px; color:#b08838; padding-left:20px; border-left: 2px solid #b08838;'>Outside of work, I live in downtown Bremerton (within walking distance to the Washington State Ferries), where I can reach Seattle on a snazzy monthly pass basis. At the end of the day, I'm a typical Filipino dude that <a style='color:#b08838;' href='https://youtu.be/eMg1NjZ6peg?t=2m20s'>breakdances</a> and drives a Honda civic listening to <a style='color:#b08838;' href='https://youtu.be/LZmBVCHtu5g?t=39s' target='_blank'>\"Classic\" Hip&#8209;hop</a> & <a style='color:#b08838;' href='https://youtu.be/FKqf5lGvHYA?t=45m10s' target='_blank'>House</a> music.</p>";
							$output = $output . "<a href='index.php'><p style='margin-bottom:15px;'><i>less</i> &mdash;</p></a>";
							// $output = $output . "<p style='margin-bottom:15px;'>Today with all the good looking social media / tech startup sites and apps out there, the visual bar is pretty much standardized with an expected quality. One of the thoughts that come to my mind is \"are these solutions working well for the ones using it everyday(?), and how are they using them?\" My intent to understand these questions is through experimenting with already established hcd methods and new perspectives to solve unique problems within design.</p>";
							// $output = $output . "<p style='margin-bottom:15px; color:#b08838;'>If you've read this far, I'm actually a super chill person. The majority of my off-time still involves design in some form or another, but I also enjoy: videography (in the art of documentation), photography (if I somehow remember to bring my camera), art (which is how I ended up in the design field in the first place), and <a style='color:#b08838; text-decoration:underline;' href='https://youtu.be/wp3pZu3oir4?t=50s' target='none'>dance</a> (the one that involves spinning on your head).</p>";
							// $output = $output . "<p style='margin-bottom:15px;'>Starting out, I was mainly influenced by my friends with the artform of Hip&#8209hop through its culture of: dance, music, and graffiti. This got me to pursue a field in creativity, which brought me to where I am today. This experience also cultivated other outlets of: front&#8209end&nbsp;development (Sass, CSS, PHP, HTML), user&nbsp;experience, web&nbsp;design, and videography (C100 & 18&#8209;35mm&nbsp;f1.8 lens).</p>";
						}else{
							$output = $output . "<p style='margin-bottom:15px;'>I'm interested in creating the things people take time to look at, digest, interact, read, experience, etc. It's almost an art in its own unique design process tailored to its demographic.</p>";
							$lot = date('Y') - 2007;
							$output = $output . "<p style='margin-bottom:15px;'>With about ".$lot."+ years of experience, I've been involved in designing some awesome projects from: financial applications, competition events, branding, social media platforms for videographers, and a lot more to come. My experience involves visual design, interaction design, digital prototyping. To an extent, I also merge my knowledge in motion design, human&#8209;centered design, and programming (html, sass, php) to help influence my decisions in design.</p>";
						}
					$output = $output . '</div>';
				$output = $output . '</div>';
				/*—————Right Side Scorecard—————*/
				$output = $output . '<div class="content_scorecard">';
					$output = $output . '<div class="icon_scorecard"></div>';
					$output = $output . '<ul>';
						// I don't know how to create dynamic variables so i have to do this the long way for now.
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_xd.'</p>';
							$output = $output . '<p class="score_type">XD</p>';
						$output = $output . '</li>';
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_id.'</p>';
							$output = $output . '<p class="score_type">ID</p>';
						$output = $output . '</li>';
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_fed.'</p>';
							$output = $output . '<p class="score_type">FED</p>';
						$output = $output . '</li>';
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_ur.'</p>';
							$output = $output . '<p class="score_type">UR</p>';
						$output = $output . '</li>';
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_vd.'</p>';
							$output = $output . '<p class="score_type">VD</p>';
						$output = $output . '</li>';
						$output = $output . '<li class="section_score_type">';
							$output = $output . '<p class="score_amount">'.$count_cs.'</p>';
							$output = $output . '<p class="score_type">CS</p>';
						$output = $output . '</li>';
					$output = $output . '</ul>';
					$output = $output . "<p class='scorecard_description' style='font-size:10px;line-height:15px;'>The numbers are pulling data dynamically from each project to generate this scorecard idea from General Assembly. I found this interesting, because everyone has unique numbers from one another.</p>";
				$output = $output . '</div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_about = section_about();

/* ————————————————————————————————————————————————————————— */

function header_interior(){
	global $array_projects;
	$match = $_GET['id'];
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	foreach($array_projects as $id => $project){
		if($match == $id){
			$output = $output . '<div class="section header_interior" style="background:url(_library/asset/_projects/'.$project[foldername].'/_bg.png)center no-repeat;background-size:cover;"><a href="/" style="display:block;height:100%;width:100%;"></a></div>';
			}
		}
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_header_interior = header_interior();

/* ————————————————————————————————————————————————————————— */

function section_interior(){
	global $array_projects;
	global $loremipsum;
	$match = $_GET['id']; //this will equal the number it's on
	$next = $match +1; //this will equal the next number
	$prev = $match -1; //this will equal the previous number
	$total = count($array_projects);
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="section section_interior">';
		$output = $output . '<div class="section_bar" style="height:5px;width:100%;background-color:black;"></div>';
		$output = $output . '<div class="inner">';
			foreach($array_projects as $id => $project){
				if($match == $id){
					$output = $output . '<div class="interior_body">';
						$output = $output . '<div class="body_nav">';
							if($prev >= 0){ 
								$output = $output . '<a id="prevLink" class="nav_prev" href="project.php?id='.$prev.'">';
									$output = $output . '<div class="prev_arrow"></div>';
									$output = $output . '<p>PREV</p>';
								$output = $output . '</a>';
								}else{
								$output = $output . '<a id="prevLink" class="nav_prev" href="/">';
									$output = $output . '<div class="prev_arrow"></div>';
									$output = $output . '<p>HOME</p>';
								$output = $output . '</a>';
								}
							if(24 > $next){ 
								$output = $output . '<a id="nextLink" class="nav_next" href="project.php?id='.$next.'">';
									$output = $output . '<div class="next_arrow"></div>';
									$output = $output . '<p>NEXT</p>';

								$output = $output . '</a>';
								}else{
								$output = $output . '<a id="nextLink" class="nav_next" href="/">';
									$output = $output . '<div class="next_arrow"></div>';
									$output = $output . '<p>HOME</p>';
								$output = $output . '</a>';
								}
						$output = $output . '</div>';
						$output = $output . '<div class="body_content">';
							if($project[url]!==""){//that means it has something in there so follow it
								$output = $output . '<div class="content_avatar" style="background-image:url(_library/asset/_projects/'.$project[foldername].'/_logo.png)"><a href="'.$project[url].'" target="none" style="display:block;height:100%;width:100%;"></a>';
								}else{
								$output = $output . '<div class="content_avatar" style="background-image:url(_library/asset/_projects/'.$project[foldername].'/_logo.png)">';		
								}
							$output = $output . '</div>';
							$output = $output . '<div class="content_title">';
								$output = $output . '<h1>'.$project[subtitle].'</h1>';
								$output = $output . '<p>'.$project[location].'</p>';
							$output = $output . '</div>';
							$output = $output . '<div class="content_bar"></div>';
							$output = $output . '<div class="content_personal">';
								$output = $output . '<p>'.$project[personal].'';
								if($project[content][situation] !== ""){
									if($_GET[display]!=="bg"){
										$output = $output . ' <a class="linker_top" href="project.php?id='.$id.'&display=bg">More&nbsp;+</a></p>';
										}else{
										$output = $output . ' <a class="linker_top" href="project.php?id='.$id.'">Hide&nbsp;Description&nbsp;&ndash;</a></p>';
										}
									}
							$output = $output . '</div>';
							if($_GET[display] == "bg"){
								$output = $output . '<ul class="study">';
								foreach($project[content] as $type => $content){
									$output = $output . '<li class="description_'.$type.'">';
										$output = $output . '<h2>'.$type.'</h2>';
										$output = $output . '<div></div>';
										$output = $output . '<p>'.$content.'</p>';
									$output = $output . '</li>';
									}	
								$output = $output . '</ul>';
								$output = $output . ' <a class="linker_bottom" href="project.php?id='.$id.'">Hide&nbsp;Description&nbsp;&ndash;</a></p>';
								}
							/*————————————————————————————*/
							if(count($project[photos]) == 1){
								$output = $output . '<ul class="grid_1_1_1">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 2){
								$output = $output . '<ul class="grid_2_2_2">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 3){
								$output = $output . '<ul class="grid_1_3_3">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 4 || count($project[photos]) == 10){
								$output = $output . '<ul class="grid_2_2_2">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 5){
								$output = $output . '<ul class="grid_1_2_3">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 6 || count($project[photos]) == 9){
								$output = $output . '<ul class="grid_2_3_3">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								elseif(count($project[photos]) == 7 || count($project[photos]) == 8 || count($project[photos]) == 11 || count($project[photos]) == 12){
								$output = $output . '<ul class="grid_3_3_4">';
									foreach($project[photos] as $photo){$output = $output . '<li style="background-image:url(_library/asset/_projects/'.$project[foldername].'/'.$photo.');"><a style="display:block;height:100%;" href="_library/asset/_projects/'.$project[foldername].'/'.$photo.'" target="none"></a></li>';}
								}
								/*————————————————————————————*/
								$output = $output . '</ul>';
								if($project[url]!==""){
									$output = $output . '<a href="'.$project[url].'" target="none"><p class="livesite">View Live Site</p></a>';
									}
								if($project[demo]!==""){
									$output = $output . '<a href="'.$project[demo].'" target="none"><p class="livesite">Test Demo</p></a>';
									}
								if($project[credit]!==""){
									$output = $output . '<p style="font-size:12px;margin-top:20px;"><i>This project was made possible through <strong>'.$project[credit].'</strong></i>.</p>';
									}else{
									$output = $output . '<p style="font-size:12px;margin-top:20px;"><i>This was created as a solo freelance project<i>.</p>';
									}
						$output = $output . '</div>'; // end body_content
					$output = $output . '</div>'; // end interior_body
					}
				}
		$output = $output . '</div>'; // end inner
	$output = $output . '</div>'; // end section_interior


	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_interior = section_interior();

/* ————————————————————————————————————————————————————————— */

function section_showmore(){
	global $headtitle;
	$show = $_GET['show'];
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
		if($show !== 'more'){
			$output = $output . '<div class="section footer" style="background:black;">';
				$output = $output . '<a href="index.php?show=more">Show More</a>';
			$output = $output . '</div>';
			}else{
			$output = $output . '<div class="section footer" style="background:black;">';
				$output = $output . '<a href="index.php">Show Less</a>';
			$output = $output . '</div>';
			}
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_showmore = section_showmore();

/* ————————————————————————————————————————————————————————— */

function section_footer(){
	global $headtitle;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="section footer">';
		if($headtitle == 'main'){
			$output = $output . '<a>Thank You</a>';
		}else{
			$output = $output . '<a href="/">Back to main</a>';
			}
	$output = $output . '</div>';
	$output = $output . '<div class="section copyright"><p><span style="color:#665">&copy; '.date('Y').' Site designed by nin-yo.com. All Rights Reserved. Site design using pen on paper, Sketch, Sublime Text, and <a href="http://github.com/ninyo" target="none" style="text-decoration:none;color:#665;font-weight:bold;">Github</a>.</span> <a style="text-decoration:none;color:#665;" href="index.php?show=more">[View More]</a></p></div>';
	/* ———————————————————————————————— */
	return $output;}//close function
	/* ———————————————————————————————— */
	$_section_footer = section_footer();

?>