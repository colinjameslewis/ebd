// CUSTOM SITE JS
    $("#xs-nav-anchor").click(function(){

    	$("#nav").toggle("slide");
    });
    
    $("#rp-head").click(function(){$("#rp-content").slideDown("slow");});
    $("#rp-close").click(function(){$("#rp-content").slideUp("slow");});

    function toTop() {
    	$("html,body").animate({scrollTop:0}, 500);
    }