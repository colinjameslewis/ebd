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
	
	


   