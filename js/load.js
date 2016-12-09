$(window).on("load", function() {
	setTimeout(function(){
		$("#loading_cover").animate({opacity: '0'}, 1000, function(){
			$("#loading_cover").remove();
		})
	},0);
	$(".title").load("titles.txt #p3");
	$(".title p").addClass("fade-in");
	$(".title").addClass("slide-title");
	var y = 1;
	var res = "titles.txt #p";
	setInterval(function () {
		res = res + y;	
		$(".title").load(res);
		$(document).ajaxStop(function () {
			$(".title p").removeClass("fade-in");
			$(".title p").addClass("fade-in");
		});
		/**/
		res = "titles.txt #p";
		y++;
		if(y > 3){ y = 1};
	},5000)
	$('[data-toggle="tooltip"]').tooltip({html: true, animation: true});
});
