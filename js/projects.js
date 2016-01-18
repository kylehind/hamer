$(document).ready(function(){
	var projects = {
		manchester_university_1: {
			id: "manchester_university_1", 
			title: "manchester_university_1",
			thumbnail: "images/index/manchester_university_1.jpg",
			text: "Global rebrand for one of the world’s largest pharmaceutical companies.",
			description: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tus quius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinare.",
			images: ["images/index/manchester_university_1.jpg","images/index/astrazeneca.jpg","images/index/manchester_university_2.jpg","images/index/manifest.jpg"]
		},
		astrazeneca: {
			id: "astrazeneca", 
			title: "astrazeneca",
			thumbnail: "images/index/astrazeneca.jpg",
			text: "Global rebrand for one of the world’s largest pharmaceutical companies.",
			description: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tus quius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinare.",
			images: ["images/index/manchester_university_1.jpg","images/index/astrazeneca.jpg","images/index/manchester_university_2.jpg","images/index/manifest.jpg"]
		},
		manchester_university_2: {
			id: "manchester_university_2", 
			title: "manchester_university_2",
			thumbnail: "images/index/manchester_university_2.jpg",
			text: "Global rebrand for one of the world’s largest pharmaceutical companies.",
			description: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tus quius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinare.",
			images: ["images/index/manchester_university_1.jpg","images/index/astrazeneca.jpg","images/index/manchester_university_2.jpg","images/index/manifest.jpg"]
		},
		manifest: {
			id: "manifest", 
			title: "manifest",
			thumbnail: "images/index/manifest.jpg",
			text: "Global rebrand for one of the world’s largest pharmaceutical companies.",
			description: "Icienduc eponderum, tempec revirmium fecerbis et; et ad movivictum tus quius et; ia nonverem condien atemuris virmil constif ectuscepse pratia? Et, quam nossiliciem publinv ehemunum tamentem omnem, sed factamp roptius sa tum, ciostru nicienic misqua vitudefecusa rena, quid consisse ilinare.",
			images: ["images/index/manchester_university_1.jpg","images/index/astrazeneca.jpg","images/index/manchester_university_2.jpg","images/index/manifest.jpg"]
		},

	}
	_.each(projects, function(project){
		$(".grid").append("<div class='grid_item' project_id=" + project.id + "><img src=" + project.thumbnail + "><p><b>" + project.title + "</b></p><p>" + project.text + "</p></div>");
	});
	$(".grid_item").click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
		var project_id = $(this).attr("project_id");
		var project = projects[project_id];
		$("#project_container").html("<div id='project'><div class='project_title'><p><b>"+project.title+"</b></p></div><div class='project_description'><p>"+ project.description +"</p></div></div>");
		_.each(project.images, function(image){
			$("#project").append("<img src=" + image + ">")
		});
	})
		var grid = $('.grid').masonry({
	  itemSelector: '.grid_item',
	  transitionDuration: 0
	});
});