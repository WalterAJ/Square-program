/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-06-22 20:14:06
 * @version $Id$
 */
$.ajax({
	type: 'GET',
	url: 'php/cjson.php',
	success: function (data) {
		
		headData = strToJson(data);
		console.log(headData);
		var headHtml = $.templates("#massagistTmpl").render(headData);
		console.log(headHtml);
		$(".summary-table").append(headHtml);
	}
})
function strToJson(str){
return JSON.parse(str);
} 

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

