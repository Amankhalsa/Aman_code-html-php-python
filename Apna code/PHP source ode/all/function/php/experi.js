
$(document).ready(function(){
// code statement goes here 
	
			/*$('header').show('slow');*/

/*$('img').mouseenter(function(){ // mouseenter (), dblclick(fun), 
    
	
$('img').css(function(){
	
			'transiction': 'scale(2,2)',
				'transform':'0.5s ease'
})*/
$('#toggle').click(function(){
	
	$('.part1').fadeToggle(500);
})


$('#Subtract').click(function(){
	
	$('.part2').fadeToggle(500);
})
$('#Multiply').click(function(){
	
	$('.part3').fadeToggle(500);
})
$('#Addition').click(function(){
	
	$('.part4').fadeToggle(500);
})
	
});