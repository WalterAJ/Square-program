/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-06-22 20:14:06
 * @version $Id$
 */
$(function() {
 $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
});
 $(".nav-button").on("click",function(){

        var aps = $(".nav-panel");
       aps.animate({"right":" 0 ","opacity":"1"},300)
      

    });
    $(".menu-close").on("click",function(){
        var aps = $(".nav-panel");
       aps.animate({"right":"-1000","opacity":"1"},300)
      
    });