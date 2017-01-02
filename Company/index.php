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
				'<div class = "clearfix employee-box">'			
				
					.
					'<div class="col-sm-6">'
						.
						'<img class="headshot" src="'   . img_URL  . $leadership["pic"] . '" />'
						.
						
					'</div>'
					.
					'<div class="roboto-thin  col-sm-6">'			
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
						
						'<a class="'. $leadership["number"] .'-toggler"> Show Bio More </a>'
						.
						
			
					'</div>'
			
					.
				'</div>' 
						
				.
				'<div class="bio-box" id="'. $leadership["number"] .'">' . '<em>' . $leadership["bio"] . '</em>'
				.			
				
				'</div>'
				.
					
			'</div>';
	
		} ?>



</div>	




<?php 

	include(ROOT_PATH . "inc/footer.php");

?>