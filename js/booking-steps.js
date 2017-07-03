$(initPage);

function initPage() {
  $.getJSON("Json/Therapist.json", function(data) {
    headData = data.body;
    var headHtml = $.templates("#massagistTmpl").render(headData);
    
    $(".booking-therapist").append(headHtml);
  });
   $(".booking-title").on("click", function() {
  console.log(1);

});

}
$(".dropdown>ul li").on("click", function() {
  $(this).parent().siblings().find(".button-input").html($(this).find("a").html());


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
  $(".booking-therapist").on("click", function() {
  console.log(1);

});