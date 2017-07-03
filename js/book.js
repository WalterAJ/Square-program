$.ajax({
	type: 'GET',
	url: 'php/cjson.php',
	success: function (data) {
		console.log(data);
		headData = strToJson(data);
		var headHtml = $.templates("#massagistTmpl").render(headData);
		console.log(headHtml);
		$(".content").append(headHtml);
	}
})
function strToJson(str){
return JSON.parse(str);
} 

/*$(initPage);

function initPage() {


	$.getJSON("php/cjson.php", function(data) {
		headData = data.user;
		var headHtml = $.templates("#massagistTmpl").render(headData);
		console.log(headHtml);
		$(".content").append(headHtml);
	});
}*/