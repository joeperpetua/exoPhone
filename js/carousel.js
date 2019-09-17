$('#myCarousel').carousel();
	
	// Go to the previous item
	$("#prevBtn").click(function(){
		$("#myCarousel").carousel("prev");
	});
	// Go to the previous item
	$("#nextBtn").click(function(){
		$("#myCarousel").carousel("next");
	});

	$('.carousel').carousel({
     interval: 100,
     pause:false,
     wrap:false
});