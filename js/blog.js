$(document).ready(function(){
	var posts = {
		post_2015_01_18: {
			id: "post_2015_01_18",
			title: "Branding and Images",
			url: "www.test.co.uk",
			text: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tusquius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinaredo, omnequitique.",
			images: ["images/index/manchester_university_1.jpg"],
			tags: ["branding", "images"]
		},
		post_2015_01_19: {
			id: "post_2015_01_19",
			title: "Branding",
			url: "www.test.co.uk",
			text: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tusquius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinaredo, omnequitique.",
			images: ["images/index/manifest.jpg"],
			tags: ["branding"]
		},
		post_2015_01_19: {
			id: "post_2015_01_20",
			title: "Images",
			url: "www.test.co.uk",
			text: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tusquius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinaredo, omnequitique.",
			images: ["images/index/astrazeneca.jpg"],
			tags: ["images"]
		}
	}
	_.each(posts, function(post){
		$("#blog_container").append("<div class='blog_post' post_id=" + post.id + ">" + post.title + "</div>");
		$(".blog_post[post_id='" + post.id + "']").html("<div class='blog_left' post_id=" + post.id + "></div><div class='blog_right' post_id=" + post.id + "></div>");
		$(".blog_left[post_id='" + post.id + "']").html("<p><b>" + post.title + "</b></p><p>" + post.text + "</p><p>" + post.url + "</p>");
		_.each(post.images, function(image){
			$(".blog_right[post_id='" + post.id + "']").append("<img src=" + image + ">");
		});
		$(".blog_right[post_id='" + post.id + "']").append("<div class='tags' post_id=" + post.id + "></div>");
		_.each(post.tags, function(tag){
			$(".tags[post_id='" + post.id + "']").append("<a href='#'>" + tag + "</a>")
		});
	});
});