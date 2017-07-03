


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
  $(".booking-massagist").on("click", function() {
  $(".booking-information").addClass("hidden");
    var name = $(this).attr("id");  console.log(name);
    $("."+name).removeClass("hidden");

});