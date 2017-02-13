<?php 

	// set pageTitle value 
	$pageTitle = "Company";


	require_once("../inc/config.php");
	

	include(ROOT_PATH . "inc/head.php"); 
	include(ROOT_PATH . "inc/header.php");
	include(ROOT_PATH . "inc/leadership.php");

?>



<div class="wrap clearfix">
		<?php 
		
		foreach ($leadership as $leadership) { 
			echo 
			'<div class="outer-employee-box col-sm-6 ">'
				.
				'<div class = "clearfix employee-box '. $leadership["number"] .' ">'			
				
					.
					'<div class="col-xs-6 head-box">'
						.
						'<img class="headshot" src="'   . img_URL  . $leadership["pic"] . '" />'
						.
						
					'</div>'
					.
					'<div class="info-box roboto-thin  col-xs-6">'			
						.
						'<h3>' . $leadership["name"] . '</h3>' . '</br>' 
						.
					
						'<b>' . $leadership["department"] . '</b>'. '</br>' 
						.
						
						'<b>' . $leadership["title"] . '</b>'. '</br>' 
						
						.
						'<em>' . $leadership["phone"] . '</em>' . '</br>'
						
						.
						'<em>' . $leadership["email"]. '</em>' . '</br>'
						
						.
						
						'<a class="bio-toggler" data-bio="' . $leadership["number"] . '" data-card="' . $leadership["number"] .'"> <span id="a">Show Bio</span><span id="b">Close Bio</span> </a>'
						.
						
			
					'</div>'
			
					.
				'</div>' 
						
				
				
				.
					
			'</div>'
			
			
			
			.
			
			'<div class="outer-bio col-sm-12" id="' . $leadership["number"] .'">'
			
			.
			
				'<div class="bio-box" >' . '<em>' . $leadership["bio"] . '</em>'
				.			
				
				'</div>'
				.
				
			'</div>'
			
			;
	
		} ?>



</div>	




<?php 

	include(ROOT_PATH . "inc/footer.php");

?>