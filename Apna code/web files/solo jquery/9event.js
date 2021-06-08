$(document).ready(function(){
// body  
	$('#name').keydown(function(){
		$('#msg').html($('#name').val());
	});
// focus function is here 
$('#name').focus(function(){
	$('#name').css('border','5px solid yellow');
});
// click time alert many time 
	$('.aman').on('click',function(){
		alert('clicked thanks ');
		

	});
// one time on and off function 
    $(".preet").on("click", function() { 
        alert('Hi there!'); 
   
    $(".preet").off("click");
 }); 
});