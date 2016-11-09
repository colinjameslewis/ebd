<?php 
	$pageTitle = "Articles";


	require_once("../inc/config.php");
	

	include(ROOT_PATH . "inc/head.php");
	include(ROOT_PATH . "inc/header.php");
	include(ROOT_PATH . "inc/Articles.php");

?>



<section id="articles">
	<div class="wrap clearfix">
	
		<h2 class="roboto-thin text-center">Our President, <span class="text-primary">Ted Rosen</span>, has written extensively on various topics regarding the sales process within the financial services industry and his articles have been published in numerous acclaimed financial journals.</h2> 
	

		<div id="article-container" class="clearfix">
			<div id="inner-article-container" class="clearfix">
		<?php 
		
		foreach ($articles as $article) { 
			echo 
			'<a class="article clearfix row" href="' . articles_URL . $article["pdf"] . '" target="_blank">'
				.
			'<div class="article-icon col-sm-4 text-center">'
					.
					'<img class="logo-center " src="' . img_URL . $article["logo"] . '" />'
					.
					
				'</div>'
				.
				'<div class="title-text roboto-thin col-sm-8">'			
					.
					'<em>' . $article["title"] . '</em>'
					.
				'</div>'
				.			
			'</a>' ;
			
	
		} ?>
		</div>
	</div>
	</div>
</section>	







<?php 

	include(ROOT_PATH . "inc/footer.php");

?>