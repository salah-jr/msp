$(document).ready(function(){
	$("#signInBtn").click(function(){
        $("#signInModal").modal();
    });
    $("#signUpBtn").click(function(){
        $("#signUpModal").modal();
    });
    $(".attendance").circleProgress({
    	value:0.25,
    	thickness:12
    });
    $(".interaction").circleProgress({
    	value:0.5,
    	thickness:12
    });
    $(".task").circleProgress({
    	value:0.75,
    	thickness:12
    });
    $(".attendance").popover({
    	content:
    		"Top Five"
    });
    $(".interaction").popover({
        content:
            "Top Five"
    });
    $(".task").popover({
        content:
            "Top Five"
    });
    $(".risk").popover({
        content:
            "Top Five"
    });   
});