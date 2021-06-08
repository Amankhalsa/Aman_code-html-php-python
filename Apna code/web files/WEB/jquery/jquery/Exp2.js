
$(document).ready(function(){
    $('#preet').mouseenter(function(){  //click, dblclick also can use, mouseenter , 
            /*alert('you click on image');*/
        $(this).css({
            'transform':'scale(2,2)',
            'transition':'0.5s ease'
        });
    });
       
    $('#preet').mouseout(function(){  //click, dblclick also can use, mouseenter , 
        /*alert('you click on image');*/
    $(this).css({
        'transform':'scale(1,1)',
        'transition':'0.5s ease'
    });
    $(this).hide('slow');   
});
$('#showbt').click(function(){
	$('#preet').show('slow');
});
$('#hidebt').click(function(){
	$('#preet').hide('slow');
});
    });