

/*$(document).ready(function(){
    $(":button").click(function(){
        $('#img-js').hide(function(){
            $('img-js1').show();
        });
    });
});*/
$(document).ready(function(){
    $('#on').click(function(){
        $('#img-js').attr("src", "https://www.w3schools.com/js/pic_bulbon.gif");
        console.log(on);
    });
    $('#off').click(function(){
        $('#img-js').attr("src","https://www.w3schools.com/js/pic_bulboff.gif");
        
    });
});

/*$('#turn').click(function () {
    $('#img-js').toggle(function(){
        $('#img-js').show(function(){
            $('#img-js').attr("src","https://www.w3schools.com/js/pic_bulbon.gif")
        });
    });
  });*/
$(document).ready(function(){
    $('#turn').click(function(){
        if ($('#img-js').attr("src")==="https://www.w3schools.com/js/pic_bulboff.gif"){
            $('#img-js').attr("src","https://www.w3schools.com/js/pic_bulbon.gif")
        }
        else $('#img-js').attr("src","https://www.w3schools.com/js/pic_bulboff.gif")
    });

});