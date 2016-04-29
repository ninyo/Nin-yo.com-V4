<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_projects = array();

// $array_projects[] = array(
// 	"cover"=>"", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project.jpg"}
// 	"type"=>array(
// 		"video"=>"off", // if(!=="off"){then execute video container}
// 		"gif"=>"off", // if(!=="off"){then execute gif container}
// 		"still"=>"off", // if(!=="off"){then execute still container}
// 		),
// 	"title"=>"",// title will be displayed as h1
// 	"skills"=>array( // $skills => $skill
// 		),
// 	"client"=>array( // $info => $detail
// 		"name" => "",
// 		"company" => "",
// 		),
// 	"new"=>array( 
// 		"description" => "",
// 		"visual" => array( // $link => $url
// 			"" => "",
// 			),
// 		),
// 	"badge"=>array( // $badge => $switch
// 		"xd" => "off",//use "on" to add a point, or "off" for default
// 			// experience design
// 		"id" => "off",//use "on" to add a point, or "off" for default
// 			// interaction design
// 		"ur" => "off",//use "on" to add a point, or "off" for default
// 			// user research
// 		"fed" => "off",//use "on" to add a point, or "off" for default
// 			// front end development
// 		"vd" => "off",//use "on" to add a point, or "off" for default
// 			// visual design
// 		"cs" => "off",//use "on" to add a point, or "off" for default
// 			// content strategy
// 		),
// 	"sketch"=>"",// if(!==""){then have a link to view sketch}
// 	"category"=>array(
// 		"pool" => "on", // if(!=="off"){then add to pool to display all projects when user types in 0214}
// 		"work" => "off", // if(!=="off"){then display project on front page, but if exceeds 12, then display "exceed" on front page}
// 		"ganja" => "off", // if(!=="off"){then add to marijuana group to display only marijuana projects on front page when user types in 420}
// 		"personal" => "off", // if(!=="off"){then add to personal group to display only personal projects on front page when user types in 628}
// 		),// choose front, pool, marijuana, school
// 	);

/* ————————————————————————————————————————————————————————— */

$array_projects[] = array(
	"cover"=>"", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project.jpg"}
	"type"=>array(
		"video"=>"off", // if(!=="off"){then execute video container}
		"gif"=>"off", // if(!=="off"){then execute gif container}
		"still"=>"off", // if(!=="off"){then execute still container}
		),
	"title"=>"",// title will be displayed as h1
	"skills"=>array( // $skills => $skill
		),
	"client"=>array( // $info => $detail
		"name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array( // $badge => $switch
		"xd" => "off",//use "on" to add a point, or "off" for default
			// experience design
		"id" => "off",//use "on" to add a point, or "off" for default
			// interaction design
		"ur" => "off",//use "on" to add a point, or "off" for default
			// user research
		"fed" => "off",//use "on" to add a point, or "off" for default
			// front end development
		"vd" => "off",//use "on" to add a point, or "off" for default
			// visual design
		"cs" => "off",//use "on" to add a point, or "off" for default
			// content strategy
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>array(
		"pool" => "on", // if(!=="off"){then add to pool to display all projects when user types in 0214}
		"work" => "off", // if(!=="off"){then display project on front page, but if exceeds 12, then display "exceed" on front page}
		"ganja" => "off", // if(!=="off"){then add to marijuana group to display only marijuana projects on front page when user types in 420}
		"personal" => "off", // if(!=="off"){then add to personal group to display only personal projects on front page when user types in 628}
		),// choose front, pool, marijuana, school
	"casestudy"=> "", // if(!==""){show casestudy section}
	);

?>
