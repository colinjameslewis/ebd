<?php 
	
	require_once("inc/config.php");
	
	// set page title value (leave blank on home)
	$pageTitle = "home";
	

	include("inc/head.php"); 
	include("inc/header.php");
	include("inc/employees.php");

?>

<script type="text/javascript">var pageTitle = "home";</script>

<div id="main-content">
	<section id="home-hero-banner" class="roboto-thin text-center">
		<div class="blue-filter"></div>
		<div class="wrap">
			
			<div id="home-hero-inner">
				<span id="home-typed" class="headline"></span><!--<br><span class="subline">for <span id="home-typed"></span></span>-->
			</div>
		</div>
	</section>

	<section id="home-metrics-banner"> 
		<div class="wrap clearfix">

			<div class="metric col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0">
				
				<img id="callCounterIcon" class="metric-icon" src="<?php echo BASE_URL; ?>assets/img/calls-x.png">

				<span id="callCounter" class="stat roboto-thin"></span><br />
				<span class="stat-desc">phone calls made</span>
					
				

				
							
				
				
			</div>

			<span class="hidden-md hidden-lg"><br /></span>

			<div class="metric col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0">

				<img class="metric-icon" src="<?php echo BASE_URL; ?>assets/img/verified-dm-x.png">
				
				<span id="dmCounter" class="stat roboto-thin"></span><br />
				<span class="stat-desc">decision makers verified</span>
					
				
					

			</div>

			<span class="hidden-md hidden-lg"><br /></span>

			<div class="metric col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0">
				
				<img class="metric-icon" src="<?php echo BASE_URL; ?>assets/img/handshake-x.png">

				<span id="apptCounter" class="stat roboto-thin"></span><br />
				<span class="stat-desc">appointments set</span>	
					
				
						
			</div>

		</div>
	</section>

	<!--<div id="home-metrics-banner">

		<div class="wrap clearfix">

			<div class="metric col-sm-10 col-sm-offset-1">
				<div class="wrap clearfix">
					<div class="metric-icon col-xs-4">
						<img src="<?php echo BASE_URL; ?>assets/img/calls.png">
					</div>
					
					<div class="metric-content col-xs-8">
						<div class="metric-content-container">
							<div class="metric-content-inner text-right">
								<span id="callCounter" class="stat roboto-thin"></span><br><span class="stat-desc roboto-c">calls made</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>

		</div>

		<div class="wrap clearfix">

			<div class="metric col-sm-10 col-sm-offset-1">
				<div class="wrap clearfix">
					<div class="metric-icon col-xs-4">
						<img src="<?php echo BASE_URL; ?>assets/img/verified-dm.png">
					</div>
					
					<div class="metric-content col-xs-8">
						<div class="metric-content-container">
							<div class="metric-content-inner text-right">
								<span id="dmCounter" class="stat roboto-thin"></span><br><span class="stat-desc roboto-c">decision makers verified</span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="wrap clearfix">

			<div class="metric col-sm-10 col-sm-offset-1">
				<div class="wrap clearfix">
					<div class="metric-icon col-xs-4">
						<img src="<?php echo BASE_URL; ?>assets/img/handshake.png">
					</div>
					
					<div class="metric-content col-xs-8">
						<div class="metric-content-container">
							<div class="metric-content-inner text-right">
								<span id="apptCounter" class="stat roboto-thin"></span><br><span class="stat-desc roboto-c">appointments set</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="metrics-cta">
			<a id="metrics-cta-button" class="roboto-thin home-cta-button" href="<?php echo BASE_URL; ?>services">LEARN MORE <span class="glyphicon glyphicon-menu-right"></span></a>
		</div>
	</div>

	</div>-->

	

	<!--<div id="home-articles-banner">
		<div class="wrap">
			<div id="home-articles-inner" class="ebd-blue text-center">
				<span class="roboto-thin articles-headline"><em>Industry Leading Insight</em></span>
					<br>
					<br>
					
					<a id="articles-cta-button" class="roboto-thin home-cta-button" href="<?php echo BASE_URL; ?>company">LEARN MORE <span class="glyphicon glyphicon-menu-right"></span></a>
			</div>
		</div>
	</div>

	<div id="home-clients-banner">

	</div>

	<hr></hr>

	-->

	
</div>	

<?php 

	include ("inc/footer.php")

?>
