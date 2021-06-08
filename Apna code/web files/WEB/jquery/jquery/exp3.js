$(document).ready(function(){
$('#hideIt').click(function(){
    $('#preet').hide(1000,function(){

        alert('image has been hide')
    });// we give in meli second time 
});
$('#showIt').click(function(){
    $('#preet').show(1000,function(){
        alert('image has been show')
    }) // we give in meli second time 
})
$('#toggle').click(function(){
    $('#preet').toggle(1000,function(){
        alert('image is toggling')
    }) // we give in meli second time 
})
    });