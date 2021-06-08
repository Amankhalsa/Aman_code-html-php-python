$(document).ready(function(){
    $('#hideIt').mouseenter(function(){
        $('#sbar').slideUp('slow')  
            /*,function(){ // call back using function 
    
            alert('image has been hide')
        });// we give in meli second time */
    });
                                    $('#mylist').mouseout(function(){
                                        $('#myli').slideUp('slow');     // for order list 
                                    });
                                    $('#mylist').mouseenter(function(){
                                        $('#myli').slideDown('slow');     // for order list 
                                    });
                           
    $('#showIt').mouseout(function(){
        $('#sbar').slideDown('slow') /*,function(){
            alert('image has been show')
        }) // we give in meli second time */
    })
    $('#toggle').click(function(){
        $('#sbar').slideToggle('slow')
            /*,function(){
            alert('image is toggling')
        }) // we give in meli second time */  
    })
  });