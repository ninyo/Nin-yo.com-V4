<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess


Badge 
"xd" experience design
"id" interaction design
"ur" user research
"fed" front end development
"vd" visual design
"cs" content strategy

Category
"pool" add to pool to display all projects when user types in 0214
"work" display project on front page, but if exceeds 12, then display "exceed" on front page
"ganja" add to marijuana group to display only marijuana projects on front page when user types in 420
"personal" add to personal group to display only personal projects on front page when user types in 628

———————————————————————————————————————————————————————————— */
$array_projects = array();
/* ————————————————————————————————————————————————————————— */

/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"BDB crew",// title will be displayed as h1
	"subtitle"=>"Crew Logo",
	"foldername"=>"boogie-down-bremerton",
	"hex"=>"525b55",
	"cover"=>"w-bdbseal-logo-2.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bremerton, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		'logo design','videography',
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rottweiler Motorcycle Co.",// title will be displayed as h1
	"subtitle"=>"Rebranding & Web",
	"foldername"=>"rmco-rebrand",
	"hex"=>"bf3423",
	"cover"=>"bg_motorcyles.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bremerton, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		'logo design','sitemap','wireframing','prototyping','webdesign','videography','photography','front-end web development','php loops','php functions','html5','css3','sass','sass stylesheets','responsive design','mobile first approach','indesign cc','photoshop cc','illustrator cc','premiere cc','sublime text',
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','id','fed','vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Zooppa Admin & Client",// title will be displayed as h1
	"subtitle"=>"Platform Redesign",
	"foldername"=>"zooppa-admin-platform",
	"hex"=>"4e90e0",
	"cover"=>"tab_comments.gif", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Downtown Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('id','vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Capsul App",// title will be displayed as h1
	"subtitle"=>"UX & Visual Design",
	"foldername"=>"capsul-mobile-app-lifestyle",
	"hex"=>"de6d6c",
	"cover"=>"w-capsul-01.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"SLU Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','id','ur','vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Brooks Thank You Running Campaign",// title will be displayed as h1
	"subtitle"=>"Multi-Kit Design",
	"foldername"=>"brooks-campaign-thank-you-running",
	"hex"=>"3e51e7",
	"cover"=>"w-thankyourunning-01.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"SLU Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Welcome Home",// title will be displayed as h1
	"subtitle"=>"History Book",
	"foldername"=>"hokubei-hochi-welcome-home-history-booklet",
	"hex"=>"b2b3ac",
	"cover"=>"w_0020.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"The ID Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Milbro",// title will be displayed as h1
	"subtitle"=>"Branding & Web",
	"foldername"=>"milbro-construction-branding",
	"hex"=>"c26a49",
	"cover"=>"3933.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bremerton, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','id','fed','vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Revolution Marketing",// title will be displayed as h1
	"subtitle"=>"Mailer Kit",
	"foldername"=>"revolution-marketing-mailer",
	"hex"=>"f62751",
	"cover"=>"web_portfolio_510.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"SoDo Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Zooppa Community",// title will be displayed as h1
	"subtitle"=>"Platform Redesign",
	"foldername"=>"zooppa-community-platform",
	"hex"=>"d66d2a",
	"cover"=>"community_profilepage.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Downtown Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('id','vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Uwajimaya Bag Competition",// title will be displayed as h1
	"subtitle"=>"Illustration",
	"foldername"=>"uwajimaya-competition",
	"hex"=>"df5852",
	"cover"=>"print_7062.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"The ID Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Nato Poster",// title will be displayed as h1
	"subtitle"=>"Info Graphic",
	"foldername"=>"nato-graphic-design",
	"hex"=>"867758",
	"cover"=>"w-nato-02.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"The ID Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Firekindle Wakescreen",// title will be displayed as h1
	"subtitle"=>"App Advertisement",
	"foldername"=>"amazon-firekindle-wakescreen-ads",
	"hex"=>"ea312c",
	"cover"=>"w-amazon-wildlife.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"SLU Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Watson Office",// title will be displayed as h1
	"subtitle"=>"Designs",
	"foldername"=>"watson-asset-design",
	"hex"=>"52cadb",
	"cover"=>"print_5773.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Downtown Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"T-mobile",// title will be displayed as h1
	"subtitle"=>"Event Kits",
	"foldername"=>"tmobile-event-kits",
	"hex"=>"f92476",
	"cover"=>"print_3170.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"SBUX Login Process",// title will be displayed as h1
	"subtitle"=>"UX & Visual Design",
	"foldername"=>"starbucks-mfa",
	"hex"=>"007042",
	"cover"=>"starbux_mfa.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"SoDo Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('id','vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"T-mobile Accessory Guides",// title will be displayed as h1
	"subtitle"=>"Print Layout",
	"foldername"=>"tmobile-accessory-guides",
	"hex"=>"f92476",
	"cover"=>"", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);

/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Foundation Nightclub",// title will be displayed as h1
	"subtitle"=>"Web Design",
	"foldername"=>"foundation-night-club-web-design",
	"hex"=>"2f7da5",
	"cover"=>"w_foundationnightclub.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Belltown Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Gofeisty",// title will be displayed as h1
	"subtitle"=>"Lifestyle Blog",
	"foldername"=>"gofeisty-lifestyle-blog",
	"hex"=>"676e3c",
	"cover"=>"2016-04-30_2_16_12.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"The ID Seattle", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Friends or Enemies B-boy Battle",// title will be displayed as h1
	"subtitle"=>"Event Design",
	"foldername"=>"friends-or-enemies-bboy-competition",
	"hex"=>"f2a86f",
	"cover"=>"print_6170.jpg", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bremerton, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','id','vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Logos",// title will be displayed as h1
	"subtitle"=>"Logo Design",
	"foldername"=>"logos-12",
	"hex"=>"bb7d9e",
	"cover"=>"w-collectionlogos-01.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rocksolid",// title will be displayed as h1
	"subtitle"=>"Branding",
	"foldername"=>"rocksolid-branding",
	"hex"=>"de904f",
	"cover"=>"w-rocksolid-01.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Silverdale, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"School Poster",// title will be displayed as h1
	"subtitle"=>"Illustration",
	"foldername"=>"school-illustration-poster",
	"hex"=>"88beba",
	"cover"=>"web_portfolio_6647.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd','cs'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rootworx",// title will be displayed as h1
	"subtitle"=>"Box Design",
	"foldername"=>"rootworx-box-container",
	"hex"=>"77b037",
	"cover"=>"w-rootworx-02.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Luckystrike",// title will be displayed as h1
	"subtitle"=>"Dicut & Layout",
	"foldername"=>"luckystrike-safety-cards",
	"hex"=>"f77543",
	"cover"=>"web_portfolio_6595.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array( // $skills => $skill, this will be used as tags at the bottom as a inline-block list
		),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"new"=>array( 
		"description" => "",
		"visual" => array( // $link => $url
			"" => "",
			),
		),
	"badge"=>array('xd','id','vd'),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	);
?>
