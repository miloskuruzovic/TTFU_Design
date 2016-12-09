
$(document).ready(function () {	
	$("#menu_ctrl").click(function(event) {
		event.preventDefault();
		$("#menu_items li").each(function (i) {
			$(this).delay(500 * i).fadeToggle(500);
		});
		$("#menu_items li a").addClass("spin-x");
	})
});
