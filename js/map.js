 var opts = {
  width: 300, // 信息窗口宽度    
  height: 200, // 信息窗口高度     
}
var map = new BMap.Map("myMap"); 
var point = new BMap.Point(120.15, 30.25);
map.centerAndZoom(point, 13);

map.centerAndZoom(new BMap.Point(120.15, 30.25), 11);    
map.addControl(new BMap.NavigationControl());   
map.addControl(new BMap.ScaleControl());    
map.addControl(new BMap.OverviewMapControl());    
map.addControl(new BMap.MapTypeControl());    
map.setCurrentCity("杭州"); 



$(".button2").click(function(){
  $("#lable").show();
  map.clearOverlays();
  var transit = new BMap.TransitRoute(map, {
  renderOptions: {
    map: map,
    panel: "lable"
  }
});
transit.search("杭州市海曙路58号", "饭店");     
});









