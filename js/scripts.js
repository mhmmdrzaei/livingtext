$(function(){

	if (window.innerWidth > 750){

	 $("ul.menu li:nth-child(1)").animate(
        {top : "+=4%", left: "-=12%"}, 10000, function() {}
    );

	 $("ul.menu li:nth-child(2)").animate(
        {top : "+=17%", left: "-=2%"}, 10000, function() {}
    );
	 $("ul.menu li:nth-child(3)").animate(
        {top : "+=3%", left: "+=8%"}, 10000, function() {}
    );

	}

});

$(document).ready(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });
});