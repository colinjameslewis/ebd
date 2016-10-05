<?php 
	$pageTitle = "Results";


	require_once("../inc/config.php");
	

	include(ROOT_PATH . "inc/head.php"); 
	include(ROOT_PATH . "inc/header.php");
	include(ROOT_PATH . "inc/results.php");

?>



<section id="results">
	<div class="wrap clearfix">

		<h2 class="roboto-thin ebd-maroon text-center">Our clients' needs are as unique as the services we offer. These case studies provide insight into the results our campaigns have produced for our various clients.</h3>

		<?php foreach ($results as $result) { 
			echo 
			'<div class="result row">' 
				.
				'<div class="col-sm-4 text-center">'
					.
					'<img class="result-logo" src="' . img_URL . $result["logo"] . '" />'
				.
					
				'</div>'	
				.
				'<div class="col-sm-8">'			
					.
					'<p class="lead"><em>&ldquo;' . $result["quote"] . '&rdquo;</em></p>'
					.
					'<div class="text-right"><b>' . $result["source"] . '<br /><small>' . $result["sourceTitle"] . '</small>' . '</b></div>'
					.
					'<div class="text-primary"><a href="' . results_URL . $result["caseStudy"] . '" target="_blank">' . 'View Full Report <span class="glyphicon glyphicon-chevron-right"></span></a></div>'				
				.
				'</div>'
			.
			'</div>'
			.
			'<hr class="result-hr"></hr>'; 
		} ?>
	</div>
</section>	







<?php 

	include(ROOT_PATH . "inc/footer.php");

?>