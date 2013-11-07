$(document).ready(function(){

	// Open full bio stuff
  	$(".bio > button").on("click", function(){
    	$(this).siblings('.full').toggle();
  	});
});
