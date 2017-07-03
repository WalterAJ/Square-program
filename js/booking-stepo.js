
$('.form_datetime').datetimepicker({

	minView: 2

});
$(".nav-button").on("click", function() {

	var aps = $(".nav-panel");
	aps.animate({
		"right": " 0 ",
		"opacity": "1"
	}, 300)


});
$(".menu-close").on("click", function() {
	var aps = $(".nav-panel");
	aps.animate({
		"right": "-1000",
		"opacity": "1"
	}, 300)

});