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
            $(this).children('p').delay(1000).animate({
                'marginTop':'80px'    
            },function(){
                alert('slide down process done');
            });
        }); 
    });
    //////////////////
    $('#toggle').click(function(){
        $('#sbar').stop().slideToggle('slow').delay(2000).fadeOut('slow',function(){
            $('#preet').hide('slow');
            $('#preet').delay(2000).show('slow');
        });
        
    });
    $('#getv').click(function(){
      
        $('.par1,.par2,.par3,.par4').show('slow')
    });
    $('#geth').click(function(){
        $('.par1,.par2,.par3,.par4').hide('slow')
       
    });
    //////////////////
    $('#stopIt').click(function(){
        $('#sbar').stop();
    });
  });