$(document).ready(function(){
	$("#portfolio_link, #header_link, #contact_link, #blog_link").click(function(){
		var target = $(this).attr("href");
		$("#contact_container").hide();
		$("#blog_container").hide();
		$("#portfolio_container").hide();
		$("#project_container").html("");
		$(target + "_container").show();
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});
});