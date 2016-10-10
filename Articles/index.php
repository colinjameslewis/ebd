<?php 
	$pageTitle = "Articles";


	require_once("../inc/config.php");
	

	include(ROOT_PATH . "inc/head.php"); 
	include(ROOT_PATH . "inc/header.php");
	include(ROOT_PATH . "inc/Articles.php");

?>



<section id="results">
	<div class="wrap clearfix">

		<h2 class="roboto-thin ebd-maroon text-center">Our clients' needs are as unique as the services we offer. These case studies provide insight into the results our campaigns have produced for our various clients.</h3>

		<?php foreach ($articles as $articles) { 
			echo 
			'<div class="result row">' 
				.
				'<div class="col-sm-4 text-center">'
					.
					'<img class="result-logo" src="' . img_URL . $articles["logo"] . '" />'
					.
					
				'</div>'	
				.
				'<div class="col-sm-8">'			
					.
					'<p class="lead"><em>&ldquo;' . $articles["title"] . '&rdquo;</em></p>'
						.
						'<div class="text-right"><b>' . $articles["publisher"] .  '</b>'.'<br/>' .
							'<b>'. $articles["author"] .'</b>'.
							'<br /> <small>' . $articles["date"] . '</small>' 
						. '</div>'
						.
						'<div class="text-primary"><a href="' .articles_URL . $articles["pdf"] . '" target="_blank">' . 'View Article <span class="glyphicon glyphicon-chevron-right"></span></a></div>'				
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