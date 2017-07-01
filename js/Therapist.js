$(initPage);
function initPage() {
$.getJSON("Json/Therapist.json", function(data) {
	headData = data.body;
	var headHtml = $.templates("#massagistTmpl").render(headData);
	console.log(headHtml);
	$(".content").append(headHtml);
});
}