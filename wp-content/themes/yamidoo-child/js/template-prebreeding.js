jQuery(document).ready(function($) {
    $("#prebreeding #res-title").click(function(event){
        event.preventDefault();
        if($("#prebreeding #res-content").is(":visible")){
            $("#prebreeding #res-content").hide("blind");
        }else{
            $("#prebreeding #res-content").show("blind");
        }
    });
   
    $("#prebreeding #art-title").click(function(event){
        event.preventDefault();
        if($("#prebreeding #art-content").is(":visible")){
            $("#prebreeding #art-content").hide("blind");
        }else{
            $("#prebreeding #art-content").show("blind");
        }
    });
   
    $("#prebreeding #foc-title").click(function(event){
        event.preventDefault();
        if($("#prebreeding #crops-content").is(":visible")){
            $("#prebreeding #crops-content").hide("blind");
        }else{
            $("#prebreeding #crops-content").show("blind");
        }
    });
   
});



