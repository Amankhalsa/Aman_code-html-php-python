$(document).ready(function(){
    $('#hideIt').click(function(){
        $('#sbar,p').animate({
            'marginTop':'-50px'
        },function(){
            $(this).parent('#sbar').slideUp('slow')
        });
    });                                                
    $('#showIt').click(function(){
        $('#sbar').slideDown('slow',function(){
            $(this).children('p').animate({
                'marginTop':'80px',
                
            });
        }); 
    });
    $('#toggle').click(function(){
        $('#sbar').slideToggle('slow')
    })
  });