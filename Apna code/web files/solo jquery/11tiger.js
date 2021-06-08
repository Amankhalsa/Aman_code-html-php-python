$(document).ready(function(){
// body is here 

    $("button").click(function () {
        alert("Clicked!");
    });
    $("button").trigger("click");
});