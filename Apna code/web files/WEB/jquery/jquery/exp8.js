$(document).ready(function(){
    $('#hideIt').click(function(){
        $('#sbar,p').animate({
            'marginTop':'-50px'
        },function(){           //using function withparent 
            $(this).parent('#sbar').slideUp(2500,function(){
                alert('slide up process done');
            });
        });
    });         
    //////////////////                                       
    $('#showIt').click(function(){
        $('#sbar').slideDown(3000,function(){
            $(this).children('p').animate({
                'marginTop':'80px',    
            },function(){
                alert('slide down process done');
            });
        }); 
    });
    //////////////////
    $('#toggle').click(function(){
        $('#sbar').stop().slideToggle('slow')
        $('p').animate({
            'marginTop':'50px'
        });
    });
    //////////////////
    $('#stopIt').click(function(){
        $('#sbar').stop();
    });
  });