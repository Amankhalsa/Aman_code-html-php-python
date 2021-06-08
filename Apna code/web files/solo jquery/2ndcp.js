$(document).ready(function() {
   // jQuery code goes here
//this function call to alert for shoe bg color 
    alert($("p").css("background-color"));
    // then change color after alert click  then call to next block 
    $("p").css("background-color", "blue");

    $("p").css("text-align", "center");

    $("p").fadeOut(1000);
    //other affect avilable is here  
   $("p").show('slow').css("font-weight", "bold");

    $('li').css('color', 'red');
    // 2nd function start from here 
$("h3").mouseenter(function(){
	$("h3").css({"background-color": "red", "font-size": "200%"});
	$("h3").mouseenter(function(){
		$("p").fadeOut(1000);
		$("div").hide("slow");

	});
	// 3rd will here 
});
    

});