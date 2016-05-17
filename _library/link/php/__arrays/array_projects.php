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
	"url"=>"",
	"video"=>"https://vimeo.com/150865707",
	"demo"=>"",
	"hex"=>"525b55",
	"personal"=>"The logo turned out to be my favorite, because of its simplicity of intertwining letters.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Bremerton)", // this will be displayed above h1
	"skills"=>array('logo design','videography',),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Dance crews all around Washington were branding themselves with the help of a logomark that represents their crew as a whole. We've opted out of it for a long time, because it didn't feel necessary until we decided to have one for our 10 year anniversary.",
		"approach" => "The idea behind designing this mark is that it should be able to match the personality of each individual: not too much in one way and not too much in another way. A neutral, yet contemporary look that could be used for anything.",
		"experience" => "Intertwining the letter forms together as \"threads\" felt like the best answer that represents our overall style. We also created a couple versions using the same structure so that we can have fun with it.",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"bdb-coaster.png",
		"bdb-logoanimation.gif",
		"bdb-desk.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thanks to my brothers from Boogie Down Bremerton. I wouldn't have been here without you guys.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rottweiler Motorcycle Co.",// title will be displayed as h1
	"subtitle"=>"Rebranding & Web",
	"foldername"=>"rmco-rebrand",
	"url"=>"http://rmco.us",
	"video"=>"https://vimeo.com/162911217",
	"demo"=>"",
	"hex"=>"bf3423",
	"personal"=>"This work dealt with creating: product videos & shots, team photos, responsive web design, prototyping, mobile-first approach, web development, branding, etc. It represents the type of work that I'd like to focus my capabilities on.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Bremerton)", // this will be displayed above h1
	"skills"=>array('logo design','sitemap','wireframing','prototyping','web design','videography','photography','front-end web development','php loops','php functions','html5','css3','sass','sass stylesheets','responsive design','mobile first approach','indesign','photoshop cc','illustrator cc','premiere cc','sublime text'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The company's original name was Rottweiler Bikes Custom Motorcycles, which the word \"bikes\" left potential motorcycle clients thinking that the business specialize in Bikes instead. They decided to change their name to Rottweiler Motorcycle company so that it's very clear on what their business specializes in.",
		"approach" => "The idea of the rebranding was to maintain the original shape of their existing logo mark (since they apply their logo on small rounded components of their motorcycles), but to choose a typeface and overall mark that fits their direction appealing to a new rising younger generation of motorcyclists.",
		"experience" => "We've created a new logo that matches the look they're going for, along with an update on all of their merchandising and apparel, storefront components, as well as a redesign of their website.",
		),
	"badge"=>array('xd','id','fed','vd','cs'),
	"photos"=>array(
		"rmco-beanieshot.png",
		"rmco-member.gif",
		"rmco-merchandise.png",
		"rmco-motorcyclepage.gif",
		"rmco-foldedsweater.png",
		"rmco-hatlogo.png",
		"rmco-xs.gif",
		"rmco-stickers.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thanks to the whole Rottweiler team for allowing me to pursue my dreams.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Zooppa Admin & Client",// title will be displayed as h1
	"subtitle"=>"Platform Redesign",
	"foldername"=>"zooppa-admin-platform",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"4e90e0",
	"personal"=>"This represents the type of work that I want to spend most of my efforts on. It's very fun to design a platform that both clients & administrators will use on a daily basis.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (Downtown)", // this will be displayed above h1
	"skills"=>array('sitemap','wireframing','prototyping','web design','indesign','photoshop cc','icon design','badge design','interaction design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The existing platform was already being used, yet it needed a new update to fit with today's look & feel, and expected functionalities. We also wanted to add new functions from within the site, so that clients & administrators can easily navigate throughout their platforms, and use it as a communication tool with their teams.",
		"approach" => "I wanted to be able to redesign the platform in a way where&mdash;along with maintaining existing brand guidelines&mdash;we can crunch a lot of information and submission details in a small amount of space, but not making it feel crammed at the same time.",
		"experience" => "Administrators monitor thousands of submissions from the community from a complex database, and clients spend their time reviewing hundreds of thousands of community submissions for their live projects. The experience from the client workflow was designed to setup a new project with Zooppa, as well as a reward system was also designed for choosing the winning users with real money.",
		),
	"badge"=>array('id','vd'),
	"photos"=>array(
		"zooppa-internalheader.gif",
		"zooppa-clientplatform.gif",
		"zooppa-internalinterface.gif",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you to the Mentor and Zooppa team involved in this project. This made me grow in ways that I've never thought possible.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Capsul App",// title will be displayed as h1
	"subtitle"=>"UX & Visual Design",
	"foldername"=>"capsul-mobile-app-lifestyle",
	"url"=>"",
	"video"=>"",
	"demo"=>"https://invis.io/834XLIOBW",
	"hex"=>"de6d6c",
	"personal"=>"Working on this piece at General Assembly allowed me to understand the process of a User Experience designer and how their workflow benefits the user and their overall experience.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (South Lake Union)", // this will be displayed above h1
	"skills"=>array('presentation design','logo design','sitemap','wireframing','prototyping','web design','user research','user flow','persona development','storyboarding','indesign','Photoshop cc','illustrator cc','aftereffects cc','premier pro cc','interaction design','content development','user analysis','competitive analysis','user interviews','requirements','scrum workflow','sketching','user testing'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "There needed to be some sort of automated incentive without: having to remember to look at their stickynote/notepad, or set a specified date through Siri to relay their thoughts back to them through their mobile device, because it's still a bit difficult.",
		"approach" => "The idea is to create a mobile application where users can jot in their memories using text or voice, and to choose between 1 week, 1 month, or 1 year for that message to relay back to the user. This allows for time to pass by with new perspectives of the original thought to form, and allow users to clear their minds and unguiltfully forget. The challenge was how to create an experience so that users can do it as seamless as possible.",
		"experience" => "I created an experience where users, after submitting their memories into a capsul, can send it off into the future. Once the internal countdown for a capsul was ready to be reviewed, the user will get a notification to review their capsul. This would in turn always be interesting to revisit, and users have a choice to either delete the message once they've received it. You can only view the submission based on that day, and leap days would just be rounded to the day before.",
		),
	"badge"=>array('xd','id','ur','vd','cs'),
	"photos"=>array(
		"capsul-choosetime.gif",
		"capsul-decisionpath.png",
		"capsul-messagereview.gif",
		"capsul-storyboard1.png",
		"capsul-userpath.png",
		"capsul-storyboard2.png",
		"capsul-userpersonas.png",
		"capsul-intro.gif",
		"capsul-wireflow.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you to the General Assembly team for everything I was able to learn.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Brooks Thank You Running Campaign",// title will be displayed as h1
	"subtitle"=>"Multi-Kit Design",
	"foldername"=>"brooks-campaign-thank-you-running",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"3e51e7",
	// "personal"=>"I was able to actually see people having a good time using these pieces live from instagram by typing in #thankyourunning. No one really thinks about who is involved with creating these things behind the scenes, but that's kind of the fun part.",
	"personal"=>"I was able to see people smiling and having a good time receiving these pieces from instagram by typing in #thankyourunning. It helps to see what kind of impact your work is placing onto people you're designing for.",	
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (Fremont)", // this will be displayed above h1
	"skills"=>array('layout design','kit design','print design','indesign','Photoshop cc','medallion design','prop design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Brooks needed three separate kits for their #thankyourunning campaign, which was to be launched the following month. With three kits needing to be created, thousands of each kit were to be printed composing of many printed pieces, designs, medalions, and content to be created. understanding the projected deadlines and sticking to them was all handled with the revolution team",
		"approach" => "Our team laid out all the project details, and discussed what and when components needed to be completed, with expected revisions & print times needed. My role here was to design each kit based off of the creative direction given",
		"experience" => "This work allowed me to think about designs outside of flat prints, and to apply designs in 3D space. The fun part of using di-cut pieces is that you can scale down to a 1:16 model, print, and mock up with a 12in x 18in press sheet. All in all, it was real fun.",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"tyr-board.png",
		"tyr-hangart.png",
		"tyr-medalion.png",
		"tyr-medlionspecial.png",
		"tyr-onsite.png",
		"tyr-shoeholder.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you Amy for the great teamwork.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Welcome Home",// title will be displayed as h1
	"subtitle"=>"History Book",
	"foldername"=>"hokubei-hochi-welcome-home-history-booklet",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"b2b3ac",
	"personal"=>"It's very interesting seeing how much work local leaders have contributed for their community. I felt grateful being able to learn and work on a history book that will be read and used by thousands of readers as an actual history piece.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (International District)", // this will be displayed above h1
	"skills"=>array('layout design','Cover design','Photo retouching'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The original book already had many years left out, and more history was being created. The client wanted an update on this book, and to shrink down the size, being able to have it more in a collectible format.",
		"approach" => "To update pages with newer content and photos, and to redesign layout of the book cover and interior page",
		"experience" => "This was different from what I was used to, since it was to be sold in local stores. The finished interior piece had more of a contemporary layout design in terms of style, while the intent was to also retain its older charm",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"hh-book.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you Ryan for the endless work you've given me.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Milbro",// title will be displayed as h1
	"subtitle"=>"Branding & Web",
	"foldername"=>"milbro-construction-branding",
	"url"=>"http://milbroconstruction.com",
	"video"=>"",
	"demo"=>"",
	"hex"=>"c26a49",
	"personal"=>"Working on this actually tested me on how fast I can develop a site at a minimal viable product approach from the ground up.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Bremerton)", // this will be displayed above h1
	"skills"=>array('web design','HTML','PHP','CSS','sass','logo design','Business card design','email design','Photo retouching','minimal viable product approach',),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The client is new to the community, and is starting up this business with an already indepth knowledge of this field. A new website that can be respected, and a unified look for all of the business's touchpoints were needed for clients to accept this business over competitors.",
		"approach" => "The overall goal was to create pieces that the client can use immediately starting with the business cards, social media, and website.",
		"experience" => "I had a great time developing the consistency of this overall project. It helped with creating a site as a tool that people were landing on to generate more business opportunities.",
		),
	"badge"=>array('xd','id','fed','vd','cs'),
	"photos"=>array(
		"milbro-card.gif",
		"milbro-landing.gif",
		"milbro-card.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you Eric for allowing me to create this piece. It allowed me to refine my skills that I've been wanting to work on.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Revolution Marketing",// title will be displayed as h1
	"subtitle"=>"Mailer Kit",
	"foldername"=>"revolution-marketing-mailer",
	"url"=>"",
	"video"=>"https://vimeo.com/87938757",
	"demo"=>"",
	"hex"=>"f62751",
	// "personal"=>"I was able to spend the time creating a piece that utilizes all my skills from: designing, printing, mocking up, photography, creating dicuts, and actually using machines to create these pieces. It also taught me how to set up a step and repeat to be able to cut using math on a guillotine cutting machine.",
	"personal"=>"I was able to create a piece that utilizes all my hands-on skills from: designing for print, mocking up, photography, creating dicuts, and actually using machines to help visualize final pieces. This work taught me important techniques that I still use today, even within a digital space.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (SoDo)", // this will be displayed above h1
	"skills"=>array('Cover design','booklet design','box design','dicut design','print design','mock up','guillotine mock up','typography','art direction'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Long-term and potential clients were still recognizing Revolution as a printer, when marketing, design, and other services were already integrated into their new business model. They wanted to send out a piece that represents their capabilities and how they can provide more services to their clients, as well as reaching new potential businesses around the area.",
		"approach" => "To create a mailable packaged kit containing current capabilities, services, and print samples that may spark an idea for their clients.",
		"experience" => "The revolution team allowed me to have creative freedom to experiment with di-cuts, folds, and printing. The project also gave me a chance to work with machines that performs precision cutting, binding, and creating round corners. I had a great time and learned a lot of solutions when challenges presented itself",
		),
	"badge"=>array('xd','vd','cs'),
	"photos"=>array(
		"revolution-01.png",
		"revolution-02.png",
		"revolution-03.png",
		"revolution-04.png",
		"revolution-05.png",
		"revolution-06.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you Bridgett, Jim, Chris M., Chris R. Rick, Marty, Karen, Jerry. Without you guys, I wouldn't have gotten to where I am today.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Zooppa Community",// title will be displayed as h1
	"subtitle"=>"Platform Redesign",
	"foldername"=>"zooppa-community-platform",
	"url"=>"http://zooppa.com",
	"video"=>"",
	"demo"=>"",
	"hex"=>"d66d2a",
	// "personal"=>"This project dealt with designing: full interfaces, profile pages, video submission pages, interactions between elements, submission components from multiple sections, icon designs, badge designs, etc. This project was the funnest to work on, as well allowing me to design within no boundaries.",
	"personal"=>"This work dealt with designing: full interfaces, profile pages, video submission pages, interactions between elements, submission components from multiple sections, icon designs, badge designs, etc. I had a great time working with these guys, as well as allowing me to design within no boundaries.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (Downtown)", // this will be displayed above h1
	"skills"=>array('sitemap','wireframing','prototyping','web design','indesign','photoshop cc','icon design','badge design','interaction design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "With the new client and admin platform underway, there needed to be extra functionality to the existing & successful community platform, as well as keeping consistency between its interconnected platforms in terms of: visual language, brand consistency, and interactions.",
		"approach" => "Using the clientside platform, I was able to use some of the techniques and styles and apply it to this platform. There was also a need for community badges to integrate gamification to create an incentive for users to complete their profile, and become more engaged within the community.",
		"experience" => "This has to be one of the most exciting project that I've worked on so far. It was very rewarding to even see some of my talented connections already using the platform and encourages me to think about using it personally in the future.",
		),
	"badge"=>array('id','vd'),
	"photos"=>array(
		"zooppa-badgelevels.png",
		"zooppa-projectreview.gif",
		"zooppa-videoreview.gif",
		"zooppa-userprofile.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you to the Mentor and Zooppa team involved in this project. This made me grow in ways that I've never thought possible.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Uwajimaya Bag Competition",// title will be displayed as h1
	"subtitle"=>"Illustration",
	"foldername"=>"uwajimaya-competition",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"df5852",
	"personal"=>"I honestly thought I was able to win this competition, but since my piece wasn't chosen, I was able to have this work printed through Bumblejax, and mounted as a large format art piece against my wall at home.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (International District)", // this will be displayed above h1
	"skills"=>array('Digital illustration','graphic design','large format printing','mounting'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Uwajimaya, at the time, was holding an art competition to give their winner $2000 in giftcard prizes. The winning piece will be printed onto the shopping bags and designer/artist rewarded",
		"approach" => "The idea was to create a collage piece that compiles all of Uwajimaya's recognizable objects and product items. Take snapshots of 20 different objects and compose all into vectorized objects. Set composition to have a longer width to be able to wrap around the shopping bag if finished piece is selected",
		"experience" => "I was very proud of the finished piece, but unfortunately I didn't win the prize. Even though I didn't make it, I was able to print this piece, and mounted on heavy gatorboard to be able to hang it as artwork at home &mdash;&hairsp;a Win/Win situation",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"uwajimaya-art.jpg",
		"uwajimaya-left.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you Corey from Bumblejax for letting me have this printed and mounted. It was awesome bringing this by foot around Seattle making me feel like some cool artist.",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Nato Poster",// title will be displayed as h1
	"subtitle"=>"Info Graphic",
	"foldername"=>"nato-graphic-design",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"867758",
	"personal"=>"I wanted to experiment with geometric shapes and color combinations that I liked. In order to do that, I thought it would be interesting to see how these shapes and colors would handle as an infographic. I used a lot of golden ratio scaling in this piece.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (International District)", // this will be displayed above h1
	"skills"=>array('graphic design','info graphic design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "This is just a personal project that I wanted to experiment with. I was questioning if anything you read in an article or piece of information online can be translated into an info graphic if statistics were involved.",
		"approach" => "I wanted to start with primary circles with some usage of golden ratios. The rest were represented in percentages.",
		"experience" => "Just for fun! Nothing big.",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"nato-graphic.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Firekindle Wakescreen",// title will be displayed as h1
	"subtitle"=>"App Advertisement",
	"foldername"=>"amazon-firekindle-wakescreen-ads",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"ea312c",
	"personal"=>"Designed wakescreen covers for horizontal, vertical, and square compositions. Once approved, use programs to spit out multiple language versions (FR, DE, JP, EU, EN, and IT) and export 160+ files (each) compatible for all kindle devices. I designed about 90+ wakescreens totalling 86,400 assets (Presented here are just 12).",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (South Lake Union)", // this will be displayed above h1
	"skills"=>array('language conversion','Photoshop','indesign','typography','layout design','Cover design','Automator'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Amazon Kindlefire is having a yearlong promotional special to showcase a new app every single day, where users can download an app for free. The attention span of a mobile device user is very short, especially when they're turning the device on for their own specific reason.",
		"approach" => "The design is supposed to entice the viewer, for them to make a split decision switch from what they're doing to touch the CTA button and download the app of the day for free. The assignment was to create a series of wake screens for the developers to implement.",
		"experience" => "Within a very short amount of time, I had to figure out how to use a series of very intensive Photoshop actions to execute all horizonal, vertical, and mainscreen layouts into multiple device-specific pixel dimensions (not to mention each orientation is exported in 6 different languages simuntaneously). This was provided by the previous designer with a short explanation. Through experimentation, I've also tweaked the actions to fit my own process. The challenge was that each approved designs should only take about less than 3 hours to design including some room for revisions, and about an hour to export a whopping 160 exported digital files for just 1 design!",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"firekindle-covers.png",
		"firekindle-wildlife.png",
		// "firekindle-dizzy.gif",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"Thank you bridgett for the great teamwork.",
	"testimonial"=>"Hi, Belated thanks for this and for all your work. It was great to be able to share with our director that we had 6 KSOs running last week – we hadn’t hit that milestone in over 9 months. We look forward to working with you and team in the future. Best, Kirsten",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Watson Office",// title will be displayed as h1
	"subtitle"=>"Designs",
	"foldername"=>"watson-asset-design",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"52cadb",
	"personal"=>"Watson rebranded their business, and they wanted all their pieces to be up to date. I designed all their new brochures for their new product lines into interactive and printable PDFs, and also redesigned their business principals hangboards in their showroom into large format acrylic pieces.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (Downtown)", // this will be displayed above h1
	"skills"=>array('booklet design','hang board design','interactive PDF design','logo design','Photo retouching','layout design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "Within the main headquarters, Watson has a showroom that showcases their missions and goals presented in aged presentation boards. Sun-glare, over the course of many years, washed out the pigments of color on the display boards. As the company grew over the many years, the guiding principals that lay the company's work foundations have also changed.",
		"approach" => "The decision was to create acrylic mounted boards (to reflect the sunlight) and to present updated guiding principals, along with new high resolution photography of its surrounding scenery.",
		"experience" => "The finished acrylic board series creates a very inspiring polished feel, with a shiny surface that looks real good upclose. I was very pleased with the end result. Acrylic mounted boards are always my favorite display form.",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"watson-distinctiveproduct.png",
		"watson-practicalenvironmentalism.png",
		"watson-showroom.png",
		"watson-wearebuilders.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"T-mobile",// title will be displayed as h1
	"subtitle"=>"Event Kits",
	"foldername"=>"tmobile-event-kits",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"f92476",
	"personal"=>"I really enjoy designing kits for events, because you design all the components used for the event, as well as the container that holds the components. This piece was shipped to all stores nationwide.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array('layout design','Cover design','Photo retouching','print design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The new Samsung Galaxy model, at the time, was being released. T-mobile was going to have them available in stores and employees wanted to be prepared to understand how to right-fit the new device effectively to customers. The retail front needed to have updated informational material of the device's functions, its new capabilities, and with new right-fit customer strategies available for them",
		"approach" => "The goal was to design a packaged kit that will contain all printed materials to be distributed to all stores nationwide, and to help influence sales with both new information material and interactive training games",
		"experience" => "I've learned a lot about content organization and hierarchy through these kinds of projects, which involved a large number of content revisions, and an array of printed pieces. Being able to work with provided artwork was a relief&mdash;as well as a challenge&mdash;to keep within brand guidelines",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"t-boxopened.png",
		"t-boxwrapped.png",
		"t-cardgame.png",
		"t-cover.png",
		"t-customerscenarios.png",
		"t-informationsheets.png",
		"t-kitcomponents.png",
		"t-markers.png",
		"t-participantguide.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rottweiler Bikes",// title will be displayed as h1
	"subtitle"=>"Poster",
	"foldername"=>"rottweiler-bikes-poster",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"007042",
	"personal"=>"It's awesome to see a large format printed piece on the wall as if it were displayed like a standalone art piece. This was before they decided to rebrand into Rottweiler Motorcycle Company.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Bremerton)", // this will be displayed above h1
	"skills"=>array('visual design','poster design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The team at Rottweiler Bikes noticed motorcyclists commuting the ferry boat from Bainbridge to Seattle (from the opposite side of Kitsap Washington).",
		"approach" => "The basic goal was to show that these services are what they offer, but in a way that is interesting because many morning commuters are actually laying down sideways and can actually read the words rightways (since their head is tilted). A large format poster was used. Inquiries from Bainbridge started coming up and created new clients.",
		"experience" => "It's funny to think there will be a variety of eyes (from within the community that you grew up in) that will stumble upon looking at this poster and either dislike it, or like it. The interesting ones though are the ones that decide that they like it and where did that thought lead to?",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"rb-poster.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"T-mobile Accessory Guides",// title will be displayed as h1
	"subtitle"=>"Print Layout",
	"foldername"=>"tmobile-accessory-guides",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"f92476",
	"personal"=>"These booklets are fun, because it actually keeps me up to date on what's new for our mobile devices.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array('Photo retouching','Cover design','layout design','print design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('vd'),
	"photos"=>array("t-participantguide.png"),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);

/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Foundation Nightclub",// title will be displayed as h1
	"subtitle"=>"Web Design",
	"foldername"=>"foundation-night-club-web-design",
	"url"=>"http://foundation-nightclub.com",
	"video"=>"",
	"demo"=>"",
	"hex"=>"2f7da5",
	"personal"=>"A new high-end night club was opening up in Belltown Seattle back in 2012, and we were able to design the website for their grand opening. I remember working on this at late nights with our design team, and we were able to crank it out in less than a week.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (Belltown)", // this will be displayed above h1
	"skills"=>array('web design','layout design','widget design','indesign','Photoshop','wireframing'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "A new nightclub was opening up in Seattle and we got a chance to design their CMS website. A logo package was already created for them from another design group. A live website wasn't available yet, and they would need to update their site frequently as new events come in. A quick turnaround was needed for a lower budget project, and templates were not available. No existing brand guideline were present with their logo package",
		"approach" => "The idea was to design a CMS website within a short amount of time before the opening launch of the night club. It had to feel vibrant in a way, while still using their dark blue color.",
		"experience" => "Having a chance to create a design for a popular nightclub was exciting for me, and it was around this time that I began studying HTML/CSS (as I didn't understand the language at this time).",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"foundation-laptop.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Gofeisty",// title will be displayed as h1
	"subtitle"=>"Lifestyle Blog",
	"foldername"=>"gofeisty-lifestyle-blog",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"676e3c",
	"personal"=>"This was our first CMS site we designed in Japanese back in 2012, before the big wave of responsive sites started to kick in. Our client wanted to create a site that targets Japanese women to a new way of life of being \"spirited\" and \"energetic\"",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (International District)", // this will be displayed above h1
	"skills"=>array('web design','layout design','graphic design','wireframing','banner design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "The original blogsite owner had multiple blogsites to allocate specific content, and had a new published book being distributed through amazon. Each blogsite belonged to one umbrella, but didn\'t have any sense of unification. A new fresh blog appearance was needed to tie of all blog outlets to be managed into one blogsite",
		"approach" => "To design a new layout that would merge all blogsites and a space on the site to showcase the site owner's new book with a custom management functionality without having to base the foundation off of a template",
		"experience" => "I've always wanted to design a foreign language website, and this was the opportunity to create a foreign language site with a CMS structure in mind. I had a lot of creative freedom with this site, and it was a lot of fun.",
		),
	"badge"=>array('vd'),
	"photos"=>array(
		"gofeisty-landing.png",
		"gofeisty-pages.gif",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Friends or Enemies B&#8209boy Battle",// title will be displayed as h1
	"subtitle"=>"Event Design",
	"foldername"=>"friends-or-enemies-bboy-competition",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"f2a86f",
	"personal"=>"One of our favorite events that we threw for a community was a dance focused hip-hop competition for b-boy/b-girls around the PNW. Dancers from all over Washington came to Bremerton to compete against each other.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Bremerton)", // this will be displayed above h1
	"skills"=>array('videography','interactive YouTube','logo design','artwork','wood trophy design','acrylic trophy design','poster design','handout design','stuff shirt design','background design','invitation design','print design','premier','Photoshop','illustrator','indesign'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "From a team of talented individuals of varying backgrounds, a b-boy (breakdance) event was in the concept stage having a comfortable amount of months to prepare ahead of time. Within Washington state, there hasn't been much events that spent time developing the presentation of the event through a cohesive identity, trophie designs, online presentation, etc.",
		"approach" => "The goal was to create an event with brand development in mind, and with a structure to present the event in a different and meaningful way against what was already out there.",
		"experience" => "There were a ton of experience to be gained from within the event planning itself, as well as the the amount of work behind the idea process where we experimented with concepts that weren't common in this scene (interactive youtube videos, acrylic mounted awards, wooden logo pendants, etc). Fortunately for the adults, there was a bar within the event building. Within the bar setting, we designed tent folds to take advantage for brand exposure as another touchpoint (its functionality served as a beacon to hold extra video content of the event and past events).",
		),
	"badge"=>array('xd','id','vd','cs'),
	"photos"=>array(
		"foe-acrylicplaque.png",
		"foe-youtube.gif",
		"foe-bartent.png",
		"foe-staffshirts.png",
		"foe-trophiewood.png",
		"foe-deliverables.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Logos",// title will be displayed as h1
	"subtitle"=>"Logo Design",
	"foldername"=>"logos-12",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"bb7d9e",
	"personal"=>"I tend to steer towards a look that is more neutral and medium in weight, so that it allows the atmosphere behind the logo to have space to shine. I sketch small, so that I know it works at small scales. Logos should just support the personality of the brand, not be the cause of attention.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA", // this will be displayed above h1
	"skills"=>array('logo design','indesign','illustrator','sketching'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('vd'),
	"photos"=>array(),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rocksolid",// title will be displayed as h1
	"subtitle"=>"Branding",
	"foldername"=>"rocksolid-branding",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"de904f",
	"personal"=>"Our friends created a small non-profit organization that focuses on providing exposure to local hip-hop talent with events, wether it's b-boying (breakdancing), spoken poetry, freestyling, etc.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Kitsap, WA (Silverdale)", // this will be displayed above h1
	"skills"=>array('brochure design','booklet design','logo design','branding','videography','interactive YouTube','Business card design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('vd','cs'),
	"photos"=>array(
		"rocksolid-businesscards.png",
		"rocksolid-youtube.gif",
		"rocksolid-sponsorship.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"School Poster",// title will be displayed as h1
	"subtitle"=>"Illustration",
	"foldername"=>"school-illustration-poster",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"88beba",
	"personal"=>"I can't seem to get rid of this piece, because it represented the type of artwork I enjoyed doing when I started out. I illustrated this pure vector piece back at the Art Institute circa 2008 that teaches students the process of creating vector pieces.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA", // this will be displayed above h1
	"skills"=>array('vector illustration','artwork','print design','illustrator'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('vd','cs'),
	"photos"=>array(
		"ai-cameras.png",
		"ai-camerawire.png",
		"ai-flow.png",
		"ai-girl.png",
		"ai-girlwire.png",
		"ai-poster.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Rootworx",// title will be displayed as h1
	"subtitle"=>"Logo & Box Design",
	"foldername"=>"rootworx-box-container",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"77b037",
	"personal"=>"Our team designed a box container for Rootworx to hold their product in. It's one thing designing in on screen, but it's another thing seeing them stacked all together as tangible pieces on site and in stores.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA", // this will be displayed above h1
	"skills"=>array('box design','graphic design','mock up','print design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('vd'),
	"photos"=>array("rootworx-boxstack.png"),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"Luckystrike",// title will be displayed as h1
	"subtitle"=>"Dicut & Layout",
	"foldername"=>"luckystrike-safety-cards",
	"url"=>"",
	"demo"=>"",
	"video"=>"",
	"hex"=>"f77543",
	"personal"=>"I designed a ticketholder that has our company ID# inside the container and you're to write down your home address beforehand. Once ticket holders are ready to leave the building, you would just rip off a card, follow instructions to get home. Just a little fun thing we get to have.",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Bellevue, WA", // this will be displayed above h1
	"skills"=>array('dicut design','mock up','perforation','layout design','Cover design'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('xd','vd'),
	"photos"=>array(),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);
?>

<?
/* ————————————————————————————————————————————————————————————

This is the hidden container. Not much assets needed inhere, just
a quick description on title, subtitle, and point value.

———————————————————————————————————————————————————————————— */


/* ————————————————————————————————————————————————————————— */
$array_projects[] = array(
	"title"=>"SBUX Login Process",// title will be displayed as h1
	"subtitle"=>"UX & Visual Design",
	"foldername"=>"starbucks-mfa",
	"url"=>"",
	"video"=>"",
	"demo"=>"",
	"hex"=>"007042",
	"personal"=>"We suggested an idea where the ease of use for their login experience would speed up the process for their users, but the starbux team that we worked with took the path where extra security measures was needed. I realized how much security steps is needed to login to their databases. ",
	"cover"=>"_cover.png", // if("cover"!==""){then this will be shown on thumbnails, may use gif or img}else{use "img_project_null.jpg"}
	"location"=>"Seattle, WA (SoDo)", // this will be displayed above h1
	"skills"=>array('user flow','flow diagram','layout design','interaction design','prototyping','responsive design','Photoshop','indesign'),
	"client"=>array( // $info => $detail
		"full_name" => "",
		"company" => "",
		),
	"content"=>array(
		"situation" => "",
		"approach" => "",
		"experience" => "",
		),
	"badge"=>array('id','vd'),
	"photos"=>array(
		"starbucks-login.png",
		"starbucks-proposed.png",
		),
	"sketch"=>"",// if(!==""){then have a link to view sketch}
	"category"=>'work', 
	"casestudy"=> "", // if(!==""){show casestudy section}
	"closing"=>"",
	);

$array_projects[] = array(
	"title"=>"AMS Law",// title will be displayed as h1
	"subtitle"=>"webdesign & branding",
	"badge"=>array('vd'),
	);

$array_projects[] = array(
	"title"=>"Design Lab University of Washington",// title will be displayed as h1
	"subtitle"=>"online test platform",
	"badge"=>array('vd'),
	);

$array_projects[] = array(
	"title"=>"Ninyo V_3",// title will be displayed as h1
	"subtitle"=>"portfolio design",
	"badge"=>array('id','cs','vd','fed'),
	);

$array_projects[] = array(
	"title"=>"Ninyo V_2",// title will be displayed as h1
	"subtitle"=>"portfolio design",
	"badge"=>array('id','cs','vd','fed'),
	);

$array_projects[] = array(
	"title"=>"Meesum Pastry",// title will be displayed as h1
	"subtitle"=>"Pike Place Market",
	"badge"=>array('vd','cs'),
	);


?>
