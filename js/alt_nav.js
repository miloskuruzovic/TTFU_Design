$(document).ready(function() {
	$(window).scroll(function(){
		var pos = $(".trivia").offset().top;
		var winTop = $(window).scrollTop();
		if(pos < winTop + 100){
			$("#alt-nav").html("\
				<nav class='navbar navbar-default'>\
					<div class='container'>\
						<div class='navbar-header'>\
							<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>\
									<span class='icon-bar'></span>\
									<span class='icon-bar'></span>\
									<span class='icon-bar'></span>\
							</button>\
								<a class='navbar-brand smooth' href='#myPage'>TTFU Design</a>\
						</div>\
						<div class='collapse navbar-collapse' id='myNavbar'>\
							<ul class='nav navbar-nav navbar-right'>\
							<li><a class='smooth' href='#Usluge'>Usluge</a></li>\
							<li><a class='smooth' href='#Portfolio'>Portfolio</a></li>\
							<li><a class='smooth' href='#Kontakt'>Kontakt</a></li>\
							</ul>\
						</div>\
					</div>\
				</nav>\
						");
			$("#btt").fadeIn(500);
		}else{
			$("#alt-nav").html("<a href='#myPage' class='logo-link smooth'><img src='img/logo2.png' class='logo' ></a><h1><span class='highlight'>TTFU</span> Design</h1>");
			$("#btt").fadeOut(500);
		}
		$(".slideanim").each(function(){
		    var slidein = $(this).offset().top;
		    var winTop = $(window).scrollTop();
		    if (slidein < winTop + 680) {
		      $(this).addClass("slide");
		    }
		});
	})
})