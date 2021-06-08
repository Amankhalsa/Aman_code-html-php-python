$(document).ready(function(){

	var e=$('p').parent();
	e.css('border', '5px solid blue');
	$("div").eq(1).fadeOut(1000);
	$('#demo').click(function(){
		
		$("p").parent().slideToggle('slow');
		$("div").eq(1).show(1800);
		$('p').delay().css({'color':'blue', 'font-size':'2em'})
		


	})

});