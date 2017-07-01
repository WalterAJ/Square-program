var template = $.templates("#theTmpl");

var htmlOutput = template.render(data);

$("#result").html(htmlOutput);