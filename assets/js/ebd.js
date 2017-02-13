// CUSTOM SITE JS
    $("#xs-nav-anchor").click(function(){

    	$("#nav").toggle("slide");
    });
    
    $("#rp-head").click(function(){$("#rp-content").slideDown("slow");});
    $("#rp-close").click(function(){$("#rp-content").slideUp("slow");});

    function toTop() {
    	$("html,body").animate({scrollTop:0}, 500);
    }
	

	
	$('#map-center').click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});
	
	$('.read-more-toggler').click(function(){
	$('#read-more').toggle("slide")});
	
	
$(".bio-toggler").click(function(){
	$("#" + $(this).data("bio")).toggle()
	$("." + $(this).data("card")).toggleClass("current");
});


	//	$('.ted-toggler').click(function(){
	//$('#ted').toggle()});	
	//
		//	$('.matt-toggler').click(function(){
	//$('#matt').toggle()});
	
		//	$('.dolores-toggler').click(function(){
	//$('#dolores').toggle("slide")});
	
		//	$('.cyndi-toggler').click(function(){
	//$('#cyndi').toggle("slide")});
	
		//	$('.judy-toggler').click(function(){
	//$('#judy').toggle("slide")});
	
		//	$('.michael-toggler').click(function(){
	//$('#michael').toggle("slide")});
	
		//	$('.colin-toggler').click(function(){
	//$('#colin').toggle("slide")});
	
		//	$('.nick-toggler').click(function(){
	//$('#nick').toggle("slide")});
	
