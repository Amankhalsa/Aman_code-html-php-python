$(document).ready(function(){
    $('#hideIt').click(function(){
        $('#preet').fadeOut(1000)  
            /*,function(){ // call back using function 
    
            alert('image has been hide')
        });// we give in meli second time */
    });
    $('#showIt').click(function(){
        $('#preet').fadeIn(1000) /*,function(){
            alert('image has been show')
        }) // we give in meli second time */
    })
    $('#toggle').click(function(){
        $('#preet').fadeToggle(1000)
            /*,function(){
            alert('image is toggling')
        }) // we give in meli second time */  
    })
        });