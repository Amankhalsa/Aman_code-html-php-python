
$(document).ready(function(){
// function code goes here 
$('img').click(function(){ // mouseenter (), dblclick(fun), 
//    alert('you click on image');
$(this).css({
    'tranform':'scale(2,2)',
    'transition':'0.5s ease'
});

});

});