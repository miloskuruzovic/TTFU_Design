$(window).on("load", function () {
	var values = "";
	$(".counter").each(function () {
		values += $(this).text();
	})
	values = values.split("%");
	$.each(values,function (i, value) {
		var res = 0;
		var c = ".c" + (i+1); // span class
		var info = ".info" + (i+1) + " .progress-bar" // progress bar class
		setInterval(function () {
			if ((res - 1) < value) {
				$(c).html(res + "%");
				$(info).attr({"aria-valuenow" : res, "style" : "width:" + res + "%" });
				res++;
			}
		}, 40);
	})
})