
$(document).ready(function(){
	$("#btnMain").on("click", function(){
	/*
	 	$('.content-wrap').animate({
        	scrollTop: $("#aboutMe").offset().top
	    }, 2000);
	    return false;*/
	    $('.content-wrap').scrollTo('#aboutMe', 1500);
	     return false;

	});

});